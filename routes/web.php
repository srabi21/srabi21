<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product;
use App\Http\Controllers\BookProduct;
use App\Http\Controllers\CdProduct;
use App\Http\Controllers\ShopProduct;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create someth
|*/


Route::get('/products', [Product::class,'makeProductArray']);
Route::get('/products/{id}', [Product::class,'getProductWithId']);
Route::post('/products/store', [Product::class,'addNewProduct']);
Route::delete('delete-product/{id}',[Product::class,'deleteProductWithId'])->name('product.delete');
Route::put('update-product/{id}',[Product::class,'updateProductWithId'])->name('product.update');
Route::get('/', [Product::class,'makeProductArray']);
 // Route::view('/', 'welcome');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
