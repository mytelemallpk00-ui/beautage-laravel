<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InvestorSnapshot;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InvestorSnapshotController extends Controller
{
    public function edit(): View
    {
        return view('admin.investor-snapshot.edit', [
            'snapshot' => InvestorSnapshot::current(),
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'symbol' => ['required', 'string', 'max:120'],
            'price' => ['required', 'string', 'max:40'],
            'change_text' => ['required', 'string', 'max:80'],
            'market_cap' => ['required', 'string', 'max:80'],
            'range_52w' => ['required', 'string', 'max:80'],
            'shares_outstanding' => ['required', 'string', 'max:80'],
            'session_open' => ['nullable', 'string', 'max:40'],
            'session_high' => ['nullable', 'string', 'max:40'],
            'session_low' => ['nullable', 'string', 'max:40'],
            'session_volume' => ['nullable', 'string', 'max:40'],
        ]);

        InvestorSnapshot::current()->update($data);

        return redirect()
            ->route('admin.investor-snapshot.edit')
            ->with('status', 'Stock snapshot saved. Changes appear on the Investor Relations page.');
    }
}
