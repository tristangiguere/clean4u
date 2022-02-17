<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\Invoice;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class AdminViewInvoiceTest extends DuskTestCase
{
    /**
     * A Dusk test to verify the display of a single quote request from the database to the front-end level.
     *
     * @return void
     */
    public function testNavigation_InvoiceSingle()
    {
        //Check if array contains at least one element
        if (sizeof(Invoice::all()) > 0) {

            // Browse to specific quote request URL and check that all data is correctly displayed
            $this->browse(function (Browser $browser) {

            // Get random quote from list
            $inv = Invoice::all()->random();

                $browser->visit("/admin/invoice/" . $inv->id)
                        
                    // Check for navbar
                        ->assertSee('Clean4U Admin')
                        ->assertSee('QUOTES')
                        ->assertSee('INVOICES')
                        ->assertSee('MESSAGES')
    
                        // Check for header section
                        ->assertSee('Invoice #' . $inv->id)
                        ->assertSee('Archive')
                        ->assertSee('Download')

                        // Check for customer information section
                        ->assertSee('CUSTOMER INFORMATION')
                        ->assertSee('Name')
                        ->assertSee($inv->name)
                        ->assertSee('Address')
                        ->assertSee($inv->address)
                        ->assertSee('City')
                        ->assertSee($inv->city)
                        ->assertSee('Province')
                        ->assertSee($inv->province)
                        ->assertSee('Country')
                        ->assertSee($inv->country)
                        ->assertSee('Postal Code')
                        ->assertSee($inv->postal_code)
                        ->assertSee('Phone Number')
                        ->assertSee($inv->phone)
                        ->assertSee('Email')
                        ->assertSee($inv->email)
                        ->assertSee('Company Name')
                        ->assertSee($inv->company)

                        // CHECK FOR INVOICE DETAILS section
                        ->assertSee('INVOICE DETAILS')
                        ->assertSee('Date Created')
                        ->assertSee($inv->created_date)
                        ->assertSee('Due Date')
                        ->assertSee($inv->due_date)

                        // Check for invoice items header
                        ->assertSee('PRODUCTS & SERVICES')
                        ->assertSee('Product / Service')
                        ->assertSee('Description')
                        ->assertSee('Price')
                        ->assertSee('Qty')
                        ->assertSee('Total')
                        ->assertSee('Tax')

                        // Check for invoice items content
                        ->assertSee($inv->product_1)
                        ->assertSee($inv->description_1)
                        ->assertSee($inv->price_1)
                        ->assertSee($inv->qty_1)
                        ->assertSee($inv->rowtotal_1);
                        //->assertSee($inv->tax_amount_1);
            });
        } 
    }
}
