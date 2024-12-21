<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register user routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "user" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile',[UserController::class, 'Profile'])->name('user.profile');
    Route::post('/store/profile',[userController::class, 'StoreProfile'])->name('user.update.profile');
    Route::get('/password',[UserController::class, 'ChangePassword'])->name('user.change.password');
    Route::post('/update/password',[UserController::class, 'UpdatePassword'])->name('user.update.password');
    Route::get('/logout',[UserController::class, 'destroy'])->name('user.logout');

    Route::get('/testimonials',[TestimonialController::class, 'MyTestimonials'])->name('user.testimoinals');
    Route::post('/store/testimonial',[TestimonialController::class, 'StoreTestimonial'])->name('store.testimonial');

    Route::get('/user/offers', function () { return view('user.useroffers'); });

    Route::post('/make/order',[OrderController::class, 'MakeOrder'])->name('make.order');
    Route::get('/my/orders',[ProductController::class, 'MyOrders'])->name('user.orders');
    Route::get('/payment/methods',[ProductController::class, 'Pay'])->name('order.pay');
});

require __DIR__.'/auth.php';
