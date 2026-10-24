<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function show(Product $product): View
    {
        return view('product-detail', [
            'product' => $product,
            'currentProductCatalog' => $product->toDetailCatalogArray(),
            'relatedProductsCatalog' => $product->relatedForJs(),
            'galleryImages' => $product->gallery_images ?? [$product->image],
        ]);
    }
}
