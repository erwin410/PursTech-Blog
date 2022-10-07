<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $req)
    {
        // validate form here
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'message' => $req->message
        ];
        
        Mail::to('receiver@gmail.com')->send(new ContactMail($data));

        return redirect()->route('posts.index')->with('success', 'Merci pour votre demande!');
    }
}
