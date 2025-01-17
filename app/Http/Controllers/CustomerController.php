<?php

namespace App\Http\Controllers;

use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getCustomerData($id)
    {
        $customer = Customer::with('addresses.services')->findOrFail($id);
        return new CustomerResource($customer);
    }
}
