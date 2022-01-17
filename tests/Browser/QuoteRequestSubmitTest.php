<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Tests\TestCase;


class QuoteRequestSubmitTest extends DuskTestCase
{
    // Auto-rollback all DB operations that are part of this test case.
    use DatabaseTransactions;

    public function test_visitor_can_submit_quote_request()
    {

        // Assert the UI flow
        $this->browse(function (Browser $browser) {
            $browser->visit('/quote')
                    ->assertSee('Get a quote')
                    ->assertSee('Last Name')
                    ->type('last_name', "Doe")
                    ->assertSee('First Name')
                    ->type('first_name', "John")
                    ->assertSee('Courriel')
                    ->type('email', "email@example.com")
                    ->assertSee('Numéro de téléphone')
                    ->type('phone', '5141121212')
                    ->assertSee('Vehicle type')
                    ->select('type', 'Car')
                    ->assertSee('Year')
                    ->type('year', '2009')
                    ->assertSee('Make')
                    ->type('make', 'Lamborghini')
                    ->assertSee('Model')
                    ->type('model', 'Adventador')
                    ->assertSee('Description of services requested')
                    ->scrollTo('#submitbtn')
                    ->assertSee('Submit')
                    ->type('services', 'I am looking to get my windows tinted.')
                    ->press('send');

        // Assert that the request is in the database
        $this->assertDatabaseHas('quotation_requests',['first_name'=>"John", 'last_name'=>"Doe", 'email'=>"email@example.com",
        'phone'=>'5141121212', 'type'=>'Car', 'year'=>'2009', 'make'=>'Lamborghini', 'model'=>'Adventador', 'services'=>'I am looking to get my windows tinted.']);
        
        });
    }
}