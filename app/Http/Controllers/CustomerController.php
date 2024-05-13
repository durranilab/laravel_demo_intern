<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function addNewCustomer(Request $request)
    {
        Customer::create($request->all());
        return redirect('/customers');
    }

    public function getAllCustomers()
    {
        $result = Customer::all();
        return view('customer')->with('data', $result);
    }
}
