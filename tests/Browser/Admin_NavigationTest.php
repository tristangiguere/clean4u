<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\QuotationRequest;
use Illuminate\Support\Facades\DB;

class AdminNavigationTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testNavigation_quotesList()
    {
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
    }

    public function testNavigation_InvoicesList()
    {
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

                    // Fetch all quote requests from database
                    $quotationRequests = QuotationRequest::all();

                    // Check if all quotes from the database appear in list
                    foreach ($quotationRequests as $quoteRequest) {
                        $combinedName = $quoteRequest->first_name . ' ' . $quoteRequest->last_name;

                        $browser
                            ->assertSee($quoteRequest->id)
                            ->assertSee($quoteRequest->created_at)
                            ->assertSee($quoteRequest->status)
                            ->assertSee($combinedName)
                            ->assertSee('View  |  Archive');
                      }
        });
    }
}
