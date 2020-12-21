<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::paginate();  
        return view('messages.index',compact('messages'));   
    }

    public function show($id)
    {
        $message = Message::findOrFail($id);
        return view('messages.show',compact('message')); 
    }
    public function edit($id)
    {
        $message = Message::findOrFail($id);
        $user = User::pluck('name','surname','email','adress','gender','date_of_birth');
        return view('messages.edit', compact('message','user'));
    }

    public function create()
    {
        return view('messages.create'); 
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'message_body' => 'required|max:255',
            'user_id' =>'required'
        ]);

        $message = Message::findOrFail($id);
        $message->fill($validated);
        $message->save();

        return view('messages.show', compact('message'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'message_body' => 'required|unique:messages|max:255'
        ]);
        $message = Message::create($validated);
        return view('messages.show', compact('message'));
    }

}
