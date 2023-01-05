<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\PaymentMethod;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function __construct()
    {
        $this->middleware('check.is.admin');
    }
    function viewOrder()
    {
        $orders = Order::all();
        $payments = PaymentMethod::all();
        $users = User::all(['id', 'name']);
        return view('admin/order/index', ['orders' => $orders, 'payments' => $payments, 'users' => $users]);
    }
}
