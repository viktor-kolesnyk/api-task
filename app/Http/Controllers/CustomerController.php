<?php

namespace App\Http\Controllers;

use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getCustomerData()
    {
        $user = Customer::with('addresses.services')->first();
        return new CustomerResource($user);
    }
}
