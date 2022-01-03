<?php

namespace Tests\Feature;

use App\Mail\WelcomeNewCustomer;
use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerHTTPTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_customer_store()
    {
        $customer = Customer::factory()->create();
        $response = $this->post('customers', array(
            '_token' => csrf_token(),
            'name' =>  $customer->name,
            'email' => $customer->email
        ));
        $response->assertStatus(200);
    }
}
