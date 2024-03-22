<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['user', "service"])->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('admin.orders.show', ['order' => $order]);
    }

    public function addOrEditOrder(Request $request)
    {
        //
    }

    public function myorders()
    {
        $user = Auth::user();
        $orders = $user->orders;
        return view('user.orders.index', compact('orders'));
    }
}
