<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class CheckoutController extends Controller
{
    public function __invoke(): View
    {
        return view('checkout', [
            'productsCatalog' => Product::catalogForJs(),
        ]);
    }
}
