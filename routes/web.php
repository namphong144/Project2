<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\web\WebController::class,'viewHome']);

Route::get('/home',[\App\Http\Controllers\web\WebController::class,'viewHome']);
Route::post('/home',[\App\Http\Controllers\web\WebController::class,'viewHomeProduct']);

Route::get('/login',[\App\Http\Controllers\web\WebController::class,'viewLogin']);
Route::post('/login',[\App\Http\Controllers\web\WebController::class,'login']);

Route::post('/logout',[\App\Http\Controllers\web\WebController::class,'logout']);


Route::get('admin/home',[\App\Http\Controllers\admin\AdminController::class,'viewHome']);
Route::get('/register',[\App\Http\Controllers\web\WebController::class,'viewRegister']);
Route::post('register',[\App\Http\Controllers\web\WebController::class,'register']);
//Tao 1 loai
Route::get('admin/products/type',[\App\Http\Controllers\admin\ProductController::class,'viewCreateType']);

Route::post('admin/products/type',[\App\Http\Controllers\admin\ProductController::class,'createType']);
//Tao 1 san pham
Route::get('admin/products/create',[\App\Http\Controllers\admin\ProductController::class,'viewCreateProduct']);

Route::post('admin/products/create',[\App\Http\Controllers\admin\ProductController::class,'createProduct']);

//Cap nhat sp
Route::get('/admin/products/{id}/edit',[\App\Http\Controllers\admin\ProductController::class,'viewUpdateById']);
Route::put('admin/products/{id}/edit',[\App\Http\Controllers\admin\ProductController::class,'updateProductById']);
//Product
//Lay toan bo sp
Route::get('/admin/products',[\App\Http\Controllers\admin\ProductController::class,'viewAllProducts']);
//Lay sp cu the
Route::get('/admin/products/{id}',[\App\Http\Controllers\admin\ProductController::class,'viewProductById']);


//Xoa sp
Route::delete('admin/products/{id}',[\App\Http\Controllers\admin\ProductController::class,'deleteProductById']);


//Tai khoan
Route::get('/admin/users',[\App\Http\Controllers\admin\AdminController::class,'viewAllUsers']);
//Tao tai khoan nhan vien
Route::get('/admin/users/create',[\App\Http\Controllers\admin\AdminController::class,'viewCreateUser']);
Route::post('admin/users/create',[\App\Http\Controllers\admin\AdminController::class,'createUser']);
//Xoa tai khoan nhan vien
Route::delete('admin/users/{id}',[\App\Http\Controllers\admin\AdminController::class,'deleteUserById']);
//Sua tai khoan nhan vien
Route::get('/admin/users/{id}/edit',[\App\Http\Controllers\admin\AdminController::class,'viewUpdateById']);
Route::put('admin/users/{id}/edit',[\App\Http\Controllers\admin\AdminController::class,'updateUserById']);

//Quan ly kho
//Xem kho
Route::get('/admin/warehouses',[\App\Http\Controllers\admin\WarehouseController::class,'viewWareHouse']);
//Sua kho
Route::get('/admin/warehouses/{id}/edit',[\App\Http\Controllers\admin\WarehouseController::class,'viewUpdateById']);
Route::put('admin/warehouses/{id}/edit',[\App\Http\Controllers\admin\WarehouseController::class,'updateWarehouseById']);
//Xoa kho
Route::delete('admin/warehouses/{id}',[\App\Http\Controllers\admin\WarehouseController::class,'deleteWarehouseById']);
//Nhap kho
Route::get('/admin/warehouses/import',[\App\Http\Controllers\admin\WarehouseController::class,'viewImportWarehouse']);
//Them nhap kho mac dinh
Route::get('/admin/warehouses/import/create',[\App\Http\Controllers\admin\WarehouseController::class,'viewCreateImport']);
Route::post('admin/warehouses/import/create',[\App\Http\Controllers\admin\WarehouseController::class,'createImport']);
//Xoa nhap kho
Route::delete('admin/warehouses/import/{id}',[\App\Http\Controllers\admin\WarehouseController::class,'deleteImportWarehouseById']);

//Nhap kho chi tiet
Route::get('/admin/warehouses/{id}/detail',[\App\Http\Controllers\admin\WarehouseController::class,'viewDetailImport']);
//Xoa nhap kho chi tiet
Route::delete('admin/warehouses/{id}',[\App\Http\Controllers\admin\WarehouseController::class,'deleteDetailImportById']);
//Them nhap kho chi tiet
Route::get('/admin/warehouses/create',[\App\Http\Controllers\admin\WarehouseController::class,'viewCreateImportDetail']);
Route::post('admin/warehouses/create',[\App\Http\Controllers\admin\WarehouseController::class,'createImportDetail']);


//Quan ly don hang
//Xem
Route::get('/admin/orders',[\App\Http\Controllers\admin\OrderController::class,'viewOrder']);


//Giao dien khach hang
Route::get('/home/contact',[\App\Http\Controllers\web\WebController::class,'viewContact']);

Route::get('/home/blog',[\App\Http\Controllers\web\WebController::class,'viewBlog']);
Route::get('/home/shop',[\App\Http\Controllers\web\WebController::class,'viewShop']);
Route::get('/home/about-blog',[\App\Http\Controllers\web\WebController::class,'viewAboutBlog']);
Route::get('/home/detail/{id}',[\App\Http\Controllers\web\WebController::class,'viewDetail']);
Route::get('/home/cart',[\App\Http\Controllers\web\WebController::class,'viewCart']);
Route::get('/home/check-out',[\App\Http\Controllers\web\WebController::class,'viewCheckOut']);
