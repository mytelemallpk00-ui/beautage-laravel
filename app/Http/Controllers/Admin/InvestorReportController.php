<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InvestorReport;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InvestorReportController extends Controller
{
    public function index(): View
    {
        return view('admin.investor-reports.index', [
            'reports' => InvestorReport::query()
                ->orderBy('sort_order')
                ->orderBy('id')
                ->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.investor-reports.create', [
            'report' => new InvestorReport(['badge_tone' => 'purple', 'sort_order' => 0]),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        InvestorReport::create($data);

        return redirect()
            ->route('admin.investor-reports.index')
            ->with('status', 'Financial report created.');
    }

    public function edit(InvestorReport $investor_report): View
    {
        return view('admin.investor-reports.edit', [
            'report' => $investor_report,
        ]);
    }

    public function update(Request $request, InvestorReport $investor_report): RedirectResponse
    {
        $investor_report->update($this->validated($request));

        return redirect()
            ->route('admin.investor-reports.index')
            ->with('status', 'Financial report updated.');
    }

    public function destroy(InvestorReport $investor_report): RedirectResponse
    {
        $investor_report->delete();

        return redirect()
            ->route('admin.investor-reports.index')
            ->with('status', 'Financial report deleted.');
    }

    /** @return array<string, mixed> */
    protected function validated(Request $request): array
    {
        return $request->validate([
            'badge_label' => ['required', 'string', 'max:120'],
            'badge_tone' => ['required', 'in:purple,pink,emerald'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'file_label' => ['nullable', 'string', 'max:120'],
            'download_message' => ['required', 'string', 'max:255'],
            'sort_order' => ['required', 'integer', 'min:0', 'max:9999'],
        ]);
    }
}
