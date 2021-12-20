<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function index(){
        return view('auth/login');
    }

    public function customLogin (Request $req){
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $req->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('dashboard')->withSuccess('Signed In');
        }
        return redirect("/")->withSuccess('Loin details are not valid');
    }

    public function dashboard(){
        if(Auth::check()){
            return view('dashboard');
        }
        return redirect("/")->withSuccess('You are not allowed to access');
    }

    public function signOut(){
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }
}
