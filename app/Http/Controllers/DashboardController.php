<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $title = "New Dashboard";
        $results = Customer::all();

        return view('dashboard')->with('title', $title)->with('results', $results);
    }
}
