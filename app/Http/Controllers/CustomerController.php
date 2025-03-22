<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function customerPage(){
        return view('pages.dashboard.customer-page');
    }
}
