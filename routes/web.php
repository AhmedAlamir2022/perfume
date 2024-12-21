<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscripeController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


    Route::get('/', function () { return view('frontend.index'); });
    Route::get('/contactme',[ContactController::class, 'Contact'])->name('contact.me');
    Route::post('/store/message',[ContactController::class, 'StoreMessage'])->name('store.message');
    Route::get('/about', function () { return view('frontend.about'); });
    Route::get('/products', function () { return view('frontend.products'); });
    Route::get('/product/details/{id}',[ProductController::class, 'ProductDetails'])->name('product.details');
    Route::get('/category/products/{id}',[ProductController::class, 'CategoryProduct'])->name('category.product');
    Route::get('/brand/products/{id}',[ProductController::class, 'BrandProduct'])->name('brand.product');
    Route::post('/store/subscription',[SubscripeController::class, 'StoreOne'])->name('store.sub');



require __DIR__.'/auth.php';
