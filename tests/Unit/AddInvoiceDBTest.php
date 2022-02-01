<?php

// The scope of this unit test is to add a dummy request to the Quote Requests database table through the controller method,
// and to verify that the record is successfully inserted into the database afterwards.

namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AddInvoiceDBTest extends TestCase
{
    // Auto-rollback all DB operations that are part of this test case.
    use DatabaseTransactions;

    public function testAddInvoiceToDb()
    {

        date_default_timezone_set('America/Toronto');

        $invoice = new Request;

        // Set values for all invoice header info.
        $invoice->name='John Doe';
        $invoice->email='john@doe.com';
        $invoice->phone='515-055-5155';
        $invoice->company="Rogan Sports";
        $invoice->address='2332 North AVE';
        $invoice->city='Candiac';
        $invoice->province='QC';
        $invoice->country='Canada';
        $invoice->postal="J4P X1S";
        $invoice->terms=0;
        $invoice->notes="";
        $invoice->due_date=date('Y-m-d');
        $invoice->created_date=date('Y-m-d');
        $invoice->status = 0;

        // Set values for item rows (ROW 1)
        $invoice->product_1="Product 1";
        $invoice->description_1="Description 1";
        $invoice->price_1=22.12;
        $invoice->qty_1=1;
        $invoice->rowtotal_1=22.12;
        $invoice->tax_amount_1=0;

        $invoice->subtotal="22.12";
        $invoice->taxTotal=0;
        $invoice->total=22.12;

        // Add the request to the database
        app('App\Http\Controllers\InvoiceController')->addData($invoice);

        // Assert that the request is in the database
        $this->assertDatabaseHas('invoices',['name'=>$invoice->name, 'email'=>$invoice->email,
        'phone'=>$invoice->phone]);
    }
}