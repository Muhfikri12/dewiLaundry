<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index', [
            'main' => 'services.index',
            'service' => Service::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.index', [
            'main' => 'services.create',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
        DB::beginTransaction();

        try {
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '-' . $image->hashName();
                $image->move(public_path('service'), $imageName);

                Service::create([
                    'title' => $request->input('title'),
                    'image' => 'service/' . $imageName,
                    'description' => $request->input('description')
                ]);

                DB::commit();

                Alert::success('Success', 'Service created successfully.');
                return redirect()->route('service.index');
            }
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', 'Failed to create service.' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.index', [
            'main' => 'services.edit',
            'service' => Service::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();

        try {
            $service = Service::find($id);

            if ($request->hasFile('image')) {

                $image = $request->file('image');
                $imageName = time() . '-' . $image->hashName();
                $image->move(public_path('service'), $imageName);

                if (file_exists(public_path($service->image))) {
                    unlink(public_path($service->image));
                }

                $service->image = 'service/' . $imageName;
            }

            $service->title = $request->title;
            $service->description = $request->description;
            $service->save();

            DB::commit();

            Alert::success('Success', 'Service updated successfully');
            return redirect()->route('service.index');
        } catch (\Exception $e) {

            DB::rollBack();

            Alert::error('Error', 'Failed to update service.' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        DB::beginTransaction();

        try {
            $service = Service::find($id);
            $service->delete();

            DB::commit();

            Alert::success('Success', 'Service deleted successfully');
            return redirect()->route('service.index');
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', 'Failed to delete service.' . $e->getMessage());
            return redirect()->back();
        }
    }
}
