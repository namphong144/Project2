<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class CartController extends Controller
{
    public function store(Request $request){
        $productId = $request->id_product;
        $quantity = $request->qty;
        $product_info = DB::table('products')->where('id',$productId)->first();
        $data['id'] = $product_info->id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->name;
        $data['price'] = $product_info->price;
        $data['weight'] = $product_info->price;
        $data['options']['image'] = $product_info->image;
        Cart::add($data);
        Cart::setGlobalTax(10);
//        Cart::add(
//            $product->id,
//            $product->name,
//            $request->input('quantity'),
//            $product->price);
        return Redirect::to('/show-cart');
    }
    public function show_cart(){
        $type_product = DB::table('types')->where('description','0')->orderBy('id','desc')->get();
        return view('web.cart')->with('type',$type_product);
    }
    public function delete_to_cart($rowId){
        Cart::update($rowId,0);
        return Redirect::to('/show-cart');
    }
    public function update_cart_quantity(Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->quantity;
        Cart::update($rowId, $qty);
        return Redirect::to('/show-cart');
    }
}
