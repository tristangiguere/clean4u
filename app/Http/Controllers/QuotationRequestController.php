<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuotationRequest;
use Illuminate\Support\Facades\DB;

class QuotationRequestController extends Controller
{
    function addData(Request $req){

        date_default_timezone_set('America/Toronto');

        $quotationRequest=new QuotationRequest;
        $quotationRequest->first_name=$req->first_name;
        $quotationRequest->last_name=$req->last_name;
        $quotationRequest->phone=$req->phone;
        $quotationRequest->type=$req->type;
        $quotationRequest->year=$req->year;
        $quotationRequest->make=$req->make;
        $quotationRequest->model=$req->model;
        $quotationRequest->services=$req->services;
        $quotationRequest->email=$req->email;
        $quotationRequest->created_at = date(('Y-m-d h:i:sa'));
        $quotationRequest->status = "New";
        $quotationRequest->save();
        return redirect('quote');
    }

    function listAll(){
        $quotationRequests = QuotationRequest::all();
        return view('admin.requests', ['quotationRequests'=>$quotationRequests]);
    }

    function viewSingle($id){
        $quoteRequest = QuotationRequest::find($id);
        return view('admin.request', ['quoteRequest'=>$quoteRequest]);
    }

    function replyToRequest($id, Request $req){
        $quoteRequest = QuotationRequest::find($id);
        
        $data = [
            'email' => $quoteRequest->email,
            'reply' => $req->reply,
        ];

        $result = (new MailController)->replyToRequest($data);
    }

    function deleteRequest($id){
        $quoteRequest = QuotationRequest::destroy($id);
        return redirect('/admin/requests');
    }
}
