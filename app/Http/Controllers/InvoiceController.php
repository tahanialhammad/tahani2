<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {        
      //    $invoices = Invoice::with('user')->get(); 
          $invoices = Invoice::with(['user', 'order'])->get(); // Include the order relationship

        return view('admin.invoices.index', compact('invoices'));
    }

    public function addOrEditInvoice(Request $request)
    {
        //
    }

}
