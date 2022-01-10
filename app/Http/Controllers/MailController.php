<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactEmail;



class MailController extends Controller
{
    //
    // function sendEmail(Request $req){
    //     $quotationRequest=new QuotationRequest;
    //     $quotationRequest->first_name=$req->first_name;
    //     $quotationRequest->last_name=$req->last_name;
    //     $quotationRequest->phone=$req->phone;
    //     $quotationRequest->vehicle=$req->vehicle;
    //     $quotationRequest->year=$req->year;
    //     $quotationRequest->make=$req->make;
    //     $quotationRequest->model=$req->model;
    //     $quotationRequest->services=$req->services;
    //     $quotationRequest->email=$req->email;
    //     $quotationRequest->save();
    //     return redirect('sousmission');
    // }

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
