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


//Giao dien khach hang
Route::get('/home/contact',[\App\Http\Controllers\web\WebController::class,'viewContact']);
Route::get('home/blog',[\App\Http\Controllers\web\WebController::class,'viewBlog']);

