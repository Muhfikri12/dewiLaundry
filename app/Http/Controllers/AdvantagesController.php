<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdvantagesRequest;
use App\Models\Advantages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AdvantagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index', [
            'main' => 'advantages.index',
            'advantages' => Advantages::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.index', [
            'main' => 'advantages.create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdvantagesRequest $request)
    {
        DB::beginTransaction();
        try {
            Advantages::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),

            ]);

            DB::commit();

            Alert::success('Success', 'Advantage created successfully');
            return redirect()->route('advantages.index');
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', 'Failed to create advantage: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Advantages $advantages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $advantages, $id)
    {
        return view('dashboard.index', [
            'main' => 'advantages.edit',
            'advantages' => Advantages::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Advantages $advantages, string $id)
    {
        DB::beginTransaction();
        try {
            // Update the advantage with the request data
            $advantages = Advantages::find($id);
            $advantages->title = $request->title;
            $advantages->description = $request->description;
            $advantages->save();

            DB::commit(); // Commit the transaction

            // Display a success message
            Alert::success('Success', 'Advantage updated successfully');
            return redirect()->route('advantages.index');
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback the transaction if there is an error

            // Display an error message
            Alert::error('Error', 'Failed to update advantage: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advantages $advantages, $id)
    {

        DB::beginTransaction();

        try {
            $advantages = Advantages::find($id);
            $advantages->delete(); // Delete the record

            DB::commit(); // Commit the transaction

            Alert::success('Success', 'Advantage deleted successfully');
            return redirect()->route('advantages.index');
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback the transaction if an exception occurs

            Alert::error('Error', 'Failed to delete advantage: ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
