<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
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
        //$product = Product::paginate(10);
        return view('admin/product/index',['products'=>$products]);
    }
    function viewProductById($id){
        $product = Product::find($id);
        return view('admin/product/detail',['product' => $product]);
    }
    function viewCreateBrand(){
        $brands = Brand::all();
        return view('admin/product/brand',['brands' => $brands]);
    }
    function createBrand(Request $request){
        $brand = new Brand();
        $brand->name = $request->get('name');
        $brand->description = $request->get('description');
        $brand->save();

        return redirect('/admin/products');
    }
    function viewCreateProduct(){
        $brands = Brand::all();
        return view('admin/product/create',['brands' => $brands]);
    }
    function createProduct(Request $request){
        $imageName = time().".".$request->file('image')->extension();
        $request->file('image')->move(public_path('images'), $imageName);

        //duong dan den hinh
        $product = new Product();

        $product->image = 'images/'. $imageName;

        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->description = $request->get('description');
        $product->id_brand = $request->get('brand');

        $product->save();

        return redirect('/admin/products');
    }
    function  viewUpdateById($id){
        $product = Product::find($id);
        $brands = Brand::all();
        return view('admin/product/update',['product' => $product], ['brands' => $brands]);
    }
    function updateProductById(Request $request, $id){
        $imageName = time().".".$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $product=Product::find($id);
        $product->image = 'images/'. $imageName;

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->id_brand = $request->brand;
        $product->save();
        return redirect('/admin/products');
    }
    function deleteProductById($id){
        Product::destroy($id);
        return redirect()->back();
    }
}
