<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $message = new Message();
        $message->auhtor = $request->name;
        $message->email = $request->email;
        $message->subjet = $request->subject;
        $message->message = $request->message;

        if ($message->save()) {
            return redirect()->back()->with('success', 1);
        }
        return redirect()->back()->with('fail', 1);
    }
}
