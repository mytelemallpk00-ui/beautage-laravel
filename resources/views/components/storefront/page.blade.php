@props([
    'breadcrumbs' => [],
    'title' => null,
    'eyebrow' => null,
    'description' => null,
    'heroCentered' => false,
    'showTrust' => true,
])

@include('partials.storefront.main-open')

@if (count($breadcrumbs))
    @include('partials.storefront.breadcrumb', ['items' => $breadcrumbs])
@endif

@if ($title)
    @include('partials.storefront.hero', [
        'title' => $title,
        'eyebrow' => $eyebrow,
        'description' => $description,
        'centered' => $heroCentered,
    ])
@endif

@if ($showTrust)
    @include('partials.storefront.trust-strip')
@endif

<div {{ $attributes->merge(['class' => 'max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 space-y-8 w-full']) }}>
    {{ $slot }}
</div>

@include('partials.storefront.main-close')
