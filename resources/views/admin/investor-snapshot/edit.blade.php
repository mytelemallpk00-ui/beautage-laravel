@extends('admin.layout')

@section('title', 'Stock snapshot')

@section('content')
    <h1 class="text-2xl font-bold text-beautage-purple font-serif mb-2">Stock snapshot</h1>
    <p class="text-sm text-slate-600 mb-6">Values shown in the Investor Relations stock widget (public page).</p>

    <form method="POST" action="{{ route('admin.investor-snapshot.update') }}" class="bg-white rounded-2xl border border-purple-100 p-6 shadow-sm space-y-4">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ([
                'symbol' => 'Symbol / ticker line',
                'price' => 'Price (without $)',
                'change_text' => 'Change line',
                'market_cap' => 'Market cap',
                'range_52w' => '52-week range',
                'shares_outstanding' => 'Shares outstanding',
                'session_open' => 'Session open',
                'session_high' => 'Session high',
                'session_low' => 'Session low',
                'session_volume' => 'Volume',
            ] as $field => $label)
                <div>
                    <label class="block text-xs font-bold uppercase text-beautage-purple mb-1">{{ $label }}</label>
                    <input type="text" name="{{ $field }}" value="{{ old($field, $snapshot->$field) }}"
                           class="w-full rounded-xl border border-purple-200 px-4 py-2 text-sm" @if (in_array($field, ['symbol', 'price', 'change_text', 'market_cap', 'range_52w', 'shares_outstanding'], true)) required @endif>
                </div>
            @endforeach
        </div>
        <button type="submit" class="px-5 py-2.5 rounded-xl bg-beautage-pink text-white font-bold text-sm">Save snapshot</button>
    </form>
@endsection
