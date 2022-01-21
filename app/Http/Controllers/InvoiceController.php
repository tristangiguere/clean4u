<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    function addData(Request $req){

        date_default_timezone_set('America/Toronto');

        $invoice=new Invoice;

        // Set values for all invoice header info.
        $invoice->name=$req->name;
        $invoice->email=$req->email;
        $invoice->phone=$req->phone;
        $invoice->company=$req->company;
        $invoice->address=$req->address;
        $invoice->city=$req->city;
        $invoice->province=$req->province;
        $invoice->country=$req->country;
        $invoice->postal_code=$req->postal;
        $invoice->terms=$req->terms;
        $invoice->notes=$req->notes;
        $invoice->due_date=$req->due_date;
        $invoice->created_date=date('Y-m-d');
        $invoice->status = 0;

        // Set values for item rows (ROW 1)
        $invoice->product_1=$req->product_1;
        $invoice->description_1=$req->description_1;
        $invoice->price_1=$req->price_1;
        $invoice->qty_1=$req->qty_1;
        $invoice->rowtotal_1=$req->row_total_1;
        $invoice->tax_rate_1=$req->tax_rate_1;

        // Set values for item rows (ROW 2)
        $invoice->product_2=$req->product_2;
        $invoice->description_2=$req->description_2;
        $invoice->price_2=$req->price_2;
        $invoice->qty_2=$req->qty_2;
        $invoice->rowtotal_2=22;
        $invoice->tax_rate_2=$req->tax_rate_2;

        // Set values for item rows (ROW 3)
        $invoice->product_3=$req->product_3;
        $invoice->description_3=$req->description_3;
        $invoice->price_3=$req->price_3;
        $invoice->qty_3=$req->qty_3;
        $invoice->rowtotal_3=22;
        $invoice->tax_rate_3=$req->tax_rate_3;
        
        $invoice->save();
        return redirect('admin/invoices');
    }

    function listAll(){
        $invoices = Invoice::all();
        return view('admin.invoices', ['invoices'=>$invoices]);
    }

    // function viewSingle($id){
    //     $quoteRequest = QuotationRequest::find($id);
    //     return view('admin.request', ['quoteRequest'=>$quoteRequest]);
    // }

    // function replyToRequest($id, Request $req){
    //     $quoteRequest = QuotationRequest::find($id);
        
    //     $data = [
    //         'email' => $quoteRequest->email,
    //         'reply' => $req->reply,
    //     ];

    //     $result = (new MailController)->replyToRequest($data);
    // }
}
