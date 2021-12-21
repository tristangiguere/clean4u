<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/accueil');

        $response->assertStatus(200);
    }


    public function test_services_route()
    {
        $response = $this->get('/services');

        $response->assertStatus(200);
    }

    public function test_sousmission_route()
    {
        $response = $this->get('/sousmission');

        $response->assertStatus(200);
    }

    public function test_contact_route()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

    public function test_login_route()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

}
