<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryRequest;
use App\Models\Galery;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index', [
            'main' => 'gallery.index',
            'gallery' => Galery::all(),
            'message' => Message::latest()->take(4)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.index', [
            'main' => 'gallery.create',
            'message' => Message::latest()->take(4)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GalleryRequest $request)
    {
        DB::beginTransaction();

        try {
            if ($request->hasFile('photo')) {
                $photo = $request->file('photo');
                $photoName = time() . '-' . $photo->hashName();
                $path = $photo->storeAs('gallery', $photoName, 'public');

                Galery::create([
                    'name' => $request->input('name'),
                    'photo' => $path
                ]);

                DB::commit();

                Alert::success('Success', 'Gallery created successfully');
                return redirect()->route('galery.index');
            }
        } catch (\Exception $e) {

            DB::rollBack();

            Alert::error('Error', 'Failed to create gallery.' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('dashboard.index', [
            'main' => 'gallery.edit',
            'gallery' => Galery::find($id),
            'message' => Message::latest()->take(4)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();

        try {

            $gallery = Galery::find($id);

            if ($request->hasFile('photo')) {
                if ($gallery->photo && Storage::disk('public')->exists($gallery->photo)) {
                    Storage::disk('public')->delete($gallery->photo);
                }

                $photo = $request->file('photo');
                $photoName = time() . '-' . $photo->hashName();
                $path = $photo->storeAs('gallery', $photoName, 'public');

                $gallery->update([
                    'name' => $request->input('name'),
                    'photo' => $path
                ]);
            } else {
                $gallery->update([
                    'name' => $request->input('name')
                ]);
            }

            DB::commit();

            Alert::success('Success', 'Gallery updated successfully');
            return redirect()->route('galery.index');
        } catch (\Exception $e) {

            DB::rollBack();

            Alert::error('Error', 'Failed to update gallery.' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::beginTransaction();

        try {
            $gallery = Galery::findOrFail($id);

            if ($gallery->photo && Storage::disk('public')->exists($gallery->photo)) {
                Storage::disk('public')->delete($gallery->photo);
            }

            $gallery->delete();

            DB::commit();

            Alert::success('Success', 'Gallery deleted successfully.');
            return redirect()->route('galery.index');
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', 'Failed to delete gallery. ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
