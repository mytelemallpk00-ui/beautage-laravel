<?php

/**
 * Storefront theme — single source of truth for brand tokens.
 * Logo asset: public/images/beautagelogosquare2.png (replace with full brand mark).
 * Palette derived from Beautage brand purple (#5E1F70) and rose accent; CTA accent softened for calm, accessible UI.
 */
return [
    'usd_to_pkr' => (float) env('STOREFRONT_USD_TO_PKR', 278),
    'brand_name' => 'Beautage',
    'support_phone' => '+92 300 1234567',
    'support_email' => 'support@beautage.pk',
    'free_shipping_pkr' => 14000,
    'free_shipping_usd' => 50,

    'palette' => [
        'primary' => '#5E1F70',
        'primary_dark' => '#452056',
        'primary_light' => '#F8F6FA',
        'accent' => '#9D4B86',
        'accent_hover' => '#7F3D6E',
        'accent_soft' => '#F3EAF1',
        'border' => '#E8E0ED',
        'surface' => '#FFFFFF',
        'background' => '#F9FAFB',
        'text' => '#1F2937',
        'text_muted' => '#6B7280',
        'success' => '#047857',
        'sale' => '#B45309',
    ],
];
