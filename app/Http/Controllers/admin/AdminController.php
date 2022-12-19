<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // GET localhost/admin/home
    function __construct()
    {
        $this->middleware('check.is.admin');
    }


    function viewHome()
    {
        return view('admin.home');
    }

    function viewAllUsers(Request $request)
    {
        $name = $request->get('name', '');
        if (empty($name)) {
            $users = User::paginate(10);
        } else {
            $users = User::where('id', 'LIKE', '%' . $name . '%')
                ->orWhere('name', 'LIKE', '%' . $name . '%')
                ->paginate(10);
        }
        //$product = Product::paginate(10);
        return view('admin/user/index', ['users' => $users]);
    }
    function viewCreateUser(){
        return view('admin/user/create');
    }
    function createUser(Request $request){
        $user = new User();
        $user->name = $request->get('name');
        $user->gender = $request->get('gender');
        $user->dob = $request->get('dob');
        $user->address = $request->get('address');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->number = $request->get('number');
        $user->isActive = true;
        $user->isAdmin = true;
        $user->save();

        return redirect('/admin/users');
    }
    function deleteUserById($id){
        User::destroy($id);
        return redirect()->back();
    }
    function  viewUpdateById($id){
        $user = User::find($id);
        return view('admin/user/update',['user' => $user]);
    }
    function updateUserById(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->number = $request->number;
//        $user->isActive = true;
//        $user->isAdmin = true;
        $user->save();
        return redirect('/admin/users');
    }
}
