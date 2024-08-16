<?php

namespace App\Http\Controllers;

use App\Models\Advantages;
use Illuminate\Http\Request;

class AdvantagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index', [
            'main' => 'advantages',
            'advantages' => Advantages::all()
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
