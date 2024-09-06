<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index', [
            'main' => 'client.index',
            'client' => Client::all(),
            'message' => Message::latest()->take(4)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.index', [
            'main' => 'client.create',
            'message' => Message::latest()->take(4)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request)
    {
        DB::beginTransaction();

        try {
            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $logoName = time() . '-' . $logo->hashName();
                $path = $logo->storeAs('clients', $logoName, 'public');

                Client::create([
                    'name' => $request->input('name'),
                    'logo' => $path
                ]);

                DB::commit();

                Alert::success('Success', 'Client created successfully');
                return redirect()->route('client.index');
            }
        } catch (\Exception $e) {

            DB::rollBack();

            Alert::error('Error', 'Failed to create client.' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.index', [
            'main' => 'client.edit',
            'client' => Client::find($id),
            'message' => Message::latest()->take(4)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClientRequest $request, string $id)
    {
        DB::beginTransaction();

        try {

            $client = Client::find($id);

            if ($request->hasFile('logo')) {
                if ($client->logo && Storage::disk('public')->exists($client->logo)) {
                    Storage::disk('public')->delete($client->logo);
                }

                $logo = $request->file('logo');
                $logoName = time() . '-' . $logo->hashName();
                $path = $logo->storeAs('clients', $logoName, 'public');

                $client->update([
                    'name' => $request->input('name'),
                    'logo' => $path
                ]);
            } else {
                $client->update([
                    'name' => $request->input('name')
                ]);
            }

            DB::commit();

            Alert::success('Success', 'Client updated successfully');
            return redirect()->route('client.index');
        } catch (\Exception $e) {

            DB::rollBack();

            Alert::error('Error', 'Failed to update client.' . $e->getMessage());
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
            $client = Client::findOrFail($id);

            if ($client->logo && Storage::disk('public')->exists($client->logo)) {
                Storage::disk('public')->delete($client->logo);
            }

            $client->delete();

            DB::commit();

            Alert::success('Success', 'Client deleted successfully.');
            return redirect()->route('client.index');
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', 'Failed to delete client. ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
