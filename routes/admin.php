<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\SubscripeController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ComponentController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "admin" middleware group. Make something great!
| 
*/
Route::prefix('admin')->group(function(){
	Route::get('login',[AdminController::class,'Index'])->name('admin_login');
	Route::post('/login/admin',[AdminController::class,'Login'])->name('admin.login');
	Route::get('/dashboard',[AdminController::class,'Dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout',[AdminController::class,'AdminLogout'])->name('admin.logout')->middleware('admin');
    Route::get('/change/password',[AdminController::class, 'ChangePassword'])->name('change.password')->middleware('admin');
    Route::post('/update/password',[AdminController::class, 'UpdatePassword'])->name('update.password')->middleware('admin');
    Route::get('/profile',[AdminController::class, 'Profile'])->name('admin.profile')->middleware('admin');
    Route::post('/store/profile',[AdminController::class, 'StoreProfile'])->name('store.profile')->middleware('admin');

    Route::get('/all/Users',[AdminController::class, 'AllUsers'])->name('all.users')->middleware('admin');
    Route::post('/delete/user/{id}',[AdminController::class, 'DeleteUser'])->name('delete.user')->middleware('admin');

    Route::get('/all/admins',[AdminController::class, 'AllAdmins'])->name('all.admins')->middleware('admin');
    Route::post('/delete/admin/{id}',[AdminController::class, 'DeleteAdmin'])->name('delete.admin')->middleware('admin');
    Route::post('/add/admin',[AdminController::class,'AddAdmin'])->name('add.admin')->middleware('admin');

    Route::get('/all/categories',[CategoryController::class, 'AllCategory'])->name('all.categories')->middleware('admin');
    Route::post('/delete/category/{id}',[CategoryController::class, 'DeleteCategory'])->name('delete.category')->middleware('admin');
    Route::post('/add/category',[CategoryController::class,'AddCategory'])->name('add.category')->middleware('admin');
    Route::post('/edit/category/{id}',[CategoryController::class, 'EditCategory'])->name('edit.category')->middleware('admin');

    Route::get('/all/components',[ComponentController::class, 'AllComponents'])->name('all.components')->middleware('admin');
    Route::post('/delete/component/{id}',[ComponentController::class, 'DeleteComponent'])->name('delete.component')->middleware('admin');
    Route::post('/add/component',[ComponentController::class,'AddComponent'])->name('add.component')->middleware('admin');
    Route::post('/edit/component/{id}',[ComponentController::class, 'EditComponent'])->name('edit.component')->middleware('admin');

    Route::resource('Brand', BrandController::class);

    Route::get('/all/messages',[ContactController::class, 'AllMessages'])->name('all.messages')->middleware('admin');
    Route::post('/delete/message/{id}',[ContactController::class, 'DeleteMessage'])->name('delete.message')->middleware('admin');

    Route::resource('Query', QueryController::class);

    Route::get('/all/offers',[OfferController::class, 'AllOffers'])->name('all.offers')->middleware('admin');
    Route::get('/add/offer',[OfferController::class, 'AddOffer'])->name('add.offer')->middleware('admin');
    Route::post('/store/offer',[OfferController::class, 'StoreOffer'])->name('store.offer')->middleware('admin');
    Route::post('/delete/offer/{id}',[OfferController::class, 'DeleteOffer'])->name('delete.offer')->middleware('admin');
    Route::get('/edit/offer/{id}',[OfferController::class, 'EditOffer'])->name('edit.offer')->middleware('admin');
    Route::post('/update/offer',[OfferController::class, 'UpdateOffer'])->name('update.offer')->middleware('admin');

    Route::get('/all/subscriptions',[SubscripeController::class, 'AllSubscriptions'])->name('all.subscriptions')->middleware('admin');
    Route::post('/delete/subscribe/{id}',[SubscripeController::class, 'DeleteSubscription'])->name('delete.subscripe')->middleware('admin');

    Route::get('/testimonials',[TestimonialController::class, 'AllTestimonials'])->name('all.testimoinals');
    Route::post('/delete/testimonial/{id}',[TestimonialController::class, 'DeleteTestimonial'])->name('delete.testimonial')->middleware('admin');
    Route::post('/edit/testimonials/{id}',[TestimonialController::class, 'EditTestimonial'])->name('edit.testimonial')->middleware('admin');
    Route::post('/delete/testimonial/{id}',[TestimonialController::class, 'DeleteTestimonial'])->name('delete.testimonial')->middleware('admin');

    Route::get('/report/user',[UserController::class, 'ReportUser'])->name('report.user')->middleware('admin');
    Route::post('search/user/report',[UserController::class, 'SearchUserReport'])->name('search.user_report')->middleware('admin');

    Route::get('/report/product',[ProductController::class, 'ReportProduct'])->name('report.product')->middleware('admin');
    Route::post('search/product/report',[ProductController::class, 'SearchProductReport'])->name('search.product_report')->middleware('admin');

    Route::get('/all/products',[ProductController::class, 'AllProducts'])->name('all.products')->middleware('admin');
    Route::get('/add/product',[ProductController::class, 'AddProduct'])->name('add.product')->middleware('admin');
    Route::post('/store/product',[ProductController::class, 'StoreProduct'])->name('store.product')->middleware('admin');
    Route::post('/delete/product/{id}',[ProductController::class, 'DeleteProduct'])->name('delete.product')->middleware('admin');
    Route::get('/edit/product/{id}',[ProductController::class, 'EditProduct'])->name('edit.product')->middleware('admin');
    Route::post('/update/product',[ProductController::class, 'UpdateProduct'])->name('update.product')->middleware('admin');

    Route::get('/all/orders',[OrderController::class, 'AllOrders'])->name('all.orders')->middleware('admin');
});

require __DIR__.'/auth.php';


