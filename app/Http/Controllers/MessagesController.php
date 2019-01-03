<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        // return 'SUCCESS'; // instead we'll 
        // create a new message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        // Save Message
        $message->save();

        // Redirect
        return redirect('/')->with('status', 'Message Sent!');
    }
}
