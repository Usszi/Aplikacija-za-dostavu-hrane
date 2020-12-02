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
        dd($message);
    }
}
