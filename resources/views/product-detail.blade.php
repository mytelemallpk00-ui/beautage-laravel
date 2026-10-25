@extends('layouts.app')

@section('title', $product->name . ' — Beautage Flagship Store')

@section('body_attrs')
class="bg-slate-50 text-slate-800 font-sans antialiased min-h-screen flex flex-col selection:bg-beautage-pink selection:text-white pb-36 md:pb-0 overflow-x-hidden"
@endsection

@section('content')
<main class="w-full flex-1 flex flex-col py-6">

        <!-- 1. BREADCRUMB NAVIGATION -->
        <div class="w-full px-4 sm:px-12 xl:px-20 mb-4 sm:mb-6 overflow-x-auto no-scrollbar">
            <nav class="flex items-center gap-2 text-xs font-semibold text-slate-500 whitespace-nowrap">
                <a href="{{ route('home') }}" class="hover:text-beautage-purple transition flex items-center gap-1">
                    <i data-lucide="home" class="w-3.5 h-3.5"></i> Home
                </a>
                <i data-lucide="chevron-right" class="w-3 h-3 text-purple-300"></i>
                <a href="{{ route('collections', ['cat' => $product->category]) }}" class="hover:text-beautage-purple transition">{{ $product->category }}</a>
                <i data-lucide="chevron-right" class="w-3 h-3 text-purple-300"></i>
                <span class="text-beautage-purple font-bold">{{ $product->name }}</span>
            </nav>
        </div>

        <!-- PRODUCT MAIN SECTION (GALLERY + BUY BOX) -->
        <section class="w-full px-4 sm:px-12 xl:px-20">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-start">
                
                <!-- 2. IMAGE GALLERY (SPAN 7) -->
                <div class="lg:col-span-7 flex flex-col-reverse sm:flex-row gap-4 lg:sticky lg:top-28">
                    <!-- Thumbnails carousel / column -->
                    <div class="flex sm:flex-col gap-3 overflow-x-auto sm:overflow-y-auto no-scrollbar shrink-0 py-1 sm:max-h-[500px]">
                        <button onclick="switchMainImage(0)" class="thumb-btn w-16 h-16 sm:w-20 sm:h-20 rounded-2xl border-2 border-beautage-purple overflow-hidden bg-purple-50 shadow-sm shrink-0 transition">
                            <img src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?auto=format&fit=crop&q=80&w=400" alt="Angle 1" class="w-full h-full object-cover">
                        </button>
                        <button onclick="switchMainImage(1)" class="thumb-btn w-16 h-16 sm:w-20 sm:h-20 rounded-2xl border-2 border-transparent hover:border-purple-300 overflow-hidden bg-purple-50 shadow-sm shrink-0 transition">
                            <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&q=80&w=400" alt="Angle 2" class="w-full h-full object-cover">
                        </button>
                        <button onclick="switchMainImage(2)" class="thumb-btn w-16 h-16 sm:w-20 sm:h-20 rounded-2xl border-2 border-transparent hover:border-purple-300 overflow-hidden bg-purple-50 shadow-sm shrink-0 transition">
                            <img src="https://images.unsplash.com/photo-1512290900722-9a702082b2d5?auto=format&fit=crop&q=80&w=400" alt="Angle 3" class="w-full h-full object-cover">
                        </button>
                        <button onclick="openVideoModal()" class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl border-2 border-dashed border-pink-400 bg-pink-50 hover:bg-pink-100 flex flex-col items-center justify-center text-beautage-pink shrink-0 transition shadow-sm group">
                            <i data-lucide="play-circle" class="w-5 h-5 sm:w-6 sm:h-6 group-hover:scale-110 transition"></i>
                            <span class="text-[8px] sm:text-[9px] font-black uppercase tracking-wider mt-0.5">Video</span>
                        </button>
                    </div>

                    <!-- Main Interactive Zoomable Display -->
                    <div class="flex-1 relative rounded-3xl overflow-hidden bg-purple-50/50 border border-purple-100 shadow-xl group aspect-square">
                        <img id="main-product-img" src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?auto=format&fit=crop&q=80&w=800" alt="Lumina Pro LED Mask" class="w-full h-full object-cover cursor-zoom-in transition duration-500 group-hover:scale-105" onclick="openLightbox()">
                        <div class="absolute top-4 left-4 bg-beautage-purple text-white text-[10px] sm:text-xs font-black uppercase tracking-widest px-3 py-1 sm:px-3.5 sm:py-1.5 rounded-full shadow-lg">
                            Flagship Device
                        </div>
                        <button onclick="openLightbox()" class="absolute bottom-4 right-4 p-2.5 sm:p-3 rounded-2xl bg-white/90 backdrop-blur-md text-beautage-purple hover:bg-white shadow-lg transition flex items-center gap-2 text-xs font-bold">
                            <i data-lucide="maximize-2" class="w-4 h-4"></i> Zoom
                        </button>
                    </div>
                </div>

                <!-- 3 & 4. PRODUCT HEADER, PRICING & URGENCY (SPAN 5) -->
                <div class="lg:col-span-5 space-y-5 sm:space-y-6">
                    
                    <div>
                        <div class="flex items-center gap-2 mb-2 flex-wrap">
                            <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-700 border border-emerald-200 px-3 py-1 rounded-full text-xs font-extrabold">
                                <i data-lucide="shield-check" class="w-3.5 h-3.5"></i> 100% Original • Authorized Store
                            </span>
                            <span class="bg-pink-50 text-beautage-pink border border-pink-200 px-3 py-1 rounded-full text-xs font-extrabold uppercase">
                                Save 30% Today
                            </span>
                        </div>
                        <h1 class="text-2xl sm:text-3xl xl:text-4xl font-serif font-bold text-beautage-purple tracking-tight leading-tight">
                            Lumina Pro 7-Spectrum LED Therapy Mask
                        </h1>
                        <div class="flex items-center gap-3 mt-3">
                            <div class="flex items-center text-amber-500">
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <span class="text-xs font-bold text-slate-700 ml-1.5">4.9 / 5.0</span>
                            </div>
                            <span class="text-slate-300">•</span>
                            <a href="#customer-reviews" onclick="switchTab('reviews')" class="text-xs font-semibold text-beautage-purple hover:underline">128 Verified Reviews</a>
                        </div>
                    </div>

                    <!-- Pricing Row -->
                    <div class="p-4 rounded-2xl bg-gradient-to-r from-purple-50 to-pink-50 border border-purple-200 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] text-slate-500 uppercase font-extrabold tracking-wider block">Special Introductory Price</span>
                            <div class="flex items-baseline gap-3 mt-0.5">
                                <span class="text-3xl font-black text-slate-900">$249.00</span>
                                <span class="text-base text-slate-400 line-through font-bold">$349.00</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="text-xs font-bold text-emerald-700 bg-emerald-100 px-3 py-1 rounded-full">You Save $100.00</span>
                        </div>
                    </div>

                    <!-- Urgency & Scarcity Tracker -->
                    <div class="p-4 rounded-2xl bg-amber-50/80 border border-amber-200 space-y-2">
                        <div class="flex items-center justify-between text-xs font-extrabold text-amber-900">
                            <span class="flex items-center gap-1.5"><i data-lucide="flame" class="w-4 h-4 text-amber-600 fill-current"></i> Only 4 units left in stock</span>
                            <span class="text-beautage-pink">84% claimed today</span>
                        </div>
                        <div class="w-full h-2 rounded-full bg-amber-200 overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-beautage-pink to-amber-500 rounded-full w-[84%] animate-pulse"></div>
                        </div>
                        <div class="flex items-center gap-2 text-[11px] text-amber-800 pt-1">
                            <i data-lucide="timer" class="w-3.5 h-3.5"></i>
                            <span>Flash deal timer: <strong id="pdp-countdown" class="font-mono text-beautage-purple">04:32:19</strong> (Order soon)</span>
                        </div>
                    </div>

                    <!-- Variant Selectors -->
                    <div class="space-y-4 pt-2 border-t border-purple-100">
                        <div>
                            <label class="block text-xs font-extrabold text-beautage-purple uppercase tracking-wider mb-2">
                                Edition / Color Finish: <span id="selected-color-name" class="font-normal text-slate-600">Rose Gold Edition</span>
                            </label>
                            <div class="flex items-center gap-3">
                                <button onclick="selectVariant('color', 'Rose Gold Edition', this)" class="variant-color-btn w-11 h-11 rounded-full bg-gradient-to-br from-rose-300 to-amber-400 ring-2 ring-offset-2 ring-beautage-purple shadow-sm transition active:scale-95" title="Rose Gold Edition"></button>
                                <button onclick="selectVariant('color', 'Midnight Purple', this)" class="variant-color-btn w-11 h-11 rounded-full bg-gradient-to-br from-purple-900 to-beautage-purple ring-2 ring-offset-2 ring-transparent shadow-sm transition active:scale-95" title="Midnight Purple"></button>
                                <button onclick="selectVariant('color', 'Pearl White', this)" class="variant-color-btn w-11 h-11 rounded-full bg-gradient-to-br from-slate-100 to-purple-100 border border-purple-300 ring-2 ring-offset-2 ring-transparent shadow-sm transition active:scale-95" title="Pearl White"></button>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-extrabold text-beautage-purple uppercase tracking-wider mb-2">
                                Package Size / Level: <span id="selected-size-name" class="font-normal text-slate-600">Standard Pro Kit</span>
                            </label>
                            <div class="grid grid-cols-2 gap-3">
                                <button onclick="selectVariant('size', 'Standard Pro Kit', this)" class="variant-size-btn py-3 px-4 rounded-xl border-2 border-beautage-purple bg-purple-50 text-beautage-purple font-bold text-xs transition text-center shadow-xs">
                                    Standard Pro Kit ($249)
                                </button>
                                <button onclick="selectVariant('size', 'Ultimate Serum Bundle', this)" class="variant-size-btn py-3 px-4 rounded-xl border-2 border-purple-200 bg-white text-slate-700 hover:border-purple-300 font-bold text-xs transition text-center shadow-xs">
                                    Ultimate Bundle ($319)
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Quantity Selector & Add to Bag (Desktop) -->
                    <div class="hidden sm:block space-y-3 pt-2">
                        <div class="flex items-center gap-4">
                            <div class="flex items-center border-2 border-purple-200 rounded-2xl bg-white overflow-hidden shadow-sm">
                                <button onclick="adjustQty(-1)" class="px-4 py-3.5 text-sm font-extrabold text-slate-600 hover:bg-purple-50 transition">-</button>
                                <span id="product-qty" class="w-10 text-center text-sm font-bold text-slate-800">1</span>
                                <button onclick="adjustQty(1)" class="px-4 py-3.5 text-sm font-extrabold text-slate-600 hover:bg-purple-50 transition">+</button>
                            </div>
                            <button onclick="addCurrentProductToCart()" class="flex-1 bg-beautage-pink hover:bg-beautage-pinkHover text-white font-black py-4 px-6 rounded-2xl transition shadow-xl shadow-pink-500/30 flex items-center justify-center gap-3 text-xs uppercase tracking-wider">
                                <i data-lucide="shopping-bag" class="w-5 h-5"></i> Add To Bag — <span id="btn-total-price">$249.00</span>
                            </button>
                        </div>
                        <button onclick="buyNow()" class="w-full bg-beautage-purple hover:bg-beautage-purpleDark text-white font-extrabold py-3.5 px-6 rounded-2xl transition shadow-lg flex items-center justify-center gap-2 text-xs uppercase tracking-wider">
                            <i data-lucide="zap" class="w-4 h-4 text-beautage-amber"></i> Buy Now with Express Checkout
                        </button>
                    </div>

                    <!-- Trust Badges & Delivery Checker -->
                    <div class="p-5 rounded-2xl bg-white border border-purple-100 shadow-sm space-y-4">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-xl bg-purple-50 text-beautage-purple flex items-center justify-center shrink-0">
                                <i data-lucide="truck" class="w-4 h-4"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xs font-bold text-beautage-purple">Cash on Delivery Available Across Pakistan</h4>
                                <p class="text-[11px] text-slate-500">Free Express Shipping on all orders over $75</p>
                            </div>
                        </div>

                        <div class="pt-3 border-t border-purple-50 space-y-2">
                            <label class="block text-[11px] font-extrabold text-slate-700 uppercase">Check Delivery / Postal Code:</label>
                            <div class="flex items-center gap-2">
                                <input type="text" id="postal-input" placeholder="e.g. 54000 (Lahore / Karachi)" class="flex-1 py-2.5 px-3 bg-purple-50/50 border border-purple-200 rounded-xl text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:border-beautage-purple">
                                <button onclick="checkDelivery()" class="px-4 py-2.5 bg-beautage-purple text-white text-xs font-bold rounded-xl hover:bg-beautage-purpleDark transition">Check</button>
                            </div>
                            <div id="delivery-result" class="text-xs font-semibold text-emerald-600 hidden"></div>
                        </div>

                        <div class="grid grid-cols-3 gap-2 pt-2 text-center text-[10px] font-bold text-slate-600 border-t border-purple-50">
                            <div class="p-2 rounded-xl bg-purple-50/50 flex flex-col items-center gap-1">
                                <i data-lucide="shield-check" class="w-4 h-4 text-beautage-pink"></i>
                                <span>100% Original</span>
                            </div>
                            <div class="p-2 rounded-xl bg-purple-50/50 flex flex-col items-center gap-1">
                                <i data-lucide="rotate-ccw" class="w-4 h-4 text-emerald-600"></i>
                                <span>30-Day Returns</span>
                            </div>
                            <div class="p-2 rounded-xl bg-purple-50/50 flex flex-col items-center gap-1">
                                <i data-lucide="headphones" class="w-4 h-4 text-amber-600"></i>
                                <span>24/7 Support</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- FREQUENTLY BOUGHT TOGETHER / BUNDLE OFFER -->
        <section class="w-full px-4 sm:px-12 xl:px-20 py-10">
            <div class="max-w-6xl mx-auto rounded-3xl bg-gradient-to-r from-purple-950 via-beautage-purple to-purple-900 text-white p-6 sm:p-10 shadow-2xl border border-purple-700 relative overflow-hidden">
                <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-beautage-pink/20 rounded-full blur-3xl pointer-events-none"></div>
                
                <div class="relative z-10">
                    <span class="inline-block px-3 py-1 rounded-full text-[10px] uppercase font-extrabold tracking-widest bg-pink-500/30 text-pink-200 border border-pink-400/40 mb-2">
                        SAVE WITH BUNDLE DEALS
                    </span>
                    <h3 class="text-xl sm:text-3xl font-serif font-bold text-white">Frequently Bought Together</h3>
                    <p class="text-xs text-purple-100 mt-1">Combine the Lumina Pro Mask with our bestselling organic elixirs.</p>

                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center mt-6 sm:mt-8">
                        <div class="lg:col-span-8 flex flex-col sm:flex-row items-center gap-4 bg-purple-900/80 p-4 rounded-2xl border border-purple-700/80 backdrop-blur-md">
                            <div class="flex items-center gap-2 sm:gap-3 w-full sm:w-auto justify-center overflow-x-auto py-1">
                                <img src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?auto=format&fit=crop&q=80&w=200" alt="Item 1" class="w-14 h-14 sm:w-16 sm:h-16 rounded-xl object-cover border border-white/20 shrink-0">
                                <span class="text-base font-bold text-pink-300">+</span>
                                <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&q=80&w=200" alt="Item 2" class="w-14 h-14 sm:w-16 sm:h-16 rounded-xl object-cover border border-white/20 shrink-0">
                                <span class="text-base font-bold text-pink-300">+</span>
                                <img src="https://images.unsplash.com/photo-1608248597359-f5383a886f49?auto=format&fit=crop&q=80&w=200" alt="Item 3" class="w-14 h-14 sm:w-16 sm:h-16 rounded-xl object-cover border border-white/20 shrink-0">
                            </div>

                            <div class="flex-1 text-center sm:text-left space-y-1.5 w-full">
                                <div class="flex items-center gap-2 justify-start">
                                    <input type="checkbox" id="bundle-check-1" checked disabled class="accent-beautage-pink w-4 h-4 shrink-0">
                                    <span class="text-xs font-bold text-white">Lumina Pro Mask ($249)</span>
                                </div>
                                <div class="flex items-center gap-2 justify-start">
                                    <input type="checkbox" id="bundle-check-2" checked onchange="updateBundleTotal()" class="accent-beautage-pink w-4 h-4 cursor-pointer shrink-0">
                                    <span class="text-xs font-medium text-purple-100">Botanical Youth Serum ($89)</span>
                                </div>
                                <div class="flex items-center gap-2 justify-start">
                                    <input type="checkbox" id="bundle-check-3" checked onchange="updateBundleTotal()" class="accent-beautage-pink w-4 h-4 cursor-pointer shrink-0">
                                    <span class="text-xs font-medium text-purple-100">Gold Eye Elixir ($65)</span>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-4 flex flex-col items-center lg:items-end justify-center bg-purple-950/90 p-6 rounded-2xl border border-purple-700 text-center lg:text-right">
                            <span class="text-[10px] text-purple-300 uppercase font-extrabold">Combined Bundle Total</span>
                            <div class="flex items-baseline gap-2 mt-1">
                                <span id="bundle-total-price" class="text-3xl font-black text-white">$369.00</span>
                                <span class="text-xs text-pink-300 line-through">$403.00</span>
                            </div>
                            <button onclick="addBundleToCart()" class="mt-4 w-full px-6 py-3 bg-beautage-pink hover:bg-beautage-pinkHover text-white font-extrabold text-xs uppercase tracking-wider rounded-xl transition shadow-lg shadow-pink-500/30">
                                Add All 3 to Bag
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- COMPREHENSIVE TABS / ACCORDIONS FOR PRODUCT DETAILS -->
        <section class="w-full px-4 sm:px-12 xl:px-20 py-8">
            <div class="max-w-5xl mx-auto bg-white rounded-3xl border border-purple-100 shadow-xl overflow-hidden">
                <div class="grid grid-cols-2 md:grid-cols-4 bg-purple-50/70 border-b border-purple-100">
                    <button onclick="switchTab('desc')" id="tab-btn-desc" class="p-3.5 sm:p-4 text-xs font-bold text-beautage-purple border-b-2 border-beautage-purple bg-white transition flex items-center justify-center gap-2 text-center">
                        <i data-lucide="file-text" class="w-4 h-4 text-beautage-pink shrink-0"></i> <span>Description</span>
                    </button>
                    <button onclick="switchTab('specs')" id="tab-btn-specs" class="p-3.5 sm:p-4 text-xs font-semibold text-slate-600 hover:text-beautage-purple transition flex items-center justify-center gap-2 text-center">
                        <i data-lucide="cpu" class="w-4 h-4 text-purple-600 shrink-0"></i> <span>Specs</span>
                    </button>
                    <button onclick="switchTab('routine')" id="tab-btn-routine" class="p-3.5 sm:p-4 text-xs font-semibold text-slate-600 hover:text-beautage-purple transition flex items-center justify-center gap-2 text-center">
                        <i data-lucide="sparkles" class="w-4 h-4 text-amber-500 shrink-0"></i> <span>Routine</span>
                    </button>
                    <button onclick="switchTab('reviews')" id="tab-btn-reviews" class="p-3.5 sm:p-4 text-xs font-semibold text-slate-600 hover:text-beautage-purple transition flex items-center justify-center gap-2 text-center">
                        <i data-lucide="star" class="w-4 h-4 text-amber-400 fill-current shrink-0"></i> <span>Reviews (128)</span>
                    </button>
                </div>

                <div id="tab-content-desc" class="p-6 sm:p-8 space-y-6 tab-pane">
                    <h3 class="text-lg sm:text-xl font-serif font-bold text-beautage-purple">Medical-Grade Photon Light Therapy Engineered for Your Skin</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        The Lumina Pro 7-Spectrum LED Mask utilizes advanced narrowband light emitting diode technology to deliver precise wavelengths of light directly to cellular mitochondria. Endorsed by leading dermatologists and top celebrities, this mask provides spa-quality rejuvenation from the comfort of your home.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4">
                        <div class="flex items-start gap-3 p-4 rounded-2xl bg-purple-50/50 border border-purple-100">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-beautage-pink shrink-0 mt-0.5"></i>
                            <div>
                                <h4 class="text-xs font-bold text-beautage-purple">Collagen Synthesis (Red Light 630nm)</h4>
                                <p class="text-[11px] text-slate-600 mt-1">Stimulates fibroblast proliferation to reduce fine lines and restore youthful elasticity.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 p-4 rounded-2xl bg-purple-50/50 border border-purple-100">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-beautage-pink shrink-0 mt-0.5"></i>
                            <div>
                                <h4 class="text-xs font-bold text-beautage-purple">Acne Clearance (Blue Light 415nm)</h4>
                                <p class="text-[11px] text-slate-600 mt-1">Targets and neutralizes acne-causing bacteria deep within pores for spotless clarity.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab-content-specs" class="p-6 sm:p-8 space-y-6 tab-pane hidden">
                    <h3 class="text-lg sm:text-xl font-serif font-bold text-beautage-purple">Technical Specifications & Certifications</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-xs">
                            <tbody class="divide-y divide-purple-100">
                                <tr class="py-3"><td class="py-3 font-bold text-beautage-purple w-1/3">Wavelength Spectrum</td><td class="py-3 text-slate-600">7 targeted wavelengths (415nm to 830nm)</td></tr>
                                <tr class="py-3"><td class="py-3 font-bold text-beautage-purple">LED Bulb Count</td><td class="py-3 text-slate-600">240 medical-grade dual-core diodes</td></tr>
                                <tr class="py-3"><td class="py-3 font-bold text-beautage-purple">Battery & Power</td><td class="py-3 text-slate-600">Rechargeable Li-ion 2500mAh (USB-C Fast Charge)</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="tab-content-routine" class="p-6 sm:p-8 space-y-6 tab-pane hidden">
                    <h3 class="text-lg sm:text-xl font-serif font-bold text-beautage-purple">Step-by-Step Skincare Routine</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">Cleanse thoroughly, apply botanical serum, and wear the Lumina Pro Mask for 15 minutes 3-4 times a week for maximum natural glow.</p>
                </div>

                <div id="tab-content-reviews" id="customer-reviews" class="p-6 sm:p-8 space-y-6 tab-pane hidden">
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pb-6 border-b border-purple-100">
                        <div>
                            <h3 class="text-lg sm:text-xl font-serif font-bold text-beautage-purple">Customer Reviews & Testimonials</h3>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="flex text-amber-400"><i data-lucide="star" class="w-4 h-4 fill-current"></i><i data-lucide="star" class="w-4 h-4 fill-current"></i><i data-lucide="star" class="w-4 h-4 fill-current"></i><i data-lucide="star" class="w-4 h-4 fill-current"></i><i data-lucide="star" class="w-4 h-4 fill-current"></i></div>
                                <span class="text-xs font-bold text-slate-700">4.9 out of 5 stars (128 reviews)</span>
                            </div>
                        </div>
                        <button onclick="openReviewModal()" class="w-full sm:w-auto px-5 py-2.5 bg-beautage-purple hover:bg-beautage-purpleDark text-white font-bold text-xs uppercase tracking-wider rounded-xl transition shadow-md">
                            Write a Review
                        </button>
                    </div>
                    <div class="space-y-4">
                        <div class="p-4 rounded-2xl bg-purple-50/40 border border-purple-100 space-y-2">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <span class="w-8 h-8 rounded-full bg-beautage-pink text-white font-bold text-xs flex items-center justify-center">SA</span>
                                    <div>
                                        <h4 class="text-xs font-bold text-beautage-purple">Saboor Aly <span class="text-[10px] text-emerald-600 font-extrabold ml-1">✓ Verified Buyer</span></h4>
                                        <div class="flex text-amber-400 text-xs"><i data-lucide="star" class="w-3 h-3 fill-current"></i><i data-lucide="star" class="w-3 h-3 fill-current"></i><i data-lucide="star" class="w-3 h-3 fill-current"></i><i data-lucide="star" class="w-3 h-3 fill-current"></i><i data-lucide="star" class="w-3 h-3 fill-current"></i></div>
                                    </div>
                                </div>
                                <span class="text-[10px] text-slate-400">2 days ago</span>
                            </div>
                            <p class="text-xs text-slate-600">"Absolute game changer for my skin! I use it 3 times a week before shoots and my glow is unmatched."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- RELATED / YOU MAY ALSO LIKE PRODUCTS GRID -->
        <section class="w-full px-4 sm:px-12 xl:px-20 py-12">
            <div class="text-center max-w-2xl mx-auto mb-8">
                <span class="inline-block px-3 py-1 rounded-full text-[10px] uppercase font-extrabold tracking-widest bg-purple-100 text-beautage-purple border border-purple-200 mb-2">
                    COMPLETE YOUR ROUTINE
                </span>
                <h2 class="text-2xl sm:text-3xl font-serif font-bold text-beautage-purple">You May Also Like</h2>
                <p class="text-xs text-slate-500 mt-1">Explore complementary flagship elixirs and dermal devices.</p>
            </div>

            <div id="related-product-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6"></div>
        </section>

    </main>
@endsection

@section('below_main')
<!-- STICKY MOBILE BOTTOM BUY BAR -->
    <div class="md:hidden fixed bottom-14 left-0 right-0 z-30 bg-white/95 backdrop-blur-md border-t border-purple-100 px-4 py-3 flex items-center gap-3 shadow-2xl">
        <div>
            <span class="text-[10px] text-slate-400 uppercase font-bold block leading-none">Price</span>
            <span class="text-lg font-black text-beautage-purple">$249.00</span>
        </div>
        <button onclick="addCurrentProductToCart()" class="flex-1 bg-beautage-pink hover:bg-beautage-pinkHover text-white font-black py-3 px-4 rounded-xl transition shadow-lg shadow-pink-500/30 flex items-center justify-center gap-2 text-xs uppercase tracking-wider">
            <i data-lucide="shopping-bag" class="w-4 h-4"></i> Add To Bag
        </button>
        <button onclick="buyNow()" class="bg-beautage-purple text-white font-bold py-3 px-4 rounded-xl text-xs uppercase tracking-wider">
            Buy Now
        </button>
    </div>

    <!-- MOBILE BOTTOM NAVIGATION -->
    <nav class="md:hidden fixed bottom-0 left-0 right-0 z-40 bg-white/95 backdrop-blur-md border-t border-purple-100 shadow-2xl px-3 py-2 flex items-center justify-around">
        <a href="{{ route('home') }}" onclick="setActiveBottomNav(this)" class="bottom-nav-item flex flex-col items-center justify-center text-slate-500 hover:text-beautage-purple transition py-1 px-2">
            <i data-lucide="home" class="w-5 h-5"></i>
            <span class="text-[10px] font-semibold mt-1">Home</span>
        </a>
        <a href="{{ route('collections') }}" onclick="setActiveBottomNav(this)" class="bottom-nav-item flex flex-col items-center justify-center text-slate-500 hover:text-beautage-purple transition py-1 px-2">
            <i data-lucide="layout-grid" class="w-5 h-5"></i>
            <span class="text-[10px] font-semibold mt-1">Categories</span>
        </a>
        
        <div class="relative -top-3">
            <button onclick="toggleMobileNav()" class="w-14 h-14 rounded-full bg-gradient-to-tr from-beautage-purpleDark via-beautage-purple to-beautage-pink shadow-xl shadow-purple-900/30 flex items-center justify-center border-4 border-white transition transform hover:scale-105 active:scale-95 group">
                <img src="{{ asset('images/beautagelogosquare2.png') }}" alt="Beautage" class="w-8 h-8 object-contain brightness-200 invert drop-shadow-md group-hover:rotate-12 transition" onerror="this.onerror=null; this.src='https://placehold.co/100x100/5E1F70/FFFFFF?text=B';">
            </button>
        </div>

        <a href="javascript:void(0)" onclick="toggleWishlistDrawer(); setActiveBottomNav(this);" class="bottom-nav-item relative flex flex-col items-center justify-center text-slate-500 hover:text-beautage-purple transition py-1 px-2">
            <i data-lucide="heart" class="w-5 h-5"></i>
            <span class="text-[10px] font-semibold mt-1">Wishlist</span>
            <span id="mobile-wishlist-badge" class="absolute top-0 right-2 bg-beautage-pink text-white text-[9px] font-bold w-3.5 h-3.5 rounded-full flex items-center justify-center shadow">0</span>
        </a>
        <a href="javascript:void(0)" onclick="toggleCartDrawer(); setActiveBottomNav(this);" class="bottom-nav-item relative flex flex-col items-center justify-center text-slate-500 hover:text-beautage-purple transition py-1 px-2">
            <i data-lucide="shopping-bag" class="w-5 h-5"></i>
            <span class="text-[10px] font-semibold mt-1">Bag</span>
            <span id="mobile-cart-badge" class="absolute top-0 right-2 bg-beautage-purple text-white text-[9px] font-bold w-3.5 h-3.5 rounded-full flex items-center justify-center shadow">0</span>
        </a>
    </nav>
@endsection

@push('scripts')
@include('partials.scripts.product-detail-data')
@verbatim
<script>
        
        let cart = [];
        let wishlist = [];
        let quantity = 1;
        let selectedColor = 'Rose Gold Edition';
        let selectedSize = 'Standard Pro Kit';

        const galleryImages = [
            "https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?auto=format&fit=crop&q=80&w=800",
            "https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&q=80&w=800",
            "https://images.unsplash.com/photo-1512290900722-9a702082b2d5?auto=format&fit=crop&q=80&w=800"
        ];

        document.addEventListener('DOMContentLoaded', () => {
            renderRelatedProducts();
            lucide.createIcons();
            startCountdownTimer();
            updateBundleTotal();
        });

        function showToast(message) {
            const container = document.getElementById('toast-container');
            const toast = document.createElement('div');
            toast.className = 'bg-beautage-purple text-white px-4 py-3 rounded-2xl shadow-2xl text-xs font-semibold flex items-center gap-3 border border-purple-500/40 pointer-events-auto transform translate-y-4 opacity-0 transition-all duration-300';
            toast.innerHTML = `<i data-lucide="sparkles" class="w-4 h-4 text-beautage-amber shrink-0"></i><span>${message}</span>`;
            container.appendChild(toast);
            lucide.createIcons();

            setTimeout(() => toast.classList.remove('translate-y-4', 'opacity-0'), 10);
            setTimeout(() => {
                toast.classList.add('translate-y-4', 'opacity-0');
                setTimeout(() => toast.remove(), 300);
            }, 3000);
        }

        function handleNewsletterSubmit(event) {
            event.preventDefault();
            const emailInput = document.getElementById('newsletter-email');
            const email = emailInput.value.trim();
            if(email) {
                showToast(`Thank you for subscribing! A 15% off coupon has been sent to ${email}.`);
                emailInput.value = '';
            }
        }

        function switchMainImage(index) {
            const mainImg = document.getElementById('main-product-img');
            mainImg.src = galleryImages[index];
            document.querySelectorAll('.thumb-btn').forEach((btn, idx) => {
                if(idx === index) {
                    btn.classList.add('border-beautage-purple');
                    btn.classList.remove('border-transparent');
                } else {
                    btn.classList.remove('border-beautage-purple');
                    btn.classList.add('border-transparent');
                }
            });
        }

        function openLightbox() {
            const modal = document.getElementById('lightbox-modal');
            const lightboxImg = document.getElementById('lightbox-img');
            lightboxImg.src = document.getElementById('main-product-img').src;
            modal.classList.remove('hidden');
        }

        function closeLightbox() {
            document.getElementById('lightbox-modal').classList.add('hidden');
        }

        function openVideoModal() {
            document.getElementById('video-modal').classList.remove('hidden');
        }

        function closeVideoModal() {
            document.getElementById('video-modal').classList.add('hidden');
        }

        function openReviewModal() {
            document.getElementById('review-modal').classList.remove('hidden');
        }

        function closeReviewModal() {
            document.getElementById('review-modal').classList.add('hidden');
        }

        function handleReviewSubmit(e) {
            e.preventDefault();
            closeReviewModal();
            showToast('Thank you! Your verified review has been submitted successfully.');
        }

        function selectVariant(type, value, btn) {
            if(type === 'color') {
                selectedColor = value;
                document.getElementById('selected-color-name').innerText = value;
                document.querySelectorAll('.variant-color-btn').forEach(b => b.classList.remove('ring-beautage-purple'));
                btn.classList.add('ring-beautage-purple');
            } else if(type === 'size') {
                selectedSize = value;
                document.getElementById('selected-size-name').innerText = value;
                document.querySelectorAll('.variant-size-btn').forEach(b => {
                    b.classList.remove('border-beautage-purple', 'bg-purple-50', 'text-beautage-purple');
                    b.classList.add('border-purple-200', 'bg-white', 'text-slate-700');
                });
                btn.classList.add('border-beautage-purple', 'bg-purple-50', 'text-beautage-purple');
                btn.classList.remove('border-purple-200', 'bg-white', 'text-slate-700');
            }
        }

        function adjustQty(delta) {
            quantity += delta;
            if(quantity < 1) quantity = 1;
            document.getElementById('product-qty').innerText = quantity;
            const totalPrice = (249.00 * quantity).toFixed(2);
            document.getElementById('btn-total-price').innerText = `$${totalPrice}`;
        }

        function addCurrentProductToCart() {
            const item = {
                ...currentProduct,
                name: `${currentProduct.name} (${selectedColor} / ${selectedSize})`,
                price: 249.00,
                qty: quantity
            };
            const existing = cart.find(i => i.name === item.name);
            if(existing) {
                existing.qty += quantity;
            } else {
                cart.push(item);
            }
            updateCartUI();
            showToast(`Added ${quantity}x "${currentProduct.name}" to your bag.`);
        }

        function buyNow() {
            addCurrentProductToCart();
            toggleCartDrawer();
        }

        function checkDelivery() {
            const code = document.getElementById('postal-input').value.trim();
            const res = document.getElementById('delivery-result');
            if(code.length >= 3) {
                res.classList.remove('hidden');
                res.innerHTML = `✓ Cash on Delivery available for ${code}. Express delivery in 2-3 business days.`;
            } else {
                res.classList.remove('hidden');
                res.className = 'text-xs font-semibold text-rose-600';
                res.innerHTML = `Please enter a valid postal code.`;
            }
        }

        function updateBundleTotal() {
            let total = 249.00;
            if(document.getElementById('bundle-check-2').checked) total += 89.00;
            if(document.getElementById('bundle-check-3').checked) total += 65.00;
            document.getElementById('bundle-total-price').innerText = `$${total.toFixed(2)}`;
        }

        function addBundleToCart() {
            addToCartDirect({ ...currentProduct, qty: 1 });
            if(document.getElementById('bundle-check-2').checked) {
                addToCartDirect({ id: 2, name: "Botanical Youth Renewal Serum", price: 89.00, image: "https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&q=80&w=600", qty: 1 });
            }
            if(document.getElementById('bundle-check-3').checked) {
                addToCartDirect({ id: 5, name: "Gold Infused Eye Contour Elixir", price: 65.00, image: "https://images.unsplash.com/photo-1608248597359-f5383a886f49?auto=format&fit=crop&q=80&w=600", qty: 1 });
            }
            toggleCartDrawer();
            showToast("Bundle added successfully to your bag!");
        }

        function addToCartDirect(item) {
            const existing = cart.find(i => i.id === item.id);
            if(existing) {
                existing.qty += item.qty;
            } else {
                cart.push(item);
            }
            updateCartUI();
        }

        function removeFromCart(id) {
            cart = cart.filter(i => i.id !== id);
            updateCartUI();
        }

        function updateCartQty(id, delta) {
            const item = cart.find(i => i.id === id);
            if(item) {
                item.qty += delta;
                if(item.qty <= 0) removeFromCart(id);
                else updateCartUI();
            }
        }

        function updateCartUI() {
            const totalCount = cart.reduce((sum, item) => sum + item.qty, 0);
            const subtotal = cart.reduce((sum, item) => sum + (item.price * item.qty), 0);
            const tax = subtotal * 0.08;
            const grandTotal = subtotal + tax;

            document.getElementById('cart-badge').innerText = totalCount;
            document.getElementById('mobile-cart-badge').innerText = totalCount;
            document.getElementById('cart-badge-desktop').innerText = totalCount;
            document.getElementById('cart-total-header').innerText = `$${subtotal.toFixed(2)}`;
            document.getElementById('cart-subtotal').innerText = `$${subtotal.toFixed(2)}`;
            document.getElementById('cart-tax').innerText = `$${tax.toFixed(2)}`;
            document.getElementById('cart-total').innerText = `$${grandTotal.toFixed(2)}`;

            const container = document.getElementById('cart-items');
            if(cart.length === 0) {
                container.innerHTML = `<div class="text-center py-12 text-slate-400 text-xs">Your shopping bag is currently empty.</div>`;
                return;
            }
            container.innerHTML = cart.map(item => `
                <div class="flex items-center gap-4 p-3 rounded-2xl bg-purple-50/50 border border-purple-100">
                    <img src="${item.image}" class="w-16 h-16 object-cover rounded-xl shrink-0">
                    <div class="flex-1 min-w-0">
                        <h4 class="text-xs font-bold text-beautage-purple truncate">${item.name}</h4>
                        <span class="text-xs font-extrabold text-slate-800">$${item.price.toFixed(2)}</span>
                        <div class="flex items-center gap-3 mt-2">
                            <div class="flex items-center border border-purple-200 rounded-lg bg-white overflow-hidden">
                                <button onclick="updateCartQty(${item.id}, -1)" class="px-2.5 py-1 text-xs font-bold text-slate-600 hover:bg-purple-50">-</button>
                                <span class="px-2.5 py-1 text-xs font-bold text-slate-800">${item.qty}</span>
                                <button onclick="updateCartQty(${item.id}, 1)" class="px-2.5 py-1 text-xs font-bold text-slate-600 hover:bg-purple-50">+</button>
                            </div>
                            <button onclick="removeFromCart(${item.id})" class="text-rose-500 text-xs font-semibold">Remove</button>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        function toggleCartDrawer() {
            const drawer = document.getElementById('cart-drawer');
            const backdrop = document.getElementById('cart-backdrop');
            const panel = document.getElementById('cart-panel');
            if(drawer.classList.contains('hidden')) {
                drawer.classList.remove('hidden');
                setTimeout(() => { backdrop.classList.remove('opacity-0'); panel.classList.remove('translate-x-full'); }, 10);
            } else {
                backdrop.classList.add('opacity-0');
                panel.classList.add('translate-x-full');
                setTimeout(() => drawer.classList.add('hidden'), 300);
            }
        }

        function toggleWishlistDrawer() {
            const drawer = document.getElementById('wishlist-drawer');
            const backdrop = document.getElementById('wishlist-backdrop');
            const panel = document.getElementById('wishlist-panel');
            if(drawer.classList.contains('hidden')) {
                drawer.classList.remove('hidden');
                setTimeout(() => { backdrop.classList.remove('opacity-0'); panel.classList.remove('translate-x-full'); }, 10);
            } else {
                backdrop.classList.add('opacity-0');
                panel.classList.add('translate-x-full');
                setTimeout(() => drawer.classList.add('hidden'), 300);
            }
        }

        function toggleMobileNav() {
            const overlay = document.getElementById('mobile-nav-overlay');
            const drawer = document.getElementById('mobile-nav-drawer');
            if(drawer.classList.contains('-translate-x-full')) {
                overlay.classList.remove('opacity-0', 'pointer-events-none');
                drawer.classList.remove('-translate-x-full');
            } else {
                overlay.classList.add('opacity-0', 'pointer-events-none');
                drawer.classList.add('-translate-x-full');
            }
        }

        function toggleMobileSearch() {
            const searchContainer = document.getElementById('mobile-search-container');
            searchContainer.classList.toggle('hidden');
            if(!searchContainer.classList.contains('hidden')) {
                document.getElementById('mobile-search-input').focus();
            }
        }

        function switchTab(tabKey) {
            ['desc', 'specs', 'routine', 'reviews'].forEach(k => {
                document.getElementById(`tab-content-${k}`).classList.add('hidden');
                const btn = document.getElementById(`tab-btn-${k}`);
                btn.classList.remove('border-b-2', 'border-beautage-purple', 'bg-white', 'text-beautage-purple', 'font-bold');
                btn.classList.add('text-slate-600', 'font-semibold');
            });
            document.getElementById(`tab-content-${tabKey}`).classList.remove('hidden');
            const activeBtn = document.getElementById(`tab-btn-${tabKey}`);
            activeBtn.classList.add('border-b-2', 'border-beautage-purple', 'bg-white', 'text-beautage-purple', 'font-bold');
            activeBtn.classList.remove('text-slate-600', 'font-semibold');
        }

        function renderRelatedProducts() {
            const container = document.getElementById('related-product-grid');
            container.innerHTML = relatedProducts.map(p => `
                <div class="bg-white rounded-2xl p-4 border border-purple-100 hover:border-beautage-pink transition-all duration-300 shadow-sm hover:shadow-xl flex flex-col justify-between group">
                    <div class="relative rounded-xl overflow-hidden bg-purple-50 mb-4 aspect-square">
                        <img src="${p.image}" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 group-hover:opacity-0">
                        <img src="${p.hoverImage}" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                        <span class="absolute top-2.5 left-2.5 bg-beautage-purple text-white text-[10px] font-extrabold px-2.5 py-1 rounded-full uppercase">${p.badge}</span>
                    </div>
                    <div>
                        <span class="text-[10px] uppercase font-bold text-beautage-pink tracking-widest">${p.category}</span>
                        <h3 class="text-sm font-bold text-beautage-purple mt-1 line-clamp-1">${p.name}</h3>
                    </div>
                    <div class="mt-4 pt-3 border-t border-purple-50 flex items-center justify-between">
                        <span class="text-base font-black text-slate-800">$${p.price.toFixed(2)}</span>
                        <button onclick="addToCartDirect({id: ${p.id}, name: '${p.name}', price: ${p.price}, image: '${p.image}', qty: 1}); showToast('Added to bag');" class="px-3.5 py-2 rounded-xl bg-beautage-pink hover:bg-beautage-pinkHover text-white text-xs font-bold transition shadow-sm">Add</button>
                    </div>
                </div>
            `).join('');
            lucide.createIcons();
        }

        function startCountdownTimer() {
            let totalSeconds = 4 * 3600 + 32 * 60 + 19;
            setInterval(() => {
                if(totalSeconds > 0) totalSeconds--;
                const h = Math.floor(totalSeconds / 3600).toString().padStart(2, '0');
                const m = Math.floor((totalSeconds % 3600) / 60).toString().padStart(2, '0');
                const s = (totalSeconds % 60).toString().padStart(2, '0');
                document.getElementById('announcement-timer').innerText = `${h}:${m}:${s}`;
                document.getElementById('pdp-countdown').innerText = `${h}:${m}:${s}`;
            }, 1000);
        }

        function setActiveBottomNav(el) {
            document.querySelectorAll('.bottom-nav-item').forEach(item => {
                item.classList.remove('text-beautage-pink');
                item.classList.add('text-slate-500');
            });
            el.classList.remove('text-slate-500');
            el.classList.add('text-beautage-pink');
        }
    </script>
@endverbatim
@endpush
