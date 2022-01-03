<?php

namespace Tests;

use App\Mail\WelcomeNewCustomer;
use App\Models\Customer;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function test_new_create_customer_send_email()
    {
        $customer = Customer::factory()->create();
        $mailable = new WelcomeNewCustomer($customer);
        $mailable->assertSeeInText($customer->name);
        $mailable->assertSeeInText($customer->email);
    }
}
