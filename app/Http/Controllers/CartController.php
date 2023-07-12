<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function show()
    {
//        $product = DB::table('products')->where('id', $id)->first();
//        $product = Product::select('*')->where('id', $id)->first();
        return view('cart');
//        , ['products' => $product]);
    }

    public function addcart($id)
    {
        $product=Product::findOrFail($id);
        $cartSession = session()->get("cartSession",[]);

        $cart[$id] = [
            'name' => $product->name,
            'price' => $product->price,
            'imgURL' => $product->imgURL,
            'oneliner' => $product->oneliner,
            'description' => $product->description,
            'stock' => $product->stock,
            'category_id' => $product->category_id,
        ];

        $cartSession[$product->id] = $cart;
        session()->put("cartSession", $cartSession);
        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }


//    function getCart($id) {
//        $cartSession = $_SESSION['cart'] ?? [];
//
//        $cart = [];
//
//        foreach($cartSession as $product) {
//
//            $product = DB::table('products')->where('id', $id)->first();
//
//            $cart[] = [
//                'id'        => $product['id'],
//                'name'      => $product['name'],
//                'stock'     => $product['stock'],
//                'price'     => $product['price'],
//                'imgURL'    => $product['imgURL'],
//                'total'     => $product['price'],
//            ];
//        }
//
//        return $cart;
//    }
}
