<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view('admin.orders.index', compact('invoices'));
    }

    public function addOrEditOrder(Request $request)
    {
        //
    }

}
