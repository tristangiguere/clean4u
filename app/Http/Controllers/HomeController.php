<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    function sendForm(Request $req){
        $response = Http::post('localhost:3000/api/contact', [
        "name" => $req->name,
        "email" => $req->email,
        "message" => $req->message
    ]);

    if ($response->status() == 200){
        return redirect('contact');
    }
    else{
        return dd($response->body());
    }
}


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
