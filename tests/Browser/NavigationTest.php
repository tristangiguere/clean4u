<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NavigationTest extends DuskTestCase
{
    // Test the navigation on the website
    public function testNavigation()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/services')
                    ->assertSee('Services')
                    ->assertSee('Automobiles')
                    ->assertSee('Bateaux')
                    ->assertSee('Motorisés')
                    ->assertSee('Motos')
                    ->visit('/contact')
                    ->assertSee('Envoyez-nous un message')
                    ->assertSee('ENVOYER LE MESSAGE');
        });
    }
}