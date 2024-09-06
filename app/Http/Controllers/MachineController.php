<?php

namespace App\Http\Controllers;

use App\Http\Requests\MachineRequest;
use App\Models\Machines;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
            'machine' => Machines::all(),
            'message' => Message::latest()->take(4)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.index', [
            'main' => 'machines.create',
            'message' => Message::latest()->take(4)->get()
        ]);
    }

    public function store(MachineRequest $request)
    {
        DB::beginTransaction();

        try {
            if ($request->hasFile('photo')) {
                $image = $request->file('photo');
                $imageName = time() . '-' . $image->hashName();
                $path = $image->storeAs('machine', $imageName, 'public');

                Machines::create([
                    'name' => $request->input('name'),
                    'photo' => $path,
                    'description' => $request->input('description')
                ]);

                DB::commit();

                Alert::success('Success', 'Machine created successfully.');
                return redirect()->route('machine.index');
            }
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', 'Failed to create machine. ' . $e->getMessage());
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
            'message' => Message::latest()->take(4)->get()

        ]);
    }

    public function update(Request $request, string $id)
    {
        DB::beginTransaction();

        try {
            $machine = Machines::find($id);

            if ($request->hasFile('photo')) {
                if ($machine->photo && Storage::disk('public')->exists($machine->photo)) {
                    Storage::disk('public')->delete($machine->photo);
                }

                $image = $request->file('photo');
                $imageName = time() . '-' . $image->hashName();
                $path = $image->storeAs('machine', $imageName, 'public');

                $machine->update([
                    'name' => $request->input('name'),
                    'photo' => $path,
                    'description' => $request->input('description')
                ]);
            } else {
                $machine->update([
                    'name' => $request->input('name'),
                    'description' => $request->input('description')
                ]);
            }

            DB::commit();

            Alert::success('Success', 'Machine updated successfully.');
            return redirect()->route('machine.index');
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', 'Failed to update machine. ' . $e->getMessage());
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
            $machine = Machines::findOrFail($id);

            if ($machine->photo && Storage::disk('public')->exists($machine->photo)) {
                Storage::disk('public')->delete($machine->photo);
            }

            $machine->delete();

            DB::commit();

            Alert::success('Success', 'Machine deleted successfully.');
            return redirect()->route('machine.index');
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', 'Failed to delete machine. ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
