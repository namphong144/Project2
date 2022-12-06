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

Route::get('/login',[\App\Http\Controllers\web\WebController::class,'viewLogin']);
Route::post('/login',[\App\Http\Controllers\web\WebController::class,'login']);

Route::post('/logout',[\App\Http\Controllers\web\WebController::class,'logout']);


Route::get('admin/home',[\App\Http\Controllers\admin\AdminController::class,'viewHome']);
Route::get('/register',[\App\Http\Controllers\web\WebController::class,'viewRegister']);
Route::post('register',[\App\Http\Controllers\web\WebController::class,'register']);
//Tao 1 san pham
Route::get('admin/products/create',[\App\Http\Controllers\admin\ProductController::class,'viewCreateProduct']);

Route::post('admin/products/create',[\App\Http\Controllers\admin\ProductController::class,'createProduct']);
//Product
//Lay toan bo sp
Route::get('/admin/products',[\App\Http\Controllers\admin\ProductController::class,'viewAllProducts']);
//Lay sp cu the
Route::get('/admin/products/{id}',[\App\Http\Controllers\admin\ProductController::class,'viewProductById']);

//Cap nhat sp
Route::put('admin/products/{id}',[\App\Http\Controllers\admin\ProductController::class,'updateProductById']);
//Xoa sp
Route::delete('admin/products/{id}',[\App\Http\Controllers\admin\ProductController::class,'deleteProductById']);

