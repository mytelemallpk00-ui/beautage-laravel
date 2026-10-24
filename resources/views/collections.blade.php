@extends('layouts.app')

@section('title', 'Product Collections & Catalog — Beautage Flagship Store')

@section('body_attrs')
class="bg-slate-50 text-slate-800 font-sans antialiased min-h-screen flex flex-col selection:bg-beautage-pink selection:text-white pb-36 md:pb-0 overflow-x-hidden"
@endsection

@section('content')
<main class="w-full flex-1 flex flex-col py-6">

        <!-- 1. BREADCRUMB & COLLECTION HERO HEADER BANNER -->
        <div class="w-full px-4 sm:px-12 xl:px-20 mb-6">
            <nav class="flex items-center gap-2 text-xs font-semibold text-slate-500 whitespace-nowrap mb-4 overflow-x-auto no-scrollbar">
                <a href="{{ route('home') }}" class="hover:text-beautage-purple transition flex items-center gap-1">
                    <i data-lucide="home" class="w-3.5 h-3.5"></i> Home
                </a>
                <i data-lucide="chevron-right" class="w-3 h-3 text-purple-300"></i>
                <span class="text-beautage-purple font-bold">Product Collections & Catalog</span>
            </nav>

            <div class="rounded-3xl bg-gradient-to-r from-purple-900 via-beautage-purple to-purple-950 text-white p-6 sm:p-10 shadow-xl relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-beautage-pink/20 rounded-full blur-3xl pointer-events-none"></div>
                <div class="max-w-xl relative z-10 space-y-2 text-center md:text-left">
                    <span class="inline-block px-3 py-1 rounded-full text-[10px] uppercase font-extrabold tracking-widest bg-pink-500/30 text-pink-200 border border-pink-400/40">
                        VERIFIED FLAGSHIP STORE
                    </span>
                    <h1 class="text-2xl sm:text-4xl font-serif font-bold text-white tracking-tight">Professional Collections & Catalog</h1>
                    <p class="text-xs sm:text-sm text-purple-100 leading-relaxed">
                        Explore our comprehensive range of luxury skincare elixirs, advanced photon tech devices, and artisanal fragrances. 100% original verified products.
                    </p>
                </div>
                <div class="relative z-10 flex items-center gap-3">
                    <div class="p-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/20 text-center">
                        <span id="header-product-count" class="text-2xl font-black text-white block">8</span>
                        <span class="text-[10px] uppercase tracking-wider text-purple-200">Flagship Items</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. MAIN CATALOG SECTION WITH FILTERS & PRODUCTS -->
        <section class="w-full px-4 sm:px-12 xl:px-20 py-4">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- SIDEBAR FILTERS (SPAN 3) -->
                <aside class="lg:col-span-3 bg-white rounded-3xl p-6 border border-purple-100 shadow-xl space-y-6 lg:sticky lg:top-28">
                    <div class="flex items-center justify-between pb-4 border-b border-purple-100">
                        <h3 class="text-sm font-bold text-beautage-purple flex items-center gap-2">
                            <i data-lucide="filter" class="w-4 h-4 text-beautage-pink"></i> Filters & Sort
                        </h3>
                        <button onclick="resetFilters()" class="text-xs text-beautage-pink hover:underline font-bold">Reset All</button>
                    </div>

                    <!-- Department / Category Filter -->
                    <div class="space-y-3">
                        <label class="block text-xs font-extrabold text-beautage-purple uppercase tracking-wider">Departments</label>
                        <div class="space-y-2 text-xs font-semibold text-slate-700">
                            <label class="flex items-center gap-2 cursor-pointer hover:text-beautage-purple transition">
                                <input type="radio" name="sidebar-cat" value="all" checked onchange="applySidebarFilters()" class="accent-beautage-pink">
                                <span>All Departments</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer hover:text-beautage-purple transition">
                                <input type="radio" name="sidebar-cat" value="Skincare" onchange="applySidebarFilters()" class="accent-beautage-pink">
                                <span>Skincare & Serums</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer hover:text-beautage-purple transition">
                                <input type="radio" name="sidebar-cat" value="Beauty Tech" onchange="applySidebarFilters()" class="accent-beautage-pink">
                                <span>Beauty Tech Devices</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer hover:text-beautage-purple transition">
                                <input type="radio" name="sidebar-cat" value="Haircare" onchange="applySidebarFilters()" class="accent-beautage-pink">
                                <span>Hair Care & Styling</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer hover:text-beautage-purple transition">
                                <input type="radio" name="sidebar-cat" value="Fragrance" onchange="applySidebarFilters()" class="accent-beautage-pink">
                                <span>Luxury Fragrances</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer hover:text-beautage-purple transition">
                                <input type="radio" name="sidebar-cat" value="Wellness" onchange="applySidebarFilters()" class="accent-beautage-pink">
                                <span>Wellness & Spa</span>
                            </label>
                        </div>
                    </div>

                    <!-- Price Range Slider Filter -->
                    <div class="space-y-3 pt-4 border-t border-purple-100">
                        <div class="flex justify-between text-xs font-extrabold text-beautage-purple uppercase tracking-wider">
                            <span>Max Price</span>
                            <span id="price-slider-value" class="font-mono text-beautage-pink">$300</span>
                        </div>
                        <input type="range" id="price-range" min="50" max="300" step="10" value="300" oninput="applySidebarFilters()" class="w-full accent-beautage-purple cursor-pointer">
                        <div class="flex justify-between text-[10px] text-slate-400">
                            <span>$50</span>
                            <span>$300</span>
                        </div>
                    </div>

                    <!-- Minimum Rating Filter -->
                    <div class="space-y-3 pt-4 border-t border-purple-100">
                        <label class="block text-xs font-extrabold text-beautage-purple uppercase tracking-wider">Minimum Rating</label>
                        <select id="rating-filter" onchange="applySidebarFilters()" class="w-full py-2.5 px-3 bg-purple-50/50 border border-purple-200 rounded-xl text-xs font-semibold text-slate-700 focus:outline-none focus:border-beautage-purple">
                            <option value="0">All Ratings</option>
                            <option value="4.5">4.5 & Above ⭐</option>
                            <option value="4.8">4.8 & Above ⭐</option>
                        </select>
                    </div>

                    <!-- In-Stock Only Checkbox -->
                    <div class="pt-4 border-t border-purple-100">
                        <label class="flex items-center gap-2 text-xs font-semibold text-slate-700 cursor-pointer">
                            <input type="checkbox" id="instock-filter" onchange="applySidebarFilters()" class="accent-beautage-pink w-4 h-4 rounded">
                            <span>In-Stock Verified Only</span>
                        </label>
                    </div>
                </aside>

                <!-- MAIN PRODUCT CATALOG GRID (SPAN 9) -->
                <div class="lg:col-span-9 space-y-6">
                    
                    <!-- Top Bar: Sort By & Active Filters Bar -->
                    <div class="bg-white rounded-2xl p-4 border border-purple-100 shadow-sm flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div class="text-xs text-slate-600 font-medium">
                            Showing <span id="product-count-label" class="font-bold text-beautage-purple">8</span> results
                        </div>

                        <div class="flex items-center gap-3 w-full sm:w-auto justify-end">
                            <label class="text-xs font-extrabold text-slate-700 whitespace-nowrap">Sort By:</label>
                            <select id="sort-select" onchange="applySidebarFilters()" class="py-2 px-3 bg-purple-50/80 border border-purple-200 rounded-xl text-xs font-bold text-beautage-purple focus:outline-none focus:border-beautage-purple cursor-pointer w-full sm:w-auto">
                                <option value="featured">Featured / Default</option>
                                <option value="price-low">Price: Low to High</option>
                                <option value="price-high">Price: High to Low</option>
                                <option value="rating">Highest Customer Rating</option>
                                <option value="popularity">Most Popular</option>
                            </select>
                        </div>
                    </div>

                    <!-- Product Grid Container -->
                    <div id="catalog-product-grid" class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6"></div>

                    <!-- Infinite Scroll Loading Indicator -->
                    <div id="infinite-scroll-loader" class="hidden py-8 text-center flex flex-col items-center justify-center gap-2">
                        <div class="w-8 h-8 border-4 border-beautage-pink border-t-transparent rounded-full animate-spin"></div>
                        <span class="text-xs font-bold text-beautage-purple">Loading more flagship items...</span>
                    </div>

                    <!-- End of Catalog Notice -->
                    <div id="catalog-end-message" class="hidden py-8 text-center text-xs text-slate-400 font-semibold">
                        You have viewed all available flagship products in this collection.
                    </div>

                </div>

            </div>
        </section>

    </main>
@endsection

@section('below_main')

@endsection

@push('scripts')
@verbatim
<script>
        const products = [
            {
                id: 1,
                name: "Lumina Pro 7-Spectrum LED Mask",
                category: "Beauty Tech",
                price: 249.00,
                oldPrice: 349.00,
                rating: 4.9,
                reviews: 128,
                image: "https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?auto=format&fit=crop&q=80&w=600",
                hoverImage: "https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&q=80&w=600",
                badge: "Flagship Device",
                inStock: true,
                desc: "Medical-grade photon light therapy for targeted cellular rejuvenation and acne clearance."
            },
            {
                id: 2,
                name: "Botanical Youth Renewal Serum",
                category: "Skincare",
                price: 89.00,
                oldPrice: 115.00,
                rating: 4.8,
                reviews: 94,
                image: "https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&q=80&w=600",
                hoverImage: "https://images.unsplash.com/photo-1608248597359-f5383a886f49?auto=format&fit=crop&q=80&w=600",
                badge: "Bestseller",
                inStock: true,
                desc: "100% organic hyaluronic acid combined with Damascus rose stem cells for ultimate skin hydration."
            },
            {
                id: 3,
                name: "Sculpting Microcurrent Wand",
                category: "Beauty Tech",
                price: 129.00,
                oldPrice: 169.00,
                rating: 4.7,
                reviews: 82,
                image: "https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&q=80&w=600",
                hoverImage: "https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?auto=format&fit=crop&q=80&w=600",
                badge: "Save 25%",
                inStock: true,
                desc: "Facial toning device utilizing gentle microcurrents to sculpt and firm facial contours."
            },
            {
                id: 4,
                name: "Thermal Cryo Sculpting Wand",
                category: "Beauty Tech",
                price: 179.00,
                oldPrice: 229.00,
                rating: 4.9,
                reviews: 67,
                image: "https://images.unsplash.com/photo-1512290900722-9a702082b2d5?auto=format&fit=crop&q=80&w=600",
                hoverImage: "https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&q=80&w=600",
                badge: "New Arrival",
                inStock: true,
                desc: "Dual-action cryo-cooling and deep thermal vibration for pore tightening and lymphatic drainage."
            },
            {
                id: 5,
                name: "Gold Infused Eye Contour Elixir",
                category: "Skincare",
                price: 65.00,
                oldPrice: 95.00,
                rating: 4.8,
                reviews: 51,
                image: "https://images.unsplash.com/photo-1608248597359-f5383a886f49?auto=format&fit=crop&q=80&w=600",
                hoverImage: "https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&q=80&w=600",
                badge: "Popular",
                inStock: true,
                desc: "Micro-active 24k gold flakes infused with caffeine to instantly de-puff and illuminate tired eyes."
            },
            {
                id: 6,
                name: "Ionic Infrared Hair Styler Pro",
                category: "Haircare",
                price: 195.00,
                oldPrice: 260.00,
                rating: 4.9,
                reviews: 143,
                image: "https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&q=80&w=600",
                hoverImage: "https://images.unsplash.com/photo-1535585209827-a15fcdbc4c2d?auto=format&fit=crop&q=80&w=600",
                badge: "Award Winner",
                inStock: true,
                desc: "Advanced infrared heat technology seals hair cuticles for mirror-like shine and zero heat damage."
            },
            {
                id: 7,
                name: "Velvet Blossom Eau de Parfum",
                category: "Fragrance",
                price: 140.00,
                oldPrice: 195.00,
                rating: 4.7,
                reviews: 44,
                image: "https://images.unsplash.com/photo-1541643600914-78b084683601?auto=format&fit=crop&q=80&w=600",
                hoverImage: "https://images.unsplash.com/photo-1608248597359-f5383a886f49?auto=format&fit=crop&q=80&w=600",
                badge: "Artisanal",
                inStock: true,
                desc: "Sensual notes of white peony, Madagascar vanilla, and warm amber designed for signature elegance."
            },
            {
                id: 8,
                name: "Botanical Scalp & Hair Repair Oil",
                category: "Haircare",
                price: 52.00,
                oldPrice: 75.00,
                rating: 4.6,
                reviews: 39,
                image: "https://images.unsplash.com/photo-1535585209827-a15fcdbc4c2d?auto=format&fit=crop&q=80&w=600",
                hoverImage: "https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&q=80&w=600",
                badge: "Organic",
                inStock: true,
                desc: "Argan and rosemary nutrient-dense blend to stimulate hair follicles and restore silkiness."
            },
            {
                id: 9,
                name: "Rosemary & Biotin Growth Elixir",
                category: "Haircare",
                price: 45.00,
                oldPrice: 60.00,
                rating: 4.8,
                reviews: 76,
                image: "https://images.unsplash.com/photo-1535585209827-a15fcdbc4c2d?auto=format&fit=crop&q=80&w=600",
                hoverImage: "https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&q=80&w=600",
                badge: "Bestseller",
                inStock: true,
                desc: "Intensive follicle therapy oil designed for accelerated hair thickness and scalp health."
            },
            {
                id: 10,
                name: "Amber Royale Signature Perfume",
                category: "Fragrance",
                price: 165.00,
                oldPrice: 220.00,
                rating: 4.9,
                reviews: 53,
                image: "https://images.unsplash.com/photo-1541643600914-78b084683601?auto=format&fit=crop&q=80&w=600",
                hoverImage: "https://images.unsplash.com/photo-1608248597359-f5383a886f49?auto=format&fit=crop&q=80&w=600",
                badge: "Luxury",
                inStock: true,
                desc: "Warm smoky amber fused with rich cedarwood and sweet Tahitian vanilla."
            }
        ];

        let cart = [];
        let wishlist = [];
        let displayedCount = 6;
        let currentFilteredProducts = [];
        let isLoadingMore = false;

        document.addEventListener('DOMContentLoaded', () => {
            const urlParams = new URLSearchParams(window.location.search);
            const catParam = urlParams.get('cat');
            if(catParam) {
                const radio = document.querySelector(`input[name="sidebar-cat"][value="${catParam}"]`);
                if(radio) radio.checked = true;
            }

            applySidebarFilters();
            lucide.createIcons();
            startCountdownTimer();

            // Setup Infinite Scroll Listener
            window.addEventListener('scroll', handleInfiniteScroll);
        });

        function handleInfiniteScroll() {
            if (isLoadingMore) return;
            const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
            const currentScroll = window.scrollY;

            if (currentScroll >= scrollableHeight - 300) {
                if (displayedCount < currentFilteredProducts.length) {
                    loadMoreProducts();
                }
            }
        }

        function loadMoreProducts() {
            isLoadingMore = true;
            const loader = document.getElementById('infinite-scroll-loader');
            loader.classList.remove('hidden');

            setTimeout(() => {
                displayedCount += 4;
                renderCatalogGrid(currentFilteredProducts, true);
                loader.classList.add('hidden');
                isLoadingMore = false;
            }, 600);
        }

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

        function applySidebarFilters() {
            const selectedCat = document.querySelector('input[name="sidebar-cat"]:checked').value;
            const maxPrice = parseFloat(document.getElementById('price-range').value);
            const minRating = parseFloat(document.getElementById('rating-filter').value);
            const inStockOnly = document.getElementById('instock-filter').checked;
            const sortBy = document.getElementById('sort-select').value;

            document.getElementById('price-slider-value').innerText = `$${maxPrice}`;

            let filtered = products.filter(p => {
                if(selectedCat !== 'all' && p.category !== selectedCat) return false;
                if(p.price > maxPrice) return false;
                if(p.rating < minRating) return false;
                if(inStockOnly && !p.inStock) return false;
                return true;
            });

            if(sortBy === 'price-low') {
                filtered.sort((a, b) => a.price - b.price);
            } else if(sortBy === 'price-high') {
                filtered.sort((a, b) => b.price - a.price);
            } else if(sortBy === 'rating') {
                filtered.sort((a, b) => b.rating - a.rating);
            } else if(sortBy === 'popularity') {
                filtered.sort((a, b) => b.reviews - a.reviews);
            }

            currentFilteredProducts = filtered;
            displayedCount = 6;
            renderCatalogGrid(filtered, false);
        }

        function resetFilters() {
            document.querySelector('input[name="sidebar-cat"][value="all"]').checked = true;
            document.getElementById('price-range').value = 300;
            document.getElementById('rating-filter').value = "0";
            document.getElementById('instock-filter').checked = false;
            document.getElementById('sort-select').value = "featured";
            applySidebarFilters();
            showToast('All filters have been reset.');
        }

        function renderCatalogGrid(items, isAppending = false) {
            const container = document.getElementById('catalog-product-grid');
            const endMessage = document.getElementById('catalog-end-message');
            
            document.getElementById('product-count-label').innerText = items.length;
            document.getElementById('header-product-count').innerText = items.length;

            if(items.length === 0) {
                container.innerHTML = `<div class="col-span-full py-16 text-center text-slate-400 text-sm bg-white rounded-3xl border border-purple-100">No products match your selected filters. Try adjusting price range or department.</div>`;
                endMessage.classList.add('hidden');
                return;
            }

            const visibleItems = items.slice(0, displayedCount);

            container.innerHTML = visibleItems.map(p => {
                const isWishlisted = wishlist.some(item => item.id === p.id);
                return `
                    <div class="bg-white rounded-2xl p-4 border border-purple-100 hover:border-beautage-pink transition-all duration-300 shadow-sm hover:shadow-2xl hover:-translate-y-1.5 flex flex-col justify-between group">
                        <div class="relative rounded-xl overflow-hidden bg-purple-50 mb-4 aspect-square cursor-pointer" onclick="openQuickView(${p.id})">
                            <img src="${p.image}" alt="${p.name}" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out group-hover:opacity-0" onerror="this.onerror=null; this.src='https://placehold.co/400x400/5E1F70/FFFFFF?text=Beautage';">
                            <img src="${p.hoverImage}" alt="${p.name} Alt" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-500 ease-in-out group-hover:opacity-100 group-hover:scale-105" onerror="this.onerror=null; this.src='https://placehold.co/400x400/3B0764/FFFFFF?text=Beautage+Alt';">
                            
                            <span class="absolute top-2.5 left-2.5 bg-beautage-purple text-white text-[10px] font-extrabold px-2.5 py-1 rounded-full uppercase tracking-wider shadow z-10">
                                ${p.badge}
                            </span>
                            <button onclick="event.stopPropagation(); toggleWishlist(${p.id})" class="absolute top-2.5 right-2.5 p-2 rounded-xl bg-white/90 backdrop-blur-sm text-slate-700 hover:text-beautage-pink shadow transition z-10">
                                <i data-lucide="heart" class="w-4 h-4 ${isWishlisted ? 'fill-beautage-pink text-beautage-pink' : ''}"></i>
                            </button>
                        </div>

                        <div>
                            <div class="flex items-center justify-between text-[10px] font-bold text-beautage-pink uppercase tracking-widest mb-1">
                                <span>${p.category}</span>
                                <span class="text-amber-500">⭐ ${p.rating} (${p.reviews})</span>
                            </div>
                            <h3 class="text-sm font-bold text-beautage-purple mt-1 line-clamp-1 group-hover:text-beautage-pink transition"><a href="/products/lumina-pro-led-mask">${p.name}</a></h3>
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
            }).join('');

            if (displayedCount >= items.length) {
                endMessage.classList.remove('hidden');
            } else {
                endMessage.classList.add('hidden');
            }

            lucide.createIcons();
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
            applySidebarFilters();
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
            setInterval(() => {
                if(totalSeconds > 0) totalSeconds--;
                const h = Math.floor(totalSeconds / 3600).toString().padStart(2, '0');
                const m = Math.floor((totalSeconds % 3600) / 60).toString().padStart(2, '0');
                const s = (totalSeconds % 60).toString().padStart(2, '0');
                document.getElementById('announcement-timer').innerText = `${h}:${m}:${s}`;
            }, 1000);
        }
    </script>
@endverbatim
@endpush
