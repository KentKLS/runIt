<?php

namespace App\Http\Controllers;

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

        $data = $request->except('_token');
        CartItem::updateOrCreate($data);
        return redirect()->back()->with('success', 'Produit ajouté au Panier !');
    }
    public function destroy(Request $request)
    {
        try{
        $item = CartItem::find($request->id);
        if (!$item) {
            throw new EntityNotFoundException('cart item', $request->id);
        }
        $item->delete();

        return redirect()->back();
        }catch(EntityNotFoundException $e){
            return redirect()->back()->with('error', 'Hmm an unexpected error occured');
        }
    }
}
