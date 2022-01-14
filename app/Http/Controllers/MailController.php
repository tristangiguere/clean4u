<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactEmail;
use App\Mail\requestReply;



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
    
        dd("We received your request. Thank you for contacting us.");
    }

    public function replyToRequest($data)
    {
        $email = $data['email'];
        Mail::to($email)->send(new \App\Mail\requestReply($data));
        dd("We sent your reply to your customer.");
    }
}
