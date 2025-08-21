<?php

namespace App\Http\Controllers\pos\cart;

use App\Http\Controllers\Controller;
use App\Models\Perfume;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request, Perfume $perfume)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$perfume->id])) {
            $cart[$perfume->id]['quantity']++;
        } else {
            $cart[$perfume->id] = [
                'name' => $perfume->name,
                'price' => $perfume->retail_price,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);
        return back()->with('success', "{$perfume->name} added to cart.");
    }

    public function remove(Perfume $perfume)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$perfume->id])) {
            unset($cart[$perfume->id]);
            session()->put('cart', $cart);
        }

        return back()->with('success', "{$perfume->name} removed from cart.");
    }

    public function clear()
    {
        session()->forget('cart');
        return back()->with('success', "Cart cleared.");
    }
}
