<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('pages.contact');
    }

    public function sendMail(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);


        $to = "joca296@gmail.com";
        $title = "Message from contact page";
        $message = "From: ".$request->name."\r\nE-mail address: ".$request->email."\r\nMessage:\r\n".$request->message;

        if (mail($to,$title,$message)) {
            session()->flash('messageType', 'success');
            session()->flash('messageHeading', 'Success!');
            session()->flash('message', 'Message sent to administrator.');
        }
        else {
            session()->flash('messageType', 'danger');
            session()->flash('messageHeading', 'Error!');
            session()->flash('message', 'Message not sent.');
        }

        return redirect()->back();
    }
}
