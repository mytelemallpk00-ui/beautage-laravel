@props([
    'eyebrow' => null,
    'title',
    'description' => null,
    'centered' => false,
])

<div {{ $attributes->merge(['class' => 'max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-6']) }}>
    <div @class([
        'rounded-2xl sf-muted-gradient text-white p-6 sm:p-10 shadow-sf-md relative overflow-hidden border border-white/10',
        'text-center flex flex-col items-center' => $centered,
    ])>
        <div class="absolute -right-16 -bottom-16 w-72 h-72 bg-white/5 rounded-full blur-2xl pointer-events-none" aria-hidden="true"></div>
        <div @class(['relative z-10 max-w-3xl space-y-2', 'mx-auto' => $centered])>
            @if ($eyebrow)
                <span class="inline-block px-3 py-1 rounded-full text-[10px] uppercase font-extrabold tracking-widest bg-white/15 text-pink-100 border border-white/20">
                    {{ $eyebrow }}
                </span>
            @endif
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-serif font-bold tracking-tight">{{ $title }}</h1>
            @if ($description)
                <p class="text-xs sm:text-sm text-purple-100 leading-relaxed font-medium">{{ $description }}</p>
            @endif
            @isset($slot)
                <div class="pt-3">{{ $slot }}</div>
            @endisset
        </div>
    </div>
</div>
