<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuotationRequestController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\QuoteController;

Route::get('/', function () {
    return view('home');
});

Route::get('/services', function(){
    return view('services');
});

Route::view('quote', 'soumission');

Route::post('quote', [QuotationRequestController::class,'addData']);

Route::post('contact', [MailController::class,'sendEmail']);

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/login', function (){
    return view('login');
});

Route::get('/admindashboard', function (){
    return view('/admin/dashboard');
})->middleware('authenticated');

// VIEW INVOICE (PUBLIC)
// Single request
Route::get('customer/invoice/{uuid}', [InvoiceController::class,'viewPublic']);




//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



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
Route::get('admin/requests', [QuotationRequestController::class,'listAll']);

// Delete request
Route::get('admin/request/{id}/delete', [QuotationRequestController::class,'deleteRequest']);

// Single request
Route::get('admin/request/{id}', [QuotationRequestController::class,'viewSingle']);

// Single request (REPLY TO CUSTOMER)
Route::post('admin/request/{id}', [QuotationRequestController::class,'replyToRequest']);

// Home link
Route::get('/admin', function (){
    return redirect('/admin/quotes');;
});

// Single quote
Route::get('/admin/invoice/new', function (){
    return view('admin.addinvoice');
});


// Add new invoice
Route::post('/admin/invoice/new', [InvoiceController::class,'addData']);



// Delete invoice
Route::get('admin/invoice/{id}/cancel', [InvoiceController::class,'cancelInvoice']);

// All invoices
Route::get('admin/invoices', [InvoiceController::class,'listAll']);

// Single invoice
Route::get('admin/invoice/{id}', [InvoiceController::class,'viewSingle']);

// All invoices (Unpaid)
Route::get('admin/invoices/unpaid', [InvoiceController::class,'listAllUnpaid']);

// All invoices (Paid)
Route::get('admin/invoices/paid', [InvoiceController::class,'listAllPaid']);

// View invoice PDF
Route::get('admin/invoice/{id}/download', [InvoiceController::class,'viewInvoicePDF']);

// Download invoice PDF
Route::get('admin/invoice/{id}/download/pdf', [InvoiceController::class,'downloadInvoice']);


// Send invoice
Route::get('admin/invoice/{id}/send', [InvoiceController::class,'sendInvoice']);





//Route::get('auth/login', [CustomAuthController::class, 'index']);
//Route::post('auth/login', [CustomAuthController::class, 'customLogin']);
//Route::get('auth/dashboard', [CustomAuthController::class, 'dashboard'])->middleware('authenticated');
//Route::get('', [CustomAuthController::class, 'signOut']);
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();