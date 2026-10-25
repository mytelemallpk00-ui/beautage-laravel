@extends('layouts.app')

@section('title', 'Beautage — Elevate Your Natural Elegance | Flagship Store')

@section('body_attrs')
class="bg-slate-50 text-slate-800 font-sans antialiased min-h-screen flex flex-col selection:bg-beautage-pink selection:text-white pb-24 md:pb-0"
@endsection

@section('content')
<main class="w-full flex-1 flex flex-col">

        <!-- 3. HERO BANNER & HYBRID PROMO CARDS -->
        <section id="hero" class="w-full px-6 sm:px-12 xl:px-20 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 w-full">
                
                <div class="lg:col-span-8 relative rounded-3xl overflow-hidden bg-gradient-to-r from-purple-900 via-beautage-purple to-beautage-purpleDark text-white p-8 sm:p-12 xl:p-16 shadow-xl flex items-center min-h-[460px]">
                    <div class="absolute -right-12 -top-12 w-96 h-96 bg-beautage-pink/30 rounded-full blur-3xl pointer-events-none"></div>
                    
                    <div class="relative z-10 max-w-2xl space-y-6">
                        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold bg-white/10 text-pink-200 border border-white/20 backdrop-blur-sm">
                            <span class="w-2 h-2 rounded-full bg-beautage-pink animate-pulse"></span>
                            NEW BEAUTAGE TECH RELEASE
                        </span>
                        <h1 class="text-3xl sm:text-5xl xl:text-6xl font-serif font-bold text-white leading-tight tracking-tight">
                            Lumina Pro 7-Spectrum <br><span class="bg-clip-text text-transparent bg-gradient-to-r from-pink-300 via-amber-200 to-white">LED Therapy Mask</span>
                        </h1>
                        <p class="text-purple-100 text-xs sm:text-sm xl:text-base leading-relaxed">
                            Medical-grade dermal light therapy engine. Targets collagen revival, deep pigment balancing, and targeted cellular radiance.
                        </p>

                        <div class="flex flex-wrap items-center gap-6 pt-2">
                            <div>
                                <span class="text-xs text-purple-200 block uppercase font-semibold">Special Intro Price</span>
                                <div class="flex items-baseline gap-2">
                                    <span class="text-3xl font-extrabold text-white">$249.00</span>
                                    <span class="text-sm text-purple-300 line-through">$349.00</span>
                                </div>
                            </div>
                            <button onclick="addToCart(1)" class="bg-beautage-pink hover:bg-beautage-pinkHover text-white font-bold px-8 py-3.5 rounded-xl transition flex items-center gap-2 shadow-lg shadow-pink-500/30 text-xs uppercase tracking-wider">
                                <span>Reserve Order</span>
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>

                    <div class="hidden sm:block absolute right-8 bottom-6 lg:bottom-10 w-64 xl:w-80 pointer-events-none opacity-95">
                        <img src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?auto=format&fit=crop&q=80&w=600" alt="Lumina Pro Mask" class="w-full h-auto object-cover rounded-2xl border-2 border-white/20 shadow-2xl transform rotate-[-2deg]" onerror="this.onerror=null; this.src='https://placehold.co/400x400/5E1F70/FFFFFF?text=Lumina+Pro';">
                    </div>
                </div>

                <div class="lg:col-span-4 flex flex-col gap-6">
                    <div class="flex-1 rounded-2xl bg-white p-6 border border-purple-100 shadow-md flex flex-col justify-between relative overflow-hidden group">
                        <div class="absolute right-0 top-0 w-32 h-32 bg-pink-50 rounded-full -mr-10 -mt-10 group-hover:scale-110 transition duration-300"></div>
                        <div>
                            <span class="text-[10px] font-extrabold text-beautage-pink bg-pink-50 px-2.5 py-1 rounded-full uppercase tracking-wider border border-pink-200">Bestseller</span>
                            <h3 class="text-lg font-bold text-beautage-purple mt-3">Botanical Youth Serum</h3>
                            <p class="text-xs text-slate-500 mt-1">100% Organic Hyaluronic Acid & Rose Stem Cells.</p>
                        </div>
                        <div class="mt-6 flex items-center justify-between z-10">
                            <span class="text-lg font-extrabold text-slate-800">$89.00</span>
                            <button onclick="addToCart(2)" class="text-xs font-bold text-beautage-pink hover:text-beautage-pinkHover flex items-center gap-1">
                                Add To Bag <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                            </button>
                        </div>
                    </div>

                    <div class="flex-1 rounded-2xl bg-gradient-to-br from-beautage-purpleLight to-pink-50 p-6 text-beautage-purple border border-purple-200 shadow-md flex flex-col justify-between relative overflow-hidden">
                        <div>
                            <span class="text-[10px] font-extrabold text-beautage-purple bg-purple-100 border border-purple-200 px-2.5 py-1 rounded-full uppercase tracking-wider">Save 25%</span>
                            <h3 class="text-lg font-bold text-beautage-purple mt-3">Sculpting Microcurrent Wand</h3>
                            <p class="text-xs text-slate-600 mt-1">Tone & lift facial muscles with targeted EMS energy.</p>
                        </div>
                        <div class="mt-6 flex items-center justify-between z-10">
                            <span class="text-lg font-extrabold text-beautage-purple">$129.00</span>
                            <button onclick="addToCart(3)" class="px-4 py-2 bg-beautage-purple hover:bg-beautage-purpleDark text-white font-bold text-xs rounded-xl transition shadow-sm">
                                Claim Offer
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- 4. CATEGORY SECTION -->
        <section class="w-full px-6 sm:px-12 xl:px-20 py-10">
            <div class="text-center max-w-3xl mx-auto space-y-3 mb-8">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-bold bg-purple-100 text-beautage-purple border border-purple-200 shadow-xs">
                    <i data-lucide="sparkles" class="w-3.5 h-3.5 text-beautage-pink"></i>
                    <span>BEAUTAGE FLAGSHIP STORE • 100% ORIGINAL & VERIFIED PRODUCTS</span>
                </div>
                
                <h2 class="text-2xl sm:text-4xl font-serif font-bold text-beautage-purple tracking-tight">
                    Pakistan's Best Beauty Store: Shop Smart, Glow Gold Every Day
                </h2>

                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed max-w-2xl mx-auto font-medium">
                    Browse thousands of authentic beauty essentials at the best online shopping store in Pakistan, from professional LED devices and organic botanical serums to luxury fragrances and hair care rituals, all in one trusted place.
                </p>

                <div class="flex flex-wrap items-center justify-center gap-3 pt-2">
                    <div class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-bold bg-purple-50 text-beautage-purple border border-purple-200 shadow-xs">
                        <i data-lucide="shield-check" class="w-4 h-4 text-beautage-pink"></i>
                        <span>Authorized Brand Stores</span>
                    </div>
                    <div class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-bold bg-purple-50 text-beautage-purple border border-purple-200 shadow-xs">
                        <i data-lucide="rotate-ccw" class="w-4 h-4 text-emerald-600"></i>
                        <span>Hassle-Free Returns</span>
                    </div>
                    <div class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-bold bg-purple-50 text-beautage-purple border border-purple-200 shadow-xs">
                        <i data-lucide="truck" class="w-4 h-4 text-amber-600"></i>
                        <span>Cash on Delivery Available</span>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-7 gap-5 pt-4">
                
                <div onclick="filterCategory('Skincare')" class="bg-white p-5 rounded-2xl border border-purple-100 hover:border-beautage-pink shadow-sm hover:shadow-xl transition-all duration-300 cursor-pointer text-center group flex flex-col items-center justify-between">
                    <div class="w-24 h-24 rounded-xl bg-purple-50 flex items-center justify-center overflow-hidden mb-3 p-2 group-hover:scale-105 transition duration-300">
                        <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&q=80&w=300" alt="Skincare" class="w-full h-full object-contain drop-shadow" onerror="this.onerror=null; this.src='https://placehold.co/150x150/5E1F70/FFFFFF?text=Skincare';">
                    </div>
                    <span class="text-xs font-bold text-beautage-purple group-hover:text-beautage-pink transition">Skincare</span>
                </div>

                <div onclick="filterCategory('Beauty Tech')" class="bg-white p-5 rounded-2xl border border-purple-100 hover:border-beautage-pink shadow-sm hover:shadow-xl transition-all duration-300 cursor-pointer text-center group flex flex-col items-center justify-between">
                    <div class="w-24 h-24 rounded-xl bg-purple-50 flex items-center justify-center overflow-hidden mb-3 p-2 group-hover:scale-105 transition duration-300">
                        <img src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?auto=format&fit=crop&q=80&w=300" alt="Beauty Tech" class="w-full h-full object-contain drop-shadow" onerror="this.onerror=null; this.src='https://placehold.co/150x150/5E1F70/FFFFFF?text=Beauty+Tech';">
                    </div>
                    <span class="text-xs font-bold text-beautage-purple group-hover:text-beautage-pink transition">Beauty Tech</span>
                </div>

                <div onclick="filterCategory('Haircare')" class="bg-white p-5 rounded-2xl border border-purple-100 hover:border-beautage-pink shadow-sm hover:shadow-xl transition-all duration-300 cursor-pointer text-center group flex flex-col items-center justify-between">
                    <div class="w-24 h-24 rounded-xl bg-purple-50 flex items-center justify-center overflow-hidden mb-3 p-2 group-hover:scale-105 transition duration-300">
                        <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&q=80&w=300" alt="Hair Care" class="w-full h-full object-contain drop-shadow" onerror="this.onerror=null; this.src='https://placehold.co/150x150/5E1F70/FFFFFF?text=Hair+Care';">
                    </div>
                    <span class="text-xs font-bold text-beautage-purple group-hover:text-beautage-pink transition">Hair Care</span>
                </div>

                <div onclick="filterCategory('Fragrance')" class="bg-white p-5 rounded-2xl border border-purple-100 hover:border-beautage-pink shadow-sm hover:shadow-xl transition-all duration-300 cursor-pointer text-center group flex flex-col items-center justify-between">
                    <div class="w-24 h-24 rounded-xl bg-purple-50 flex items-center justify-center overflow-hidden mb-3 p-2 group-hover:scale-105 transition duration-300">
                        <img src="https://images.unsplash.com/photo-1541643600914-78b084683601?auto=format&fit=crop&q=80&w=300" alt="Fragrance" class="w-full h-full object-contain drop-shadow" onerror="this.onerror=null; this.src='https://placehold.co/150x150/5E1F70/FFFFFF?text=Fragrance';">
                    </div>
                    <span class="text-xs font-bold text-beautage-purple group-hover:text-beautage-pink transition">Fragrance</span>
                </div>

                <div onclick="filterCategory('Wellness')" class="bg-white p-5 rounded-2xl border border-purple-100 hover:border-beautage-pink shadow-sm hover:shadow-xl transition-all duration-300 cursor-pointer text-center group flex flex-col items-center justify-between">
                    <div class="w-24 h-24 rounded-xl bg-purple-50 flex items-center justify-center overflow-hidden mb-3 p-2 group-hover:scale-105 transition duration-300">
                        <img src="https://images.unsplash.com/photo-1608248597359-f5383a886f49?auto=format&fit=crop&q=80&w=300" alt="Wellness" class="w-full h-full object-contain drop-shadow" onerror="this.onerror=null; this.src='https://placehold.co/150x150/5E1F70/FFFFFF?text=Wellness';">
                    </div>
                    <span class="text-xs font-bold text-beautage-purple group-hover:text-beautage-pink transition">Wellness & Spa</span>
                </div>

                <div onclick="filterCategory('Skincare')" class="bg-white p-5 rounded-2xl border border-purple-100 hover:border-beautage-pink shadow-sm hover:shadow-xl transition-all duration-300 cursor-pointer text-center group flex flex-col items-center justify-between">
                    <div class="w-24 h-24 rounded-xl bg-purple-50 flex items-center justify-center overflow-hidden mb-3 p-2 group-hover:scale-105 transition duration-300">
                        <img src="https://images.unsplash.com/photo-1535585209827-a15fcdbc4c2d?auto=format&fit=crop&q=80&w=300" alt="Serums" class="w-full h-full object-contain drop-shadow" onerror="this.onerror=null; this.src='https://placehold.co/150x150/5E1F70/FFFFFF?text=Serums';">
                    </div>
                    <span class="text-xs font-bold text-beautage-purple group-hover:text-beautage-pink transition">Organic Serums</span>
                </div>

                <div onclick="filterCategory('all')" class="bg-gradient-to-br from-beautage-purple to-beautage-purpleDark p-5 rounded-2xl border border-purple-700 shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer text-center group flex flex-col items-center justify-between text-white">
                    <div class="w-24 h-24 rounded-xl bg-white/10 flex items-center justify-center overflow-hidden mb-3 p-2 group-hover:scale-105 transition duration-300">
                        <i data-lucide="arrow-right" class="w-10 h-10 text-pink-300"></i>
                    </div>
                    <span class="text-xs font-bold text-white group-hover:text-pink-200 transition">View All Products</span>
                </div>

            </div>
        </section>

        <!-- 5. DEDICATED SHOWCASE SECTION -->
        <section id="category-showcase" class="w-full px-6 sm:px-12 xl:px-20 py-12 bg-white border-y border-purple-100 my-4 shadow-xs">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
                <div>
                    <span class="text-xs font-extrabold uppercase tracking-widest text-beautage-pink bg-pink-50 px-3 py-1 rounded-full border border-pink-200 inline-block mb-2">Curated Departments</span>
                    <h2 class="text-2xl sm:text-3xl font-serif font-bold text-beautage-purple">Shop by Category Showcase</h2>
                    <p class="text-xs text-slate-500 mt-1">Explore our signature lines engineered for targeted elegance and results.</p>
                </div>
                <div class="flex items-center gap-2 overflow-x-auto pb-2 md:pb-0 no-scrollbar">
                    <button onclick="switchCategoryShowcase('Skincare')" id="showcase-tab-Skincare" class="showcase-tab px-4 py-2 rounded-xl text-xs font-bold bg-beautage-purple text-white transition shadow-sm whitespace-nowrap">Skincare</button>
                    <button onclick="switchCategoryShowcase('Beauty Tech')" id="showcase-tab-Beauty Tech" class="showcase-tab px-4 py-2 rounded-xl text-xs font-bold bg-purple-50 text-beautage-purple hover:bg-purple-100 transition whitespace-nowrap">Beauty Tech</button>
                    <button onclick="switchCategoryShowcase('Haircare')" id="showcase-tab-Haircare" class="showcase-tab px-4 py-2 rounded-xl text-xs font-bold bg-purple-50 text-beautage-purple hover:bg-purple-100 transition whitespace-nowrap">Hair Care</button>
                    <button onclick="switchCategoryShowcase('Fragrance')" id="showcase-tab-Fragrance" class="showcase-tab px-4 py-2 rounded-xl text-xs font-bold bg-purple-50 text-beautage-purple hover:bg-purple-100 transition whitespace-nowrap">Fragrance</button>
                </div>
            </div>

            <div id="showcase-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-6"></div>
        </section>
 <!-- 6. REDESIGNED PROFESSIONAL LUXURY FLASH DEALS ENGINE -->
        <section id="flash-deals" class="w-full px-6 sm:px-12 xl:px-20 py-16 bg-gradient-to-b from-purple-900 via-beautage-purpleDark to-slate-950 text-white relative overflow-hidden my-6 shadow-2xl border-y border-pink-500/20">
            <!-- Background Decorative Ambient Glows -->
            <div class="absolute -top-32 -left-32 w-96 h-96 bg-beautage-pink/20 rounded-full blur-[100px] pointer-events-none"></div>
            <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-amber-500/15 rounded-full blur-[100px] pointer-events-none"></div>

            <div class="relative z-10 max-w-7xl mx-auto">
                <!-- Header Banner Row -->
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 mb-10 pb-6 border-b border-purple-800/80">
                    <div class="space-y-2">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full text-xs font-black bg-gradient-to-r from-beautage-pink to-amber-500 text-white shadow-lg animate-pulseGlow">
                            <i data-lucide="flame" class="w-4 h-4 fill-current text-amber-200"></i>
                            <span>TIME-SENSITIVE LUXURY FLASH DEALS</span>
                        </div>
                        <h2 class="text-3xl sm:text-4xl font-serif font-bold tracking-tight text-white flex items-center gap-3">
                            <span>Exclusive Flash Vault</span>
                            <span class="text-xs font-sans font-extrabold px-3 py-1 rounded-lg bg-white/10 text-pink-200 border border-white/20">Up to 50% OFF</span>
                        </h2>
                        <p class="text-purple-200 text-xs sm:text-sm font-medium max-w-xl">
                            Lock in verified flagship skincare, advanced dermal tech, and artisanal fragrances at unmatched introductory prices before inventory depletion.
                        </p>
                    </div>

                    <!-- Live Countdown Urgency Timer -->
                    <div class="flex items-center gap-4 bg-purple-950/90 border border-purple-600/60 p-4 rounded-2xl shadow-xl backdrop-blur-md">
                        <div class="w-10 h-10 rounded-xl bg-beautage-pink/20 text-beautage-pink flex items-center justify-center shrink-0">
                            <i data-lucide="timer" class="w-5 h-5 text-pink-300 animate-spin" style="animation-duration: 12s;"></i>
                        </div>
                        <div>
                            <span class="text-[10px] text-purple-300 uppercase font-extrabold tracking-widest block">Flash Sale Closes In</span>
                            <div class="flex items-center gap-2 font-mono mt-0.5">
                                <div class="bg-purple-900 text-white px-2.5 py-1 rounded-lg text-sm font-black border border-purple-700 shadow-inner" id="flash-timer-hours">05</div>
                                <span class="font-bold text-pink-400">:</span>
                                <div class="bg-purple-900 text-white px-2.5 py-1 rounded-lg text-sm font-black border border-purple-700 shadow-inner" id="flash-timer-minutes">42</div>
                                <span class="font-bold text-pink-400">:</span>
                                <div class="bg-purple-900 text-white px-2.5 py-1 rounded-lg text-sm font-black border border-purple-700 shadow-inner" id="flash-timer-seconds">18</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category Filtering Tabs for Flash Deals -->
                <div class="flex items-center gap-2.5 overflow-x-auto pb-4 no-scrollbar mb-8">
                    <button onclick="filterFlashDeals('all')" id="flash-tab-all" class="flash-filter-btn px-5 py-2.5 rounded-xl text-xs font-bold bg-beautage-pink text-white transition shadow-md shadow-pink-500/30 whitespace-nowrap flex items-center gap-2">
                        <i data-lucide="sparkles" class="w-3.5 h-3.5"></i> All Flash Deals
                    </button>
                    <button onclick="filterFlashDeals('Beauty Tech')" id="flash-tab-Beauty Tech" class="flash-filter-btn px-5 py-2.5 rounded-xl text-xs font-bold bg-purple-900/80 text-purple-200 hover:bg-purple-800 transition border border-purple-700/60 whitespace-nowrap flex items-center gap-2">
                        <i data-lucide="zap" class="w-3.5 h-3.5 text-pink-300"></i> Beauty Tech
                    </button>
                    <button onclick="filterFlashDeals('Skincare')" id="flash-tab-Skincare" class="flash-filter-btn px-5 py-2.5 rounded-xl text-xs font-bold bg-purple-900/80 text-purple-200 hover:bg-purple-800 transition border border-purple-700/60 whitespace-nowrap flex items-center gap-2">
                        <i data-lucide="droplet" class="w-3.5 h-3.5 text-amber-300"></i> Skincare Elixirs
                    </button>
                    <button onclick="filterFlashDeals('Haircare')" id="flash-tab-Haircare" class="flash-filter-btn px-5 py-2.5 rounded-xl text-xs font-bold bg-purple-900/80 text-purple-200 hover:bg-purple-800 transition border border-purple-700/60 whitespace-nowrap flex items-center gap-2">
                        <i data-lucide="scissors" class="w-3.5 h-3.5 text-cyan-300"></i> Hair Care
                    </button>
                    <button onclick="filterFlashDeals('Fragrance')" id="flash-tab-Fragrance" class="flash-filter-btn px-5 py-2.5 rounded-xl text-xs font-bold bg-purple-900/80 text-purple-200 hover:bg-purple-800 transition border border-purple-700/60 whitespace-nowrap flex items-center gap-2">
                        <i data-lucide="flower-2" class="w-3.5 h-3.5 text-rose-300"></i> Fragrance
                    </button>
                </div>

                <!-- Flash Deals Grid Layout with Spotlight & Product Cards -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    
                    <!-- Spotlight Featured Flash Deal Card (Span 4) -->
                    <div class="lg:col-span-4 rounded-3xl bg-gradient-to-b from-purple-950 via-purple-900 to-slate-900 border-2 border-pink-500/40 p-6 shadow-2xl relative flex flex-col justify-between group">
                        <div class="absolute -top-3 right-6 bg-gradient-to-r from-beautage-pink to-amber-500 text-white text-[10px] font-black uppercase tracking-widest px-3.5 py-1 rounded-full shadow-lg">
                            🔥 Spotlight Deal • Save 42%
                        </div>

                        <div>
                            <div class="relative rounded-2xl overflow-hidden bg-purple-950 aspect-square mb-5 border border-purple-700/60 shadow-inner">
                                <img src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?auto=format&fit=crop&q=80&w=600" alt="Lumina Pro Flash Spotlight" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" onerror="this.onerror=null; this.src='https://placehold.co/500x500/3B0764/FFFFFF?text=Spotlight+Deal';">
                                <span class="absolute bottom-3 left-3 bg-black/70 backdrop-blur-md text-white text-[11px] font-extrabold px-3 py-1 rounded-lg">
                                    ⭐ 4.9 (128 Reviews)
                                </span>
                            </div>

                            <span class="text-[11px] font-extrabold uppercase tracking-widest text-pink-300 block">Flagship Device Engine</span>
                            <h3 class="text-xl font-serif font-bold text-white mt-1 group-hover:text-pink-300 transition">Lumina Pro 7-Spectrum LED Mask</h3>
                            <p class="text-xs text-purple-200 mt-2 leading-relaxed">Medical-grade photon light therapy for targeted cellular rejuvenation and acne clearance.</p>

                            <!-- Scarcity Progress Bar -->
                            <div class="mt-5 space-y-1.5">
                                <div class="flex justify-between text-[11px] font-bold">
                                    <span class="text-amber-300 flex items-center gap-1"><i data-lucide="flame" class="w-3 h-3 fill-current"></i> 84% Claimed</span>
                                    <span class="text-purple-300">Only 4 units left</span>
                                </div>
                                <div class="w-full h-2 rounded-full bg-purple-950 overflow-hidden border border-purple-800">
                                    <div class="h-full bg-gradient-to-r from-beautage-pink to-amber-400 rounded-full w-[84%] animate-pulse"></div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 pt-4 border-t border-purple-800/80 flex items-center justify-between">
                            <div>
                                <span class="text-xs text-purple-300 uppercase block font-semibold">Flash Price</span>
                                <div class="flex items-baseline gap-2">
                                    <span class="text-2xl font-black text-white">$249.00</span>
                                    <span class="text-xs text-purple-400 line-through">$349.00</span>
                                </div>
                            </div>
                            <button onclick="addToCart(1)" class="px-5 py-3 bg-gradient-to-r from-beautage-pink to-pink-600 hover:from-pink-600 hover:to-beautage-pink text-white font-black text-xs uppercase tracking-wider rounded-xl transition shadow-lg shadow-pink-500/40 flex items-center gap-2">
                                <i data-lucide="shopping-bag" class="w-4 h-4"></i> Claim Deal
                            </button>
                        </div>
                    </div>

                    <!-- Dynamic Flash Deals Grid (Span 8) -->
                    <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6" id="flash-deals-grid-container">
                        <!-- Populated dynamically via JS -->
                    </div>

                </div>
            </div>
        </section>
        <!-- 5.5. HORIZONTAL 4-IMAGE BANNER GALLERY -->
        <section class="w-full px-6 sm:px-12 xl:px-20 py-10">
            <div class="text-center max-w-2xl mx-auto mb-8">
                <span class="inline-block px-3 py-1 rounded-full text-[10px] uppercase font-extrabold tracking-widest bg-purple-100 text-beautage-purple border border-purple-200 mb-2">
                    FLAGSHIP COLLECTIONS
                </span>
                <h2 class="text-2xl sm:text-3xl font-serif font-bold text-beautage-purple">Explore Signature Aesthetics</h2>
                <p class="text-xs text-slate-500 mt-1">Immerse yourself in our curated visual gallery highlighting premium craftsmanship and organic formulations.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="relative rounded-3xl overflow-hidden aspect-[4/5] group shadow-lg border border-purple-100 cursor-pointer" onclick="showToast('Exploring Organic Botanicals collection')">
                    <img src="https://images.unsplash.com/photo-1608248597359-f5383a886f49?auto=format&fit=crop&q=80&w=600" alt="Organic Botanicals" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-beautage-purpleDark/90 via-beautage-purple/30 to-transparent"></div>
                    <div class="absolute bottom-0 inset-x-0 p-6 text-white text-center transform transition duration-300 group-hover:-translate-y-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-widest text-pink-300 block mb-1">Pure Formulation</span>
                        <h3 class="text-base font-serif font-bold">Organic Botanicals</h3>
                        <p class="text-[11px] text-purple-100 mt-1 opacity-90">Sustainably harvested plant extracts.</p>
                    </div>
                </div>

                <div class="relative rounded-3xl overflow-hidden aspect-[4/5] group shadow-lg border border-purple-100 cursor-pointer" onclick="showToast('Exploring Photon LED Tech collection')">
                    <img src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?auto=format&fit=crop&q=80&w=600" alt="Photon LED Tech" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-beautage-purpleDark/90 via-beautage-purple/30 to-transparent"></div>
                    <div class="absolute bottom-0 inset-x-0 p-6 text-white text-center transform transition duration-300 group-hover:-translate-y-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-widest text-pink-300 block mb-1">Advanced Dermal</span>
                        <h3 class="text-base font-serif font-bold">Photon LED Tech</h3>
                        <p class="text-[11px] text-purple-100 mt-1 opacity-90">Medical-grade light therapy at home.</p>
                    </div>
                </div>

                <div class="relative rounded-3xl overflow-hidden aspect-[4/5] group shadow-lg border border-purple-100 cursor-pointer" onclick="showToast('Exploring Artisanal Fragrances collection')">
                    <img src="https://images.unsplash.com/photo-1541643600914-78b084683601?auto=format&fit=crop&q=80&w=600" alt="Artisanal Fragrances" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-beautage-purpleDark/90 via-beautage-purple/30 to-transparent"></div>
                    <div class="absolute bottom-0 inset-x-0 p-6 text-white text-center transform transition duration-300 group-hover:-translate-y-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-widest text-pink-300 block mb-1">Signature Scent</span>
                        <h3 class="text-base font-serif font-bold">Artisanal Fragrances</h3>
                        <p class="text-[11px] text-purple-100 mt-1 opacity-90">Enchanting notes for lasting elegance.</p>
                    </div>
                </div>

                <div class="relative rounded-3xl overflow-hidden aspect-[4/5] group shadow-lg border border-purple-100 cursor-pointer" onclick="showToast('Exploring Luxury Hair Care collection')">
                    <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&q=80&w=600" alt="Luxury Hair Care" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-beautage-purpleDark/90 via-beautage-purple/30 to-transparent"></div>
                    <div class="absolute bottom-0 inset-x-0 p-6 text-white text-center transform transition duration-300 group-hover:-translate-y-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-widest text-pink-300 block mb-1">Ionic Styling</span>
                        <h3 class="text-base font-serif font-bold">Luxury Hair Care</h3>
                        <p class="text-[11px] text-purple-100 mt-1 opacity-90">Mirror shine and silky repair rituals.</p>
                    </div>
                </div>
            </div>
        </section>

       

        <!-- 7. ARCHITECTURAL PROMO BANNER -->
        <section id="featured-section" class="w-full px-6 sm:px-12 xl:px-20 py-8">
            <div class="rounded-3xl bg-gradient-to-r from-purple-900 via-beautage-purple to-purple-950 text-white p-8 sm:p-12 xl:p-16 border border-purple-800 shadow-2xl relative overflow-hidden flex flex-col lg:flex-row items-center justify-between gap-8">
                <div class="absolute -top-24 -left-24 w-80 h-80 bg-beautage-pink/20 rounded-full blur-3xl pointer-events-none"></div>
                
                <div class="max-w-xl z-10">
                    <span class="text-xs font-bold uppercase tracking-widest text-pink-300">Dermal Innovation</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold mt-2 leading-tight">Thermal Cryo Sculpting Engine</h2>
                    <p class="text-purple-100 text-xs sm:text-sm mt-3 leading-relaxed">
                        Dual-action cryo-cooling and deep thermal vibration for pore tightening, lymphatic drainage, and immediate jawline definition.
                    </p>
                    <div class="mt-6 flex items-center gap-4">
                        <span class="text-3xl font-extrabold text-white">$179.00</span>
                        <span class="text-sm text-purple-300 line-through">$229.00</span>
                    </div>
                    <div class="mt-8 flex items-center gap-4">
                        <button onclick="addToCart(4)" class="px-6 py-3 bg-beautage-pink hover:bg-beautage-pinkHover text-white font-bold text-xs uppercase tracking-wider rounded-xl transition shadow-lg shadow-pink-500/30">
                            Add To Bag
                        </button>
                        <button onclick="openQuickView(4)" class="px-6 py-3 bg-white/10 hover:bg-white/20 text-white font-bold text-xs uppercase tracking-wider rounded-xl transition border border-white/20">
                            View Specs
                        </button>
                    </div>
                </div>

                <div class="relative z-10 w-full lg:w-1/2 flex justify-center">
                    <div class="w-full max-w-md h-60 rounded-2xl bg-white/10 backdrop-blur-md border border-white/20 flex flex-col items-center justify-center shadow-2xl relative p-6 text-center">
                        <i data-lucide="sparkles" class="w-16 h-16 text-pink-300 mb-3"></i>
                        <span class="text-sm font-serif font-bold text-white">Beautage Thermal Cryo Wand</span>
                        <span class="text-xs text-purple-200 mt-1">Ergonomic Rose-Gold Finish</span>
                        <span class="absolute bottom-4 right-4 text-[10px] bg-beautage-pink text-white px-2.5 py-1 rounded-full font-bold shadow">Clinical Grade</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- 8. TRENDING PRODUCTS -->
        <section id="trending-section" class="w-full px-6 sm:px-12 xl:px-20 py-12">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
                <div>
                    <div class="flex items-center gap-2 text-beautage-amber font-bold text-sm tracking-wide uppercase mb-1">
                        <i data-lucide="sparkles" class="w-4 h-4 fill-current"></i>
                        <span>Curated Selection</span>
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-beautage-purple">Trending Beauty & Wellness Catalog</h2>
                    <p class="text-slate-500 text-xs mt-1">High-performance formulations & devices designed to elevate your elegance</p>
                </div>

                <div class="flex items-center gap-2 overflow-x-auto pb-2 md:pb-0 no-scrollbar">
                    <button onclick="setFilterTab('all')" id="tab-all" class="tab-btn px-4 py-2 rounded-xl text-xs font-semibold bg-beautage-purple text-white transition flex items-center gap-2 whitespace-nowrap shadow-xs">
                        <i data-lucide="layers" class="w-4 h-4"></i> All Items
                    </button>
                    <button onclick="setFilterTab('Skincare')" id="tab-Skincare" class="tab-btn px-4 py-2 rounded-xl text-xs font-semibold bg-white hover:bg-purple-50 text-slate-700 border border-purple-100 transition flex items-center gap-2 whitespace-nowrap">
                        <i data-lucide="droplet" class="w-4 h-4 text-beautage-pink"></i> Skincare
                    </button>
                    <button onclick="setFilterTab('Beauty Tech')" id="tab-Beauty Tech" class="tab-btn px-4 py-2 rounded-xl text-xs font-semibold bg-white hover:bg-purple-50 text-slate-700 border border-purple-100 transition flex items-center gap-2 whitespace-nowrap">
                        <i data-lucide="zap" class="w-4 h-4 text-beautage-purple"></i> Beauty Tech
                    </button>
                    <button onclick="setFilterTab('Haircare')" id="tab-Haircare" class="tab-btn px-4 py-2 rounded-xl text-xs font-semibold bg-white hover:bg-purple-50 text-slate-700 border border-purple-100 transition flex items-center gap-2 whitespace-nowrap">
                        <i data-lucide="scissors" class="w-4 h-4 text-beautage-amber"></i> Hair Care
                    </button>
                    <button onclick="setFilterTab('Fragrance')" id="tab-Fragrance" class="tab-btn px-4 py-2 rounded-xl text-xs font-semibold bg-white hover:bg-purple-50 text-slate-700 border border-purple-100 transition flex items-center gap-2 whitespace-nowrap">
                        <i data-lucide="flower-2" class="w-4 h-4 text-rose-500"></i> Fragrance
                    </button>
                </div>
            </div>

            <div id="product-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6"></div>
        </section>

        <!-- 9. CELEBRITY ENDORSEMENT -->
        <section id="celebrity-endorsement" class="w-full px-6 sm:px-12 xl:px-20 py-16 bg-gradient-to-b from-purple-50/50 via-white to-purple-50/30 border-t border-purple-100">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full text-xs font-extrabold bg-pink-100 text-beautage-pink uppercase tracking-widest border border-pink-200 mb-3 shadow-xs">
                    <i data-lucide="award" class="w-3.5 h-3.5"></i> Verified Stars & Icons
                </span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-beautage-purple tracking-tight">Celebrity Endorsement</h2>
                <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                    Watch live video testimonials, personal routines, and proven clinical results shared by our beloved stars and beauty experts.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-6">
                
                <div class="bg-white rounded-2xl overflow-hidden border border-purple-100 shadow-md hover:shadow-xl hover:border-beautage-pink transition duration-300 flex flex-col justify-between group">
                    <div class="relative aspect-[3/4] bg-slate-900 overflow-hidden cursor-pointer" onclick="showToast('Playing video endorsement by Fahad Sheikh')">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&q=80&w=500" alt="Fahad Sheikh" class="w-full h-full object-cover group-hover:scale-105 transition duration-500 opacity-90">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-beautage-pink/90 text-white flex items-center justify-center shadow-lg group-hover:scale-110 transition">
                                <i data-lucide="play" class="w-5 h-5 fill-current ml-0.5"></i>
                            </div>
                        </div>
                        <span class="absolute top-3 left-3 bg-beautage-purple text-white text-[9px] font-extrabold px-2 py-0.5 rounded uppercase tracking-wider">Hair Growth</span>
                    </div>
                    <div class="p-4 bg-white flex-1 flex flex-col justify-between text-center">
                        <div>
                            <h4 class="text-xs font-bold text-beautage-purple">Fahad Sheikh</h4>
                            <p class="text-[11px] text-slate-600 mt-1.5 leading-snug">Alopecia & bald patches cured with hair growth bundle in 4 weeks.</p>
                        </div>
                        <div class="mt-4 pt-2 border-t border-purple-50 flex items-center justify-center gap-1 text-[10px] font-bold text-beautage-pink">
                            <i data-lucide="check-circle-2" class="w-3.5 h-3.5"><span>Verified Review</span></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden border border-purple-100 shadow-md hover:shadow-xl hover:border-beautage-pink transition duration-300 flex flex-col justify-between group">
                    <div class="relative aspect-[3/4] bg-slate-900 overflow-hidden cursor-pointer" onclick="showToast('Playing video endorsement by Merium Pervaiz')">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=500" alt="Merium Pervaiz" class="w-full h-full object-cover group-hover:scale-105 transition duration-500 opacity-90">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-beautage-pink/90 text-white flex items-center justify-center shadow-lg group-hover:scale-110 transition">
                                <i data-lucide="play" class="w-5 h-5 fill-current ml-0.5"></i>
                            </div>
                        </div>
                        <span class="absolute top-3 left-3 bg-beautage-purple text-white text-[9px] font-extrabold px-2 py-0.5 rounded uppercase tracking-wider">Live Demo</span>
                    </div>
                    <div class="p-4 bg-white flex-1 flex flex-col justify-between text-center">
                        <div>
                            <h4 class="text-xs font-bold text-beautage-purple">Merium Pervaiz</h4>
                            <p class="text-[11px] text-slate-600 mt-1.5 leading-snug">Live usage & results of hair dye shampoo on her husband & father.</p>
                        </div>
                        <div class="mt-4 pt-2 border-t border-purple-50 flex items-center justify-center gap-1 text-[10px] font-bold text-beautage-pink">
                            <i data-lucide="check-circle-2" class="w-3.5 h-3.5"><span>Verified Review</span></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden border border-purple-100 shadow-md hover:shadow-xl hover:border-beautage-pink transition duration-300 flex flex-col justify-between group">
                    <div class="relative aspect-[3/4] bg-slate-900 overflow-hidden cursor-pointer" onclick="showToast('Playing video endorsement by Humaima Malick')">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=500" alt="Humaima Malick" class="w-full h-full object-cover group-hover:scale-105 transition duration-500 opacity-90">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-beautage-pink/90 text-white flex items-center justify-center shadow-lg group-hover:scale-110 transition">
                                <i data-lucide="play" class="w-5 h-5 fill-current ml-0.5"></i>
                            </div>
                        </div>
                        <span class="absolute top-3 left-3 bg-beautage-purple text-white text-[9px] font-extrabold px-2 py-0.5 rounded uppercase tracking-wider">At-Home Facial</span>
                    </div>
                    <div class="p-4 bg-white flex-1 flex flex-col justify-between text-center">
                        <div>
                            <h4 class="text-xs font-bold text-beautage-purple">Humaima Malick</h4>
                            <p class="text-[11px] text-slate-600 mt-1.5 leading-snug">Look how our glitter mask & face polish gave complete at-home facial.</p>
                        </div>
                        <div class="mt-4 pt-2 border-t border-purple-50 flex items-center justify-center gap-1 text-[10px] font-bold text-beautage-pink">
                            <i data-lucide="check-circle-2" class="w-3.5 h-3.5"><span>Verified Review</span></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden border border-purple-100 shadow-md hover:shadow-xl hover:border-beautage-pink transition duration-300 flex flex-col justify-between group">
                    <div class="relative aspect-[3/4] bg-slate-900 overflow-hidden cursor-pointer" onclick="showToast('Playing video endorsement by Dananeer Mobeen')">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&q=80&w=500" alt="Dananeer Mobeen" class="w-full h-full object-cover group-hover:scale-105 transition duration-500 opacity-90">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-beautage-pink/90 text-white flex items-center justify-center shadow-lg group-hover:scale-110 transition">
                                <i data-lucide="play" class="w-5 h-5 fill-current ml-0.5"></i>
                            </div>
                        </div>
                        <span class="absolute top-3 left-3 bg-beautage-purple text-white text-[9px] font-extrabold px-2 py-0.5 rounded uppercase tracking-wider">Hair Care</span>
                    </div>
                    <div class="p-4 bg-white flex-1 flex flex-col justify-between text-center">
                        <div>
                            <h4 class="text-xs font-bold text-beautage-purple">Dananeer Mobeen</h4>
                            <p class="text-[11px] text-slate-600 mt-1.5 leading-snug">Weekend pawri with champi of our bestseller hair growth bundle!</p>
                        </div>
                        <div class="mt-4 pt-2 border-t border-purple-50 flex items-center justify-center gap-1 text-[10px] font-bold text-beautage-pink">
                            <i data-lucide="check-circle-2" class="w-3.5 h-3.5"><span>Verified Review</span></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden border border-purple-100 shadow-md hover:shadow-xl hover:border-beautage-pink transition duration-300 flex flex-col justify-between group">
                    <div class="relative aspect-[3/4] bg-slate-900 overflow-hidden cursor-pointer" onclick="showToast('Playing video endorsement by Saboor Aly')">
                        <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&q=80&w=500" alt="Saboor Aly" class="w-full h-full object-cover group-hover:scale-105 transition duration-500 opacity-90">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-beautage-pink/90 text-white flex items-center justify-center shadow-lg group-hover:scale-110 transition">
                                <i data-lucide="play" class="w-5 h-5 fill-current ml-0.5"></i>
                            </div>
                        </div>
                        <span class="absolute top-3 left-3 bg-beautage-purple text-white text-[9px] font-extrabold px-2 py-0.5 rounded uppercase tracking-wider">Skin Glow</span>
                    </div>
                    <div class="p-4 bg-white flex-1 flex flex-col justify-between text-center">
                        <div>
                            <h4 class="text-xs font-bold text-beautage-purple">Saboor Aly</h4>
                            <p class="text-[11px] text-slate-600 mt-1.5 leading-snug">Saboor always prefers ubtan on expensive facials once a week application gives extreme glowing spotless skin.</p>
                        </div>
                        <div class="mt-4 pt-2 border-t border-purple-50 flex items-center justify-center gap-1 text-[10px] font-bold text-beautage-pink">
                            <i data-lucide="check-circle-2" class="w-3.5 h-3.5"><span>Verified Review</span></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden border border-purple-100 shadow-md hover:shadow-xl hover:border-beautage-pink transition duration-300 flex flex-col justify-between group">
                    <div class="relative aspect-[3/4] bg-slate-900 overflow-hidden cursor-pointer" onclick="showToast('Playing video endorsement by Minal Khan')">
                        <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&q=80&w=500" alt="Minal Khan" class="w-full h-full object-cover group-hover:scale-105 transition duration-500 opacity-90">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-beautage-pink/90 text-white flex items-center justify-center shadow-lg group-hover:scale-110 transition">
                                <i data-lucide="play" class="w-5 h-5 fill-current ml-0.5"></i>
                            </div>
                        </div>
                        <span class="absolute top-3 left-3 bg-beautage-purple text-white text-[9px] font-extrabold px-2 py-0.5 rounded uppercase tracking-wider">Pore Care</span>
                    </div>
                    <div class="p-4 bg-white flex-1 flex flex-col justify-between text-center">
                        <div>
                            <h4 class="text-xs font-bold text-beautage-purple">Minal Khan</h4>
                            <p class="text-[11px] text-slate-600 mt-1.5 leading-snug">Minal Khan got super big pores which got completely vanished in 4 weeks by niacinamide & rose gel.</p>
                        </div>
                        <div class="mt-4 pt-2 border-t border-purple-50 flex items-center justify-center gap-1 text-[10px] font-bold text-beautage-pink">
                            <i data-lucide="check-circle-2" class="w-3.5 h-3.5"><span>Verified Review</span></i>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>
@endsection

@section('below_main')
<!-- MOBILE BOTTOM NAVIGATION -->
    <nav class="md:hidden fixed bottom-0 left-0 right-0 z-40 bg-white/95 backdrop-blur-md border-t border-purple-100 shadow-2xl px-3 py-2 flex items-center justify-around">
        <a href="#hero" onclick="setActiveBottomNav(this)" class="bottom-nav-item flex flex-col items-center justify-center text-beautage-pink transition py-1 px-2">
            <i data-lucide="home" class="w-5 h-5"></i>
            <span class="text-[10px] font-bold mt-1">Home</span>
        </a>
        <a href="#category-showcase" onclick="setActiveBottomNav(this)" class="bottom-nav-item flex flex-col items-center justify-center text-slate-500 hover:text-beautage-purple transition py-1 px-2">
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
@verbatim
<script>
        let cart = [];
        let wishlist = [];
        let currentFilter = 'all';
        let currentFlashFilter = 'all';
        let currentShowcaseCategory = 'Skincare';

        document.addEventListener('DOMContentLoaded', () => {
            renderFlashDeals(currentFlashFilter);
            renderCategoryShowcase(currentShowcaseCategory);
            renderProducts(products);
            setupSearch();
            lucide.createIcons();
            startCountdownTimer();
        });

        function showToast(message) {
            const container = document.getElementById('toast-container');
            const toast = document.createElement('div');
            toast.className = 'bg-beautage-purple text-white px-4 py-3 rounded-2xl shadow-2xl text-xs font-semibold flex items-center gap-3 border border-purple-500/40 pointer-events-auto transform translate-y-4 opacity-0 transition-all duration-300';
            toast.innerHTML = `<i data-lucide="sparkles" class="w-4 h-4 text-beautage-amber shrink-0"></i><span>${message}</span>`;
            container.appendChild(toast);
            lucide.createIcons();

            setTimeout(() => {
                toast.classList.remove('translate-y-4', 'opacity-0');
            }, 10);

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

        function switchCategoryShowcase(category) {
            currentShowcaseCategory = category;
            document.querySelectorAll('.showcase-tab').forEach(tab => {
                tab.classList.remove('bg-beautage-purple', 'text-white', 'shadow-sm');
                tab.classList.add('bg-purple-50', 'text-beautage-purple');
            });
            const activeBtn = document.getElementById(`showcase-tab-${category}`);
            if(activeBtn) {
                activeBtn.classList.remove('bg-purple-50', 'text-beautage-purple');
                activeBtn.classList.add('bg-beautage-purple', 'text-white', 'shadow-sm');
            }
            renderCategoryShowcase(category);
        }

        function renderCategoryShowcase(category) {
            const container = document.getElementById('showcase-grid');
            let items = products.filter(p => p.category === category);
            if(items.length < 8) {
                const extraItems = products.filter(p => p.category !== category);
                items = [...items, ...extraItems];
            }
            items = items.slice(0, 8);
            container.innerHTML = items.map(p => productCardTemplate(p)).join('');
            lucide.createIcons();
        }

        function filterFlashDeals(category) {
            currentFlashFilter = category;
            document.querySelectorAll('.flash-filter-btn').forEach(btn => {
                btn.classList.remove('bg-beautage-pink', 'text-white', 'shadow-md', 'shadow-pink-500/30');
                btn.classList.add('bg-purple-900/80', 'text-purple-200', 'border', 'border-purple-700/60');
            });
            const activeBtn = document.getElementById(`flash-tab-${category}`);
            if(activeBtn) {
                activeBtn.classList.remove('bg-purple-900/80', 'text-purple-200', 'border', 'border-purple-700/60');
                activeBtn.classList.add('bg-beautage-pink', 'text-white', 'shadow-md', 'shadow-pink-500/30');
            }
            renderFlashDeals(category);
        }

        function renderFlashDeals(category) {
            const container = document.getElementById('flash-deals-grid-container');
            let flashItems = products.filter(p => p.flash);
            if(category !== 'all') {
                flashItems = flashItems.filter(p => p.category === category);
            }
            // Skip item 1 since it's in the spotlight
            const gridItems = flashItems.filter(p => p.id !== 1).slice(0, 6);

            if(gridItems.length === 0) {
                container.innerHTML = `<div class="col-span-full py-12 text-center text-purple-200 text-xs font-semibold">No flash deals currently available in this category. Check back soon!</div>`;
                return;
            }

            container.innerHTML = gridItems.map(p => {
                const isWishlisted = wishlist.some(item => item.id === p.id);
                return `
                    <div class="bg-purple-950/80 rounded-2xl p-4 border border-purple-800 hover:border-pink-500 transition-all duration-300 shadow-xl flex flex-col justify-between group backdrop-blur-md">
                        <div class="relative rounded-xl overflow-hidden bg-purple-900 mb-3 aspect-square cursor-pointer" onclick="openQuickView(${p.id})">
                            <img src="${p.image}" alt="${p.name}" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 group-hover:opacity-0">
                            <img src="${p.hoverImage}" alt="${p.name} Alt" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-500 group-hover:opacity-100 group-hover:scale-105">
                            
                            <span class="absolute top-2.5 left-2.5 bg-gradient-to-r from-beautage-pink to-amber-500 text-white text-[10px] font-black px-2.5 py-1 rounded-full uppercase tracking-wider shadow z-10">
                                ${p.discount}
                            </span>
                            <button onclick="event.stopPropagation(); toggleWishlist(${p.id})" class="absolute top-2.5 right-2.5 p-2 rounded-xl bg-purple-950/80 text-purple-200 hover:text-pink-300 shadow transition z-10">
                                <i data-lucide="heart" class="w-4 h-4 ${isWishlisted ? 'fill-beautage-pink text-beautage-pink' : ''}"></i>
                            </button>
                        </div>

                        <div>
                            <div class="flex items-center justify-between text-[10px] font-bold text-pink-300 uppercase tracking-widest mb-1">
                                <span>${p.category}</span>
                                <span class="text-amber-300 flex items-center gap-1">⭐ ${p.rating}</span>
                            </div>
                            <h3 class="text-xs font-bold text-white line-clamp-1 group-hover:text-pink-300 transition">${p.name}</h3>
                            
                            <!-- Scarcity Bar -->
                            <div class="mt-3 space-y-1">
                                <div class="flex justify-between text-[10px] font-semibold text-purple-200">
                                    <span class="text-amber-300">${p.claimedPercent}% Claimed</span>
                                    <span>${p.claimedText}</span>
                                </div>
                                <div class="w-full h-1.5 rounded-full bg-purple-900 overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-beautage-pink to-amber-400 rounded-full" style="width: ${p.claimedPercent}%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 pt-3 border-t border-purple-900 flex items-center justify-between">
                            <div>
                                <div class="flex items-baseline gap-1.5">
                                    <span class="text-base font-black text-white">$${p.price.toFixed(2)}</span>
                                    <span class="text-[11px] text-purple-400 line-through">$${p.oldPrice.toFixed(2)}</span>
                                </div>
                            </div>
                            <button onclick="addToCart(${p.id})" class="px-3 py-2 rounded-xl bg-beautage-pink hover:bg-beautage-pinkHover text-white text-xs font-extrabold transition shadow-md shadow-pink-500/20 flex items-center gap-1">
                                <i data-lucide="shopping-bag" class="w-3.5 h-3.5"></i> Claim
                            </button>
                        </div>
                    </div>
                `;
            }).join('');
            lucide.createIcons();
        }

        function renderProducts(items) {
            const container = document.getElementById('product-grid');
            if(items.length === 0) {
                container.innerHTML = `<div class="col-span-full py-12 text-center text-slate-500 text-sm">No products found matching your search or filter.</div>`;
                return;
            }
            container.innerHTML = items.map(p => productCardTemplate(p)).join('');
            lucide.createIcons();
        }

        function productCardTemplate(p) {
            const isWishlisted = wishlist.some(item => item.id === p.id);
            return `
                <div class="bg-white rounded-2xl p-4 border border-purple-100 hover:border-beautage-pink transition-all duration-300 shadow-sm hover:shadow-2xl hover:-translate-y-1.5 flex flex-col justify-between group">
                    <div class="relative rounded-xl overflow-hidden bg-purple-50 mb-4 aspect-square cursor-pointer" onclick="openQuickView(${p.id})">
                        <img src="${p.image}" alt="${p.name}" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out group-hover:opacity-0" onerror="this.onerror=null; this.src='https://placehold.co/400x400/5E1F70/FFFFFF?text=Beautage';">
                        <img src="${p.hoverImage}" alt="${p.name} Alternate View" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-500 ease-in-out group-hover:opacity-100 group-hover:scale-105" onerror="this.onerror=null; this.src='https://placehold.co/400x400/3B0764/FFFFFF?text=Beautage+Alt';">
                        
                        <span class="absolute top-2.5 left-2.5 bg-beautage-purple text-white text-[10px] font-extrabold px-2.5 py-1 rounded-full uppercase tracking-wider shadow z-10">
                            ${p.badge}
                        </span>
                        <button onclick="event.stopPropagation(); toggleWishlist(${p.id})" class="absolute top-2.5 right-2.5 p-2 rounded-xl bg-white/90 backdrop-blur-sm text-slate-700 hover:text-beautage-pink shadow transition z-10">
                            <i data-lucide="heart" class="w-4 h-4 ${isWishlisted ? 'fill-beautage-pink text-beautage-pink' : ''}"></i>
                        </button>
                    </div>

                    <div>
                        <span class="text-[10px] uppercase font-bold text-beautage-pink tracking-widest">${p.category}</span>
                        <h3 class="text-sm font-bold text-beautage-purple mt-1 line-clamp-1 group-hover:text-beautage-pink transition">${p.name}</h3>
                        <p class="text-xs text-slate-500 mt-1 line-clamp-2">${p.desc}</p>
                    </div>

                    <div class="mt-4 pt-3 border-t border-purple-50 flex items-center justify-between">
                        <div>
                            <div class="flex items-baseline gap-1.5">
                                <span class="text-base font-black text-slate-800">$${p.price.toFixed(2)}</span>
                                <span class="text-xs text-slate-400 line-through">$${p.oldPrice.toFixed(2)}</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <button onclick="openQuickView(${p.id})" class="p-2 rounded-xl bg-purple-50 hover:bg-purple-100 text-beautage-purple transition" title="Quick View">
                                <i data-lucide="eye" class="w-4 h-4"></i>
                            </button>
                            <button onclick="addToCart(${p.id})" class="px-3.5 py-2 rounded-xl bg-beautage-pink hover:bg-beautage-pinkHover text-white text-xs font-bold transition shadow-sm shadow-pink-500/20 flex items-center gap-1">
                                <i data-lucide="shopping-bag" class="w-3.5 h-3.5"></i> Add
                            </button>
                        </div>
                    </div>
                </div>
            `;
        }

        function filterCategory(category) {
            currentFilter = category;
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('bg-beautage-purple', 'text-white');
                btn.classList.add('bg-white', 'text-slate-700', 'border', 'border-purple-100');
            });
            const activeTab = document.getElementById(`tab-${category}`);
            if(activeTab) {
                activeTab.classList.remove('bg-white', 'text-slate-700', 'border', 'border-purple-100');
                activeTab.classList.add('bg-beautage-purple', 'text-white');
            }

            if(category === 'all') {
                renderProducts(products);
            } else {
                const filtered = products.filter(p => p.category === category);
                renderProducts(filtered);
            }
        }

        function setFilterTab(category) {
            filterCategory(category);
            const section = document.getElementById('trending-section');
            section.scrollIntoView({ behavior: 'smooth' });
        }

        function toggleMobileSearch() {
            const searchContainer = document.getElementById('mobile-search-container');
            searchContainer.classList.toggle('hidden');
            if(!searchContainer.classList.contains('hidden')) {
                document.getElementById('mobile-search-input').focus();
            }
        }

        function setupSearch() {
            const input = document.getElementById('main-search-input');
            const mobileInput = document.getElementById('mobile-search-input');
            const clearBtn = document.getElementById('clear-search');
            const resultsBox = document.getElementById('search-results');
            const categorySelect = document.getElementById('search-category');

            function handleSearchQuery(query) {
                if(query.length > 0) {
                    if(clearBtn) clearBtn.classList.remove('hidden');
                    let matches = products.filter(p => p.name.toLowerCase().includes(query) || p.desc.toLowerCase().includes(query));
                    if(categorySelect && categorySelect.value !== 'all') {
                        matches = matches.filter(p => p.category === categorySelect.value);
                    }

                    if(matches.length > 0) {
                        resultsBox.classList.remove('hidden');
                        resultsBox.innerHTML = matches.map(p => `
                            <div onclick="selectSearchResult(${p.id})" class="flex items-center gap-3 p-2 rounded-xl hover:bg-purple-50 cursor-pointer transition">
                                <img src="${p.image}" class="w-10 h-10 object-cover rounded-lg">
                                <div>
                                    <h5 class="text-xs font-bold text-beautage-purple">${p.name}</h5>
                                    <span class="text-[10px] text-slate-500">$${p.price.toFixed(2)} • ${p.category}</span>
                                </div>
                            </div>
                        `).join('');
                    } else {
                        resultsBox.classList.remove('hidden');
                        resultsBox.innerHTML = `<div class="p-3 text-xs text-slate-500 text-center">No beauty items found for "${query}".</div>`;
                    }
                } else {
                    if(clearBtn) clearBtn.classList.add('hidden');
                    resultsBox.classList.add('hidden');
                }
            }

            if(input) input.addEventListener('input', (e) => handleSearchQuery(e.target.value.toLowerCase().trim()));
            if(mobileInput) mobileInput.addEventListener('input', (e) => handleSearchQuery(e.target.value.toLowerCase().trim()));

            if(clearBtn) {
                clearBtn.addEventListener('click', () => {
                    if(input) input.value = '';
                    if(mobileInput) mobileInput.value = '';
                    clearBtn.classList.add('hidden');
                    resultsBox.classList.add('hidden');
                    renderProducts(products);
                });
            }

            document.addEventListener('click', (e) => {
                if(input && !input.contains(e.target) && mobileInput && !mobileInput.contains(e.target) && !resultsBox.contains(e.target)) {
                    resultsBox.classList.add('hidden');
                }
            });
        }

        function selectSearchResult(id) {
            document.getElementById('search-results').classList.add('hidden');
            document.getElementById('mobile-search-container').classList.add('hidden');
            openQuickView(id);
        }

        function addToCart(productId) {
            const product = products.find(p => p.id === productId);
            if(!product) return;

            const existing = cart.find(item => item.id === productId);
            if(existing) {
                existing.qty += 1;
            } else {
                cart.push({ ...product, qty: 1 });
            }

            updateCartUI();
            showToast(`Added "${product.name}" to your shopping bag.`);
        }

        function removeFromCart(productId) {
            cart = cart.filter(item => item.id !== productId);
            updateCartUI();
        }

        function updateCartQty(productId, delta) {
            const item = cart.find(i => i.id === productId);
            if(item) {
                item.qty += delta;
                if(item.qty <= 0) {
                    removeFromCart(productId);
                } else {
                    updateCartUI();
                }
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
                    <img src="${item.image}" class="w-16 h-16 object-cover rounded-xl">
                    <div class="flex-1">
                        <h4 class="text-xs font-bold text-beautage-purple">${item.name}</h4>
                        <span class="text-xs font-extrabold text-slate-800">$${item.price.toFixed(2)}</span>
                        <div class="flex items-center gap-3 mt-2">
                            <div class="flex items-center border border-purple-200 rounded-lg bg-white overflow-hidden">
                                <button onclick="updateCartQty(${item.id}, -1)" class="px-2 py-0.5 text-xs font-bold text-slate-600 hover:bg-purple-50">-</button>
                                <span class="px-2.5 py-0.5 text-xs font-bold text-slate-800">${item.qty}</span>
                                <button onclick="updateCartQty(${item.id}, 1)" class="px-2 py-0.5 text-xs font-bold text-slate-600 hover:bg-purple-50">+</button>
                            </div>
                            <button onclick="removeFromCart(${item.id})" class="text-rose-500 hover:text-rose-700 text-xs font-semibold">Remove</button>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        function toggleWishlist(productId) {
            const product = products.find(p => p.id === productId);
            const index = wishlist.findIndex(item => item.id === productId);

            if(index > -1) {
                wishlist.splice(index, 1);
                showToast(`Removed "${product.name}" from your wishlist.`);
            } else {
                wishlist.push(product);
                showToast(`Saved "${product.name}" to your wishlist.`);
            }

            updateWishlistUI();
            renderProducts(currentFilter === 'all' ? products : products.filter(p => p.category === currentFilter));
            renderFlashDeals(currentFlashFilter);
        }

        function updateWishlistUI() {
            document.getElementById('wishlist-badge').innerText = wishlist.length;
            document.getElementById('mobile-wishlist-badge').innerText = wishlist.length;
            document.getElementById('wishlist-badge-desktop').innerText = wishlist.length;

            const container = document.getElementById('wishlist-items');
            if(wishlist.length === 0) {
                container.innerHTML = `<div class="text-center py-12 text-slate-400 text-xs">No saved items in your wishlist yet.</div>`;
                return;
            }

            container.innerHTML = wishlist.map(item => `
                <div class="flex items-center gap-4 p-3 rounded-2xl bg-purple-50/50 border border-purple-100">
                    <img src="${item.image}" class="w-16 h-16 object-cover rounded-xl">
                    <div class="flex-1">
                        <h4 class="text-xs font-bold text-beautage-purple">${item.name}</h4>
                        <span class="text-xs font-extrabold text-slate-800">$${item.price.toFixed(2)}</span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <button onclick="addToCart(${item.id}); toggleWishlist(${item.id});" class="px-3 py-1.5 bg-beautage-pink text-white rounded-lg text-[10px] font-bold">Move to Bag</button>
                        <button onclick="toggleWishlist(${item.id})" class="text-rose-500 text-[10px] font-semibold text-center">Remove</button>
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
                setTimeout(() => {
                    backdrop.classList.remove('opacity-0');
                    panel.classList.remove('translate-x-full');
                }, 10);
            } else {
                backdrop.classList.add('opacity-0');
                panel.classList.add('translate-x-full');
                setTimeout(() => { drawer.classList.add('hidden'); }, 300);
            }
        }

        function toggleWishlistDrawer() {
            const drawer = document.getElementById('wishlist-drawer');
            const backdrop = document.getElementById('wishlist-backdrop');
            const panel = document.getElementById('wishlist-panel');

            if(drawer.classList.contains('hidden')) {
                drawer.classList.remove('hidden');
                setTimeout(() => {
                    backdrop.classList.remove('opacity-0');
                    panel.classList.remove('translate-x-full');
                }, 10);
            } else {
                backdrop.classList.add('opacity-0');
                panel.classList.add('translate-x-full');
                setTimeout(() => { drawer.classList.add('hidden'); }, 300);
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

        function openQuickView(productId) {
            const product = products.find(p => p.id === productId);
            if(!product) return;

            const modal = document.getElementById('quickview-modal');
            const content = document.getElementById('quickview-content');

            content.innerHTML = `
                <div class="aspect-square rounded-2xl overflow-hidden bg-purple-50">
                    <img src="${product.image}" class="w-full h-full object-cover">
                </div>
                <div class="space-y-4">
                    <span class="px-2.5 py-1 bg-purple-100 text-beautage-purple text-[10px] font-bold rounded-full uppercase">${product.category}</span>
                    <h2 class="text-xl font-serif font-bold text-beautage-purple">${product.name}</h2>
                    <div class="flex items-center gap-3">
                        <span class="text-2xl font-black text-slate-800">$${product.price.toFixed(2)}</span>
                        <span class="text-sm text-slate-400 line-through">$${product.oldPrice.toFixed(2)}</span>
                        <span class="text-xs text-emerald-600 font-bold bg-emerald-50 px-2 py-0.5 rounded">In Stock</span>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed">${product.desc}</p>
                    <div class="flex items-center gap-4 pt-2">
                        <button onclick="addToCart(${product.id}); closeQuickView();" class="flex-1 bg-beautage-pink hover:bg-beautage-pinkHover text-white font-bold py-3 rounded-xl transition shadow-md shadow-pink-500/20 text-xs uppercase">
                            Add To Bag
                        </button>
                        <button onclick="toggleWishlist(${product.id});" class="p-3 rounded-xl bg-purple-50 hover:bg-purple-100 text-beautage-purple transition">
                            <i data-lucide="heart" class="w-5 h-5"></i>
                        </button>
                    </div>
                </div>
            `;
            modal.classList.remove('hidden');
            lucide.createIcons();
        }

        function closeQuickView() {
            document.getElementById('quickview-modal').classList.add('hidden');
        }

        function setActiveBottomNav(el) {
            document.querySelectorAll('.bottom-nav-item').forEach(item => {
                item.classList.remove('text-beautage-pink');
                item.classList.add('text-slate-500');
            });
            el.classList.remove('text-slate-500');
            el.classList.add('text-beautage-pink');
        }

        function startCountdownTimer() {
            let totalSeconds = 4 * 3600 + 32 * 60 + 19;
            let flashSeconds = 5 * 3600 + 42 * 60 + 18;
            setInterval(() => {
                if(totalSeconds > 0) totalSeconds--;
                if(flashSeconds > 0) flashSeconds--;

                const h = Math.floor(totalSeconds / 3600).toString().padStart(2, '0');
                const m = Math.floor((totalSeconds % 3600) / 60).toString().padStart(2, '0');
                const s = (totalSeconds % 60).toString().padStart(2, '0');
                
                const fh = Math.floor(flashSeconds / 3600).toString().padStart(2, '0');
                const fm = Math.floor((flashSeconds % 3600) / 60).toString().padStart(2, '0');
                const fs = (flashSeconds % 60).toString().padStart(2, '0');

                document.getElementById('announcement-timer').innerText = `${h}:${m}:${s}`;
                document.getElementById('timer-hours').innerText = h;
                document.getElementById('timer-minutes').innerText = m;
                document.getElementById('timer-seconds').innerText = s;

                document.getElementById('flash-timer-hours').innerText = fh;
                document.getElementById('flash-timer-minutes').innerText = fm;
                document.getElementById('flash-timer-seconds').innerText = fs;
            }, 1000);
        }
    </script>
@endverbatim
@endpush
