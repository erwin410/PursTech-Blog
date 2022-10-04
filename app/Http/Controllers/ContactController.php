<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendMail (Request $req)
    {
        $data=[
            'name' => $req->name,
            'email' => $req->email,
            'message' => $req->message
        ];
        dd($data);
    }
}
