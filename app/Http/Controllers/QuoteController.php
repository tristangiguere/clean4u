<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class QuoteController extends Controller
{
    function addData(Request $req){

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $_ENV['API_KEY']
        ])->post('localhost:3000/api/quotations', [
                "name" => $req->name,
                "email"=> $req->email,
                "phone" => $req->phone,
                "company" => $req->company,
                "address" => $req->address,
                "city" => $req->city,
                "province" => $req->province,
                "country" => $req->country,
                "postal_code" => $req->postal,
                "type" => $req->type,
                "make" => $req->make,
                "model" => $req->model,
                "year" => $req->year,
                "notes" => $req->notes,
                "expiration_date" => $req->due_date,
                "product_1" => $req->product_1,
                "description_1" => $req->description_1,
                "price_1" => $req->price_1,
                "tax_amount_1" => $req->tax_amt_1,
                "qty_1" => $req->qty_1,
                "rowtotal_1" => $req->row_total_1,
                "product_2" => $req->product_2,
                "description_2" => $req->description_2,
                "price_2" => $req->price_2,
                "tax_amount_2" => $req->tax_amt_2,
                "qty_2" => $req->qty_2,
                "rowtotal_2" => $req->row_total_2,
                "product_3" => $req->product_3,
                "description_3" => $req->description_3,
                "price_3" => $req->price_3,
                "tax_amount_3" => $req->tax_amt_3,
                "qty_3" => $req->qty_3,
                "rowtotal_3" => $req->row_total_3,
                "subtotal" => $req->subtotal,
                "taxTotal" => $req->taxTotal,
                "total" => $req->total
        ]);

        if ($response->status() == 200){
            return redirect('admin/quotes');
        }
        else{
            return dd($response->body());
        }
    }

    function listAll(){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $_ENV['API_KEY']
        ])->get('localhost:3000/api/quotations');
        $quotations = $response->json();

        if ($response->status() == 200){
            return view('admin.quotes', ['quotations'=>$quotations, 'status'=>'all']);
        }
        else{
            dd($response->body());
        }
    }

    function viewSingle($id){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $_ENV['API_KEY']
        ])->get('localhost:3000/api/quotations/' . $id);
        $quotation = $response->json();

        if ($response->status() == 200){
            return view('admin.quote', ['quotation'=>$quotation]);
        }
        else{
            dd($response->body());
        }
    }

    function viewPublic($uuid){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $_ENV['API_KEY']
        ])->get('localhost:3000/api/public/quotations/' . $uuid);
        $quotation = $response->json();

        if ($response->status() == 200){
            return view('customer.quote', ['quotation'=>$quotation]);
        }
        else{
            dd($response->body());
        }
    }

    function cancelQuotation($id){
        $quotation = Http::withHeaders([
            'Authorization' => 'Bearer ' . $_ENV['API_KEY']
        ])->put('localhost:3000/api/quotations/' . $id . '/cancel');
        if ($quotation->status() == 200){
            return redirect('/admin/quotes');
        }
    }

    function sendQuotation($id){

        $quotation = Http::withHeaders([
            'Authorization' => 'Bearer ' . $_ENV['API_KEY']
        ])->post('localhost:3000/api/quotations/' . $id . '/send');
        if ($quotation->status() == 200){
            return redirect('/admin/quotes');
        }
        dd('Quotation sent successfully');
    }
}