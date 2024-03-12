<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['user', "service"])->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function addOrEditOrder(Request $request)
    {
        //
    }

}
