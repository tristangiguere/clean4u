<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class QuotationRequestController extends Controller
{
    function addData(Request $req){
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $_ENV['API_KEY']
            ])->post(env('API_URL') . '/requests', [
            "first_name" => $req->first_name,
            "last_name" => $req->last_name,
            "email" => $req->email,
            "phone" => $req->phone,
            "type" => $req->type,
            "make" => $req->make,
            "model" => $req->model,
            "year" => $req->year,
            "services" => $req->services
    ]);
        if ($response->status() == 200){
            return redirect('quote');
        }
        else{
            return dd($response->body());
        }
    }

    function listAll(){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $_ENV['API_KEY']
        ])->get(env('API_URL') . '/requests');
        $requests = $response->json();

        if ($response->status() == 200){
            return view('admin.requests', ['requests'=>$requests, 'status'=>'all']);
        }
        else{
            dd($response->body());
        }
    }

    function viewSingle($id){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $_ENV['API_KEY']
        ])->get(env('API_URL') . '/requests/' . $id);
        $request = $response->json();

        if ($response->status() == 200){
            return view('admin.request', ['request'=>$request]);
        }
        else{
            dd($response->body());
        }
    }

    function replyToRequest($id, Request $req){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $_ENV['API_KEY']
        ])->post(env('API_URL') . '/requests/' . $id . '/reply', [
                "message" => $req->reply
        ]);

        if ($response->status() == 200){
            return redirect('admin/requests');
        }
        else{
            return dd($response->body());
        }
    }

    function deleteRequest($id){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $_ENV['API_KEY']
        ])->delete(env('API_URL') . '/requests/' . $id);

        if ($response->status() == 200){
            return redirect('admin/requests');
        }
        else{
            return dd($response->body());
        }
    }
}