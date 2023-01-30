<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function store(Request $request){
        $product = Product::findOrFail($request->input('id_product'));
        Cart::add(
            $product->id,
            $product->name,
            $request->input('quantity'),
            $product->price);
        return redirect()->route('cart.index')->with('message', 'Successfully added');
    }
}
