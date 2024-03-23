<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Order;
use App\Models\Service;
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

    public function newOrder(Service $service)
    {
        return view('user.orders.newOrder.index', compact('service'));

    }

    public function addNewOrder(Request $request, Service $service)
    {
        $user = Auth::user();
        $order = Order::create([
            'user_id' => $user->id,
            'service_id' => $service->id,
            'status' => 0,
            'price' =>  $service->price,
        ]);
        return redirect(route('user.order.myorders'));

    }
}
