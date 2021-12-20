<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuotationRequestController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/services', function(){
    return view('services');
});

Route::view('sousmission', 'sousmissions');

Route::post('sousmission', [QuotationRequestController::class,'addData']);

//Route::get('/dashboard', function (){
//    return view('dashboard');
//});

Route::get('auth/login', [CustomAuthController::class, 'index']);
Route::post('auth/login', [CustomAuthController::class, 'customLogin']);
Route::get('auth/dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('', [CustomAuthController::class, 'signOut']);

Route::get('/admindashboard', function (){
    return view('/admin/dashboard');
})->middleware('authenticated');


//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

