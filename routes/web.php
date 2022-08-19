<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//admin index
Route::get('/admin/index', [HomeController::class, 'admin'])->name('admin');

//route user
Route::get('/admin/user/index',[UserController::class, 'index'])->name('user.index') ;

//route category
Route::get('/admin/category/index',[CategoryController::class, 'index'])->name('category.index') ;
Route::get('/admin/category/create',[CategoryController::class, 'createform'])->name('category.create') ;

//route product
Route::get('/admin/product/index',[ProductController::class, 'index'])->name('product.index') ;
Route::get('/admin/product/create',[ProductController::class, 'createform'])->name('product.create') ;

