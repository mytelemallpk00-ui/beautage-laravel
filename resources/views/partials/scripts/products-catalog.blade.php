<script>
    const products = @json($productsCatalog);
    const USD_TO_PKR = @json(config('storefront.usd_to_pkr'));
    const STOREFRONT_SUPPORT_PHONE = @json(config('storefront.support_phone'));

    function formatPkr(usd) {
        const amount = Math.round(Number(usd) * USD_TO_PKR);
        return 'Rs. ' + amount.toLocaleString('en-PK');
    }

    function formatPriceDual(usd) {
        return `${formatPkr(usd)} <span class="text-[10px] text-slate-400 font-normal">(≈ $${Number(usd).toFixed(2)})</span>`;
    }
</script>
