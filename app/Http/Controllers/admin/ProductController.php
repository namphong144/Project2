<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('check.is.admin');
    }
    function viewAllProducts(Request $request){
        $kw = $request->get('kw', '');
        if(empty($kw)){
            $products = Product::paginate(10);
        }
        else{
            $products = Product::where('id','LIKE','%'.$kw.'%')
                ->orWhere('name','LIKE','%'.$kw.'%')
                ->paginate(10);
        }
        $product = Product::paginate(10);
        return view('admin/product/index',['products'=>$product]);
    }
    function viewProductById($id){

    }
    function viewCreateProduct(){

    }
    function createProduct(Request $request){

    }
    function updateProductById($id){

    }
    function deleteProductById($id){

    }
}
