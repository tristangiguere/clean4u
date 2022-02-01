<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\QuotationRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class AdminViewQuoteRequestTest extends DuskTestCase
{
    /**
     * A Dusk test to verify the display of a single quote request from the database to the front-end level.
     *
     * @return void
     */
    public function testNavigation_RequestSingle()
    {
        //Check if array contains at least one element
        if (sizeof(QuotationRequest::all()) > 0) {

            // Browse to specific quote request URL and check that all data is correctly displayed
            $this->browse(function (Browser $browser) {

            // Get random quote from list
            $qr = QuotationRequest::all()->random();

                $browser->visit("/admin/request/" . $qr->id)
                        
                    // Check for navbar
                        ->assertSee('Clean4U Admin')
                        ->assertSee('QUOTES')
                        ->assertSee('INVOICES')
                        ->assertSee('MESSAGES')
    
                        // Check for header section
                        ->assertSee('Quotation request from ' . $qr->first_name . ' ' . $qr->last_name)
                        ->assertSee('Reply')

                        // Check for customer information section
                        ->assertSee('REQUESTER INFORMATION')
                        ->assertSee('First Name')
                        ->assertSee($qr->first_name)
                        ->assertSee('Last Name')
                        ->assertSee($qr->last_name)
                        ->assertSee('Phone Number')
                        ->assertSee($qr->phone)
                        ->assertSee('Email')
                        ->assertSee($qr->email)
                        ->assertSee('Date Submitted')
                        ->assertSee($qr->created_at)
                        ->assertSee('Status')
                        ->assertSee($qr->status)

                        // Check for vehicle details section
                        ->assertSee('VEHICLE DETAILS')
                        ->assertSee('Vehicle type')
                        ->assertSee($qr->type)
                        ->assertSee('Manufacturer')
                        ->assertSee($qr->make)
                        ->assertSee('Model')
                        ->assertSee($qr->model)
                        ->assertSee('Production Year')
                        ->assertSee($qr->year)

                        // Check for message section
                        ->assertSee('REQUEST MESSAGE')
                        ->assertSee('Message from ' . $qr->first_name . ':');
            });
        } 
    }
}
