<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuotationRequestController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Middleware\AuthMW;

// --------  PUBLIC APP ROUTES  --------

Route::get('/', function () {
    return view('home');
});

Route::get('/services', function(){
    return view('services');
});

Route::view('quote', 'soumission');

Route::post('quote', [QuotationRequestController::class,'addData']);

Route::get('/contact', function(){
    return view('contact');
});

// VIEW INVOICE (PUBLIC)
Route::get('customer/invoice/{uuid}', [InvoiceController::class,'viewPublic']);

// VIEW QUOTATION (PUBLIC)
Route::get('customer/quote/{uuid}', [QuoteController::class,'viewPublic']);

// Post contact form
Route::post('contact', [ContactController::class,'sendForm']);

Route::post('login', [CustomAuthController::class,'login']);

Route::get('login', [CustomAuthController::class,'showLoginForm']);

Route::get('logout', [CustomAuthController::class,'logout']);


// --------  ALL (PRIVATE) ROUTES FOR ADMIN DASHBOARD  --------

Route::get('dashboard', function () {
    return redirect('/admin/invoices');
});

// Restrict to authenticated users only.
Route::middleware([AuthMW::class])->group(function () {

        Route::get('changepassword', [CustomAuthController::class,'changePasswordForm']);

        Route::post('changepassword', [CustomAuthController::class,'changepassword']);

        // All requests
        Route::get('admin/requests', [QuotationRequestController::class,'listAll']);

        // Delete request
        Route::get('admin/request/{id}/delete', [QuotationRequestController::class,'deleteRequest']);

        // Single request
        Route::get('admin/request/{id}', [QuotationRequestController::class,'viewSingle']);

        // Single request (REPLY TO CUSTOMER)
        Route::post('admin/request/{id}', [QuotationRequestController::class,'replyToRequest']);


        // Single quote
        Route::get('/admin/invoice/new', function (){
            return view('admin.addinvoice');
        });

        // Single quote
        Route::get('/admin/quote/new', function (){
            return view('admin.addquote');
        });

        // All quotes
        Route::get('admin/quotes', [QuoteController::class,'listAll']);


        // View single quote
        Route::get('admin/quotes/{id}', [QuoteController::class,'viewSingle']);


        // Add new invoice
        Route::post('/admin/invoice/new', [InvoiceController::class,'addData']);

        // Add new quote
        Route::post('/admin/quote/new', [QuoteController::class,'addData']);

        // Delete invoice
        Route::get('admin/invoice/{id}/cancel', [InvoiceController::class,'cancelInvoice']);

        // Cancel quotation
        Route::get('admin/quote/{id}/cancel', [QuoteController::class,'cancelQuotation']);

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

        // Send invoice
        Route::get('admin/quote/{id}/send', [QuoteController::class,'sendQuotation']);
});