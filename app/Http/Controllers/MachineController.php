<?php

namespace App\Http\Controllers;

use App\Http\Requests\MachineRequest;
use App\Models\Machines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index', [
            'main' => 'machines.index',
            'machine' => Machines::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.index', [
            'main' => 'machines.create',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MachineRequest $request)
    {
        DB::beginTransaction();

        try {
            if ($request->hasFile('photo')) {
                $image = $request->file('photo');
                $imageName = time() . '-' . $image->hashName();
                $image->move(public_path('machine'), $imageName);

                Machines::create([
                    'name' => $request->input('name'),
                    'photo' => 'machine/' . $imageName,
                    'description' => $request->input('description')
                ]);

                DB::commit();

                Alert::success('Success', 'Machine created successfully.');
                return redirect()->route('machine.index');
            }
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', 'Failed to create machine.' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.index', [
            'main' => 'machines.edit',
            'machine' => Machines::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();

        try {
            $machine = Machines::find($id);

            if ($request->hasFile('photo')) {

                $image = $request->file('photo');
                $imageName = time() . '-' . $image->hashName();
                $image->move(public_path('machine'), $imageName);

                if (file_exists(public_path($machine->photo))) {
                    unlink(public_path($machine->photo));
                }

                $machine->photo = 'machine/' . $imageName;
            }

            $machine->name = $request->name;
            $machine->description = $request->description;
            $machine->save();

            DB::commit();

            Alert::success('Success', 'Machine updated successfully');
            return redirect()->route('machine.index');
        } catch (\Exception $e) {

            DB::rollBack();

            Alert::error('Error', 'Failed to update machine.' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
