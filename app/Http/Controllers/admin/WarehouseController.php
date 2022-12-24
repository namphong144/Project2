<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Models\User;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    function __construct()
    {
        $this->middleware('check.is.admin');
    }

    function viewWareHouse(Request $request){
        $kw = $request->get('kw', '');
        if(empty($kw)){
            $warehouses = Warehouse::paginate(10);
        }
        else{
            $warehouses = Warehouse::where('id','LIKE','%'.$kw.'%')
                ->orWhere('name','LIKE','%'.$kw.'%')
                ->paginate(10);
        }
        //$product = Product::paginate(10);
        return view('admin/warehouse/index',['warehouses'=> $warehouses]);
    }
    function  viewUpdateById($id){
        $warehouse = Warehouse::find($id);
        return view('admin/warehouse/update',['warehouse' => $warehouse]);
    }
    function updateWarehouseById(Request $request, $id){
        $warehouse = Warehouse::find($id);
        $warehouse->id = $request->id;
        $warehouse->address = $request->address;
        $warehouse->save();
        return redirect('/admin/warehouses');
    }
    function deleteWarehouseById($id){
        Warehouse::destroy($id);
        return redirect()->back();
    }
}
