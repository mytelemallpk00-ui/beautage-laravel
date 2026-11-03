<section aria-label="Store guarantees" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4 bg-white p-4 sm:p-6 rounded-2xl shadow-sm border border-purple-100">
        <div class="flex items-center gap-3 p-2 sm:p-3 rounded-xl hover:bg-purple-50/80 transition">
            <div class="w-11 h-11 bg-purple-50 text-beautage-purple rounded-xl flex items-center justify-center shrink-0">
                <i data-lucide="truck" class="w-5 h-5"></i>
            </div>
            <div>
                <h2 class="font-bold text-xs text-slate-800">Free Delivery</h2>
                <p class="text-[10px] sm:text-xs text-slate-500">Orders over {{ storefront_pkr(config('storefront.free_shipping_usd')) }}</p>
            </div>
        </div>
        <div class="flex items-center gap-3 p-2 sm:p-3 rounded-xl hover:bg-purple-50/80 transition">
            <div class="w-11 h-11 bg-purple-50 text-beautage-purple rounded-xl flex items-center justify-center shrink-0">
                <i data-lucide="banknote" class="w-5 h-5"></i>
            </div>
            <div>
                <h2 class="font-bold text-xs text-slate-800">Cash on Delivery</h2>
                <p class="text-[10px] sm:text-xs text-slate-500">Nationwide across Pakistan</p>
            </div>
        </div>
        <div class="flex items-center gap-3 p-2 sm:p-3 rounded-xl hover:bg-purple-50/80 transition">
            <div class="w-11 h-11 bg-purple-50 text-beautage-purple rounded-xl flex items-center justify-center shrink-0">
                <i data-lucide="shield-check" class="w-5 h-5"></i>
            </div>
            <div>
                <h2 class="font-bold text-xs text-slate-800">100% Authentic</h2>
                <p class="text-[10px] sm:text-xs text-slate-500">Verified brand store</p>
            </div>
        </div>
        <div class="flex items-center gap-3 p-2 sm:p-3 rounded-xl hover:bg-purple-50/80 transition">
            <div class="w-11 h-11 bg-purple-50 text-beautage-purple rounded-xl flex items-center justify-center shrink-0">
                <i data-lucide="headphones" class="w-5 h-5"></i>
            </div>
            <div>
                <h2 class="font-bold text-xs text-slate-800">24/7 Support</h2>
                <p class="text-[10px] sm:text-xs text-slate-500">{{ config('storefront.support_phone') }}</p>
            </div>
        </div>
    </div>
</section>
