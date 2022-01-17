<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_routes()
    {
        $appURL = env('APP_URL');

        // Define list of URLs.
        $urls = [
            '/',
            '/services',
            '/quote',
            '/contact',
            '/admin/quotes',
            '/admin/requests',
            '/admin/invoices'
        ];

        echo  PHP_EOL;

        foreach ($urls as $url) {
            $response = $this->get($url);

            if((int)$response->status() !== 200){
                echo  $appURL . $url . ' (FAILED) did not return a 200.';
                $this->assertTrue(false);
            } else {
                echo $appURL . $url . ' (success ?)';
                $this->assertTrue(true);
            }
            echo  PHP_EOL;
        }
    }
}