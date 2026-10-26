@extends('admin.layout')

@section('title', 'Investor Reports')

@section('content')
    <div class="flex flex-wrap items-center justify-between gap-4 mb-6">
        <h1 class="text-2xl font-bold text-beautage-purple font-serif">Financial reports</h1>
        <a href="{{ route('admin.investor-reports.create') }}" class="px-4 py-2 rounded-xl bg-beautage-pink text-white text-sm font-bold">Add report</a>
    </div>

    <div class="bg-white rounded-2xl border border-purple-100 shadow-sm overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-purple-50 text-left text-xs uppercase font-bold text-beautage-purple">
                <tr>
                    <th class="px-4 py-3">Order</th>
                    <th class="px-4 py-3">Badge</th>
                    <th class="px-4 py-3">Title</th>
                    <th class="px-4 py-3 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-purple-50">
                @forelse ($reports as $report)
                    <tr>
                        <td class="px-4 py-3 font-mono">{{ $report->sort_order }}</td>
                        <td class="px-4 py-3">{{ $report->badge_label }}</td>
                        <td class="px-4 py-3 font-semibold">{{ $report->title }}</td>
                        <td class="px-4 py-3 text-right space-x-2">
                            <a href="{{ route('admin.investor-reports.edit', $report) }}" class="text-beautage-purple font-bold hover:underline">Edit</a>
                            <form action="{{ route('admin.investor-reports.destroy', $report) }}" method="POST" class="inline" onsubmit="return confirm('Delete this report?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 font-bold hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-8 text-center text-slate-500">No reports yet. Run seeders or add one.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
