<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_has_product;
use App\Models\OrderHasProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackofficeOrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('backoffice.indexOrder', compact('orders'));
    }
    public function show(Order $order)
    {

        $orderProducts = $order->products;
        return view('backoffice.showOrder', compact('orderProducts'))->with('order', $order);
    }
    public function create()
    {
        return view('backoffice.createOrder');
    }
    public function store(Request $request)
    {

        $newData = new Order();
        $newData->user_id = $request->user_id;
        $newData->save();
        return redirect()->route('order.index');
    }
    public function edit(Order $order)
    {
        return view('backoffice.updateOrder')->with('order', $order);;
    }

    public function update(Request $request, Order $order)
    {
        $order->$order->$order->$order->save();
        return redirect()->route('order.index');
    }
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('order.index');
    }
}
