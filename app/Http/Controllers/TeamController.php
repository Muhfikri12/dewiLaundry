<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Message;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index', [
            'main' => 'team.index',
            'teams' => Team::all(),
            'message' => Message::latest()->take(4)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.index', [
            'main' => 'team.create',
            'message' => Message::latest()->take(4)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamRequest $request)
    {
        DB::beginTransaction();

        try {
            if ($request->hasFile('photo')) {
                $image = $request->file('photo');
                $imageName = time() . '-' . $image->hashName();
                $path = $image->storeAs('team', $imageName, 'public');

                Team::create([
                    'name' => $request->input('name'),
                    'photo' => $path,
                    'position' => $request->input('position'),
                    'ig_link' => $request->input('ig_link'),
                    'fb_link' => $request->input('fb_link'),
                    'x_link' => $request->input('x_link'),
                    'linkedIn_link' => $request->input('linkedIn_link'),
                ]);

                DB::commit();

                Alert::success('Success', 'Team created successfully.');
                return redirect()->route('team.index');
            }
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', 'Failed to create team. ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.index', [
            'main' => 'team.edit',
            'team' => Team::find($id),
            'message' => Message::latest()->take(4)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeamRequest $request, string $id)
    {
        DB::beginTransaction();

        try {
            $team = Team::find($id);

            if ($request->hasFile('photo')) {
                if ($team->photo && Storage::disk('public')->exists($team->photo)) {
                    Storage::disk('public')->delete($team->photo);
                }

                $image = $request->file('photo');
                $imageName = time() . '-' . $image->hashName();
                $path = $image->storeAs('team', $imageName, 'public');

                $team->update([
                    'name' => $request->input('name'),
                    'photo' => $path,
                    'position' => $request->input('position'),
                    'ig_link' => $request->input('ig_link'),
                    'fb_link' => $request->input('fb_link'),
                    'x_link' => $request->input('x_link'),
                    'linkedIn_link' => $request->input('linkedIn_link')
                ]);
            } else {
                $team->update([
                    'name' => $request->input('name'),
                    'position' => $request->input('position'),
                    'ig_link' => $request->input('ig_link'),
                    'fb_link' => $request->input('fb_link'),
                    'x_link' => $request->input('x_link'),
                    'linkedIn_link' => $request->input('linkedIn_link')
                ]);
            }

            DB::commit();

            Alert::success('Success', 'Team updated successfully.');
            return redirect()->route('team.index');
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', 'Failed to update team. ' . $e->getMessage());
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
            $team = Team::findOrFail($id);

            if ($team->photo && Storage::disk('public')->exists($team->photo)) {
                Storage::disk('public')->delete($team->photo);
            }

            $team->delete();

            DB::commit();

            Alert::success('Success', 'Team deleted successfully.');
            return redirect()->route('team.index');
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', 'Failed to delete team. ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
