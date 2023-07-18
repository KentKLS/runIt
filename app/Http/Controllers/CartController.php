<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartItemQuantityRequest;
use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;
use Exception;
use Illuminate\Contracts\Queue\EntityNotFoundException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function show()
    {

        $userId = Auth::id();

        $items = [];
        $cartItems = CartItem::where('user_id', $userId)->get();
        foreach ($cartItems as $item) {
            $items[] = $item;
        }
        if (empty($items)) {
            return view('cart');
        } else {

            return view('cart')->with('cartItems', $items);
        }
    }
    public function store(Request $request, Product $id)
    {
        try {
            if ($request->user_id === null) {
                throw new Exception('User ID not available');
            }
            $data = $request->except('_token');
            CartItem::updateOrCreate($data);
            return redirect()->back()->with('success', 'Produit ajouté au Panier !');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Il faut etre connecté pour pouvoir ajouté cet article a votre panier');
        }
    }

    public function destroy(Request $request)
    {
        try {
            $item = CartItem::find($request->id);
            if (!$item) {
                throw new EntityNotFoundException('cart item', $request->id);
            }
            $item->delete();

            return redirect()->back();
        } catch (EntityNotFoundException $e) {
            return redirect()->back()->with('error', 'Hmm an unexpected error occured');
        }
    }
    public function quantityUpdate(CartItemQuantityRequest $request)
    {
        $cartItem = CartItem::find($request->cart_item_id);
        if ($request->minus > 0) {
            if ($cartItem->quantity > 1) {
                $cartItem->quantity -=  1;
                $cartItem->save();
                return redirect()->back();
            }
        } else {
            if ($cartItem->quantity < $cartItem->product->stock) {
                $cartItem->quantity +=  1;
                $cartItem->save();
                return redirect()->back();
            }
        }
        return redirect()->back();

    }
}
