<?php

// The scope of this unit test is to add a dummy request to the Quote Requests database table through the controller method, and to verify that the record is successfully inserted into the database afterwards.
// To run this test, use the command: ./vendor/bin/phpunit

namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AddQuotationDBTest extends TestCase
{
    // Auto-rollback all DB operations that are part of this test case.
    use DatabaseTransactions;

    public function testAddQuotationRequestToDb()
  {
        // Create mock request.
        $mockRequest = new Request;
        $mockRequest->first_name='Tristsan';
        $mockRequest->last_name='Giguere';
        $mockRequest->phone='5145145144';
        $mockRequest->vehicle='Car';
        $mockRequest->year=1944;
        $mockRequest->make='Volkswagen';
        $mockRequest->model='Passat';
        $mockRequest->services='Window Tinting';
        $mockRequest->email='hello@example.com';

        // Add the request to the database
        app('App\Http\Controllers\QuotationRequestController')->addData($mockRequest);

        // Assert that the request is in the database
        $this->assertDatabaseHas('quotation_requests',['first_name'=>$mockRequest->first_name, 'last_name'=>$mockRequest->last_name, 'email'=>$mockRequest->email,
        'phone'=>$mockRequest->phone, 'vehicle'=>$mockRequest->vehicle, 'year'=>$mockRequest->year, 'make'=>$mockRequest->make, 'model'=>$mockRequest->model, 'services'=>$mockRequest->services]);
    }
}