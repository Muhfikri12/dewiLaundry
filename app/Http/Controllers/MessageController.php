<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index', [
            'main' => 'message.index',
            'message' => Message::latest()->take(4)->get(),
            'messageDetail' => Message::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(MessageRequest $request) {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(MessageRequest $request)
    {
        DB::beginTransaction();
        try {
            Message::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'subject' => $request->input('subject'),
                'message' => $request->input('message'),

            ]);

            DB::commit();

            Alert::success('Success', 'Message created successfully');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', 'Failed to create advantage: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
