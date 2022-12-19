<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $types = Type::all();
        return view('admin/product/detail',['product' => $product],['types' => $types]);
    }
    function viewCreateType(){
        $types = DB::table('types')->get();
//        dd($types);
        return view('admin/product/type',['types' => $types]);
    }
    function createType(Request $request){
        $type = new Type();
        $type->id = $request->get('id');
        $type->name = $request->get('name');
        $type->description = $request->get('description');
        $type->save();

        return redirect('/admin/products');
    }
    function viewCreateProduct(){
        $types = Type::all();
//        dd($types);
        return view('admin/product/create',['types' => $types]);
    }
    function createProduct(Request $request){
        $imageName = time().".".$request->file('image')->extension();
        $request->file('image')->move(public_path('images'), $imageName);

        //duong dan den hinh
        $product = new Product();
        $product->id = $request->get('id');
        $product->image = 'images/'. $imageName;
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->description = $request->get('description');
        $product->id_type = $request->get('type');
//        dd($product);
        $product->save();

        return redirect('/admin/products');
    }
    function  viewUpdateById($id){
        $product = Product::find($id);
        $types = Type::all();
        return view('admin/product/update',['product' => $product], ['types' => $types]);
    }
    function updateProductById(Request $request, $id){
        $imageName = time().".".$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $product=Product::find($id);
        $product->image = 'images/'. $imageName;
        $product->id = $request->id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->id_type = $request->type;
        $product->save();
        return redirect('/admin/products');
    }
    function deleteProductById($id){
        Product::destroy($id);
        return redirect()->back();
    }
}
