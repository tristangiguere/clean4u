<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactEmail;



class MailController extends Controller
{
    public function sendEmail(Request $req)

    {
        $data = [
            'name' => $req->Name,
            'email' => $req->Email,
            'message' => $req->Message,
            'date' => date('l, F jS, Y @ h:i:s A')
        ];

        Mail::to('tristangiguere@gmail.com')->send(new \App\Mail\ContactEmail($data));
    
        dd("Email is Sent.");

        // ...
    }

}
