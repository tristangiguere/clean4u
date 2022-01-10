<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Tests\TestCase;


class QuoteRequestEmptyTest extends DuskTestCase
{
    // Auto-rollback all DB operations that are part of this test case.
    use DatabaseTransactions;

    public function test_visitor_submit_quote_request_emptyfields()
    {

        // Assert the UI flow for empty last name
        $this->browse(function (Browser $browser) {
            $browser->visit('/sousmission')
                    ->assertSee('Votre soumission')
                    ->assertSee('Nom')
                    ->type('last_name', "")
                    ->assertSee('Prénom')
                    ->type('first_name', "John")
                    ->assertSee('Courriel')
                    ->type('email', "email@example.com")
                    ->assertSee('Numéro de téléphone')
                    ->type('phone', '5141121212')
                    ->assertSee('Véhicule')
                    ->select('vehicle', 'Voiture')
                    ->assertSee('Année')
                    ->type('year', '2009')
                    ->assertSee('Marque')
                    ->type('make', 'Lamborghini')
                    ->assertSee('Modèle')
                    ->type('model', 'Adventador')
                    ->assertSee('Description des services demandés')
                    ->assertSee('Envoyer')
                    ->type('services', 'I am looking to get my windows tinted.')
                    ->press('send');

            // Assert that the request is in the database
        $this->assertDatabaseMissing('quotation_requests',['first_name'=>"John", 'last_name'=>"", 'email'=>"email@example.com",
        'phone'=>'5141121212', 'vehicle'=>'Voiture', 'year'=>'2009', 'make'=>'Lamborghini', 'model'=>'Adventador', 'services'=>'I am looking to get my windows tinted.']);




        });



        // Assert the UI flow for empty first name
        $this->browse(function (Browser $browser) {
            $browser->visit('/sousmission')
                    ->assertSee('Votre soumission')
                    ->assertSee('Nom')
                    ->type('last_name', "Doe")
                    ->assertSee('Prénom')
                    ->type('first_name', "")
                    ->assertSee('Courriel')
                    ->type('email', "email@example.com")
                    ->assertSee('Numéro de téléphone')
                    ->type('phone', '5141121212')
                    ->assertSee('Véhicule')
                    ->select('vehicle', 'Voiture')
                    ->assertSee('Année')
                    ->type('year', '2009')
                    ->assertSee('Marque')
                    ->type('make', 'Lamborghini')
                    ->assertSee('Modèle')
                    ->type('model', 'Adventador')
                    ->assertSee('Description des services demandés')
                    ->assertSee('Envoyer')
                    ->type('services', 'I am looking to get my windows tinted.')
                    ->press('send')
                    ->assertSee('Please fill out this field.');
        });

        // Assert the UI flow for empty email
        $this->browse(function (Browser $browser) {
            $browser->visit('/sousmission')
                    ->assertSee('Votre soumission')
                    ->assertSee('Nom')
                    ->type('last_name', "Doe")
                    ->assertSee('Prénom')
                    ->type('first_name', "John")
                    ->assertSee('Courriel')
                    ->type('email', "")
                    ->assertSee('Numéro de téléphone')
                    ->type('phone', '5141121212')
                    ->assertSee('Véhicule')
                    ->select('vehicle', 'Voiture')
                    ->assertSee('Année')
                    ->type('year', '2009')
                    ->assertSee('Marque')
                    ->type('make', 'Lamborghini')
                    ->assertSee('Modèle')
                    ->type('model', 'Adventador')
                    ->assertSee('Description des services demandés')
                    ->assertSee('Envoyer')
                    ->type('services', 'I am looking to get my windows tinted.')
                    ->press('send')
                    ->assertSee('Please fill out this field.');
        });

        // Assert the UI flow for empty phone number
        $this->browse(function (Browser $browser) {
            $browser->visit('/sousmission')
                    ->assertSee('Votre soumission')
                    ->assertSee('Nom')
                    ->type('last_name', "Doe")
                    ->assertSee('Prénom')
                    ->type('first_name', "John")
                    ->assertSee('Courriel')
                    ->type('email', "tristan@email.com")
                    ->assertSee('Numéro de téléphone')
                    ->type('phone', '')
                    ->assertSee('Véhicule')
                    ->select('vehicle', 'Voiture')
                    ->assertSee('Année')
                    ->type('year', '2009')
                    ->assertSee('Marque')
                    ->type('make', 'Lamborghini')
                    ->assertSee('Modèle')
                    ->type('model', 'Adventador')
                    ->assertSee('Description des services demandés')
                    ->assertSee('Envoyer')
                    ->type('services', 'I am looking to get my windows tinted.')
                    ->press('send')
                    ->assertSee('Please fill out this field.');
        });

        // Assert scenario for empty car type.
        $this->browse(function (Browser $browser) {
            $browser->visit('/sousmission')
                    ->assertSee('Votre soumission')
                    ->assertSee('Nom')
                    ->type('last_name', "Doe")
                    ->assertSee('Prénom')
                    ->type('first_name', "John")
                    ->assertSee('Courriel')
                    ->type('email', "tristan@email.com")
                    ->assertSee('Numéro de téléphone')
                    ->type('phone', '5145141444')
                    ->assertSee('Véhicule')
                    ->select('vehicle', '')
                    ->assertSee('Année')
                    ->type('year', '2009')
                    ->assertSee('Marque')
                    ->type('make', 'Lamborghini')
                    ->assertSee('Modèle')
                    ->type('model', 'Adventador')
                    ->assertSee('Description des services demandés')
                    ->assertSee('Envoyer')
                    ->type('services', 'I am looking to get my windows tinted.')
                    ->press('send')
                    ->assertSee('Please fill out this field.');
        });

        // Assert scenario for empty car year
        $this->browse(function (Browser $browser) {
            $browser->visit('/sousmission')
                    ->assertSee('Votre soumission')
                    ->assertSee('Nom')
                    ->type('last_name', "Doe")
                    ->assertSee('Prénom')
                    ->type('first_name', "John")
                    ->assertSee('Courriel')
                    ->type('email', "tristan@email.com")
                    ->assertSee('Numéro de téléphone')
                    ->type('phone', '5145141444')
                    ->assertSee('Véhicule')
                    ->select('vehicle', 'Voiture')
                    ->assertSee('Année')
                    ->type('year', '')
                    ->assertSee('Marque')
                    ->type('make', 'Lamborghini')
                    ->assertSee('Modèle')
                    ->type('model', 'Adventador')
                    ->assertSee('Description des services demandés')
                    ->assertSee('Envoyer')
                    ->type('services', 'I am looking to get my windows tinted.')
                    ->press('send')
                    ->assertSee('Please fill out this field.');
        });

        // Assert scenario for empty car make
        $this->browse(function (Browser $browser) {
            $browser->visit('/sousmission')
                    ->assertSee('Votre soumission')
                    ->assertSee('Nom')
                    ->type('last_name', "Doe")
                    ->assertSee('Prénom')
                    ->type('first_name', "John")
                    ->assertSee('Courriel')
                    ->type('email', "tristan@email.com")
                    ->assertSee('Numéro de téléphone')
                    ->type('phone', '5145141444')
                    ->assertSee('Véhicule')
                    ->select('vehicle', 'Voiture')
                    ->assertSee('Année')
                    ->type('year', '2001')
                    ->assertSee('Marque')
                    ->type('make', 'Lamborghini')
                    ->assertSee('Modèle')
                    ->type('model', 'Adventador')
                    ->assertSee('Description des services demandés')
                    ->assertSee('Envoyer')
                    ->type('services', 'I am looking to get my windows tinted.')
                    ->press('send')
                    ->assertSee('Please fill out this field.');
        });

        // Assert scenario for empty car model
        $this->browse(function (Browser $browser) {
            $browser->visit('/sousmission')
                    ->assertSee('Votre soumission')
                    ->assertSee('Nom')
                    ->type('last_name', "Doe")
                    ->assertSee('Prénom')
                    ->type('first_name', "John")
                    ->assertSee('Courriel')
                    ->type('email', "tristan@email.com")
                    ->assertSee('Numéro de téléphone')
                    ->type('phone', '5145141444')
                    ->assertSee('Véhicule')
                    ->select('vehicle', 'Voiture')
                    ->assertSee('Année')
                    ->type('year', '2001')
                    ->assertSee('Marque')
                    ->type('make', 'Audi')
                    ->assertSee('Modèle')
                    ->type('model', '')
                    ->assertSee('Description des services demandés')
                    ->assertSee('Envoyer')
                    ->type('services', 'I am looking to get my windows tinted.')
                    ->press('send')
                    ->assertSee('Please fill out this field.');
        });

        // Assert scenario for empty services
        $this->browse(function (Browser $browser) {
            $browser->visit('/sousmission')
                    ->assertSee('Votre soumission')
                    ->assertSee('Nom')
                    ->type('last_name', "Doe")
                    ->assertSee('Prénom')
                    ->type('first_name', "John")
                    ->assertSee('Courriel')
                    ->type('email', "tristan@email.com")
                    ->assertSee('Numéro de téléphone')
                    ->type('phone', '5145141444')
                    ->assertSee('Véhicule')
                    ->select('vehicle', 'Voiture')
                    ->assertSee('Année')
                    ->type('year', '2001')
                    ->assertSee('Marque')
                    ->type('make', 'Audi')
                    ->assertSee('Modèle')
                    ->type('model', 'XX1')
                    ->assertSee('Description des services demandés')
                    ->assertSee('Envoyer')
                    ->type('services', '')
                    ->press('send')
                    ->assertSee('Please fill out this field.');
        });






    }
}