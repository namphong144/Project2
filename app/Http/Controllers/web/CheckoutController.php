<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function checkout(){
        $type_product = DB::table('types')->where('description',0)->orderBy('id','desc')->get();

        return view('web.check-out')->with('type',$type_product);
    }
    public function save_checkout_customer(Request $request){
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_number'] = $request->shipping_number;
        $data['email'] = $request->email;
        $data['shipping_address'] = $request->shipping_address;
        $data['notes'] = $request->notes;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $data['created_at'] = now();
        $shipping_id = DB::table('shipping')->insertGetId($data);

        Session::put('shipping_id',$shipping_id);
        return redirect('/payment');
    }
    public function payment(){
        $type_product = DB::table('types')->where('description',0)->orderBy('id','desc')->get();
        return view('web.payment')->with('type',$type_product);
    }
    public function order_place(Request $request){
        //insert payment method
        $data = array();
        $data['payment_method'] = $request->payment_option;
        $data['payment_status'] = 'Đang chờ xử lý';
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $data['created_at'] = now();
        $payment_id = DB::table('payment')->insertGetId($data);

        //insert order
        $order_data = array();
        $order_data['customer_id'] = Auth::user()->getAuthIdentifier();
        $order_data['shipping_id'] = Session::get('shipping_id');
        $order_data['payment_id'] = $payment_id;
        $order_data['order_total'] = Cart::total();
        $order_data['order_status'] = 'Đang chờ xử lý';
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $order_data['created_at'] = now();
        $order_id = DB::table('order')->insertGetId($order_data);

        //insert order_details
        $content = Cart::content();
        foreach ($content as $v_content){
            $order_d_data = array();
            $order_d_data['order_id'] = $order_id;
            $order_d_data['product_id'] = $v_content->id;
            $order_d_data['product_name'] = $v_content->name;
            $order_d_data['product_price'] = $v_content->price;
            $order_d_data['product_sales_quantity'] = $v_content->qty;
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $order_d_data['created_at'] = now();
            DB::table('order_details')->insert($order_d_data);
        }
        if ($data['payment_method'] ==1){
            Cart::destroy();
            $type_product = DB::table('types')->where('description',0)->orderBy('id','desc')->get();
            return view('web.banking')->with('type',$type_product);
        }elseif ($data['payment_method'] ==2){
            Cart::destroy();
            $type_product = DB::table('types')->where('description',0)->orderBy('id','desc')->get();
            return view('web.handcash')->with('type',$type_product);
        }

//        return redirect('/payment');
    }
}
