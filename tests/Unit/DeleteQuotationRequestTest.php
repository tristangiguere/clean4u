<?php
namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\QuotationRequest;
use Illuminate\Support\Facades\DB;

class DeleteQuotationRequestTest extends TestCase
{
    use DatabaseTransactions;

    public function testDeleteRequest()
    {
        date_default_timezone_set('America/Toronto');

        // Create mock request.
        $mockRequest = new Request;
        $mockRequest->first_name='Tristan';
        $mockRequest->last_name='Giguere';
        $mockRequest->phone='5145145144';
        $mockRequest->type='Car';
        $mockRequest->year=1944;
        $mockRequest->make='Volkswagen';
        $mockRequest->model='Passat';
        $mockRequest->services='Window Tinting';
        $mockRequest->email='hello@example.com';
        $mockRequest->created_at = date(('Y-m-d h:i:sa'));
        $mockRequest->status = "New";

        // Add the request to the database
        app('App\Http\Controllers\QuotationRequestController')->addData($mockRequest);

        // Assert that the request is in the database
        $this->assertDatabaseHas('quotation_requests',['first_name'=>$mockRequest->first_name,
        'last_name'=>$mockRequest->last_name, 'email'=>$mockRequest->email,
        'phone'=>$mockRequest->phone, 'type'=>$mockRequest->type, 'year'=>$mockRequest->year,
        'make'=>$mockRequest->make, 'model'=>$mockRequest->model, 'services'=>$mockRequest->services,
        'created_at'=>$mockRequest->created_at, 'status'=>$mockRequest->status]);

        // Get ID of created request
        $newQuoteId = QuotationRequest::latest()->first()->id;

        // Delete the request through URL endpoint
        $url = 'http://127.0.0.1:8000/admin/request/' . $newQuoteId .'/delete';
        $response = $this->get($url);

        // Assert that the request is not in the database anymore
        $this->assertDatabaseMissing('quotation_requests',['id'=>$newQuoteId]);
    }
}
