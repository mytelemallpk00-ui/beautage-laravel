<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title', 'Beautage — Elevate Your Natural Elegance')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/tailwind-config.js') }}"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/beautage.css') }}">
    @stack('styles')
</head>
<body @yield('body_attrs')>
<!-- Toast Notification Container -->
    <div id="toast-container" class="fixed bottom-28 md:bottom-6 right-4 sm:right-6 z-50 flex flex-col gap-2 pointer-events-none max-w-[90vw] sm:max-w-md"></div>

    <!-- SMOOTH SLIDING MARQUEE TOP BAR -->
    <div class="bg-gradient-to-r from-beautage-pink via-beautage-purple to-beautage-purpleDark text-white text-[11px] sm:text-xs font-semibold py-2.5 px-0 w-full overflow-hidden shadow-sm relative z-50 border-b border-pink-400/30">
        <div class="flex w-max marquee-track animate-marquee whitespace-nowrap items-center">
            <div class="flex items-center gap-8 sm:gap-12 px-6 shrink-0">
                <span class="flex items-center gap-2"><i data-lucide="sparkles" class="w-3.5 h-3.5 text-amber-300"></i> Free Express Worldwide Shipping Over $75</span>
                <span class="text-pink-300">•</span>
                <span class="flex items-center gap-2"><i data-lucide="flame" class="w-3.5 h-3.5 text-amber-300 fill-current"></i> Luxury Flash Sale: Up to 50% OFF Selected Flagship Items</span>
                <span class="text-pink-300">•</span>
                <span class="flex items-center gap-2"><i data-lucide="shield-check" class="w-3.5 h-3.5 text-emerald-300"></i> Authorized Brand Store • 100% Original Verified Products</span>
                <span class="text-pink-300">•</span>
                <span class="flex items-center gap-2"><i data-lucide="truck" class="w-3.5 h-3.5 text-cyan-300"></i> Cash on Delivery Available Across Pakistan</span>
                <span class="text-pink-300">•</span>
            </div>
            <div class="flex items-center gap-8 sm:gap-12 px-6 shrink-0" aria-hidden="true">
                <span class="flex items-center gap-2"><i data-lucide="sparkles" class="w-3.5 h-3.5 text-amber-300"></i> Free Express Worldwide Shipping Over $75</span>
                <span class="text-pink-300">•</span>
                <span class="flex items-center gap-2"><i data-lucide="flame" class="w-3.5 h-3.5 text-amber-300 fill-current"></i> Luxury Flash Sale: Up to 50% OFF Selected Flagship Items</span>
                <span class="text-pink-300">•</span>
                <span class="flex items-center gap-2"><i data-lucide="shield-check" class="w-3.5 h-3.5 text-emerald-300"></i> Authorized Brand Store • 100% Original Verified Products</span>
                <span class="text-pink-300">•</span>
                <span class="flex items-center gap-2"><i data-lucide="truck" class="w-3.5 h-3.5 text-cyan-300"></i> Cash on Delivery Available Across Pakistan</span>
                <span class="text-pink-300">•</span>
            </div>
        </div>
    </div>

    <!-- 1. TOP UTILITY ANNOUNCEMENT BAR -->
    <div class="bg-gradient-to-r from-beautage-purpleDark via-beautage-purple to-beautage-purpleDark text-xs py-2 px-4 sm:px-12 xl:px-20 w-full text-purple-100 border-b border-purple-800">
        <div class="w-full flex flex-col sm:flex-row justify-between items-center gap-1 sm:gap-2 text-center sm:text-left">
            <div class="flex items-center justify-center sm:justify-start gap-2 flex-wrap">
                <span class="bg-beautage-pink/30 text-pink-200 border border-pink-400/40 px-2 py-0.5 rounded-full text-[9px] uppercase font-extrabold tracking-wider">FLAGSHIP EXCLUSIVE</span>
                <span class="flex items-center gap-1 font-medium text-[11px] sm:text-xs">
                    <i data-lucide="sparkles" class="w-3.5 h-3.5 text-beautage-amber shrink-0"></i>
                    <span>Flash Deals Sale Ends in <span id="announcement-timer" class="font-mono font-bold text-amber-300 ml-1">04:32:19</span></span>
                </span>
            </div>
            <div class="hidden md:flex items-center gap-6 text-purple-200 text-xs font-semibold">
                <span class="flex items-center gap-1.5"><i data-lucide="headphones" class="w-3.5 h-3.5 text-pink-300"></i> Care Hotline: <a href="tel:+18008886678" class="text-white hover:text-pink-300 transition">+1 (800) BEAUTAGE</a></span>
                <span class="flex items-center gap-1.5"><i data-lucide="truck" class="w-3.5 h-3.5 text-emerald-300"></i> Free Express Worldwide Shipping over $75</span>
                <div class="relative group cursor-pointer">
                    <span class="hover:text-white transition flex items-center gap-1">USD ($) <i data-lucide="chevron-down" class="w-3 h-3"></i></span>
                    <div class="absolute right-0 top-full mt-1 w-24 bg-white border border-purple-100 rounded-lg shadow-xl py-1 hidden group-hover:block z-50 text-slate-700">
                        <a href="#" class="block px-3 py-1 text-xs hover:bg-purple-50 hover:text-beautage-purple">USD ($)</a>
                        <a href="#" class="block px-3 py-1 text-xs hover:bg-purple-50 hover:text-beautage-purple">EUR (€)</a>
                        <a href="#" class="block px-3 py-1 text-xs hover:bg-purple-50 hover:text-beautage-purple">GBP (£)</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. PROFESSIONAL MAIN HEADER -->
    <header class="sticky top-0 z-40 glass-nav border-b border-purple-100/80 w-full shadow-sm">
        <div class="w-full px-4 sm:px-12 xl:px-20 py-3 sm:py-4">
            
            <!-- MOBILE TOP ROW -->
            <div class="flex lg:hidden items-center justify-between gap-2">
                <div class="flex items-center gap-1.5">
                    <button onclick="toggleMobileNav()" class="p-2.5 rounded-xl bg-purple-50 text-beautage-purple hover:bg-purple-100 transition active:scale-95 min-h-[44px] min-w-[44px] flex items-center justify-center" aria-label="Open Menu">
                        <i data-lucide="menu" class="w-5 h-5"></i>
                    </button>
                    <button onclick="toggleMobileSearch()" class="p-2.5 rounded-xl bg-purple-50 text-beautage-purple hover:bg-purple-100 transition active:scale-95 min-h-[44px] min-w-[44px] flex items-center justify-center" aria-label="Toggle Search">
                        <i data-lucide="search" class="w-5 h-5"></i>
                    </button>
                </div>

                <a href="{{ route('home') }}" class="flex items-center justify-center focus:outline-none py-0.5">
                    <img src="{{ asset('images/beautagelogosquare2.png') }}" alt="Beautage Flagship Logo" class="h-10 sm:h-14 w-auto object-contain drop-shadow-sm" onerror="this.onerror=null; this.src='https://placehold.co/140x50/5E1F70/FFFFFF?text=Beautage';">
                </a>

                <div class="flex items-center gap-1.5">
                    <button onclick="toggleWishlistDrawer()" class="relative p-2.5 rounded-xl bg-purple-50 hover:bg-purple-100 text-beautage-purple transition active:scale-95 min-h-[44px] min-w-[44px] flex items-center justify-center" title="Wishlist" aria-label="Wishlist">
                        <i data-lucide="heart" class="w-5 h-5"></i>
                        <span id="wishlist-badge" class="absolute -top-1 -right-1 bg-beautage-pink text-white text-[9px] font-bold w-4 h-4 rounded-full flex items-center justify-center shadow">0</span>
                    </button>

                    <button onclick="toggleCartDrawer()" class="relative p-2.5 rounded-xl bg-beautage-pink hover:bg-beautage-pinkHover text-white transition active:scale-95 shadow-md shadow-pink-500/20 min-h-[44px] min-w-[44px] flex items-center justify-center" title="Shopping Bag" aria-label="Shopping Bag">
                        <i data-lucide="shopping-bag" class="w-5 h-5"></i>
                        <span id="cart-badge" class="absolute -top-1 -right-1 bg-beautage-purple text-white text-[9px] font-extrabold w-4 h-4 rounded-full flex items-center justify-center shadow">0</span>
                    </button>
                </div>
            </div>

            <!-- DESKTOP 3-COLUMN HEADER LAYOUT -->
            <div class="hidden lg:grid grid-cols-12 items-center gap-6">
                
                <div class="col-span-3 flex items-center gap-3">
                    <a href="{{ route('home') }}" class="focus:outline-none py-1">
                        <img src="{{ asset('images/beautagelogosquare2.png') }}" alt="Beautage Flagship Logo" class="h-28 w-auto object-contain drop-shadow-md" onerror="this.onerror=null; this.src='https://placehold.co/240x90/5E1F70/FFFFFF?text=Beautage';">
                    </a>
                </div>

                <div class="col-span-6 relative w-full">
                    <div class="relative flex items-center border-2 border-purple-200/90 rounded-2xl overflow-hidden bg-white focus-within:border-beautage-purple shadow-sm transition">
                        <select id="search-category" class="h-full py-3 pl-3.5 pr-3 bg-purple-50/90 text-xs font-bold text-beautage-purple border-r border-purple-100 focus:outline-none cursor-pointer">
                            <option value="all">All Departments</option>
                            <option value="Skincare">Skincare</option>
                            <option value="Beauty Tech">Beauty Devices</option>
                            <option value="Haircare">Hair Care</option>
                            <option value="Fragrance">Fragrances</option>
                            <option value="Wellness">Wellness & Spa</option>
                        </select>
                        <input type="text" id="main-search-input" placeholder="Search LED masks, organic serums, luxury perfumes..." 
                               class="w-full py-3 px-4 text-xs text-slate-800 placeholder-slate-400 bg-transparent focus:outline-none font-medium">
                        <button id="clear-search" class="hidden text-slate-400 hover:text-slate-600 mr-2">
                            <i data-lucide="x" class="w-4 h-4"></i>
                        </button>
                        <button class="bg-beautage-purple hover:bg-beautage-purpleDark text-white px-6 py-3 flex items-center justify-center transition">
                            <i data-lucide="search" class="w-4 h-4"></i>
                        </button>
                    </div>

                    <div id="search-results" class="hidden absolute left-0 right-0 top-full mt-2 bg-white border border-purple-100 rounded-2xl shadow-2xl overflow-hidden z-50 p-2"></div>
                </div>

                <div class="col-span-3 flex items-center justify-end gap-3">
                    <button onclick="toggleWishlistDrawer()" class="relative p-2.5 rounded-xl bg-purple-50 hover:bg-purple-100 text-beautage-purple transition shadow-sm" title="Wishlist">
                        <i data-lucide="heart" class="w-5 h-5"></i>
                        <span id="wishlist-badge-desktop" class="absolute -top-1 -right-1 bg-beautage-pink text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center shadow">0</span>
                    </button>

                    <button onclick="toggleCartDrawer()" class="relative flex items-center gap-3 bg-beautage-pink hover:bg-beautage-pinkHover text-white px-4 py-2.5 rounded-xl font-medium text-sm transition shadow-lg shadow-pink-500/20">
                        <div class="relative">
                            <i data-lucide="shopping-bag" class="w-5 h-5"></i>
                            <span id="cart-badge-desktop" class="absolute -top-2 -right-2 bg-beautage-purple text-white text-[10px] font-extrabold w-4 h-4 rounded-full flex items-center justify-center shadow">0</span>
                        </div>
                        <div class="flex flex-col text-left">
                            <span class="text-[9px] text-pink-100 uppercase font-extrabold leading-none">Your Bag</span>
                            <span id="cart-total-header" class="text-xs font-black text-white leading-tight mt-0.5">$0.00</span>
                        </div>
                    </button>
                </div>

            </div>

            <!-- MOBILE SEARCH CONTAINER -->
            <div id="mobile-search-container" class="lg:hidden mt-3 pt-3 border-t border-purple-100 hidden">
                <div class="relative flex items-center border-2 border-purple-200 rounded-xl overflow-hidden bg-white shadow-inner">
                    <input type="text" id="mobile-search-input" placeholder="Search flagship store products..." 
                           class="w-full py-3 px-3 text-xs text-slate-800 placeholder-slate-400 bg-transparent focus:outline-none font-medium">
                    <button class="bg-beautage-purple text-white px-4 py-3 flex items-center justify-center">
                        <i data-lucide="search" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>

        </div>

        <!-- CATEGORY STRIP WITH FULL MEGA MENU DROPDOWNS ON HOVER -->
        <div class="border-t border-purple-100 bg-purple-50/60 overflow-x-auto lg:overflow-visible no-scrollbar w-full">
            <nav class="w-full px-4 sm:px-12 xl:px-20 flex items-center justify-start xl:justify-center gap-1 sm:gap-3 py-2.5 text-xs font-semibold whitespace-nowrap relative">
                
                <!-- 1. COLLECTIONS MEGA MENU -->
                <div class="relative group">
                    <button class="flex items-center gap-2 bg-beautage-purple text-white hover:bg-beautage-purpleDark text-xs font-bold uppercase tracking-wider px-3.5 py-2 rounded-lg transition shadow-sm">
                        <i data-lucide="layout-grid" class="w-4 h-4 text-beautage-pink"></i>
                        <span>Collections</span>
                        <i data-lucide="chevron-down" class="w-3.5 h-3.5 text-purple-200 group-hover:rotate-180 transition-transform"></i>
                    </button>

                    <div class="absolute left-0 top-full pt-1 w-[800px] mega-menu-content z-50">
                        <div class="bg-white border border-purple-100 rounded-2xl shadow-2xl p-6 grid grid-cols-4 gap-6 text-slate-700">
                            <div>
                                <h4 class="font-bold text-beautage-purple text-xs uppercase tracking-wider mb-3 flex items-center gap-2 border-b border-purple-100 pb-2">
                                    <i data-lucide="sparkles" class="w-4 h-4 text-beautage-pink"></i> Skincare Elixirs
                                </h4>
                                <ul class="space-y-2 text-xs text-slate-600">
                                    <li><a href="{{ route('collections', ['cat' => 'Skincare']) }}" class="hover:text-beautage-pink transition">Botanical Serums</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Skincare']) }}" class="hover:text-beautage-pink transition">Youth Regenerating Creams</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Skincare']) }}" class="hover:text-beautage-pink transition">Hydrating Facial Oils</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Skincare']) }}" class="hover:text-beautage-pink transition">Eye Contour Treatments</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold text-beautage-purple text-xs uppercase tracking-wider mb-3 flex items-center gap-2 border-b border-purple-100 pb-2">
                                    <i data-lucide="zap" class="w-4 h-4 text-beautage-purple"></i> Beauty Tech Devices
                                </h4>
                                <ul class="space-y-2 text-xs text-slate-600">
                                    <li><a href="{{ route('collections', ['cat' => 'Beauty Tech']) }}" class="hover:text-beautage-pink transition">LED Photon Therapy Masks</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Beauty Tech']) }}" class="hover:text-beautage-pink transition">Microcurrent Facial Sculptors</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Beauty Tech']) }}" class="hover:text-beautage-pink transition">Ultrasonic Pore Cleaners</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Beauty Tech']) }}" class="hover:text-beautage-pink transition">Thermal Cryo Rollers</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold text-beautage-purple text-xs uppercase tracking-wider mb-3 flex items-center gap-2 border-b border-purple-100 pb-2">
                                    <i data-lucide="scissors" class="w-4 h-4 text-beautage-amber"></i> Hair & Body Spa
                                </h4>
                                <ul class="space-y-2 text-xs text-slate-600">
                                    <li><a href="{{ route('collections', ['cat' => 'Haircare']) }}" class="hover:text-beautage-pink transition">Ionic Hair Stylers</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Haircare']) }}" class="hover:text-beautage-pink transition">Keratin Repair Oils</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Wellness']) }}" class="hover:text-beautage-pink transition">Aromatherapy Oils</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Fragrance']) }}" class="hover:text-beautage-pink transition">Artisanal Eau De Parfum</a></li>
                                </ul>
                            </div>
                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-4 border border-purple-200 flex flex-col justify-between">
                                <div>
                                    <span class="text-[10px] uppercase tracking-widest text-beautage-pink font-extrabold">Featured Innovation</span>
                                    <h5 class="text-sm font-bold text-beautage-purple mt-1">Lumina Pro Mask</h5>
                                    <p class="text-[11px] text-slate-600 mt-1">7-spectrum targeted LED dermal care.</p>
                                </div>
                                <a href="{{ route('product.show', ['product' => 'lumina-pro-led-mask']) }}" class="inline-block mt-3 text-xs text-center font-bold bg-beautage-pink hover:bg-beautage-pinkHover text-white py-2 px-3 rounded-lg transition shadow-sm">Explore Device</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. ALL FLAGSHIPS MEGA MENU -->
                <div class="relative group">
                    <a href="{{ route('collections') }}" class="flex items-center gap-2 px-3.5 py-2 rounded-lg text-slate-700 hover:bg-purple-100/70 hover:text-beautage-purple transition">
                        <i data-lucide="sparkles" class="w-4 h-4 text-beautage-amber"></i>
                        <span>All Flagships</span>
                        <i data-lucide="chevron-down" class="w-3 h-3 opacity-60"></i>
                    </a>
                    <div class="absolute left-0 top-full pt-1 w-[720px] mega-menu-content z-50">
                        <div class="bg-white border border-purple-100 rounded-2xl shadow-2xl p-6 grid grid-cols-3 gap-6 text-slate-700">
                            <div>
                                <h4 class="font-bold text-beautage-purple text-xs uppercase tracking-wider mb-3 pb-2 border-b border-purple-100">Top Categories</h4>
                                <ul class="space-y-2 text-xs text-slate-600">
                                    <li><a href="{{ route('collections', ['cat' => 'Skincare']) }}" class="hover:text-beautage-pink transition flex items-center gap-1.5"><i data-lucide="droplet" class="w-3.5 h-3.5 text-beautage-pink"></i> Skincare & Serums</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Beauty Tech']) }}" class="hover:text-beautage-pink transition flex items-center gap-1.5"><i data-lucide="zap" class="w-3.5 h-3.5 text-purple-600"></i> Beauty Devices</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Haircare']) }}" class="hover:text-beautage-pink transition flex items-center gap-1.5"><i data-lucide="scissors" class="w-3.5 h-3.5 text-amber-500"></i> Hair Care & Repair</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Fragrance']) }}" class="hover:text-beautage-pink transition flex items-center gap-1.5"><i data-lucide="flower-2" class="w-3.5 h-3.5 text-rose-500"></i> Luxury Fragrances</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold text-beautage-purple text-xs uppercase tracking-wider mb-3 pb-2 border-b border-purple-100">Special Offers</h4>
                                <ul class="space-y-2 text-xs text-slate-600">
                                    <li><a href="{{ route('home') }}#flash-deals" class="hover:text-beautage-pink transition font-bold text-beautage-pink flex items-center gap-1.5"><i data-lucide="flame" class="w-3.5 h-3.5 fill-current"></i> Flash Deals (Up to 50% OFF)</a></li>
                                    <li><a href="{{ route('home') }}#celebrity-endorsement" class="hover:text-beautage-pink transition flex items-center gap-1.5"><i data-lucide="award" class="w-3.5 h-3.5 text-amber-500"></i> Celebrity Endorsed Routines</a></li>
                                    <li><a href="{{ route('home') }}#new-arrivals" class="hover:text-beautage-pink transition flex items-center gap-1.5"><i data-lucide="gift" class="w-3.5 h-3.5 text-purple-600"></i> New Arrival Bundles</a></li>
                                </ul>
                            </div>
                            <div class="bg-purple-50 rounded-xl p-4 border border-purple-200 flex flex-col justify-between">
                                <div>
                                    <span class="text-[10px] font-extrabold text-beautage-purple uppercase">Flagship Guarantee</span>
                                    <h5 class="text-xs font-bold text-beautage-purple mt-1">100% Original</h5>
                                    <p class="text-[11px] text-slate-600 mt-1">Verified authentic products imported with official brand warranties.</p>
                                </div>
                                <a href="{{ route('collections') }}" class="mt-3 text-center text-xs bg-beautage-purple text-white py-2 rounded-lg font-bold hover:bg-beautage-purpleDark transition">Shop All Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. SKINCARE MEGA MENU -->
                <div class="relative group">
                    <a href="{{ route('collections', ['cat' => 'Skincare']) }}" class="flex items-center gap-2 px-3.5 py-2 rounded-lg text-slate-700 hover:bg-purple-100/70 hover:text-beautage-purple transition">
                        <i data-lucide="droplet" class="w-4 h-4 text-beautage-pink"></i>
                        <span>Skincare & Serums</span>
                        <i data-lucide="chevron-down" class="w-3 h-3 opacity-60"></i>
                    </a>
                    <div class="absolute left-0 top-full pt-1 w-[750px] mega-menu-content z-50">
                        <div class="bg-white border border-purple-100 rounded-2xl shadow-2xl p-6 grid grid-cols-3 gap-6 text-slate-700">
                            <div>
                                <h4 class="font-bold text-beautage-purple text-xs uppercase tracking-wider mb-3 pb-2 border-b border-purple-100 flex items-center gap-2">
                                    <i data-lucide="droplet" class="w-4 h-4 text-beautage-pink"></i> Face Serums & Oils
                                </h4>
                                <ul class="space-y-2 text-xs text-slate-600">
                                    <li><a href="{{ route('collections', ['cat' => 'Skincare']) }}" class="hover:text-beautage-pink transition">Botanical Youth Renewal Serum</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Skincare']) }}" class="hover:text-beautage-pink transition">Hyaluronic Acid Hydration Boost</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Skincare']) }}" class="hover:text-beautage-pink transition">Gold Infused Eye Contour Elixir</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Skincare']) }}" class="hover:text-beautage-pink transition">Vitamin C Brightening Concentrate</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold text-beautage-purple text-xs uppercase tracking-wider mb-3 pb-2 border-b border-purple-100 flex items-center gap-2">
                                    <i data-lucide="shield-check" class="w-4 h-4 text-beautage-purple"></i> Creams & Treatments
                                </h4>
                                <ul class="space-y-2 text-xs text-slate-600">
                                    <li><a href="{{ route('collections', ['cat' => 'Skincare']) }}" class="hover:text-beautage-pink transition">Collagen Boosting Night Cream</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Skincare']) }}" class="hover:text-beautage-pink transition">Pore Balancing Gel Moisturizer</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Skincare']) }}" class="hover:text-beautage-pink transition">Organic Ubtan & Glow Masks</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Skincare']) }}" class="hover:text-beautage-pink transition">SPF 50+ Mineral Sun Shield</a></li>
                                </ul>
                            </div>
                            <div class="bg-gradient-to-br from-pink-50 to-purple-50 rounded-xl p-4 border border-pink-200 flex flex-col justify-between">
                                <div>
                                    <span class="text-[10px] font-extrabold text-beautage-pink uppercase tracking-widest">Bestseller Elixir</span>
                                    <h5 class="text-sm font-bold text-beautage-purple mt-1">Botanical Youth Serum</h5>
                                    <p class="text-[11px] text-slate-600 mt-1">100% Organic Rose Stem Cells & Hyaluronic Acid.</p>
                                </div>
                                <a href="{{ route('collections', ['cat' => 'Skincare']) }}" class="mt-3 text-center text-xs bg-beautage-pink text-white py-2 rounded-lg font-bold hover:bg-beautage-pinkHover transition">Shop Skincare</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. BEAUTY TECH MEGA MENU -->
                <div class="relative group">
                    <a href="{{ route('collections', ['cat' => 'Beauty Tech']) }}" class="flex items-center gap-2 px-3.5 py-2 rounded-lg text-slate-700 hover:bg-purple-100/70 hover:text-beautage-purple transition">
                        <i data-lucide="zap" class="w-4 h-4 text-purple-600"></i>
                        <span>Beauty Tech</span>
                        <i data-lucide="chevron-down" class="w-3 h-3 opacity-60"></i>
                    </a>
                    <div class="absolute left-0 top-full pt-1 w-[750px] mega-menu-content z-50">
                        <div class="bg-white border border-purple-100 rounded-2xl shadow-2xl p-6 grid grid-cols-3 gap-6 text-slate-700">
                            <div>
                                <h4 class="font-bold text-beautage-purple text-xs uppercase tracking-wider mb-3 pb-2 border-b border-purple-100 flex items-center gap-2">
                                    <i data-lucide="zap" class="w-4 h-4 text-purple-600"></i> Dermal Light Devices
                                </h4>
                                <ul class="space-y-2 text-xs text-slate-600">
                                    <li><a href="{{ route('collections', ['cat' => 'Beauty Tech']) }}" class="hover:text-beautage-pink transition">Lumina Pro 7-Spectrum LED Mask</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Beauty Tech']) }}" class="hover:text-beautage-pink transition">Photon Acne Clearance Wand</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Beauty Tech']) }}" class="hover:text-beautage-pink transition">Neck & Decollete Light Panel</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold text-beautage-purple text-xs uppercase tracking-wider mb-3 pb-2 border-b border-purple-100 flex items-center gap-2">
                                    <i data-lucide="cpu" class="w-4 h-4 text-beautage-purple"></i> Sculpting & Cryo Tech
                                </h4>
                                <ul class="space-y-2 text-xs text-slate-600">
                                    <li><a href="{{ route('collections', ['cat' => 'Beauty Tech']) }}" class="hover:text-beautage-pink transition">Sculpting Microcurrent Wand</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Beauty Tech']) }}" class="hover:text-beautage-pink transition">Thermal Cryo Sculpting Roller</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Beauty Tech']) }}" class="hover:text-beautage-pink transition">Ultrasonic Pore Cleaners & Scrubbers</a></li>
                                </ul>
                            </div>
                            <div class="bg-gradient-to-br from-purple-900 to-beautage-purple text-white rounded-xl p-4 border border-purple-700 flex flex-col justify-between shadow-md">
                                <div>
                                    <span class="text-[10px] font-extrabold text-pink-300 uppercase tracking-widest">Flagship Device</span>
                                    <h5 class="text-sm font-bold text-white mt-1">Lumina Pro Mask</h5>
                                    <p class="text-[11px] text-purple-100 mt-1">Medical-grade photon light therapy engine.</p>
                                </div>
                                <a href="{{ route('product.show', ['product' => 'lumina-pro-led-mask']) }}" class="mt-3 text-center text-xs bg-beautage-pink text-white py-2 rounded-lg font-bold hover:bg-beautage-pinkHover transition shadow">Explore Tech</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 5. HAIR CARE MEGA MENU -->
                <div class="relative group">
                    <a href="{{ route('collections', ['cat' => 'Haircare']) }}" class="flex items-center gap-2 px-3.5 py-2 rounded-lg text-slate-700 hover:bg-purple-100/70 hover:text-beautage-purple transition">
                        <i data-lucide="scissors" class="w-4 h-4 text-amber-500"></i>
                        <span>Hair Care & Styling</span>
                        <i data-lucide="chevron-down" class="w-3 h-3 opacity-60"></i>
                    </a>
                    <div class="absolute left-0 top-full pt-1 w-[720px] mega-menu-content z-50">
                        <div class="bg-white border border-purple-100 rounded-2xl shadow-2xl p-6 grid grid-cols-3 gap-6 text-slate-700">
                            <div>
                                <h4 class="font-bold text-beautage-purple text-xs uppercase tracking-wider mb-3 pb-2 border-b border-purple-100">Styling Tools</h4>
                                <ul class="space-y-2 text-xs text-slate-600">
                                    <li><a href="{{ route('collections', ['cat' => 'Haircare']) }}" class="hover:text-beautage-pink transition">Ionic Infrared Hair Styler Pro</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Haircare']) }}" class="hover:text-beautage-pink transition">Keratin Smooth Blowout Brush</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Haircare']) }}" class="hover:text-beautage-pink transition">Ceramic Hair Curling Wand</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold text-beautage-purple text-xs uppercase tracking-wider mb-3 pb-2 border-b border-purple-100">Oils & Shampoos</h4>
                                <ul class="space-y-2 text-xs text-slate-600">
                                    <li><a href="{{ route('collections', ['cat' => 'Haircare']) }}" class="hover:text-beautage-pink transition">Botanical Scalp & Hair Repair Oil</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Haircare']) }}" class="hover:text-beautage-pink transition">Keratin Silk Repair Shampoo</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Haircare']) }}" class="hover:text-beautage-pink transition">Rosemary Hair Growth Bundle</a></li>
                                </ul>
                            </div>
                            <div class="bg-purple-50 rounded-xl p-4 border border-purple-200 flex flex-col justify-between">
                                <div>
                                    <span class="text-[10px] font-extrabold text-amber-600 uppercase tracking-widest">Hair Growth</span>
                                    <h5 class="text-sm font-bold text-beautage-purple mt-1">Celebrity Champi Bundle</h5>
                                    <p class="text-[11px] text-slate-600 mt-1">Endorsed by Dananeer Mobeen & Fahad Sheikh.</p>
                                </div>
                                <a href="{{ route('home') }}#celebrity-endorsement" class="mt-3 text-center text-xs bg-beautage-purple text-white py-2 rounded-lg font-bold hover:bg-beautage-purpleDark transition">Watch Videos</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 6. LUXURY FRAGRANCE MEGA MENU -->
                <div class="relative group">
                    <a href="{{ route('collections', ['cat' => 'Fragrance']) }}" class="flex items-center gap-2 px-3.5 py-2 rounded-lg text-slate-700 hover:bg-purple-100/70 hover:text-beautage-purple transition">
                        <i data-lucide="flower-2" class="w-4 h-4 text-rose-500"></i>
                        <span>Luxury Fragrance</span>
                        <i data-lucide="chevron-down" class="w-3 h-3 opacity-60"></i>
                    </a>
                    <div class="absolute left-0 top-full pt-1 w-[700px] mega-menu-content z-50">
                        <div class="bg-white border border-purple-100 rounded-2xl shadow-2xl p-6 grid grid-cols-3 gap-6 text-slate-700">
                            <div>
                                <h4 class="font-bold text-beautage-purple text-xs uppercase tracking-wider mb-3 pb-2 border-b border-purple-100">Eau de Parfum</h4>
                                <ul class="space-y-2 text-xs text-slate-600">
                                    <li><a href="{{ route('collections', ['cat' => 'Fragrance']) }}" class="hover:text-beautage-pink transition">Velvet Blossom Eau de Parfum</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Fragrance']) }}" class="hover:text-beautage-pink transition">Amber Royale Signature Scent</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Fragrance']) }}" class="hover:text-beautage-pink transition">Midnight Jasmine Extract</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold text-beautage-purple text-xs uppercase tracking-wider mb-3 pb-2 border-b border-purple-100">Gift Sets & Oils</h4>
                                <ul class="space-y-2 text-xs text-slate-600">
                                    <li><a href="{{ route('collections', ['cat' => 'Fragrance']) }}" class="hover:text-beautage-pink transition">Artisanal Perfume Discovery Trio</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Fragrance']) }}" class="hover:text-beautage-pink transition">Sensual Body Mist & Oil Set</a></li>
                                </ul>
                            </div>
                            <div class="bg-rose-50 rounded-xl p-4 border border-rose-200 flex flex-col justify-between">
                                <div>
                                    <span class="text-[10px] font-extrabold text-rose-600 uppercase tracking-widest">Signature Scent</span>
                                    <h5 class="text-sm font-bold text-beautage-purple mt-1">Velvet Blossom</h5>
                                    <p class="text-[11px] text-slate-600 mt-1">Notes of white peony and Madagascar vanilla.</p>
                                </div>
                                <a href="{{ route('collections', ['cat' => 'Fragrance']) }}" class="mt-3 text-center text-xs bg-rose-600 text-white py-2 rounded-lg font-bold hover:bg-rose-700 transition">Shop Fragrance</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 7. WELLNESS & SPA MEGA MENU -->
                <div class="relative group">
                    <a href="{{ route('collections', ['cat' => 'Wellness']) }}" class="flex items-center gap-2 px-3.5 py-2 rounded-lg text-slate-700 hover:bg-purple-100/70 hover:text-beautage-purple transition">
                        <i data-lucide="heart-pulse" class="w-4 h-4 text-emerald-500"></i>
                        <span>Wellness & Spa</span>
                        <i data-lucide="chevron-down" class="w-3 h-3 opacity-60"></i>
                    </a>
                    <div class="absolute left-0 top-full pt-1 w-[700px] mega-menu-content z-50">
                        <div class="bg-white border border-purple-100 rounded-2xl shadow-2xl p-6 grid grid-cols-3 gap-6 text-slate-700">
                            <div>
                                <h4 class="font-bold text-beautage-purple text-xs uppercase tracking-wider mb-3 pb-2 border-b border-purple-100">Spa Rituals</h4>
                                <ul class="space-y-2 text-xs text-slate-600">
                                    <li><a href="{{ route('collections', ['cat' => 'Wellness']) }}" class="hover:text-beautage-pink transition">Aromatherapy Essential Oil Diffusers</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Wellness']) }}" class="hover:text-beautage-pink transition">Organic Body Scrub & Polish</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Wellness']) }}" class="hover:text-beautage-pink transition">Calming Bath Salt Infusions</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold text-beautage-purple text-xs uppercase tracking-wider mb-3 pb-2 border-b border-purple-100">At-Home Care</h4>
                                <ul class="space-y-2 text-xs text-slate-600">
                                    <li><a href="{{ route('collections', ['cat' => 'Wellness']) }}" class="hover:text-beautage-pink transition">Glitter Peel-Off Facial Masks</a></li>
                                    <li><a href="{{ route('collections', ['cat' => 'Wellness']) }}" class="hover:text-beautage-pink transition">Complete At-Home Facial Kit</a></li>
                                </ul>
                            </div>
                            <div class="bg-emerald-50 rounded-xl p-4 border border-emerald-200 flex flex-col justify-between">
                                <div>
                                    <span class="text-[10px] font-extrabold text-emerald-600 uppercase tracking-widest">Natural Glow</span>
                                    <h5 class="text-sm font-bold text-beautage-purple mt-1">Spa & Ubtan Rituals</h5>
                                    <p class="text-[11px] text-slate-600 mt-1">Endorsed by Saboor Aly for extreme glowing skin.</p>
                                </div>
                                <a href="{{ route('home') }}#wellness-section" class="mt-3 text-center text-xs bg-emerald-600 text-white py-2 rounded-lg font-bold hover:bg-emerald-700 transition">Explore Wellness</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 8. EXCLUSIVE OFFERS LINK -->
                <a href="{{ route('home') }}#flash-deals" class="flex items-center gap-2 px-3.5 py-2 rounded-lg text-beautage-pink hover:bg-pink-100/60 transition font-bold">
                    <i data-lucide="flame" class="w-4 h-4 fill-current"></i>
                    <span>Exclusive Offers</span>
                </a>
            </nav>
        </div>
    </header>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-nav-overlay" onclick="toggleMobileNav()" class="fixed inset-0 bg-beautage-purpleDark/40 backdrop-blur-sm z-50 opacity-0 pointer-events-none transition-opacity duration-300 lg:hidden"></div>
    <div id="mobile-nav-drawer" class="fixed top-0 left-0 h-full w-4/5 max-w-xs bg-white border-r border-purple-100 z-50 transform -translate-x-full transition-transform duration-300 ease-in-out p-6 flex flex-col justify-between lg:hidden shadow-2xl">
        <div>
            <div class="flex items-center justify-between pb-4 border-b border-purple-100">
                <img src="{{ asset('images/beautagelogosquare2.png') }}" alt="Beautage" class="h-10 w-auto" onerror="this.onerror=null; this.src='https://placehold.co/120x40/5E1F70/FFFFFF?text=Beautage';">
                <button onclick="toggleMobileNav()" class="text-slate-400 hover:text-beautage-purple p-2"><i data-lucide="x" class="w-6 h-6"></i></button>
            </div>
            <div class="py-4 space-y-3 text-sm font-semibold text-slate-700">
                <a href="{{ route('home') }}" onclick="toggleMobileNav()" class="block py-2 hover:text-beautage-purple">Home</a>
                <a href="{{ route('collections') }}" onclick="toggleMobileNav()" class="block py-2 hover:text-beautage-purple">Product Collections</a>
                <a href="{{ route('help') }}" onclick="toggleMobileNav()" class="block py-2 text-beautage-pink font-bold">Help Center & FAQ</a>
                <a href="{{ route('blog.index') }}" onclick="toggleMobileNav()" class="block py-2 hover:text-beautage-purple">Flagship Blog & Journal</a>
            </div>
        </div>
        <div class="pt-4 border-t border-purple-100">
            <span class="text-xs text-slate-500">Concierge Desk:</span>
            <a href="tel:+18008886678" class="block text-sm font-bold text-beautage-purple mt-0.5">+1 (800) BEAUTAGE</a>
        </div>
    </div>

    <!-- MAIN HELP CENTER & FAQ CONTENT -->

@yield('content')

@yield('below_main')

<!-- FOOTER EXACTLY IDENTICAL TO HOMEPAGE -->
    <footer class="mt-auto bg-beautage-purpleDark border-t border-purple-800 w-full text-white text-sm mb-24 md:mb-0">
        
        <div class="w-full px-4 sm:px-12 xl:px-20 py-8 border-b border-purple-800 bg-purple-950/80">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 max-w-7xl mx-auto">
                <div class="flex items-center gap-4 p-4 rounded-2xl bg-purple-900/90 border border-purple-600/70 shadow-md">
                    <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0">
                        <i data-lucide="truck" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h4 class="text-xs font-extrabold text-white">Free Express Shipping</h4>
                        <p class="text-[11px] text-purple-100 font-medium mt-0.5">On orders over $50</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 p-4 rounded-2xl bg-purple-900/90 border border-purple-600/70 shadow-md">
                    <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0">
                        <i data-lucide="shield-check" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h4 class="text-xs font-extrabold text-white">Secure Checkout</h4>
                        <p class="text-[11px] text-purple-100 font-medium mt-0.5">100% protected payments</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 p-4 rounded-2xl bg-purple-900/90 border border-purple-600/70 shadow-md">
                    <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0">
                        <i data-lucide="headphones" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h4 class="text-xs font-extrabold text-white">24/7 Dedicated Support</h4>
                        <p class="text-[11px] text-purple-100 font-medium mt-0.5">Always here to help you</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 p-4 rounded-2xl bg-purple-900/90 border border-purple-600/70 shadow-md">
                    <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0">
                        <i data-lucide="rotate-ccw" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h4 class="text-xs font-extrabold text-white">Hassle-Free Returns</h4>
                        <p class="text-[11px] text-purple-100 font-medium mt-0.5">30-day money-back guarantee</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full px-4 sm:px-12 xl:px-20 py-10 border-b border-purple-800">
            <div class="max-w-7xl mx-auto rounded-3xl bg-gradient-to-r from-purple-950 via-purple-900 to-purple-950 border border-purple-600/70 p-6 sm:p-12 shadow-2xl relative overflow-hidden flex flex-col lg:flex-row items-center justify-between gap-8">
                
                <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-beautage-pink/20 rounded-full blur-3xl pointer-events-none"></div>

                <div class="max-w-xl space-y-2 relative z-10 text-center lg:text-left">
                    <span class="inline-block px-3 py-1 rounded-full text-[10px] uppercase font-extrabold tracking-wider bg-emerald-500/20 text-emerald-300 border border-emerald-400/40 mb-1">
                        NEWSLETTER OFFER
                    </span>
                    <h3 class="text-2xl sm:text-3xl font-bold text-white tracking-tight font-serif">Get 15% Off Your First Order</h3>
                    <p class="text-xs sm:text-sm text-purple-100 leading-relaxed font-semibold">
                        Subscribe to our newsletter to receive early access to sales, new arrivals, and exclusive promo codes.
                    </p>
                </div>

                <form id="newsletter-form" onsubmit="handleNewsletterSubmit(event)" class="w-full lg:w-auto relative z-10 flex flex-col sm:flex-row items-center gap-3">
                    <div class="relative w-full sm:w-80">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-purple-200">
                            <i data-lucide="mail" class="w-4 h-4"></i>
                        </span>
                        <input type="email" id="newsletter-email" required placeholder="Enter your email address..." 
                               class="w-full pl-10 pr-4 py-3.5 bg-purple-950 border border-purple-500 rounded-xl text-xs text-white placeholder-purple-300 focus:outline-none focus:border-emerald-400 transition shadow-inner font-medium">
                    </div>
                    <button type="submit" class="w-full sm:w-auto px-6 py-3.5 bg-emerald-600 hover:bg-emerald-500 text-white font-extrabold text-xs uppercase tracking-wider rounded-xl transition shadow-lg shadow-emerald-900/30 shrink-0 flex items-center justify-center gap-2">
                        <span>Subscribe</span>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </button>
                </form>

            </div>
        </div>

        <div class="w-full px-4 sm:px-12 xl:px-20 py-5 border-b border-purple-800 bg-purple-950/40">
            <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-center lg:justify-between gap-y-3 gap-x-6 text-xs font-semibold">
                <a href="{{ route('returns') }}" class="flex items-center gap-2 text-purple-200 hover:text-white transition group py-1">
                    <i data-lucide="rotate-ccw" class="w-4 h-4 text-pink-400 group-hover:scale-110 transition"></i>
                    <span>Return and refund policy</span>
                </a>
                <a href="#" class="flex items-center gap-2 text-purple-200 hover:text-white transition group py-1">
                    <i data-lucide="shield" class="w-4 h-4 text-emerald-400 group-hover:scale-110 transition"></i>
                    <span>Privacy policy</span>
                </a>
                <a href="#" class="flex items-center gap-2 text-purple-200 hover:text-white transition group py-1">
                    <i data-lucide="file-text" class="w-4 h-4 text-amber-300 group-hover:scale-110 transition"></i>
                    <span>Terms of service</span>
                </a>
                <a href="{{ route('shipping') }}" class="flex items-center gap-2 text-purple-200 hover:text-white transition group py-1">
                    <i data-lucide="truck" class="w-4 h-4 text-cyan-400 group-hover:scale-110 transition"></i>
                    <span>Shipping policy</span>
                </a>
                <a href="{{ route('help') }}" class="flex items-center gap-2 text-purple-200 hover:text-white transition group py-1">
                    <i data-lucide="headphones" class="w-4 h-4 text-rose-400 group-hover:scale-110 transition"></i>
                    <span>Contact information</span>
                </a>
                <a href="#" class="flex items-center gap-2 text-purple-200 hover:text-white transition group py-1">
                    <i data-lucide="scale" class="w-4 h-4 text-purple-300 group-hover:scale-110 transition"></i>
                    <span>Legal notice</span>
                </a>
            </div>
        </div>

        <div class="w-full px-4 sm:px-12 xl:px-20 py-12 max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
            <div class="lg:col-span-1 space-y-4">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2">
                    <span class="text-xl font-bold font-serif text-white tracking-wider">BEAUTAGE.</span>
                </a>
                <p class="text-xs text-purple-100 leading-relaxed font-semibold">
                    Crafting high-end lifestyle products designed for modern comfort, sustainability, and uncompromising quality.
                </p>
                <div class="flex items-center gap-2 pt-1">
                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-xl bg-purple-900 border border-purple-600 hover:bg-beautage-pink text-white flex items-center justify-center transition shadow-sm" title="Facebook">
                        <i data-lucide="facebook" class="w-4 h-4"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-xl bg-purple-900 border border-purple-600 hover:bg-beautage-pink text-white flex items-center justify-center transition shadow-sm" title="Instagram">
                        <i data-lucide="instagram" class="w-4 h-4"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-xl bg-purple-900 border border-purple-600 hover:bg-beautage-pink text-white flex items-center justify-center transition shadow-sm" title="Twitter">
                        <i data-lucide="twitter" class="w-4 h-4"></i>
                    </a>
                    <a href="https://pinterest.com" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-xl bg-purple-900 border border-purple-600 hover:bg-beautage-pink text-white flex items-center justify-center transition shadow-sm" title="Pinterest">
                        <i data-lucide="pin" class="w-4 h-4"></i>
                    </a>
                    <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-xl bg-purple-900 border border-purple-600 hover:bg-beautage-pink text-white flex items-center justify-center transition shadow-sm" title="YouTube">
                        <i data-lucide="youtube" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="text-white font-extrabold uppercase text-xs tracking-wider mb-4 border-b border-purple-800 pb-2">Categories</h4>
                <ul class="space-y-3 text-xs text-purple-50 font-semibold">
                    <li><a href="{{ route('collections', ['cat' => 'Beauty Tech']) }}" class="hover:text-white hover:underline transition flex items-center gap-2"><i data-lucide="cpu" class="w-3.5 h-3.5 text-pink-400"></i> Electronics & Gadgets</a></li>
                    <li><a href="{{ route('collections', ['cat' => 'Skincare']) }}" class="hover:text-white hover:underline transition flex items-center gap-2"><i data-lucide="shirt" class="w-3.5 h-3.5 text-amber-300"></i> Fashion & Apparel</a></li>
                    <li><a href="{{ route('collections', ['cat' => 'Wellness']) }}" class="hover:text-white hover:underline transition flex items-center gap-2"><i data-lucide="home" class="w-3.5 h-3.5 text-purple-300"></i> Home & Kitchen</a></li>
                    <li><a href="{{ route('collections', ['cat' => 'Skincare']) }}" class="hover:text-white hover:underline transition flex items-center gap-2"><i data-lucide="sparkles" class="w-3.5 h-3.5 text-rose-400"></i> Beauty & Skincare</a></li>
                    <li><a href="{{ route('collections', ['cat' => 'Wellness']) }}" class="hover:text-white hover:underline transition flex items-center gap-2"><i data-lucide="leaf" class="w-3.5 h-3.5 text-emerald-400"></i> Sustainable Living</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-extrabold uppercase text-xs tracking-wider mb-4 border-b border-purple-800 pb-2">Customer Care</h4>
                <ul class="space-y-3 text-xs text-purple-50 font-semibold">
                    <li><a href="{{ route('help') }}" class="hover:text-white hover:underline transition flex items-center gap-2"><i data-lucide="help-circle" class="w-3.5 h-3.5 text-pink-400"></i> Help Center & FAQ</a></li>
                    <li><a href="{{ route('track-order') }}" class="hover:text-white hover:underline transition flex items-center gap-2"><i data-lucide="package" class="w-3.5 h-3.5 text-amber-300"></i> Track Your Order</a></li>
                    <li><a href="{{ route('returns') }}" class="hover:text-white hover:underline transition flex items-center gap-2"><i data-lucide="rotate-ccw" class="w-3.5 h-3.5 text-purple-300"></i> Returns & Exchanges</a></li>
                    <li><a href="{{ route('shipping') }}" class="hover:text-white hover:underline transition flex items-center gap-2"><i data-lucide="truck" class="w-3.5 h-3.5 text-emerald-400"></i> Shipping & Delivery</a></li>
                    <li><a href="{{ route('size-guide') }}" class="hover:text-white hover:underline transition flex items-center gap-2"><i data-lucide="ruler" class="w-3.5 h-3.5 text-rose-400"></i> Size Guide</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-extrabold uppercase text-xs tracking-wider mb-4 border-b border-purple-800 pb-2">About Beautage</h4>
                <ul class="space-y-3 text-xs text-purple-50 font-semibold">
                    <li><a href="{{ route('our-story') }}" class="hover:text-white hover:underline transition flex items-center gap-2"><i data-lucide="book-open" class="w-3.5 h-3.5 text-pink-400"></i> Our Story</a></li>
                    <li><a href="{{ route('careers') }}" class="hover:text-white hover:underline transition flex items-center gap-2"><i data-lucide="briefcase" class="w-3.5 h-3.5 text-amber-300"></i> Careers</a></li>
                    <li><a href="{{ route('press') }}" class="hover:text-white hover:underline transition flex items-center gap-2"><i data-lucide="newspaper" class="w-3.5 h-3.5 text-purple-300"></i> Press & Media</a></li>
                    <li><a href="#" class="hover:text-white hover:underline transition flex items-center gap-2"><i data-lucide="globe" class="w-3.5 h-3.5 text-emerald-400"></i> Sustainability</a></li>
                    <li><a href="{{ route('investor-relations') }}" class="hover:text-white hover:underline transition flex items-center gap-2"><i data-lucide="trending-up" class="w-3.5 h-3.5 text-rose-400"></i> Investor Relations</a></li>
                </ul>
            </div>

            <div class="space-y-3">
                <h4 class="text-white font-extrabold uppercase text-xs tracking-wider mb-4 border-b border-purple-800 pb-2">Mobile App</h4>
                <p class="text-xs text-purple-100 font-semibold leading-relaxed">
                    Download our app for exclusive mobile-only discounts.
                </p>
                <div class="space-y-2.5 pt-1">
                    <a href="https://apple.com" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 bg-purple-900 hover:bg-purple-800 border border-purple-600 p-2.5 rounded-xl transition text-white shadow-sm">
                        <i data-lucide="apple" class="w-5 h-5 shrink-0"></i>
                        <div class="text-left leading-none">
                            <span class="text-[9px] uppercase tracking-wider text-purple-200 block">Download on</span>
                            <span class="text-xs font-bold text-white block mt-0.5">App Store</span>
                        </div>
                    </a>
                    <a href="https://google.com" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 bg-purple-900 hover:bg-purple-800 border border-purple-600 p-2.5 rounded-xl transition text-white shadow-sm">
                        <i data-lucide="play" class="w-5 h-5 shrink-0 fill-current"></i>
                        <div class="text-left leading-none">
                            <span class="text-[9px] uppercase tracking-wider text-purple-200 block">Get it on</span>
                            <span class="text-xs font-bold text-white block mt-0.5">Google Play</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t border-purple-800 py-6 text-center text-xs text-purple-100 font-semibold">
            <p>© 2026 Beautage PVT Ltd. All rights reserved. Elevate Your Natural Elegance.</p>
        </div>
    </footer>

<!-- CART DRAWER -->
    <div id="cart-drawer" class="fixed inset-0 z-50 pointer-events-none hidden">
        <div id="cart-backdrop" onclick="toggleCartDrawer()" class="absolute inset-0 bg-beautage-purpleDark/40 backdrop-blur-sm opacity-0 transition-opacity duration-300"></div>
        <div id="cart-panel" class="absolute right-0 top-0 bottom-0 w-full max-w-md bg-white border-l border-purple-100 p-6 flex flex-col justify-between translate-x-full transition-transform duration-300 pointer-events-auto shadow-2xl">
            <div>
                <div class="flex items-center justify-between border-b border-purple-100 pb-4">
                    <h2 class="text-lg font-bold text-beautage-purple flex items-center gap-2">
                        <i data-lucide="shopping-bag" class="w-5 h-5 text-beautage-pink"></i> Your Shopping Bag
                    </h2>
                    <button onclick="toggleCartDrawer()" class="text-slate-400 hover:text-beautage-purple p-1 rounded-lg">
                        <i data-lucide="x" class="w-5 h-5"></i>
                    </button>
                </div>
                <div id="cart-items" class="mt-4 space-y-4 max-h-[60vh] overflow-y-auto pr-1"></div>
            </div>

            <div class="border-t border-purple-100 pt-4 space-y-3">
                <div class="flex justify-between text-sm text-slate-600">
                    <span>Subtotal</span>
                    <span id="cart-subtotal" class="text-beautage-purple font-semibold">$0.00</span>
                </div>
                <div class="flex justify-between text-sm text-slate-600">
                    <span>Estimated Tax (8%)</span>
                    <span id="cart-tax" class="text-beautage-purple font-semibold">$0.00</span>
                </div>
                <div class="flex justify-between text-base text-beautage-purple font-bold pt-2 border-t border-purple-100">
                    <span>Total</span>
                    <span id="cart-total" class="text-beautage-pink">$0.00</span>
                </div>
                <a href="{{ route('checkout') }}" class="w-full bg-beautage-pink hover:bg-beautage-pinkHover text-white font-semibold py-3 rounded-xl transition shadow-lg shadow-pink-500/30 flex items-center justify-center gap-2 text-xs uppercase tracking-wider">
                    <i data-lucide="credit-card" class="w-4 h-4"></i> Proceed to Checkout
                </a>
            </div>
        </div>
    </div>

    <!-- WISHLIST DRAWER -->
    <div id="wishlist-drawer" class="fixed inset-0 z-50 pointer-events-none hidden">
        <div id="wishlist-backdrop" onclick="toggleWishlistDrawer()" class="absolute inset-0 bg-beautage-purpleDark/40 backdrop-blur-sm opacity-0 transition-opacity duration-300"></div>
        <div id="wishlist-panel" class="absolute right-0 top-0 bottom-0 w-full max-w-md bg-white border-l border-purple-100 p-6 flex flex-col justify-between translate-x-full transition-transform duration-300 pointer-events-auto shadow-2xl">
            <div>
                <div class="flex items-center justify-between border-b border-purple-100 pb-4">
                    <h2 class="text-lg font-bold text-beautage-purple flex items-center gap-2">
                        <i data-lucide="heart" class="w-5 h-5 text-beautage-pink"></i> Your Saved Wishlist
                    </h2>
                    <button onclick="toggleWishlistDrawer()" class="text-slate-400 hover:text-beautage-purple p-1 rounded-lg">
                        <i data-lucide="x" class="w-5 h-5"></i>
                    </button>
                </div>
                <div id="wishlist-items" class="mt-4 space-y-4 max-h-[70vh] overflow-y-auto pr-1"></div>
            </div>
        </div>
    </div>

    <!-- QUICK VIEW MODAL -->
    <div id="quickview-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-beautage-purpleDark/40 backdrop-blur-md hidden">
        <div class="bg-white border border-purple-100 rounded-3xl max-w-2xl w-full p-6 sm:p-8 relative shadow-2xl">
            <button onclick="closeQuickView()" class="absolute top-4 right-4 text-slate-400 hover:text-slate-600"><i data-lucide="x" class="w-5 h-5"></i></button>
            <div id="quickview-content" class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center"></div>
        </div>
    </div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
});
</script>
@include('partials.scripts.products-catalog')
@stack('scripts')
</body>
</html>
