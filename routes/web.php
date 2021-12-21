<?php

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

//Route::get('/sousmissions', function(){
//    return view('sousmissions');
//});

Route::view('sousmission', 'sousmissions');

Route::post('sousmission', [QuotationRequestController::class,'addData']);

Route::prefix('user')->namespace('User')->name('user.')->middleware(['auth', 'isUser'])->group(base_path('/routes/user/user.php'));

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
