<?php

namespace App\Services;

use App\Contracts\CustomerServiceInterface;
use App\Models\Customer;

class CustomerService implements CustomerServiceInterface
{
    public function all()
    {
        return Customer::all();
    }

    public function store($data)
    {
        return Customer::create($data);
    }
}
