<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testWrongEmailAndPassword()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
            ->assertSee('Connexion')
            ->assertSee('Email')
            ->type('email', "")
            ->assertSee('Password')
            ->type('password', "123456")
            ->press('submit')
            ->assertSee('These credentials do not match our records.');
        });

    }
}
