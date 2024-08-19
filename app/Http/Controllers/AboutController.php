<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index', [
            'main' => 'profile.index',
            'about' => About::first(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about,)
    {
        DB::beginTransaction();

        try {
            $about = About::find(1);

            if ($request->hasFile('photo')) {
                // Check if there's an existing photo and delete it
                if ($about && $about->photo) {
                    Storage::disk('public')->delete($about->photo);
                }

                // Store the new photo
                $image = $request->file('photo');
                $imageName = time() . '-' . $image->hashName();
                $path = $image->storeAs('about', $imageName, 'public');

                // Update the database with the new photo path
                $about->update([
                    'photo' => $path,
                    'description' => $request->input('description')
                ]);
            } else {
                // If no photo is uploaded, just update the description
                $about->update([
                    'description' => $request->input('description')
                ]);
            }

            DB::commit();

            Alert::success('Success', 'About Us updated successfully.');
            return redirect()->route('about.index');
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', 'Failed to update about us. ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
