<?php

namespace App\Http\Controllers;

use App\Models\InvestorReport;
use App\Models\InvestorSnapshot;
use App\Models\Product;
use Illuminate\View\View;

class PageController extends Controller
{
    /** @return array<string, mixed> */
    protected function pageData(): array
    {
        return [
            'productsCatalog' => Product::catalogForJs(),
        ];
    }

    public function ourStory(): View
    {
        return view('pages.our-story', $this->pageData());
    }

    public function careers(): View
    {
        return view('pages.careers', $this->pageData());
    }

    public function press(): View
    {
        return view('pages.press', $this->pageData());
    }

    public function help(): View
    {
        return view('pages.help', $this->pageData());
    }

    public function returns(): View
    {
        return view('pages.returns', $this->pageData());
    }

    public function shipping(): View
    {
        return view('pages.shipping', $this->pageData());
    }

    public function sizeGuide(): View
    {
        return view('pages.size-guide', $this->pageData());
    }

    public function trackOrder(): View
    {
        return view('pages.track-order', $this->pageData());
    }

    public function investorRelations(): View
    {
        return view('pages.investor-relations', array_merge($this->pageData(), [
            'financialReports' => InvestorReport::query()
                ->orderBy('sort_order')
                ->orderBy('id')
                ->get(),
            'stockSnapshot' => InvestorSnapshot::current()->toPageArray(),
        ]));
    }
}
