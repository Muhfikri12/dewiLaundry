<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index', [
            'main' => 'banner.index',
            'banner' => Banner::all(),
            'message' => Message::latest()->take(4)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.index', [
            'main' => 'banner.edit',
            'banner' => Banner::find($id),
            'message' => Message::latest()->take(4)->get()

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd($request->all());
        DB::beginTransaction();

        try {

            $banner = Banner::find($id);

            if ($request->hasFile('banner')) {
                if ($banner->banner && Storage::disk('public')->exists($banner->banner)) {
                    Storage::disk('public')->delete($banner->banner);
                }

                $banner = $request->file('banner');
                $bannerName = time() . '-' . $banner->hashName();
                $path = $banner->storeAs('banner', $bannerName, 'public');

                $banner->update([
                    'name' => $request->input('name'),
                    'banner' => $path
                ]);
            } else {
                $banner->update([
                    'name' => $request->input('name')
                ]);
            }

            DB::commit();

            Alert::success('Success', 'Banner updated successfully');
            return redirect()->route('banner.index');
        } catch (\Exception $e) {

            DB::rollBack();

            Alert::error('Error', 'Failed to update banner.' . $e->getMessage());
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
