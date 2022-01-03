<?php

namespace App\Contracts;

interface CustomerServiceInterface
{
    public function all();
    public function store($data);
}
