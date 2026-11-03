<?php

if (! function_exists('storefront_pkr')) {
    function storefront_pkr(float $usd): string
    {
        $rate = (float) config('storefront.usd_to_pkr', 278);

        return 'Rs. '.number_format($usd * $rate, 0);
    }
}

if (! function_exists('storefront_pkr_amount')) {
    function storefront_pkr_amount(float $usd): float
    {
        return $usd * (float) config('storefront.usd_to_pkr', 278);
    }
}
