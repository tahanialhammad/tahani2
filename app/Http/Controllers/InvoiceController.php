<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view('admin.invoices.index', compact('invoices'));
    }

    public function addOrEditInvoice(Request $request)
    {
        //
    }

}
