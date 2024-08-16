<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdvantagesRequest;
use App\Models\Advantages;
use Illuminate\Http\Request;
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
        Advantages::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),

        ]);

        Alert::success('Success', 'Advantage created successfully');
        return redirect()->route('advantages.index');
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
    public function edit(Advantages $advantages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Advantages $advantages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advantages $advantages)
    {
        //
    }
}
