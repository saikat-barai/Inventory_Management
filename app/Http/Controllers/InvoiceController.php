<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    function invoicePage(){
        return view('pages.dashboard.invoice-page');
    }
}
