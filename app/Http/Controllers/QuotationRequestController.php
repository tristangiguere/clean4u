<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuotationRequest;

class QuotationRequestController extends Controller
{
    //
    function addData(Request $req){
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
        $quotationRequest->save();
        return redirect('sousmission');
    }
}
