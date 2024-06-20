<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Order;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
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

    public function editOrDeleteOrder(Request $request, Order $order)
    {
        if ($request->has('delete')) {
            $order->delete();
            return back()->with('flash_message', [
                'level' => 'success',
                'message' =>  trans('messages.order_deleted')
            ]);
        } else {
            $order->update([
                'price' => $request->input('price'),
                'status' => $request->input('status'),
                'work_hours' => $request->input('work_hours'),
            ]);
        }

        // return back()->with('success', 'Order updated successfully.'); //simple flash  

        //   \Session::flash('flash_message', trans('messages.order_updated')); 
        //+ use Illuminate\Support\Facades\Session;
        // in larave >= 8  use  session()->

        //   session()->flash('flash_message', trans('messages.order_updated'));

        session()->flash('flash_message', [
            'level' => 'success',
            'message' =>  trans('messages.order_updated')
        ]);

        return back();
    }

    public function deleteOrder(Request $request, Order $order)
    {
        $order->delete();
        return back()->with('flash_message', [
            'level' => 'success',
            'message' =>  trans('messages.order_deleted')
        ]);
        return back();
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

    public function addInvoiceToOrder(Request $request, Order $order)
    {
        $invoiceDate = Carbon::now()->addDays(14);

        $order = Invoice::create([
            'user_id' => $order->user_id,
            'order_id' => $order->id,
            'invoice_number' => "2024-" . $order->id .  $request->input('payment_parts'),
            'invoice_date' => $invoiceDate,
            'payment_parts' => $request->input('payment_parts'),
            'amount' => $request->input('price'),
        ]);
        return back();
    }
}
