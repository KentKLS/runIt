<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function show($id)
    {
//      $product = DB::table('products')->where('id', $id)->first();
        $product = Product::select('*')->where('id',$id)->first();
        return view('cart',['products' => $product]);

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
