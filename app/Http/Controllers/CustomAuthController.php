<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    function login(Request $req){
        $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $_ENV['API_KEY']
            ])->post(env('API_URL') . '/auth/login', [
            "username" => $req->username,
            "password" => $req->password,
        ]);

        if ($response->status() == 200){
            Session::put('username', $req->username);
            Session::put('authenticated', 'true');
            return redirect('admin/invoices');
        }
        else{
            return dd($response->body());
        }
    }

    function logout(){
            Session::flush();
            return redirect('/');
    }

    function showLoginForm(){
        $username = Session::get('username');
        $auth = Session::get('authenticated');

        if ($username !== "" && $auth == "true"){
            return redirect('admin/invoices');
        }
        else{
            return view('auth.login');
        }
    }

    function changepassword(Request $req){
        $username = Session::get('username');
        $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $_ENV['API_KEY']
            ])->post(env('API_URL') . '/auth/login', [
            "username" => $username,
            "password" => $req->password,
            "newpassword" => $req->newpassword
        ]);

        if ($response->status() == 200){
            return redirect('admin/invoices');
        }
        else{
            return dd($response->body());
        }
    }

    function changePasswordForm(){
            return view('admin.changepassword');
    }

    


}
