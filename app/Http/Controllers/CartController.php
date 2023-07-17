<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function show($id)
    {
//        $product = DB::table('products')->where('id', $id)->first();
        $product = Product::find($id);
        return view('cart', ['products' => $product]);
    }

    public function create(Request $request){
        $cart = new Cart();
        $cart->number_product = $request->id;
        $cart->value_cart = $request->price;
        $cart->customer_id = 1;
        $cart->save();

        return redirect()->route('showHome');
    }

    public function customer(){
        $customer=Customer::find(1);
        $cart=$customer->cart;
        return view('cart', ['cart'=>$cart]);
    }

//    public function addcart($id)
//    {
//        $product=Product::findOrFail($id);
//        $cartSession = session()->get("cartSession",[]);
//
//        $cart[$id] = [
//            'name' => $product->name,
//            'price' => $product->price,
//            'imgURL' => $product->imgURL,
//            'oneliner' => $product->oneliner,
//            'description' => $product->description,
//            'stock' => $product->stock,
//            'category_id' => $product->category_id,
//        ];
//
//        $cartSession[$product->id] = $cart;
//        session()->put("cartSession", $cartSession);
//        return redirect()->back()->with('success', 'Product added to cart successfully!');
//
//    }

}
