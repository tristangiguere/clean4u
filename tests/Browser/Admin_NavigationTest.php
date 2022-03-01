<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\CustomAuthController;
 

class AdminNavigationTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testNavigation_quotesList()
    {
        $req = new Request([
            "username"=>"admin",
            "password"=>"admin"
        ]);

        // Login
        app('App\Http\Controllers\CustomAuthController')->login($req);

        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/quotes')
                    // Check for navbar
                    ->assertSee('Clean4U Admin')
                    ->assertSee('QUOTES')
                    ->assertSee('INVOICES')
                    ->assertSee('MESSAGES')

                    // Check for body section
                    ->assertSee('Quotes')
                    ->assertSee("New")
                    ->assertSee('Quote #')
                    ->assertSee('Date')
                    ->assertSee('Status')
                    ->assertSee('Total')
                    ->assertSee('Customer')
                    ->assertSee('Exp.');
        });

        // Logout
        app('App\Http\Controllers\CustomAuthController')->logout();
    }

    public function testNavigation_InvoicesList()
    {

        $req = new Request([
            "username"=>"admin",
            "password"=>"admin"
        ]);

        // Login
        app('App\Http\Controllers\CustomAuthController')->login($req);

        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/invoices')
                    // Check for navbar
                    ->assertSee('Clean4U Admin')
                    ->assertSee('QUOTES')
                    ->assertSee('INVOICES')
                    ->assertSee('MESSAGES')

                    // Check for body section
                    ->assertSee('Invoices')
                    ->assertSee("New")
                    ->assertSee('Invoice #')
                    ->assertSee('Due Date')
                    ->assertSee('Status')
                    ->assertSee('Total')
                    ->assertSee('Customer')
                    ->assertSee('Actions')
                    ->assertSee('Invoice Date');
        });
    }

    public function testNavigation_RequestsList()
    {

        $req = new Request([
            "username"=>"admin",
            "password"=>"admin"
        ]);

        // Login
        app('App\Http\Controllers\CustomAuthController')->login($req);

        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/requests')
                    // Check for navbar
                    ->assertSee('Clean4U Admin')
                    ->assertSee('QUOTES')
                    ->assertSee('INVOICES')
                    ->assertSee('MESSAGES')

                    // Check for header section
                    ->assertSee('Quotation Requests')
                    ->assertSee("Request #")
                    ->assertSee('Status')
                    ->assertSee('Customer')
                    ->assertSee('Actions');

                    // Fetch all quote requests
                     $response = Http::withHeaders([
                    'Authorization' => 'Bearer ' . env('API_KEY')
                    ])->get(env('API_URL') . '/requests');
                    $requests = $response->json();

                    // Check if all quotes from the database appear in list
                    foreach ($requests as $quoteRequest) {
                        $combinedName = $quoteRequest->first_name . ' ' . $quoteRequest->last_name;

                        $browser
                            ->assertSee($quoteRequest->id)
                            ->assertSee($quoteRequest->created_at)
                            ->assertSee($quoteRequest->status)
                            ->assertSee($combinedName)
                            ->assertSee('View  |  Delete');
                      }
        });
    }
}
