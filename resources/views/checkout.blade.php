@extends('layouts.app')

@section('title', 'Secure Checkout — Beautage Flagship Store')

@section('body_attrs')
class="bg-slate-50 text-slate-800 font-sans antialiased min-h-screen flex flex-col selection:bg-beautage-pink selection:text-white pb-36 md:pb-0 overflow-x-hidden"
@endsection

@section('content')
<main class="w-full flex-1 flex flex-col py-6 sm:py-10">

        <!-- BREADCRUMB -->
        <div class="w-full px-4 sm:px-12 xl:px-20 mb-6 overflow-x-auto no-scrollbar">
            <nav class="flex items-center gap-2 text-xs font-semibold text-slate-500 whitespace-nowrap">
                <a href="{{ route('home') }}" class="hover:text-beautage-purple transition flex items-center gap-1">
                    <i data-lucide="home" class="w-3.5 h-3.5"></i> Home
                </a>
                <i data-lucide="chevron-right" class="w-3 h-3 text-purple-300"></i>
                <a href="{{ route('product.show', ['product' => 'lumina-pro-led-mask']) }}" class="hover:text-beautage-purple transition">Product & Bag</a>
                <i data-lucide="chevron-right" class="w-3 h-3 text-purple-300"></i>
                <span class="text-beautage-purple font-bold">Secure Checkout</span>
            </nav>
        </div>

        <div class="w-full px-4 sm:px-12 xl:px-20">
            <div class="max-w-7xl mx-auto">
                <div class="mb-8">
                    <span class="inline-block px-3.5 py-1 rounded-full text-[10px] uppercase font-extrabold tracking-widest bg-pink-50 text-beautage-pink border border-pink-200 mb-2">
                        FLAGSHIP SECURE CHECKOUT PORTAL
                    </span>
                    <h1 class="text-2xl sm:text-4xl font-serif font-bold text-beautage-purple tracking-tight">Finalize Your Luxury Order</h1>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1 font-medium">Please verify your shipping details and choose your preferred payment method.</p>
                </div>

                <!-- 2-COLUMN CHECKOUT LAYOUT -->
                <form id="checkout-form" onsubmit="handleCompleteOrder(event)" class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    
                    <!-- LEFT COLUMN: FORMS & OPTIONS (SPAN 7) -->
                    <div class="lg:col-span-7 space-y-6">
                        
                        <!-- EXPRESS CHECKOUT BUTTONS -->
                        <div class="bg-white rounded-3xl p-6 border border-purple-100 shadow-xl space-y-4">
                            <span class="text-xs font-extrabold uppercase tracking-wider text-slate-500 block">Express Instant Checkout</span>
                            <div class="grid grid-cols-3 gap-3">
                                <button type="button" onclick="expressCheckoutAction('Shop Pay')" class="py-3 px-3 rounded-xl bg-purple-900 hover:bg-purple-950 text-white font-bold text-xs flex items-center justify-center gap-2 transition shadow-sm">
                                    <i data-lucide="zap" class="w-4 h-4 text-pink-300"></i> Shop Pay
                                </button>
                                <button type="button" onclick="expressCheckoutAction('PayPal')" class="py-3 px-3 rounded-xl bg-amber-400 hover:bg-amber-500 text-slate-900 font-bold text-xs flex items-center justify-center gap-2 transition shadow-sm">
                                    <i data-lucide="shield-check" class="w-4 h-4"></i> PayPal
                                </button>
                                <button type="button" onclick="expressCheckoutAction('Apple Pay')" class="py-3 px-3 rounded-xl bg-slate-900 hover:bg-black text-white font-bold text-xs flex items-center justify-center gap-2 transition shadow-sm">
                                    <i data-lucide="smartphone" class="w-4 h-4"></i> Apple Pay
                                </button>
                            </div>
                            <div class="relative flex py-1 items-center">
                                <div class="flex-grow border-t border-purple-100"></div>
                                <span class="flex-shrink mx-4 text-slate-400 text-[11px] font-semibold uppercase tracking-wider">Or manual secure entry</span>
                                <div class="flex-grow border-t border-purple-100"></div>
                            </div>
                        </div>

                        <!-- 1. CONTACT & SHIPPING ADDRESS -->
                        <div class="bg-white rounded-3xl p-6 sm:p-8 border border-purple-100 shadow-xl space-y-6">
                            <div class="flex items-center justify-between border-b border-purple-100 pb-4">
                                <h3 class="text-base font-serif font-bold text-beautage-purple flex items-center gap-2">
                                    <i data-lucide="user" class="w-5 h-5 text-beautage-pink"></i> 1. Contact & Shipping Address
                                </h3>
                                <span class="text-xs text-slate-400 font-semibold">Have an account? <a href="#" class="text-beautage-pink font-bold hover:underline">Log in</a></span>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <label class="block text-xs font-extrabold text-slate-700 uppercase mb-1">Email Address (for order receipt & tracking)</label>
                                    <input type="email" id="cust-email" required placeholder="e.g. saboor.khan@beautage.pk" class="w-full py-3 px-4 bg-purple-50/50 border border-purple-200 rounded-xl text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:border-beautage-purple font-medium">
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-extrabold text-slate-700 uppercase mb-1">First Name</label>
                                        <input type="text" id="cust-firstname" required placeholder="Saboor" class="w-full py-3 px-4 bg-purple-50/50 border border-purple-200 rounded-xl text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:border-beautage-purple font-medium">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-extrabold text-slate-700 uppercase mb-1">Last Name</label>
                                        <input type="text" id="cust-lastname" required placeholder="Aly" class="w-full py-3 px-4 bg-purple-50/50 border border-purple-200 rounded-xl text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:border-beautage-purple font-medium">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-xs font-extrabold text-slate-700 uppercase mb-1">Street Address</label>
                                    <input type="text" id="cust-address" required placeholder="House # 12, Main Boulevard, DHA Phase 5" class="w-full py-3 px-4 bg-purple-50/50 border border-purple-200 rounded-xl text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:border-beautage-purple font-medium">
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                    <div>
                                        <label class="block text-xs font-extrabold text-slate-700 uppercase mb-1">City / Region</label>
                                        <input type="text" id="cust-city" required placeholder="Lahore / Karachi" class="w-full py-3 px-4 bg-purple-50/50 border border-purple-200 rounded-xl text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:border-beautage-purple font-medium">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-extrabold text-slate-700 uppercase mb-1">Postal Code</label>
                                        <input type="text" id="cust-postal" required placeholder="54000" class="w-full py-3 px-4 bg-purple-50/50 border border-purple-200 rounded-xl text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:border-beautage-purple font-medium">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-extrabold text-slate-700 uppercase mb-1">Phone Number</label>
                                        <input type="tel" id="cust-phone" required placeholder="+92 300 9876543" class="w-full py-3 px-4 bg-purple-50/50 border border-purple-200 rounded-xl text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:border-beautage-purple font-medium">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2. SHIPPING METHOD -->
                        <div class="bg-white rounded-3xl p-6 sm:p-8 border border-purple-100 shadow-xl space-y-4">
                            <h3 class="text-base font-serif font-bold text-beautage-purple flex items-center gap-2 border-b border-purple-100 pb-4">
                                <i data-lucide="truck" class="w-5 h-5 text-emerald-600"></i> 2. Delivery Method
                            </h3>

                            <div class="space-y-3">
                                <label class="flex items-center justify-between p-4 rounded-2xl border-2 border-beautage-purple bg-purple-50/70 cursor-pointer transition">
                                    <div class="flex items-center gap-3">
                                        <input type="radio" name="shipping-method" checked class="accent-beautage-pink w-4 h-4" onchange="updateShippingCost(0)">
                                        <div>
                                            <span class="text-xs font-extrabold text-beautage-purple block">Free Express Flagship Delivery</span>
                                            <span class="text-[11px] text-slate-500">2-3 Business Days Across Pakistan & Worldwide</span>
                                        </div>
                                    </div>
                                    <span class="text-xs font-black text-emerald-600 uppercase">FREE</span>
                                </label>

                                <label class="flex items-center justify-between p-4 rounded-2xl border-2 border-purple-200 bg-white hover:border-purple-300 cursor-pointer transition">
                                    <div class="flex items-center gap-3">
                                        <input type="radio" name="shipping-method" class="accent-beautage-pink w-4 h-4" onchange="updateShippingCost(15)">
                                        <div>
                                            <span class="text-xs font-extrabold text-slate-800 block">VIP Overnight Priority Dispatch</span>
                                            <span class="text-[11px] text-slate-500">Next Day Air Priority (Guaranteed Courier)</span>
                                        </div>
                                    </div>
                                    <span class="text-xs font-black text-slate-800">$15.00</span>
                                </label>
                            </div>
                        </div>

                        <!-- 3. PAYMENT METHOD (COD, MOBILE WALLET, CARD, BANK TRANSFER) -->
                        <div class="bg-white rounded-3xl p-6 sm:p-8 border border-purple-100 shadow-xl space-y-6">
                            <h3 class="text-base font-serif font-bold text-beautage-purple flex items-center gap-2 border-b border-purple-100 pb-4">
                                <i data-lucide="credit-card" class="w-5 h-5 text-beautage-pink"></i> 3. Payment Method
                            </h3>

                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 sm:gap-3">
                                <button type="button" onclick="switchPaymentTab('cod')" id="pay-tab-cod" class="py-3 px-2 rounded-2xl border-2 border-beautage-purple bg-purple-50 text-beautage-purple font-bold text-[11px] sm:text-xs transition flex flex-col items-center justify-center gap-1 shadow-xs">
                                    <i data-lucide="banknote" class="w-4 h-4 text-emerald-600 shrink-0"></i> <span>Cash on Delivery</span>
                                </button>
                                <button type="button" onclick="switchPaymentTab('wallet')" id="pay-tab-wallet" class="py-3 px-2 rounded-2xl border-2 border-purple-200 bg-white text-slate-700 hover:border-purple-300 font-bold text-[11px] sm:text-xs transition flex flex-col items-center justify-center gap-1 shadow-xs">
                                    <i data-lucide="smartphone" class="w-4 h-4 text-beautage-pink shrink-0"></i> <span>Mobile Wallet</span>
                                </button>
                                <button type="button" onclick="switchPaymentTab('card')" id="pay-tab-card" class="py-3 px-2 rounded-2xl border-2 border-purple-200 bg-white text-slate-700 hover:border-purple-300 font-bold text-[11px] sm:text-xs transition flex flex-col items-center justify-center gap-1 shadow-xs">
                                    <i data-lucide="credit-card" class="w-4 h-4 text-beautage-purple shrink-0"></i> <span>Credit / Debit Card</span>
                                </button>
                                <button type="button" onclick="switchPaymentTab('bank')" id="pay-tab-bank" class="py-3 px-2 rounded-2xl border-2 border-purple-200 bg-white text-slate-700 hover:border-purple-300 font-bold text-[11px] sm:text-xs transition flex flex-col items-center justify-center gap-1 shadow-xs">
                                    <i data-lucide="landmark" class="w-4 h-4 text-amber-600 shrink-0"></i> <span>Bank Transfer</span>
                                </button>
                            </div>

                            <!-- COD PANEL -->
                            <div id="payment-panel-cod" class="p-5 rounded-2xl bg-purple-50/50 border border-purple-200 space-y-2">
                                <div class="flex items-center gap-2 text-xs font-bold text-beautage-purple">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600"></i>
                                    <span>Cash on Delivery available nationwide</span>
                                </div>
                                <p class="text-[11px] text-slate-600 leading-relaxed">Pay with absolute confidence in cash directly to our courier representative upon doorstep delivery.</p>
                            </div>

                            <!-- MOBILE WALLET PANEL -->
                            <div id="payment-panel-wallet" class="p-5 rounded-2xl bg-purple-50/70 border border-purple-200 space-y-4 hidden">
                                <div class="flex items-center justify-between">
                                    <span class="text-xs font-extrabold text-beautage-purple uppercase tracking-wider">Select Mobile Wallet</span>
                                    <span class="text-[10px] text-pink-600 font-bold bg-pink-50 px-2 py-0.5 rounded-full border border-pink-200">Instant Verification</span>
                                </div>
                                <div class="grid grid-cols-2 gap-3">
                                    <label class="flex items-center gap-3 p-3 rounded-xl border-2 border-beautage-purple bg-white cursor-pointer transition shadow-xs" id="wallet-easypaisa-label" onclick="selectWalletProvider('Easypaisa')">
                                        <input type="radio" name="wallet-provider" checked class="accent-beautage-pink w-4 h-4">
                                        <div>
                                            <span class="text-xs font-bold text-emerald-700 block">Easypaisa</span>
                                            <span class="text-[10px] text-slate-500">Telenor Microfinance</span>
                                        </div>
                                    </label>
                                    <label class="flex items-center gap-3 p-3 rounded-xl border-2 border-purple-200 bg-white cursor-pointer transition shadow-xs" id="wallet-jazzcash-label" onclick="selectWalletProvider('JazzCash')">
                                        <input type="radio" name="wallet-provider" class="accent-beautage-pink w-4 h-4">
                                        <div>
                                            <span class="text-xs font-bold text-rose-600 block">JazzCash</span>
                                            <span class="text-[10px] text-slate-500">Mobilink Microfinance</span>
                                        </div>
                                    </label>
                                </div>
                                <div>
                                    <label class="block text-xs font-extrabold text-slate-700 uppercase mb-1"><span id="wallet-name-label">Easypaisa</span> Account / Mobile Number</label>
                                    <div class="relative flex items-center">
                                        <input type="tel" id="wallet-number" placeholder="0300 1234567" class="w-full py-3 pl-4 pr-12 bg-white border border-purple-200 rounded-xl text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:border-beautage-purple font-mono">
                                        <span class="absolute right-3 text-beautage-pink"><i data-lucide="smartphone" class="w-4 h-4"></i></span>
                                    </div>
                                    <p class="text-[10px] text-slate-500 mt-1">An automated USSD push notification or OTP prompt will be sent to your mobile number upon order confirmation.</p>
                                </div>
                            </div>

                            <!-- CARD PANEL -->
                            <div id="payment-panel-card" class="space-y-4 hidden">
                                <div>
                                    <label class="block text-xs font-extrabold text-slate-700 uppercase mb-1">Card Number</label>
                                    <div class="relative flex items-center">
                                        <input type="text" id="card-number" placeholder="4532 •••• •••• 8892" class="w-full py-3 pl-4 pr-10 bg-purple-50/50 border border-purple-200 rounded-xl text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:border-beautage-purple font-mono">
                                        <span class="absolute right-3 text-slate-400"><i data-lucide="credit-card" class="w-4 h-4"></i></span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-extrabold text-slate-700 uppercase mb-1">Expiration Date</label>
                                        <input type="text" id="card-expiry" placeholder="MM / YY" class="w-full py-3 px-4 bg-purple-50/50 border border-purple-200 rounded-xl text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:border-beautage-purple font-mono">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-extrabold text-slate-700 uppercase mb-1">Security Code (CVV)</label>
                                        <input type="text" id="card-cvv" placeholder="CVC" class="w-full py-3 px-4 bg-purple-50/50 border border-purple-200 rounded-xl text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:border-beautage-purple font-mono">
                                    </div>
                                </div>
                            </div>

                            <!-- BANK TRANSFER PANEL -->
                            <div id="payment-panel-bank" class="p-5 rounded-2xl bg-amber-50/60 border border-amber-200 space-y-2.5 hidden">
                                <div class="flex items-center gap-2 text-xs font-bold text-amber-900">
                                    <i data-lucide="landmark" class="w-4 h-4 text-amber-600"></i>
                                    <span>Direct Bank Transfer Details</span>
                                </div>
                                <p class="text-[11px] text-slate-700 leading-relaxed">Transfer total amount to <strong>Beautage PVT Ltd</strong> (HBL Account: <code class="bg-white px-2 py-0.5 rounded font-mono text-xs">PK36HABB001234567890</code>). Your order will dispatch upon payment receipt confirmation.</p>
                            </div>
                        </div>

                    </div>

                    <!-- RIGHT COLUMN: ORDER SUMMARY & TOTALS (SPAN 5) -->
                    <div class="lg:col-span-5 space-y-6 lg:sticky lg:top-28">
                        
                        <div class="bg-white rounded-3xl p-6 sm:p-8 border border-purple-100 shadow-2xl space-y-6">
                            <div class="flex items-center justify-between border-b border-purple-100 pb-4">
                                <h3 class="text-base font-serif font-bold text-beautage-purple flex items-center gap-2">
                                    <i data-lucide="shopping-bag" class="w-5 h-5 text-beautage-pink"></i> Order Summary
                                </h3>
                                <a href="{{ route('product.show', ['product' => 'lumina-pro-led-mask']) }}" class="text-xs font-bold text-beautage-pink hover:underline">Edit Bag</a>
                            </div>

                            <!-- Cart Items List container -->
                            <div id="checkout-cart-items" class="space-y-4 max-h-[320px] overflow-y-auto pr-1">
                                <!-- Populated via JS -->
                            </div>

                            <!-- Promo Code Input -->
                            <div class="pt-3 border-t border-purple-100 space-y-2">
                                <label class="block text-xs font-extrabold text-slate-700 uppercase">Promo / Discount Code:</label>
                                <div class="flex items-center gap-2">
                                    <input type="text" id="promo-input" placeholder="e.g. BEAUTAGE15" class="flex-1 py-2.5 px-3 bg-purple-50/50 border border-purple-200 rounded-xl text-xs uppercase placeholder-slate-400 focus:outline-none focus:border-beautage-purple font-bold">
                                    <button type="button" onclick="applyPromoCode()" class="px-4 py-2.5 bg-beautage-purple hover:bg-beautage-purpleDark text-white text-xs font-bold rounded-xl transition">Apply</button>
                                </div>
                                <div id="promo-message" class="text-xs font-semibold hidden"></div>
                            </div>

                            <!-- Calculation Totals -->
                            <div class="pt-4 border-t border-purple-100 space-y-3">
                                <div class="flex justify-between text-xs font-medium text-slate-600">
                                    <span>Bag Subtotal</span>
                                    <span id="summary-subtotal" class="font-bold text-beautage-purple">$0.00</span>
                                </div>
                                <div id="discount-row" class="flex justify-between text-xs font-medium text-emerald-600 hidden">
                                    <span>Discount (<span id="discount-code-name"></span>)</span>
                                    <span id="summary-discount" class="font-bold">-$0.00</span>
                                </div>
                                <div class="flex justify-between text-xs font-medium text-slate-600">
                                    <span>Estimated Shipping</span>
                                    <span id="summary-shipping" class="font-bold text-emerald-600">FREE</span>
                                </div>
                                <div class="flex justify-between text-xs font-medium text-slate-600">
                                    <span>Estimated Tax (8%)</span>
                                    <span id="summary-tax" class="font-bold text-beautage-purple">$0.00</span>
                                </div>
                                <div class="flex justify-between text-base font-black text-beautage-purple pt-3 border-t border-purple-200">
                                    <span>Grand Total</span>
                                    <span id="summary-grandtotal" class="text-beautage-pink text-xl">$0.00</span>
                                </div>
                            </div>

                            <!-- COMPLETE ORDER SUBMIT BUTTON -->
                            <button type="submit" class="w-full bg-beautage-pink hover:bg-beautage-pinkHover text-white font-black py-4 px-6 rounded-2xl transition shadow-xl shadow-pink-500/30 flex items-center justify-center gap-3 text-xs uppercase tracking-wider">
                                <i data-lucide="shield-check" class="w-5 h-5"></i> Complete Secure Order
                            </button>

                            <div class="flex items-center justify-center gap-2 text-[11px] text-slate-500 pt-1">
                                <i data-lucide="lock" class="w-3.5 h-3.5 text-beautage-purple"></i>
                                <span>Encrypted & Protected by 256-Bit SSL Security</span>
                            </div>
                        </div>

                    </div>

                </form>
            </div>
        </div>

        <!-- "YOU MAY ALSO LIKE" SECTION RIGHT BEFORE FOOTER -->
        <section class="w-full px-4 sm:px-12 xl:px-20 mt-20 mb-12">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between gap-4 mb-8">
                    <div>
                        <span class="inline-block px-3.5 py-1 rounded-full text-[10px] uppercase font-extrabold tracking-widest bg-pink-50 text-beautage-pink border border-pink-200 mb-2">
                            RECOMMENDED FOR YOU
                        </span>
                        <h2 class="text-2xl sm:text-3xl font-serif font-bold text-beautage-purple tracking-tight">You May Also Like</h2>
                    </div>
                    <a href="{{ route('collections') }}" class="text-xs font-bold text-beautage-pink hover:underline flex items-center gap-1">
                        Explore Full Flagship Catalog <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Product 1 -->
                    <div class="bg-white rounded-3xl p-4 border border-purple-100 shadow-xl flex flex-col justify-between group hover:border-beautage-purple transition duration-300">
                        <div class="relative overflow-hidden rounded-2xl aspect-square bg-purple-50">
                            <img src="https://images.unsplash.com/photo-1608248597359-f21953257962?auto=format&fit=crop&q=80&w=400" alt="Hyaluronic Serum" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" onerror="this.onerror=null; this.src='https://placehold.co/400x400/5E1F70/FFFFFF?text=Serum';">
                            <span class="absolute top-3 left-3 bg-beautage-pink text-white text-[10px] font-extrabold px-2.5 py-1 rounded-full shadow">BESTSELLER</span>
                        </div>
                        <div class="mt-4 space-y-1">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Hydration Elixir</span>
                            <h3 class="text-sm font-bold text-beautage-purple line-clamp-1">Hyaluronic Acid Hydration Boost</h3>
                            <div class="flex items-center gap-1 text-amber-400 text-xs">
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                <span class="font-bold text-slate-700">4.9 (310)</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center justify-between pt-3 border-t border-purple-100">
                            <span class="text-base font-black text-beautage-purple">$65.00</span>
                            <a href="{{ route('product.show', ['product' => 'lumina-pro-led-mask']) }}" class="px-4 py-2 bg-purple-100 hover:bg-beautage-purple hover:text-white text-beautage-purple font-bold text-xs rounded-xl transition shadow-sm">View Item</a>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="bg-white rounded-3xl p-4 border border-purple-100 shadow-xl flex flex-col justify-between group hover:border-beautage-purple transition duration-300">
                        <div class="relative overflow-hidden rounded-2xl aspect-square bg-purple-50">
                            <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&q=80&w=400" alt="Facial Sculptor" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" onerror="this.onerror=null; this.src='https://placehold.co/400x400/5E1F70/FFFFFF?text=Sculptor';">
                            <span class="absolute top-3 left-3 bg-emerald-600 text-white text-[10px] font-extrabold px-2.5 py-1 rounded-full shadow">NEW TECH</span>
                        </div>
                        <div class="mt-4 space-y-1">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Microcurrent Device</span>
                            <h3 class="text-sm font-bold text-beautage-purple line-clamp-1">Sculpting Microcurrent Wand</h3>
                            <div class="flex items-center gap-1 text-amber-400 text-xs">
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                <span class="font-bold text-slate-700">4.8 (184)</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center justify-between pt-3 border-t border-purple-100">
                            <span class="text-base font-black text-beautage-purple">$129.00</span>
                            <a href="{{ route('product.show', ['product' => 'lumina-pro-led-mask']) }}" class="px-4 py-2 bg-purple-100 hover:bg-beautage-purple hover:text-white text-beautage-purple font-bold text-xs rounded-xl transition shadow-sm">View Item</a>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="bg-white rounded-3xl p-4 border border-purple-100 shadow-xl flex flex-col justify-between group hover:border-beautage-purple transition duration-300">
                        <div class="relative overflow-hidden rounded-2xl aspect-square bg-purple-50">
                            <img src="https://images.unsplash.com/photo-1541643600914-78b084683601?auto=format&fit=crop&q=80&w=400" alt="Velvet Blossom" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" onerror="this.onerror=null; this.src='https://placehold.co/400x400/5E1F70/FFFFFF?text=Perfume';">
                            <span class="absolute top-3 left-3 bg-rose-500 text-white text-[10px] font-extrabold px-2.5 py-1 rounded-full shadow">SIGNATURE</span>
                        </div>
                        <div class="mt-4 space-y-1">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Eau de Parfum</span>
                            <h3 class="text-sm font-bold text-beautage-purple line-clamp-1">Velvet Blossom Eau de Parfum</h3>
                            <div class="flex items-center gap-1 text-amber-400 text-xs">
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                <span class="font-bold text-slate-700">5.0 (420)</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center justify-between pt-3 border-t border-purple-100">
                            <span class="text-base font-black text-beautage-purple">$110.00</span>
                            <a href="{{ route('product.show', ['product' => 'lumina-pro-led-mask']) }}" class="px-4 py-2 bg-purple-100 hover:bg-beautage-purple hover:text-white text-beautage-purple font-bold text-xs rounded-xl transition shadow-sm">View Item</a>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="bg-white rounded-3xl p-4 border border-purple-100 shadow-xl flex flex-col justify-between group hover:border-beautage-purple transition duration-300">
                        <div class="relative overflow-hidden rounded-2xl aspect-square bg-purple-50">
                            <img src="https://images.unsplash.com/photo-1535585209827-a15fcdbc4c2d?auto=format&fit=crop&q=80&w=400" alt="Keratin Oil" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" onerror="this.onerror=null; this.src='https://placehold.co/400x400/5E1F70/FFFFFF?text=Hair';">
                            <span class="absolute top-3 left-3 bg-amber-500 text-white text-[10px] font-extrabold px-2.5 py-1 rounded-full shadow">CELEBRITY</span>
                        </div>
                        <div class="mt-4 space-y-1">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Hair Repair</span>
                            <h3 class="text-sm font-bold text-beautage-purple line-clamp-1">Botanical Scalp & Hair Repair Oil</h3>
                            <div class="flex items-center gap-1 text-amber-400 text-xs">
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                <span class="font-bold text-slate-700">4.9 (145)</span>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center justify-between pt-3 border-t border-purple-100">
                            <span class="text-base font-black text-beautage-purple">$48.00</span>
                            <a href="{{ route('product.show', ['product' => 'lumina-pro-led-mask']) }}" class="px-4 py-2 bg-purple-100 hover:bg-beautage-purple hover:text-white text-beautage-purple font-bold text-xs rounded-xl transition shadow-sm">View Item</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('below_main')
<!-- ORDER SUCCESS CONFIRMATION MODAL -->
    <div id="success-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-beautage-purpleDark/70 backdrop-blur-md hidden">
        <div class="bg-white border border-purple-100 rounded-3xl max-w-xl w-full p-6 sm:p-10 relative shadow-2xl text-center space-y-6">
            <div class="w-20 h-20 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto shadow-inner">
                <i data-lucide="check-circle-2" class="w-10 h-10"></i>
            </div>
            <div>
                <span class="inline-block px-3 py-1 rounded-full text-[10px] uppercase font-extrabold tracking-widest bg-emerald-50 text-emerald-700 border border-emerald-200 mb-2">
                    ORDER PLACED SUCCESSFULLY
                </span>
                <h2 class="text-2xl sm:text-3xl font-serif font-bold text-beautage-purple">Thank You for Your Order!</h2>
                <p class="text-xs sm:text-sm text-slate-600 mt-2">Your luxury order <strong id="success-order-id" class="text-beautage-pink font-mono">#BTG-98421</strong> has been successfully confirmed and queued for priority dispatch.</p>
            </div>

            <div class="p-4 rounded-2xl bg-purple-50/70 border border-purple-200 text-left space-y-2 text-xs">
                <div class="flex justify-between font-bold text-beautage-purple">
                    <span>Recipient:</span>
                    <span id="receipt-name" class="font-normal text-slate-700">-</span>
                </div>
                <div class="flex justify-between font-bold text-beautage-purple">
                    <span>Destination:</span>
                    <span id="receipt-address" class="font-normal text-slate-700">-</span>
                </div>
                <div class="flex justify-between font-bold text-beautage-purple">
                    <span>Payment Method:</span>
                    <span id="receipt-payment" class="font-normal text-slate-700">-</span>
                </div>
                <div class="flex justify-between font-bold text-beautage-purple border-t border-purple-200 pt-2">
                    <span>Total Paid:</span>
                    <span id="receipt-total" class="font-black text-beautage-pink">-</span>
                </div>
            </div>

            <div class="flex gap-3 pt-2">
                <button onclick="window.location.href='/'" class="flex-1 py-3.5 bg-beautage-purple hover:bg-beautage-purpleDark text-white font-bold text-xs uppercase tracking-wider rounded-xl transition shadow-lg">
                    Return to Store Home
                </button>
            </div>
        </div>
    </div>

    <!-- CART & WISHLIST DRAWERS -->
    <div id="cart-drawer" class="fixed inset-0 z-50 pointer-events-none hidden">
        <div id="cart-backdrop" onclick="toggleCartDrawer()" class="absolute inset-0 bg-beautage-purpleDark/40 backdrop-blur-sm opacity-0 transition-opacity duration-300"></div>
        <div id="cart-panel" class="absolute right-0 top-0 bottom-0 w-full max-w-md bg-white border-l border-purple-100 p-6 flex flex-col justify-between translate-x-full transition-transform duration-300 pointer-events-auto shadow-2xl">
            <div>
                <div class="flex items-center justify-between border-b border-purple-100 pb-4">
                    <h2 class="text-lg font-bold text-beautage-purple flex items-center gap-2">
                        <i data-lucide="shopping-bag" class="w-5 h-5 text-beautage-pink"></i> Your Shopping Bag
                    </h2>
                    <button onclick="toggleCartDrawer()" class="text-slate-400 hover:text-beautage-purple p-2"><i data-lucide="x" class="w-5 h-5"></i></button>
                </div>
                <div id="cart-items" class="mt-4 space-y-4 max-h-[60vh] overflow-y-auto pr-1"></div>
            </div>
            <div class="border-t border-purple-100 pt-4 space-y-3">
                <div class="flex justify-between text-sm text-slate-600"><span>Subtotal</span><span id="cart-subtotal" class="text-beautage-purple font-semibold">$0.00</span></div>
                <div class="flex justify-between text-sm text-slate-600"><span>Estimated Tax (8%)</span><span id="cart-tax" class="text-beautage-purple font-semibold">$0.00</span></div>
                <div class="flex justify-between text-base text-beautage-purple font-bold pt-2 border-t border-purple-100"><span>Total</span><span id="cart-total" class="text-beautage-pink">$0.00</span></div>
                <button onclick="window.location.href='/checkout'" class="w-full bg-beautage-pink hover:bg-beautage-pinkHover text-white font-semibold py-3.5 rounded-xl transition shadow-lg shadow-pink-500/30 flex items-center justify-center gap-2 text-xs uppercase tracking-wider">
                    <i data-lucide="credit-card" class="w-4 h-4"></i> Proceed to Checkout
                </button>
            </div>
        </div>
    </div>

    <div id="wishlist-drawer" class="fixed inset-0 z-50 pointer-events-none hidden">
        <div id="wishlist-backdrop" onclick="toggleWishlistDrawer()" class="absolute inset-0 bg-beautage-purpleDark/40 backdrop-blur-sm opacity-0 transition-opacity duration-300"></div>
        <div id="wishlist-panel" class="absolute right-0 top-0 bottom-0 w-full max-w-md bg-white border-l border-purple-100 p-6 flex flex-col justify-between translate-x-full transition-transform duration-300 pointer-events-auto shadow-2xl">
            <div>
                <div class="flex items-center justify-between border-b border-purple-100 pb-4">
                    <h2 class="text-lg font-bold text-beautage-purple flex items-center gap-2">
                        <i data-lucide="heart" class="w-5 h-5 text-beautage-pink"></i> Your Saved Wishlist
                    </h2>
                    <button onclick="toggleWishlistDrawer()" class="text-slate-400 hover:text-beautage-purple p-2"><i data-lucide="x" class="w-5 h-5"></i></button>
                </div>
                <div id="wishlist-items" class="mt-4 space-y-4 max-h-[70vh] overflow-y-auto pr-1"></div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@verbatim
<script>
        let checkoutCart = [
            {
                id: 1,
                name: "Lumina Pro 7-Spectrum LED Mask (Rose Gold Edition / Standard Pro Kit)",
                price: 249.00,
                image: "https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?auto=format&fit=crop&q=80&w=300",
                qty: 1
            },
            {
                id: 2,
                name: "Botanical Youth Renewal Serum",
                price: 89.00,
                image: "https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&q=80&w=300",
                qty: 1
            }
        ];

        let shippingCost = 0.00;
        let discountPercent = 0;
        let selectedPaymentMethod = "Cash on Delivery";
        let selectedWalletProvider = "Easypaisa";

        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
            loadCartFromStorage();
            renderCheckoutSummary();
            startCountdownTimer();
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

        function loadCartFromStorage() {
            try {
                const stored = localStorage.getItem('beautage_cart');
                if(stored) {
                    const parsed = JSON.parse(stored);
                    if(parsed.length > 0) checkoutCart = parsed;
                }
            } catch(e) {
                console.log("Using default sample items");
            }
        }

        function updateShippingCost(cost) {
            shippingCost = cost;
            const shipEl = document.getElementById('summary-shipping');
            if(cost === 0) {
                shipEl.innerText = "FREE";
                shipEl.className = "font-bold text-emerald-600";
            } else {
                shipEl.innerText = `$${cost.toFixed(2)}`;
                shipEl.className = "font-bold text-slate-800";
            }
            renderCheckoutSummary();
        }

        function switchPaymentTab(method) {
            const codBtn = document.getElementById('pay-tab-cod');
            const walletBtn = document.getElementById('pay-tab-wallet');
            const cardBtn = document.getElementById('pay-tab-card');
            const bankBtn = document.getElementById('pay-tab-bank');

            const codPanel = document.getElementById('payment-panel-cod');
            const walletPanel = document.getElementById('payment-panel-wallet');
            const cardPanel = document.getElementById('payment-panel-card');
            const bankPanel = document.getElementById('payment-panel-bank');

            [codBtn, walletBtn, cardBtn, bankBtn].forEach(b => {
                b.className = "py-3 px-2 rounded-2xl border-2 border-purple-200 bg-white text-slate-700 hover:border-purple-300 font-bold text-[11px] sm:text-xs transition flex flex-col items-center justify-center gap-1 shadow-xs";
            });
            [codPanel, walletPanel, cardPanel, bankPanel].forEach(p => p.classList.add('hidden'));

            if(method === 'cod') {
                selectedPaymentMethod = "Cash on Delivery";
                codBtn.className = "py-3 px-2 rounded-2xl border-2 border-beautage-purple bg-purple-50 text-beautage-purple font-bold text-[11px] sm:text-xs transition flex flex-col items-center justify-center gap-1 shadow-xs";
                codPanel.classList.remove('hidden');
            } else if(method === 'wallet') {
                selectedPaymentMethod = `Mobile Wallet (${selectedWalletProvider})`;
                walletBtn.className = "py-3 px-2 rounded-2xl border-2 border-beautage-purple bg-purple-50 text-beautage-purple font-bold text-[11px] sm:text-xs transition flex flex-col items-center justify-center gap-1 shadow-xs";
                walletPanel.classList.remove('hidden');
            } else if(method === 'card') {
                selectedPaymentMethod = "Credit / Debit Card";
                cardBtn.className = "py-3 px-2 rounded-2xl border-2 border-beautage-purple bg-purple-50 text-beautage-purple font-bold text-[11px] sm:text-xs transition flex flex-col items-center justify-center gap-1 shadow-xs";
                cardPanel.classList.remove('hidden');
            } else if(method === 'bank') {
                selectedPaymentMethod = "Direct Bank Transfer";
                bankBtn.className = "py-3 px-2 rounded-2xl border-2 border-beautage-purple bg-purple-50 text-beautage-purple font-bold text-[11px] sm:text-xs transition flex flex-col items-center justify-center gap-1 shadow-xs";
                bankPanel.classList.remove('hidden');
            }
        }

        function selectWalletProvider(provider) {
            selectedWalletProvider = provider;
            selectedPaymentMethod = `Mobile Wallet (${provider})`;
            document.getElementById('wallet-name-label').innerText = provider;

            const easyLabel = document.getElementById('wallet-easypaisa-label');
            const jazzLabel = document.getElementById('wallet-jazzcash-label');

            if(provider === 'Easypaisa') {
                easyLabel.className = "flex items-center gap-3 p-3 rounded-xl border-2 border-beautage-purple bg-white cursor-pointer transition shadow-xs";
                easyLabel.querySelector('input').checked = true;
                jazzLabel.className = "flex items-center gap-3 p-3 rounded-xl border-2 border-purple-200 bg-white cursor-pointer transition shadow-xs";
                jazzLabel.querySelector('input').checked = false;
            } else {
                jazzLabel.className = "flex items-center gap-3 p-3 rounded-xl border-2 border-beautage-purple bg-white cursor-pointer transition shadow-xs";
                jazzLabel.querySelector('input').checked = true;
                easyLabel.className = "flex items-center gap-3 p-3 rounded-xl border-2 border-purple-200 bg-white cursor-pointer transition shadow-xs";
                easyLabel.querySelector('input').checked = false;
            }
        }

        function applyPromoCode() {
            const input = document.getElementById('promo-input');
            const msg = document.getElementById('promo-message');
            const code = input.value.trim().toUpperCase();

            if(code === 'BEAUTAGE15' || code === 'SAVE15') {
                discountPercent = 15;
                msg.classList.remove('hidden');
                msg.className = 'text-xs font-semibold text-emerald-600';
                msg.innerText = '✓ Promo code "BEAUTAGE15" applied (15% OFF)!';
                document.getElementById('discount-row').classList.remove('hidden');
                document.getElementById('discount-code-name').innerText = code;
                showToast('15% discount applied successfully!');
                renderCheckoutSummary();
            } else if(code === 'WELCOME') {
                discountPercent = 10;
                msg.classList.remove('hidden');
                msg.className = 'text-xs font-semibold text-emerald-600';
                msg.innerText = '✓ Promo code "WELCOME" applied (10% OFF)!';
                document.getElementById('discount-row').classList.remove('hidden');
                document.getElementById('discount-code-name').innerText = code;
                showToast('10% discount applied successfully!');
                renderCheckoutSummary();
            } else {
                msg.classList.remove('hidden');
                msg.className = 'text-xs font-semibold text-rose-600';
                msg.innerText = 'Invalid promo code. Try BEAUTAGE15.';
                showToast('Invalid promo code');
            }
        }

        function renderCheckoutSummary() {
            const container = document.getElementById('checkout-cart-items');
            if(checkoutCart.length === 0) {
                container.innerHTML = `<div class="text-center py-6 text-slate-400 text-xs">Your bag is empty. <a href="/" class="text-beautage-pink font-bold">Shop now</a></div>`;
                return;
            }

            container.innerHTML = checkoutCart.map(item => `
                <div class="flex items-center gap-3 p-2.5 rounded-2xl bg-purple-50/50 border border-purple-100">
                    <img src="${item.image}" class="w-14 h-14 object-cover rounded-xl shrink-0" onerror="this.onerror=null; this.src='https://placehold.co/100x100/5E1F70/FFFFFF?text=Item';">
                    <div class="flex-1 min-w-0">
                        <h4 class="text-xs font-bold text-beautage-purple truncate">${item.name}</h4>
                        <span class="text-[11px] text-slate-500">Qty: ${item.qty} × $${item.price.toFixed(2)}</span>
                    </div>
                    <span class="text-xs font-extrabold text-slate-800">$${(item.price * item.qty).toFixed(2)}</span>
                </div>
            `).join('');

            const subtotal = checkoutCart.reduce((sum, item) => sum + (item.price * item.qty), 0);
            const discountAmt = subtotal * (discountPercent / 100);
            const discountedSubtotal = subtotal - discountAmt;
            const tax = discountedSubtotal * 0.08;
            const grandTotal = discountedSubtotal + tax + shippingCost;

            document.getElementById('summary-subtotal').innerText = `$${subtotal.toFixed(2)}`;
            if(discountPercent > 0) {
                document.getElementById('summary-discount').innerText = `-$${discountAmt.toFixed(2)}`;
            }
            document.getElementById('summary-tax').innerText = `$${tax.toFixed(2)}`;
            document.getElementById('summary-grandtotal').innerText = `$${grandTotal.toFixed(2)}`;
        }

        function expressCheckoutAction(provider) {
            showToast(`Connecting securely to ${provider} express gateway...`);
            setTimeout(() => {
                document.getElementById('cust-email').value = 'express.user@beautage.pk';
                document.getElementById('cust-firstname').value = 'Valued';
                document.getElementById('cust-lastname').value = 'Customer';
                document.getElementById('cust-address').value = 'Express Portal Verified Address';
                document.getElementById('cust-city').value = 'Lahore';
                document.getElementById('cust-postal').value = '54000';
                document.getElementById('cust-phone').value = '+92 300 1234567';
                showToast(`${provider} verified successfully! Review and complete order.`);
            }, 1000);
        }

        function handleCompleteOrder(e) {
            e.preventDefault();
            const email = document.getElementById('cust-email').value.trim();
            const fname = document.getElementById('cust-firstname').value.trim();
            const lname = document.getElementById('cust-lastname').value.trim();
            const address = document.getElementById('cust-address').value.trim();
            const city = document.getElementById('cust-city').value.trim();

            if(!email || !fname || !address || !city) {
                showToast('Please fill in all required shipping fields.');
                return;
            }

            const subtotal = checkoutCart.reduce((sum, item) => sum + (item.price * item.qty), 0);
            const discountAmt = subtotal * (discountPercent / 100);
            const discountedSubtotal = subtotal - discountAmt;
            const tax = discountedSubtotal * 0.08;
            const grandTotal = discountedSubtotal + tax + shippingCost;

            const randomId = '#BTG-' + Math.floor(10000 + Math.random() * 90000);
            document.getElementById('success-order-id').innerText = randomId;
            document.getElementById('receipt-name').innerText = `${fname} ${lname}`;
            document.getElementById('receipt-address').innerText = `${address}, ${city}`;
            document.getElementById('receipt-payment').innerText = selectedPaymentMethod;
            document.getElementById('receipt-total').innerText = `$${grandTotal.toFixed(2)}`;

            try {
                localStorage.removeItem('beautage_cart');
            } catch(e) {}

            document.getElementById('success-modal').classList.remove('hidden');
            showToast('Order completed successfully!');
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

        function handleNewsletterSubmit(event) {
            event.preventDefault();
            const emailInput = document.getElementById('newsletter-email');
            if(emailInput.value.trim()) {
                showToast(`Thank you for subscribing! 15% discount code sent.`);
                emailInput.value = '';
            }
        }

        function startCountdownTimer() {
            let totalSeconds = 4 * 3600 + 32 * 60 + 19;
            setInterval(() => {
                if(totalSeconds > 0) totalSeconds--;
                const h = Math.floor(totalSeconds / 3600).toString().padStart(2, '0');
                const m = Math.floor((totalSeconds % 3600) / 60).toString().padStart(2, '0');
                const s = (totalSeconds % 60).toString().padStart(2, '0');
                const timerEl = document.getElementById('announcement-timer');
                if(timerEl) timerEl.innerText = `${h}:${m}:${s}`;
            }, 1000);
        }
    </script>
@endverbatim
@endpush
