<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderProductController extends Controller
{
    public function destroy(Request $request)
    {
        $user_id = Auth::id();
        $product_id = $request->product_id;
        $order_id = $request->order_id;
        $order = Order::where('user_id', $user_id)->findOrFail($order_id);
        $order->products()->detach($product_id);
        return redirect()->back();
    }
    public function create(Order $order)
    {
        $products= Product::all();
        return view('backoffice.createOrderProduct')->with('order', $order)->with('products',$products);
    }
    public function store(Request $request)
    {
    }
}
