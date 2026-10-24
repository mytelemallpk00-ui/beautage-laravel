<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('/collections', CollectionController::class)->name('collections');

Route::get('/products/{product:slug}', [ProductController::class, 'show'])
    ->name('product.show');

Route::view('/checkout', 'checkout')->name('checkout');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');

Route::view('/our-story', 'pages.our-story')->name('our-story');
Route::view('/careers', 'pages.careers')->name('careers');
Route::view('/press', 'pages.press')->name('press');
Route::view('/help', 'pages.help')->name('help');
Route::view('/returns', 'pages.returns')->name('returns');
Route::view('/shipping', 'pages.shipping')->name('shipping');
Route::view('/size-guide', 'pages.size-guide')->name('size-guide');
Route::view('/track-order', 'pages/track-order')->name('track-order');
