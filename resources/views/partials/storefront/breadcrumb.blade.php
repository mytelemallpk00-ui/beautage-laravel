@props([
    'items' => [],
])

<nav aria-label="Breadcrumb" {{ $attributes->merge(['class' => 'max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 text-xs text-slate-500 flex items-center gap-2 flex-wrap']) }}>
    @foreach ($items as $index => $item)
        @if ($index > 0)
            <i data-lucide="chevron-right" class="w-3 h-3 text-purple-300 shrink-0" aria-hidden="true"></i>
        @endif
        @if (! empty($item['url']))
            <a href="{{ $item['url'] }}" class="hover:text-beautage-purple transition font-semibold">{{ $item['label'] }}</a>
        @else
            <span class="text-slate-800 font-bold">{{ $item['label'] }}</span>
        @endif
    @endforeach
</nav>
