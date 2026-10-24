<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'))->name('home');

Route::get('/collections', fn () => view('collections'))->name('collections');

Route::get('/products/lumina-pro-led-mask', fn () => view('product-detail'))->name('product.detail');

Route::get('/checkout', fn () => view('checkout'))->name('checkout');

Route::get('/blog', fn () => view('blog.index'))->name('blog.index');

Route::get('/blog/7-spectrum-led-therapy-routine', fn () => view('blog.show'))->name('blog.show');

Route::view('/our-story', 'pages.our-story')->name('our-story');
Route::view('/careers', 'pages.careers')->name('careers');
Route::view('/press', 'pages.press')->name('press');
Route::view('/help', 'pages.help')->name('help');
Route::view('/returns', 'pages.returns')->name('returns');
Route::view('/shipping', 'pages.shipping')->name('shipping');
Route::view('/size-guide', 'pages.size-guide')->name('size-guide');
Route::view('/track-order', 'pages.track-order')->name('track-order');
