<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NavigationTest extends DuskTestCase
{
    // Test the navigation on the website (HOME PAGE)
    public function testNavigation_home()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    // Check for navbar
                    ->assertSee('Home')
                    ->assertSee('Quotations')
                    ->assertSee('Services')
                    ->assertSee('Contact Us')

                    // Check for hero section
                    ->assertSee('A clean car is a happy car.')
                    ->assertSee('The best in the business, since 1990.')

                    // Check for footer
                    ->assertSee('© 2022 Clean4U. All Rights Reserved.')
                    ->assertSee('Back to top');
        });
    }

    public function testNavigation_services()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/services')
                    // Check for navbar
                    ->assertSee('Home')
                    ->assertSee('Quotations')
                    ->assertSee('Services')
                    ->assertSee('Contact Us')

                    // Check for body section
                    ->assertSee('Services offered for all types of vehicles')
                    ->assertSee('Cars')
                    ->assertSee('Boats')
                    ->assertSee('RVs')
                    ->assertSee('Motorcycles')
                    ->assertSee('Our services:')

                    // Check for footer
                    ->assertSee('© 2022 Clean4U. All Rights Reserved.')
                    ->assertSee('Back to top');
        });
    }

    public function testNavigation_contact()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')
                    // Check for navbar
                    ->assertSee('Home')
                    ->assertSee('Quotations')
                    ->assertSee('Services')
                    ->assertSee('Contact Us')

                    // Check for body section
                    ->assertSee('Send us a message:')
                    ->assertSee("LET'S GO!")
                    ->assertSee('Montreal, Qc')
                    ->assertSee('514-730-5983')
                    ->assertSee('hello@clean4u.com')
                    ->assertSee('@clean4umtl')
                    ->assertSee('Clean4U Mtl')

                    // Check for footer
                    ->assertSee('© 2022 Clean4U. All Rights Reserved.')
                    ->assertSee('Back to top');
        });
    }

    // Quote request page is already asserted by the QuoteRequestSubmit test.

}