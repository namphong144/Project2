<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\OrderDetails;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\Shipping;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    function __construct()
    {
        $this->middleware('check.is.admin');
    }
    public function manage_order(){
        $all_order = DB::table('order')
        ->join('users','order.customer_id','=','users.id')
            ->select('order.*','users.name')
            ->orderBy('order.id','desc')->get();
        return view('admin.order.index')->with('all_order',$all_order);
    }
    public function delete_order($order_id){
        Order::destroy($order_id);
        return redirect()->back();
    }
    public function view_order($order_id){
        $order_details = OrderDetails::where('order_id',$order_id)->get();
        $order = Order::where('id',$order_id)->get();
        foreach ($order as $key => $ord){
            $customer_id = $ord->customer_id;
            $shipping_id = $ord->shipping_id;
            $payment_id = $ord->payment_id;
        }
        $customer = User::where('id',$customer_id)->first();
        $shipping = Shipping::where('shipping_id',$shipping_id)->first();
        $payment = Payment::where('id',$payment_id)->first();

        $order_details = OrderDetails::with('product')->where('order_id',$order_id)->get();
//        $order_by_id = DB::table('order')
//            ->join('users','order.customer_id','=','users.id')
//            ->join('shipping','order.shipping_id','=','shipping.shipping_id')
//            ->join('order_details','order.id','=','order_details.order_id')
//
//            ->select('order.*','users.*','shipping.*','order_details.*')->first();

        return view('admin.order.edit')->with(compact('order_details','customer','shipping','payment'));

    }
}
