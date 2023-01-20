<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\PaymentMethod;
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
    public function index()
    {
        $this->data['title'] = 'Quản lý hóa đơn';
        $users = DB::table('users')
            ->orderBy('id', 'desc')
            ->get();
        $this->data['users'] = $users;
        return view('admin.order.index', $this->data);
    }
//    function viewOrder()
//    {
//        $orders = Order::all();
//        $payments = PaymentMethod::all();
//        $users = User::all(['id', 'name']);
//        return view('admin/order/index', ['orders' => $orders, 'payments' => $payments, 'users' => $users]);
//    }
    public function edit(Request $request, $id)
    {
        $detail_orders = OrderDetail::where("id_order","=",$id)->get();
        $customers = User::all();
        return view('admin.order.edit',['detail_orders'=> $detail_orders, 'customers'=> $customers]);
    }
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->status = $request->input('status');
        $order->save();
        Session::flash('message', "Successfully updated");

        return Redirect::to('admincp/bill');
    }
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        Session::flash('message', "Successfully deleted");

        return Redirect::to('admincp/bill');
    }
}
