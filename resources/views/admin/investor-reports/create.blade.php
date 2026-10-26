@extends('admin.layout')

@section('title', 'New report')

@section('content')
    <h1 class="text-2xl font-bold text-beautage-purple font-serif mb-6">Add financial report</h1>
    <form method="POST" action="{{ route('admin.investor-reports.store') }}" class="bg-white rounded-2xl border border-purple-100 p-6 shadow-sm space-y-6">
        @csrf
        @include('admin.investor-reports._form', ['report' => $report])
        <div class="flex gap-3">
            <button type="submit" class="px-5 py-2.5 rounded-xl bg-beautage-purple text-white font-bold text-sm">Create</button>
            <a href="{{ route('admin.investor-reports.index') }}" class="px-5 py-2.5 rounded-xl border border-purple-200 text-sm font-bold">Cancel</a>
        </div>
    </form>
@endsection
