<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaglineRequest;
use App\Models\Message;
use App\Models\Tagline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TaglineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index', [
            'main' => 'taglines.index',
            'tagline' => Tagline::all(),
            'message' => Message::latest()->take(4)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.index', [
            'main' => 'taglines.create',
            'message' => Message::latest()->take(4)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaglineRequest $request)
    {
        DB::beginTransaction();
        try {
            Tagline::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),

            ]);

            DB::commit();

            Alert::success('Success', 'Tagline created successfully');
            return redirect()->route('tagline.index');
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', 'Failed to create tagline: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tagline $tagline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.index', [
            'main' => 'taglines.edit',
            'tagline' => Tagline::find($id),
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
            // Update the advantage with the request data
            $tagline = Tagline::find($id);
            $tagline->title = $request->title;
            $tagline->description = $request->description;
            $tagline->save();

            DB::commit(); // Commit the transaction

            // Display a success message
            Alert::success('Success', 'Tagline updated successfully');
            return redirect()->route('tagline.index');
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback the transaction if there is an error

            // Display an error message
            Alert::error('Error', 'Failed to update tagline, ' . $e->getMessage());
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
            $tagline = tagline::find($id);
            $tagline->delete(); // Delete the record

            DB::commit(); // Commit the transaction

            Alert::success('Success', 'tagline deleted successfully');
            return redirect()->route('tagline.index');
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback the transaction if an exception occurs

            Alert::error('Error', 'Failed to delete tagline, ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
