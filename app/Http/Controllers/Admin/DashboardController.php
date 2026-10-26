<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\InvestorReport;
use App\Models\Product;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard', [
            'productCount' => Product::count(),
            'blogCount' => BlogPost::count(),
            'reportCount' => InvestorReport::count(),
        ]);
    }
}
