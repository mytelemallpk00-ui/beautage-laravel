<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('/collections', CollectionController::class)->name('collections');

Route::get('/products/{product:slug}', [ProductController::class, 'show'])
    ->name('product.show');

Route::get('/checkout', CheckoutController::class)->name('checkout');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/our-story', [PageController::class, 'ourStory'])->name('our-story');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');
Route::get('/press', [PageController::class, 'press'])->name('press');
Route::get('/help', [PageController::class, 'help'])->name('help');
Route::get('/returns', [PageController::class, 'returns'])->name('returns');
Route::get('/shipping', [PageController::class, 'shipping'])->name('shipping');
Route::get('/size-guide', [PageController::class, 'sizeGuide'])->name('size-guide');
Route::get('/track-order', [PageController::class, 'trackOrder'])->name('track-order');
