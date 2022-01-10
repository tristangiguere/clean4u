<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuotationRequestController;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/hello', function () {
    return view('home');
});

Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/', function () {
    return view('accueil');
});

Route::get('/services', function(){
    return view('services');
});

Route::get('/admin', function(){
    return view('admin.dashboard');
});

Route::view('sousmission', 'sousmissions');

Route::post('sousmission', [QuotationRequestController::class,'addData']);

Route::post('contact', [MailController::class,'sendEmail']);

Route::get('/contact', function(){
    return view('contact');
});


//Route::get('auth/login', [CustomAuthController::class, 'index']);
//Route::post('auth/login', [CustomAuthController::class, 'customLogin']);
//Route::get('auth/dashboard', [CustomAuthController::class, 'dashboard'])->middleware('authenticated');
//Route::get('', [CustomAuthController::class, 'signOut']);

//Route::get('/admindashboard', function (){
//    return view('/admin/dashboard');
//})->middleware('authenticated');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

