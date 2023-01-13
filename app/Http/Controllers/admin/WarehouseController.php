<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DetailImportWarehouse;
use App\Models\ImportWarehouse;
use App\Models\Product;
use App\Models\Shop;
use App\Models\User;
use App\Models\Vendor;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    function __construct()
    {
        $this->middleware('check.is.admin');
    }

    function viewWareHouse(Request $request)
    {
        $kw = $request->get('kw', '');
        if (empty($kw)) {
            $warehouses = Warehouse::paginate(10);
        } else {
            $warehouses = Warehouse::where('id', 'LIKE', '%' . $kw . '%')
                ->orWhere('name', 'LIKE', '%' . $kw . '%')
                ->paginate(10);
        }
        //$product = Product::paginate(10);
        return view('admin/warehouse/index', ['warehouses' => $warehouses]);
    }

    function viewUpdateById($id)
    {
        $warehouse = Warehouse::find($id);
        return view('admin/warehouse/update', ['warehouse' => $warehouse]);
    }

    function updateWarehouseById(Request $request, $id)
    {
        $warehouse = Warehouse::find($id);
        $warehouse->id = $request->id;
        $warehouse->address = $request->address;
        $warehouse->save();
        return redirect('/admin/warehouses');
    }

    function deleteWarehouseById($id)
    {
        Warehouse::destroy($id);
        return redirect()->back();
    }

    function viewImportWarehouse()
    {
        $import_warehouses = ImportWarehouse::all();
        $users = User::all(['id', 'name']);
        $vendors = Vendor::all(['id', 'name']);
        return view('admin/warehouse/import', ['import_warehouses' => $import_warehouses, 'users' => $users, 'vendors' => $vendors]);
    }
    function viewCreateImport(){
        $import_warehouses = ImportWarehouse::all();
        $users = User::all(['id', 'name']);
        $products = Product::all(['id']);
        $warehouses = Warehouse::all(['id']);
        $vendors = Vendor::all(['id']);
        return view('admin/warehouse/create_import', ['import_warehouses' => $import_warehouses, 'products' => $products, 'warehouses' => $warehouses, 'users' => $users, 'vendors' => $vendors]);
    }
    function createImport(Request $request){
        $import_warehouse = new ImportWarehouse();

        $import_warehouse->id = $request->get('id');
        $import_warehouse->import_date = $request->get('import_date');
        $import_warehouse->id_admin = $request->id_admin;
        $import_warehouse->id_warehouse = $request->id_warehouse;
        $import_warehouse->id_vendor = $request->id_vendor;
        $import_warehouse ->save();
        return redirect('admin/warehouses/import');
    }
    function deleteImportWarehouseById($id){
        ImportWarehouse::destroy($id);
        return redirect()->back();
    }
    function viewDetailImport($id)
    {
        $detail_import_warehouses = DetailImportWarehouse::where("id_import","=",$id)->get();
        $products = Product::all(['id','name']);
//        dd($detail_import_warehouses);
//        $import_warehouse = ImportWarehouse::all(['id']);

//        $kw = $request->get('kw', '');
//        if (empty($kw)) {
//            $detail_import_warehouses = DetailImportWarehouse::paginate(10);
//        } else {
//            $detail_import_warehouses = DetailImportWarehouse::where('id', 'LIKE', '%' . $kw . '%')
//                ->orWhere('name', 'LIKE', '%' . $kw . '%')
//                ->paginate(10);
//        }
        return view('admin/warehouse/detail', ['detail_import_warehouses' => $detail_import_warehouses, 'products'=>$products]);
    }
    function deleteDetailImportById($id){
        DetailImportWarehouse::destroy($id);
        return redirect()->back();
    }

    // get;

    function viewCreateImportDetail()
    {
        $import_warehouses = ImportWarehouse::all();
        $detail_import_warehouses = DetailImportWarehouse::all(['quantity','import_price','id_import']);
        $users = User::all(['id']);
        $products = Product::all(['id','name']);
        $warehouses = Warehouse::all(['id']);
        $vendors = Vendor::all(['id']);
//        dd($products);
        return view('admin/warehouse/create', ['import_warehouses' => $import_warehouses, 'detail_import_warehouses' => $detail_import_warehouses, 'products' => $products, 'warehouses' => $warehouses, 'users' => $users, 'vendors' => $vendors]);
    }
    function createImportDetail(Request $request){
        $detail_import_warehouse = new DetailImportWarehouse();
        $import_warehouse = ImportWarehouse::all(['id']);
        $import_warehouse->id = $request->id;
        $detail_import_warehouse->id_import = $request->get('id_import');
        $detail_import_warehouse-> quantity = $request->get('quantity');
        $detail_import_warehouse-> id_product = $request->get('id_product');
        $detail_import_warehouse-> import_price = $request->get('import_price');
        $detail_import_warehouse -> save();
        return redirect('admin/warehouses/import');
    }
}
