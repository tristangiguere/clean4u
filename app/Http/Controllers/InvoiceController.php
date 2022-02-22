<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class InvoiceController extends Controller
{
    function addData(Request $req){

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $_ENV['API_KEY']
        ])->post(env('API_URL') . '/invoices', [

                "name" => $req->name,
                "email"=> $req->email,
                "phone" => $req->phone,
                "company" => $req->company,
                "address" => $req->address,
                "city" => $req->city,
                "province" => $req->province,
                "country" => $req->country,
                "postal_code" => $req->postal,
                "terms" => $req->terms,
                "notes" => $req->notes,
                "due_date" => $req->due_date,
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
            return redirect('admin/invoices');
        }
        else{
            return dd($response->body());
        }
    }

    function listAll(){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $_ENV['API_KEY']
        ])->get(env('API_URL') . '/invoices');
        $invoices = $response->json();

        if ($response->status() == 200){
            return view('admin.invoices', ['invoices'=>$invoices, 'status'=>'all']);
            
        }
        else{
            dd($response->body());
        }
    }

    function listAllUnpaid(){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $_ENV['API_KEY']
        ])->get(env('API_URL') . '/invoices/unpaid');
        $invoices = $response->json();

        if ($response->status() == 200){
            return view('admin.invoices', ['invoices'=>$invoices, 'status'=>'unpaid']);
        }
        else{
            dd($response->body());
        }
    }

    function listAllPaid(){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $_ENV['API_KEY']
        ])->get(env('API_URL') . '/invoices/paid');
        $invoices = $response->json();

        if ($response->status() == 200){
            return view('admin.invoices', ['invoices'=>$invoices, 'status'=>'paid']);
        }
        else{
            dd($response->body());
        }
    }

    function viewSingle($id){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $_ENV['API_KEY']
        ])->get(env('API_URL') . '/invoices/' . $id);
        $invoice = $response->json();

        if ($response->status() == 200){
            return view('admin.invoice', ['invoice'=>$invoice]);
        }
        else{
            dd($response->body());
        }
    }

    function viewPublic($uuid){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $_ENV['API_KEY']
        ])->get(env('API_URL') . '/public/invoices/' . $uuid);
        $invoice = $response->json();

        if ($response->status() == 200){
            return view('customer.invoice', ['invoice'=>$invoice]);
        }
        else{
            dd($response->body());
        }
    }

    function cancelInvoice($id){
        $invoice = Http::withHeaders([
            'Authorization' => 'Bearer ' . $_ENV['API_KEY']
        ])->put(env('API_URL') . '/invoices/' . $id . '/cancel');
        if ($invoice->status() == 200){
            return redirect('/admin/invoices');
        }
    }

    function viewInvoicePDF($id){
        try{
            $url = env('API_URL') . '/invoices/' . $id . '/pdf';
            $client = new Client(['headers' => ['Authorization' => 'Bearer ' . $_ENV['API_KEY']]]);
            $response = $client->get($url);

            if ($response->getStatusCode() !== 200){
                echo "Error.";
                return;
            }

            $file = $response->getBody()->getContents();

            $filename = 'Invoice #' . $id . '.pdf';

            $headers = [
                "Content-Type" => 'application/pdf',
                "Content-Disposition" => "inline; filename=" . $filename . ";"
            ];

            return response()->streamDownload(function () use ($file) {
                echo $file;
            }, $filename, $headers);
        }
        catch(Exception $e){
        }
    }

    function sendInvoice($id){

        $invoice = Http::withHeaders([
            'Authorization' => 'Bearer ' . $_ENV['API_KEY']
        ])->post(env('API_URL') . '/invoices/' . $id . '/send');
        if ($invoice->status() == 200){
            return redirect('/admin/invoices');
        }

        dd('Invoice sent successfully');
    }
}