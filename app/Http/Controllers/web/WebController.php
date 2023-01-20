<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
use Ramsey\Uuid\Rfc4122\Validator;

class WebController extends Controller
{
    // Cac trang chung, xử lý chung bên này

    // GET: localhost/home
    function viewHome(Request $request)
    {
        $kw = $request->get('kw', '');
        if(empty($kw)){
            $products = Product::paginate(10);
        }
        else{
            $products = Product::where('id','LIKE','%'.$kw.'%')
                ->orWhere('name','LIKE','%'.$kw.'%')
                ->paginate(10);
        }
        //$product = Product::paginate(10);
        return view('web.home',['products'=>$products]);
    }

    function viewHomeProduct($id){
        $product = Product::find($id);
        //$product = Product::paginate(10);
        return view('web.shop',['product' => $product]);
    }

    // GET: localhost/login
    function viewLogin()
    {
        return view('web.login');
    }
    // POST: localhost/login
    // Xử lý việc đăng nhập: ko có giao diện
    function login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        $rs = Auth::attempt(['email' => $email, 'password' => $password]);
        if ($rs == false) {
            return redirect()->back();
        } else {
            // DDăng nhập thành công
            // Xác đinh admin hay khach hàng?
            $user = Auth::user();
            if ($user->isAdmin == 1) {
                // Day la admin
                return redirect('/admin/home');
            } else {
                return redirect('/home');
            }
        }
    }
    function viewUserHome(){
        $products = Product::all();
        $users = User::all(['name','isAdmin']);
        return view('web.user_home',['products'=>$products, 'users'=> $users]);
    }

    // POST: localhost/logout
    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    function viewRegister()
    {

        return view('web.register');
    }

    function register(Request $request)
    {
        $data = $request->all();

        $this->redirectTo = '/login';


        User::factory()->create([

            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'isAdmin' => false,
            'isActive' => true,
        ]);

        return redirect('/login');
    }

    function viewContact(){
        return view('web.contact');
    }
    function viewBlog(){
        return view('web.blog');
    }

    function viewShop(Request $request){
        $kw = $request->get('kw', '');
        if(empty($kw)){
            $products = Product::paginate(10);
        }
        else{
            $products = Product::where('id','LIKE','%'.$kw.'%')
                ->orWhere('name','LIKE','%'.$kw.'%')
                ->paginate(10);
        }
        return view('web.shop',['products'=>$products]);
    }
    function viewAboutBlog(){
        return view('web.about-blog');
    }
    function viewDetail($id){
            $product =  Product::find($id);
            return view('web.detail',['product' => $product]);

    }
    function viewCart(){
        return view('web.cart');
    }
    function viewCheckOut(){
        return view('web.check-out');
    }

}
