<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class ContactController extends Controller
{
    function sendForm(Request $req){
        $response = Http::post('localhost:3000/api/contact', [
        "name" => $req->Name,
        "email" => $req->Email,
        "message" => $req->Message
    ]);

    if ($response->status() == 200){
        return redirect('contact');
    }
    else{
        return dd($response->body());
    }
}
}