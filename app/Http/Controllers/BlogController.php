<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Product;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('blog.index', [
            'articlesCatalog' => BlogPost::journalForJs(),
            'productsCatalog' => Product::catalogForJs(),
        ]);
    }

    public function show(BlogPost $post): View
    {
        return view('blog.show', [
            'post' => $post,
            'productsCatalog' => Product::catalogForJs(),
            'relatedPosts' => BlogPost::query()
                ->whereKeyNot($post->id)
                ->orderByDesc('published_at')
                ->limit(2)
                ->get(),
        ]);
    }
}
