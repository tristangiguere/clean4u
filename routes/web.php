<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/accueil', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/services', function(){
    return view('services');
});

//Route::get('/sousmissions', function(){
//    return view('sousmissions');
//});

Route::view('soumission', 'soumission');

Route::post('soumission', [QuotationRequestController::class,'addData']);

Route::post('contact', [MailController::class,'sendEmail']);

Route::get('/contact', function(){
    return view('contact');
});


//Route::get('auth/login', [CustomAuthController::class, 'index']);
//Route::post('auth/login', [CustomAuthController::class, 'customLogin']);
//Route::get('auth/dashboard', [CustomAuthController::class, 'dashboard'])->middleware('authenticated');
//Route::get('', [CustomAuthController::class, 'signOut']);

Route::get('/login', function (){
    return view('login');
});

Route::get('/admindashboard', function (){
    return view('/admin/dashboard');
})->middleware('authenticated');

//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// --------  ALL ROUTES FOR ADMIN DASHBOARD  --------

// All invoices
Route::get('/admin/invoices', function (){
    return view('admin.invoices');
});

// Single invoice
Route::get('/admin/invoice', function (){
    return view('admin.invoice');
});

// All quotes
Route::get('/admin/quotes', function (){
    return view('admin.quotes');
});

// Single quote
Route::get('/admin/quote', function (){
    return view('admin.quote');
});

// All requests
Route::get('/admin/requests', function (){
    return view('admin.requests');
});

// Single quote
Route::get('/admin/request', function (){
    return view('admin.request');
});