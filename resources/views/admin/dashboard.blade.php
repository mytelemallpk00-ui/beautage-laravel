@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-2xl font-bold text-beautage-purple font-serif mb-6">Store Admin</h1>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
        <div class="bg-white rounded-2xl border border-purple-100 p-5 shadow-sm">
            <p class="text-xs uppercase font-bold text-slate-500">Products</p>
            <p class="text-3xl font-bold text-beautage-purple mt-1">{{ $productCount }}</p>
        </div>
        <div class="bg-white rounded-2xl border border-purple-100 p-5 shadow-sm">
            <p class="text-xs uppercase font-bold text-slate-500">Blog posts</p>
            <p class="text-3xl font-bold text-beautage-purple mt-1">{{ $blogCount }}</p>
        </div>
        <div class="bg-white rounded-2xl border border-purple-100 p-5 shadow-sm">
            <p class="text-xs uppercase font-bold text-slate-500">IR reports</p>
            <p class="text-3xl font-bold text-beautage-purple mt-1">{{ $reportCount }}</p>
        </div>
    </div>

    <div class="bg-white rounded-2xl border border-purple-100 p-6 shadow-sm space-y-4">
        <h2 class="text-lg font-bold text-beautage-purple">Investor Relations</h2>
        <p class="text-sm text-slate-600">Edit downloadable filings and the live stock snapshot shown on the public IR page.</p>
        <div class="flex flex-wrap gap-3">
            <a href="{{ route('admin.investor-reports.index') }}" class="px-4 py-2 rounded-xl bg-beautage-purple text-white text-sm font-bold">Manage reports</a>
            <a href="{{ route('admin.investor-snapshot.edit') }}" class="px-4 py-2 rounded-xl bg-purple-100 text-beautage-purple text-sm font-bold">Edit stock snapshot</a>
            <a href="{{ route('investor-relations') }}" target="_blank" rel="noopener" class="px-4 py-2 rounded-xl border border-purple-200 text-sm font-bold text-beautage-purple">Preview IR page ↗</a>
        </div>
    </div>
@endsection
