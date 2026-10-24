<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CollectionController extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('collections', [
            'productsCatalog' => Product::collectionForJs(),
            'activeCategory' => $request->query('cat'),
        ]);
    }
}
