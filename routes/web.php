<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CategoriesController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('all/categories',[CategoriesController::class , 'index']);
Route::get('create/category',[CategoriesController::class , 'create']);
Route::post('store/category',[CategoriesController::class , 'store']);
Route::get('edit/category/{id}',[CategoriesController::class , 'edit']);
Route::post('update/category/{id}',[CategoriesController::class , 'update']);
Route::get('delete/category/{id}',[CategoriesController::class , 'destroy']);

Route::get('create/order',[OrdersController::class , 'create']);
Route::post('store/order',[OrdersController::class , 'store']);

Route::get('all/products',[ProductsController::class , 'index']);
Route::get('create/product',[ProductsController::class , 'create']);
Route::get('edit/product/{id}',[ProductsController::class , 'edit']);
Route::post('update/product/{id}',[ProductsController::class , 'update']);
Route::post('store/product',[ProductsController::class , 'store']);
Route::get('delete/product/{id}',[ProductsController::class , 'destroy']);

Route::view('/','dashboard')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
