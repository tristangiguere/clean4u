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
        $mockRequest->type='Car';
        $mockRequest->year=1944;
        $mockRequest->make='Volkswagen';
        $mockRequest->model='Passat';
        $mockRequest->services='Window Tinting';
        $mockRequest->email='hello@example.com';

        // Add the request to the database
        app('App\Http\Controllers\QuotationRequestController')->addData($mockRequest);

        // Assert that the request is in the database
        $this->assertDatabaseHas('quotation_requests',['first_name'=>$mockRequest->first_name, 'last_name'=>$mockRequest->last_name, 'email'=>$mockRequest->email,
        'phone'=>$mockRequest->phone, 'type'=>$mockRequest->type, 'year'=>$mockRequest->year, 'make'=>$mockRequest->make, 'model'=>$mockRequest->model, 'services'=>$mockRequest->services]);
    }


    public function testAddQuotationRequestToDbError()
    {
        // Create mock request.
        $mockRequest = new Request;
        $mockRequest->bad_first_name='boy';
        $mockRequest->bad_last_name= 'boy';
        $mockRequest->bad_phone='allo';
        $mockRequest->bad_type= 'boy';
        $mockRequest->bad_year='blue';
        $mockRequest->bad_make= 'boy';
        $mockRequest->bad_model= 'boy';
        $mockRequest->bad_services= 'boy';
        $mockRequest->bad_email='allo';

        // Assert that the request is in the database
        $this->assertDatabaseMissing('quotation_requests',['first_name'=>$mockRequest->bad_first_name, 'last_name'=>$mockRequest->bad_last_name, 'email'=>$mockRequest->bad_email,
            'phone'=>$mockRequest->bad_phone, 'type'=>$mockRequest->bad_type, 'year'=>$mockRequest->bad_year, 'make'=>$mockRequest->bad_make, 'model'=>$mockRequest->bad_model, 'services'=>$mockRequest->bad_services]);
    }
}

