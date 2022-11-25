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

// home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// pages
Route::get('/solutions', [App\Http\Controllers\PageController::class, 'solutions'])->name('solutions');
Route::get('/about-us', [App\Http\Controllers\PageController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact-us', [App\Http\Controllers\PageController::class, 'contactUs'])->name('contactUs');
Route::post('/send-contact', [App\Http\Controllers\PageController::class, 'sendContact'])->name('sendContact');
Route::get('/admin', [App\Http\Controllers\PageController::class, 'adminIndex'])->name('admin');
Route::get('/eu-funding', [App\Http\Controllers\PageController::class, 'euFunding'])->name('euFunding');
Route::get('/privacy-policy', [App\Http\Controllers\PageController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('terms-of-use', [App\Http\Controllers\PageController::class, 'termsOfUse'])->name('termsOfUse');

// blog
Route::resource('/posts', App\Http\Controllers\PostController::class);
Route::get('/adminPosts', [App\Http\Controllers\PostController::class, 'adminIndex'])->name('adminPosts');
Route::post('/delImagePost', [App\Http\Controllers\PostController::class, 'delImagePost'])->name('delImagePost');

// shop
Route::resource('/products', App\Http\Controllers\ProductController::class);
Route::get('/adminProducts', [App\Http\Controllers\ProductController::class, 'adminIndex'])->name('adminProducts');
Route::get('/cart', [App\Http\Controllers\ProductController::class, 'cart'])->name('cart');
Route::post('/add-to-cart/{id}', [App\Http\Controllers\ProductController::class, 'addToCart'])->name('addToCart');
Route::get('/reduce/{id}', [App\Http\Controllers\ProductController::class, 'reduceByOne'])->name('reduceByOne');
Route::get('/add/{id}', [App\Http\Controllers\ProductController::class, 'addByOne'])->name('addByOne');
Route::get('/remove-item/{id}', [App\Http\Controllers\ProductController::class, 'removeItem'])->name('removeItem');
Route::get('/checkout', [App\Http\Controllers\ProductController::class, 'checkout'])->name('checkout');
Route::post('/order', [App\Http\Controllers\ProductController::class, 'order'])->name('order');
Route::get('/image-destroy/{id}', [App\Http\Controllers\ProductController::class, 'imageDestroy'])->name('imageDestroy');

// other logic
Route::post('/newsletter-confirm', [App\Http\Controllers\OtherController::class, 'newsletterConfirm'])->name('newsletterConfirm');

Auth::routes();