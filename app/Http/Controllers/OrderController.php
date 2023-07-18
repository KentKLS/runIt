<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderHasProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function show()
    {
        $userId = Auth::id();
        $cartItems = CartItem::where('user_id', $userId)->get();

        return view('checkout')->with('cartItems',$cartItems);
    }

    public function convertCartToOrder()
    {
        $userId = Auth::id();
        $order = new Order();
        $order->user_id = $userId;
        $order->save();
        $cartItems = CartItem::where('user_id', $userId)->get();
        foreach ($cartItems as $item) {
            $orderedProduct = Product::find($item->product->id);
            $order->products()->save($orderedProduct,['user_id'=> $userId, 'quantity'=>$item->quantity]);
            $item->delete();
        }
        return redirect()->back()->with('success', 'Your order is now saved you can check your orders on the order tabs');
    }
}
