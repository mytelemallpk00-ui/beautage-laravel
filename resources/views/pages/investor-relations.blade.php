@extends('layouts.app')

@section('title', 'Investor Relations & Financial Reports — Beautage PVT Ltd')

@section('body_attrs')
class="bg-slate-50 text-slate-800 font-sans antialiased min-h-screen flex flex-col selection:bg-beautage-pink selection:text-white pb-36 md:pb-0 overflow-x-hidden"
@endsection

@section('content')
<main class="w-full flex-1 flex flex-col py-6">

        <!-- 1. BREADCRUMB & HERO BANNER -->
        <div class="w-full px-4 sm:px-12 xl:px-20 mb-8">
            <nav class="flex items-center gap-2 text-xs font-semibold text-slate-500 whitespace-nowrap mb-4 overflow-x-auto no-scrollbar">
                <a href="{{ route('home') }}" class="hover:text-beautage-purple transition flex items-center gap-1">
                    <i data-lucide="home" class="w-3.5 h-3.5"></i> Home
                </a>
                <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-purple-300"></i>
                <span class="text-beautage-purple font-bold">Investor Relations & Corporate Governance</span>
            </nav>

            <div class="rounded-3xl bg-gradient-to-r from-purple-950 via-beautage-purple to-beautage-purpleDark text-white p-8 sm:p-14 shadow-2xl relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-pink-500/20 rounded-full blur-3xl pointer-events-none"></div>
                <div class="max-w-2xl relative z-10 space-y-4 text-center md:text-left">
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-extrabold bg-amber-500/25 text-amber-200 border border-amber-400/40 shadow-sm">
                        <i data-lucide="trending-up" class="w-4 h-4 text-amber-300"></i> PSX: BEAU | MARKET LEADER IN D2C BEAUTY TECH
                    </span>
                    <h1 class="text-3xl sm:text-5xl font-serif font-bold text-white tracking-tight leading-tight">
                        Driving Sustainable Growth, <br><span class="bg-clip-text text-transparent bg-gradient-to-r from-amber-300 via-pink-300 to-white">Delivering Exceptional Value</span>
                    </h1>
                    <p class="text-xs sm:text-sm text-purple-100 leading-relaxed font-medium">
                        Welcome to Beautage PVT Ltd’s Investor Relations portal. Explore our quarterly financial performance, corporate governance frameworks, executive leadership, and strategic roadmap for long-term shareholder returns.
                    </p>
                    <div class="pt-2 flex flex-wrap gap-3 justify-center md:justify-start">
                        <a href="#financial-reports" class="px-5 py-2.5 bg-beautage-pink hover:bg-beautage-pinkHover text-white font-extrabold text-xs uppercase tracking-wider rounded-xl transition shadow-lg shadow-pink-500/30 flex items-center gap-2">
                            <i data-lucide="download" class="w-4 h-4"></i> Download Q4 Reports
                        </a>
                        <a href="#stock-ticker" class="px-5 py-2.5 bg-purple-900/80 hover:bg-purple-800 text-white font-extrabold text-xs uppercase tracking-wider rounded-xl transition border border-purple-600/70 flex items-center gap-2">
                            <i data-lucide="bar-chart-3" class="w-4 h-4 text-amber-300"></i> Live Stock Metrics
                        </a>
                    </div>
                </div>
                <div class="relative z-10 w-full md:w-auto shrink-0 flex justify-center">
                    <div class="w-56 sm:w-72 rounded-3xl bg-white/10 backdrop-blur-md border border-white/20 p-6 flex flex-col justify-between text-left shadow-2xl space-y-4">
                        <div class="flex justify-between items-center border-b border-white/10 pb-3">
                            <span class="text-xs uppercase font-extrabold text-pink-300">PSX: BEAU</span>
                            <span class="text-xs font-bold bg-emerald-500/30 text-emerald-200 px-2 py-0.5 rounded">+4.8% Today</span>
                        </div>
                        <div>
                            <span class="text-3xl font-black text-white">$148.50</span>
                            <span class="text-[11px] text-purple-200 block mt-0.5">Market Share Price (PKR 41,500 eq.)</span>
                        </div>
                        <div class="text-[11px] text-purple-200 pt-2 border-t border-white/10 flex justify-between">
                            <span>Market Cap: $1.24B</span>
                            <span class="text-amber-300 font-bold">P/E: 22.4</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. KEY FINANCIAL HIGHLIGHTS METRICS GRID -->
        <section class="w-full px-4 sm:px-12 xl:px-20 py-10">
            <div class="text-center max-w-2xl mx-auto mb-10 space-y-2">
                <span class="text-xs font-extrabold uppercase tracking-widest text-beautage-pink bg-pink-50 px-3 py-1 rounded-full border border-pink-200 inline-block">Financial Performance</span>
                <h2 class="text-2xl sm:text-4xl font-serif font-bold text-beautage-purple">FY 2025 Financial Highlights</h2>
                <p class="text-xs sm:text-sm text-slate-600">Demonstrating robust profitability, scaling retail footprint, and exceptional D2C digital conversion.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <div class="bg-white rounded-3xl p-6 border border-purple-100 shadow-xl hover:border-beautage-pink transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-2xl bg-purple-50 text-beautage-purple flex items-center justify-center mb-4 group-hover:scale-110 transition duration-300 shadow-sm">
                        <i data-lucide="dollar-sign" class="w-6 h-6"></i>
                    </div>
                    <span class="text-xs text-slate-500 font-semibold uppercase tracking-wider block">Total Annual Revenue</span>
                    <h3 class="text-2xl sm:text-3xl font-black text-beautage-purple mt-1">$312.4M</h3>
                    <span class="text-xs text-emerald-600 font-bold mt-2 flex items-center gap-1">
                        <i data-lucide="trending-up" class="w-3.5 h-3.5"></i> +42% vs Previous Year
                    </span>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-purple-100 shadow-xl hover:border-emerald-400 transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center mb-4 group-hover:scale-110 transition duration-300 shadow-sm">
                        <i data-lucide="pie-chart" class="w-6 h-6"></i>
                    </div>
                    <span class="text-xs text-slate-500 font-semibold uppercase tracking-wider block">EBITDA Margin</span>
                    <h3 class="text-2xl sm:text-3xl font-black text-emerald-600 mt-1">28.6%</h3>
                    <span class="text-xs text-emerald-600 font-bold mt-2 flex items-center gap-1">
                        <i data-lucide="trending-up" class="w-3.5 h-3.5"></i> +3.2% Margin Expansion
                    </span>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-purple-100 shadow-xl hover:border-amber-400 transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center mb-4 group-hover:scale-110 transition duration-300 shadow-sm">
                        <i data-lucide="users" class="w-6 h-6"></i>
                    </div>
                    <span class="text-xs text-slate-500 font-semibold uppercase tracking-wider block">Active D2C Customers</span>
                    <h3 class="text-2xl sm:text-3xl font-black text-beautage-purple mt-1">2.4 Million</h3>
                    <span class="text-xs text-emerald-600 font-bold mt-2 flex items-center gap-1">
                        <i data-lucide="trending-up" class="w-3.5 h-3.5"></i> +55% YoY Growth
                    </span>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-purple-100 shadow-xl hover:border-purple-600 transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-2xl bg-pink-50 text-beautage-pink flex items-center justify-center mb-4 group-hover:scale-110 transition duration-300 shadow-sm">
                        <i data-lucide="award" class="w-6 h-6"></i>
                    </div>
                    <span class="text-xs text-slate-500 font-semibold uppercase tracking-wider block">Dividend Payout Ratio</span>
                    <h3 class="text-2xl sm:text-3xl font-black text-beautage-pink mt-1">45.0%</h3>
                    <span class="text-xs text-slate-600 font-bold mt-2 block">Consistent Semi-Annual Dividends</span>
                </div>

            </div>
        </section>

        <!-- 3. STOCK OVERVIEW & MARKET PERFORMANCE WIDGET -->
        <section id="stock-ticker" class="w-full px-4 sm:px-12 xl:px-20 py-10">
            <div class="bg-white rounded-3xl border border-purple-100 p-8 sm:p-12 shadow-xl space-y-8">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 border-b border-purple-100 pb-6">
                    <div>
                        <span class="text-xs uppercase font-extrabold text-beautage-pink">Stock Performance</span>
                        <h2 class="text-2xl sm:text-3xl font-serif font-bold text-beautage-purple mt-1">{{ $stockSnapshot['symbol'] }} Market Tracker</h2>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-bold text-slate-500">Timeframe:</span>
                        <button onclick="switchStockTimeframe('1D')" id="btn-1d" class="px-3 py-1.5 rounded-lg bg-beautage-purple text-white text-xs font-bold transition">1D</button>
                        <button onclick="switchStockTimeframe('1M')" id="btn-1m" class="px-3 py-1.5 rounded-lg bg-purple-100 text-beautage-purple text-xs font-bold transition">1M</button>
                        <button onclick="switchStockTimeframe('1Y')" id="btn-1y" class="px-3 py-1.5 rounded-lg bg-purple-100 text-beautage-purple text-xs font-bold transition">1Y</button>
                        <button onclick="switchStockTimeframe('5Y')" id="btn-5y" class="px-3 py-1.5 rounded-lg bg-purple-100 text-beautage-purple text-xs font-bold transition">5Y</button>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-8 bg-purple-950 rounded-2xl p-6 text-white relative overflow-hidden shadow-inner flex flex-col justify-between h-72">
                        <div class="absolute inset-0 bg-[radial-gradient(#9333ea_1px,transparent_1px)] [background-size:16px_16px] opacity-20"></div>
                        <div class="relative z-10 flex justify-between items-start">
                            <div>
                                <span class="text-xs text-purple-300 font-semibold">Pakistan Stock Exchange (PSX)</span>
                                <h4 class="text-xl font-bold font-mono tracking-wider mt-1">BEAUTAGE PVT LTD</h4>
                            </div>
                            <div class="text-right">
                                <span class="text-2xl font-black font-mono text-emerald-400">${{ $stockSnapshot['price'] }}</span>
                                <span class="text-xs text-emerald-300 block font-bold">{{ $stockSnapshot['change'] }}</span>
                            </div>
                        </div>

                        <!-- Simulated SVG Chart Line -->
                        <div class="relative z-10 h-32 w-full flex items-end">
                            <svg class="w-full h-full overflow-visible" viewBox="0 0 500 120" preserveAspectRatio="none">
                                <defs>
                                    <linearGradient id="chartGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0%" stop-color="#E025A8" stop-opacity="0.5"/>
                                        <stop offset="100%" stop-color="#5E1F70" stop-opacity="0.0"/>
                                    </linearGradient>
                                </defs>
                                <path d="M0,90 Q80,70 160,50 T320,30 T500,10 L500,120 L0,120 Z" fill="url(#chartGrad)"></path>
                                <path d="M0,90 Q80,70 160,50 T320,30 T500,10" fill="none" stroke="#E025A8" stroke-width="3" stroke-linecap="round"></path>
                            </svg>
                        </div>

                        <div class="relative z-10 flex justify-between text-[11px] text-purple-200 border-t border-purple-800 pt-2">
                            <span>Open: $142.30</span>
                            <span>High: $149.20</span>
                            <span>Low: $141.80</span>
                            <span>Volume: 1.45M</span>
                        </div>
                    </div>

                    <div class="lg:col-span-4 space-y-4">
                        <div class="p-4 rounded-2xl bg-purple-50 border border-purple-100 flex justify-between items-center">
                            <div>
                                <span class="text-xs text-slate-500 block">Market Capitalization</span>
                                <h5 class="text-base font-bold text-beautage-purple mt-0.5">{{ $stockSnapshot['market_cap'] }}</h5>
                            </div>
                            <i data-lucide="globe-2" class="w-8 h-8 text-beautage-pink"></i>
                        </div>
                        <div class="p-4 rounded-2xl bg-purple-50 border border-purple-100 flex justify-between items-center">
                            <div>
                                <span class="text-xs text-slate-500 block">52-Week Range</span>
                                <h5 class="text-base font-bold text-beautage-purple mt-0.5">{{ $stockSnapshot['range_52w'] }}</h5>
                            </div>
                            <i data-lucide="trending-up" class="w-8 h-8 text-emerald-600"></i>
                        </div>
                        <div class="p-4 rounded-2xl bg-purple-50 border border-purple-100 flex justify-between items-center">
                            <div>
                                <span class="text-xs text-slate-500 block">Shares Outstanding</span>
                                <h5 class="text-base font-bold text-beautage-purple mt-0.5">{{ $stockSnapshot['shares_outstanding'] }}</h5>
                            </div>
                            <i data-lucide="layers" class="w-8 h-8 text-amber-600"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. FINANCIAL REPORTS & QUARTERLY EARNINGS DOWNLOADS -->
        <section id="financial-reports" class="w-full px-4 sm:px-12 xl:px-20 py-10">
            <div class="text-center max-w-2xl mx-auto mb-10 space-y-2">
                <span class="text-xs font-extrabold uppercase tracking-widest text-beautage-pink bg-pink-50 px-3 py-1 rounded-full border border-pink-200 inline-block">Downloads & Filings</span>
                <h2 class="text-2xl sm:text-4xl font-serif font-bold text-beautage-purple">Financial Reports & Earnings</h2>
                <p class="text-xs sm:text-sm text-slate-600">Access verified quarterly earnings reports, annual statements, and regulatory PSX disclosures.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($financialReports as $report)
                    @php($badge = $report->badgeClasses())
                    <div class="bg-white rounded-3xl p-6 border border-purple-100 shadow-xl hover:border-beautage-purple transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-start mb-4">
                                <span class="px-3 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider {{ $badge['wrap'] }}">{{ $report->badge_label }}</span>
                                <i data-lucide="file-text" class="w-6 h-6 {{ $badge['icon'] }}"></i>
                            </div>
                            <h3 class="text-base font-serif font-bold text-beautage-purple">{{ $report->title }}</h3>
                            <p class="text-xs text-slate-600 mt-2 leading-relaxed">{{ $report->description }}</p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-purple-50 flex items-center justify-between">
                            @if ($report->file_label)
                                <span class="text-[11px] text-slate-400 font-medium">{{ $report->file_label }}</span>
                            @else
                                <span></span>
                            @endif
                            <button type="button" onclick="showToast(@json($report->download_message))" class="px-4 py-2 bg-beautage-purple hover:bg-beautage-purpleDark text-white text-xs font-bold rounded-xl transition flex items-center gap-1.5 shadow-sm">
                                <i data-lucide="download" class="w-3.5 h-3.5"></i> Download
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- 5. CORPORATE GOVERNANCE & BOARD OF DIRECTORS -->
        <section class="w-full px-4 sm:px-12 xl:px-20 py-10">
            <div class="text-center max-w-2xl mx-auto mb-12 space-y-2">
                <span class="text-xs font-extrabold uppercase tracking-widest text-beautage-pink bg-pink-50 px-3 py-1 rounded-full border border-pink-200 inline-block">Leadership & Ethics</span>
                <h2 class="text-2xl sm:text-4xl font-serif font-bold text-beautage-purple">Corporate Governance & Board</h2>
                <p class="text-xs sm:text-sm text-slate-600">Guided by industry veterans committed to transparency, compliance, and visionary D2C beauty tech expansion.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Director 1 -->
                <div class="bg-white rounded-3xl p-6 border border-purple-100 shadow-xl text-center space-y-4 group">
                    <div class="w-28 h-28 mx-auto rounded-full overflow-hidden border-4 border-purple-100 shadow-md group-hover:border-beautage-pink transition duration-300">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=400" alt="CEO" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h3 class="text-lg font-serif font-bold text-beautage-purple">Alexander Vance</h3>
                        <span class="text-xs font-bold text-beautage-pink uppercase tracking-wider block mt-0.5">Chief Executive Officer & Founder</span>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed px-2">
                        Over 20 years of global beauty brand leadership and digital commerce transformation across North America and South Asia.
                    </p>
                </div>

                <!-- Director 2 -->
                <div class="bg-white rounded-3xl p-6 border border-purple-100 shadow-xl text-center space-y-4 group">
                    <div class="w-28 h-28 mx-auto rounded-full overflow-hidden border-4 border-purple-100 shadow-md group-hover:border-beautage-pink transition duration-300">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=400" alt="CFO" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h3 class="text-lg font-serif font-bold text-beautage-purple">Dr. Ayesha Malik</h3>
                        <span class="text-xs font-bold text-beautage-pink uppercase tracking-wider block mt-0.5">Chief Financial Officer</span>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed px-2">
                        Former investment banker and financial strategist with deep expertise in PSX listings, capital allocation, and M&A.
                    </p>
                </div>

                <!-- Director 3 -->
                <div class="bg-white rounded-3xl p-6 border border-purple-100 shadow-xl text-center space-y-4 group">
                    <div class="w-28 h-28 mx-auto rounded-full overflow-hidden border-4 border-purple-100 shadow-md group-hover:border-beautage-pink transition duration-300">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=400" alt="Chairman" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h3 class="text-lg font-serif font-bold text-beautage-purple">Tariq Mahmood</h3>
                        <span class="text-xs font-bold text-beautage-pink uppercase tracking-wider block mt-0.5">Chairman of the Board</span>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed px-2">
                        Distinguished corporate governance veteran with extensive board leadership in consumer goods and manufacturing enterprises.
                    </p>
                </div>

            </div>
        </section>

        <!-- 6. INVESTOR CONTACT & IR DESK INQUIRY FORM -->
        <section class="w-full px-4 sm:px-12 xl:px-20 py-12">
            <div class="max-w-3xl mx-auto bg-gradient-to-r from-purple-900 via-beautage-purple to-purple-950 rounded-3xl p-8 sm:p-12 shadow-2xl text-white relative overflow-hidden border border-purple-700">
                <div class="absolute -top-20 -right-20 w-80 h-80 bg-beautage-pink/20 rounded-full blur-3xl pointer-events-none"></div>

                <div class="relative z-10 space-y-6">
                    <div class="text-center space-y-2">
                        <span class="inline-block px-3.5 py-1 rounded-full text-[10px] uppercase font-extrabold tracking-widest bg-amber-500/30 text-amber-200 border border-amber-400/40">
                            DIRECT INQUIRY
                        </span>
                        <h2 class="text-2xl sm:text-3xl font-serif font-bold text-white">Contact Investor Relations Desk</h2>
                        <p class="text-xs sm:text-sm text-purple-100 max-w-xl mx-auto">
                            Institutional investors, analysts, and shareholders may submit inquiries directly to our IR executive team.
                        </p>
                    </div>

                    <form id="ir-form" onsubmit="handleIrSubmit(event)" class="space-y-4 pt-2">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-purple-200 uppercase mb-1">Full Name</label>
                                <input type="text" required placeholder="Johnathan Doe" class="w-full px-4 py-3 bg-purple-950/80 border border-purple-600 rounded-xl text-xs text-white placeholder-purple-300 focus:outline-none focus:border-amber-300 font-medium">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-purple-200 uppercase mb-1">Institutional Affiliation</label>
                                <input type="text" required placeholder="Vanguard Capital / Self" class="w-full px-4 py-3 bg-purple-950/80 border border-purple-600 rounded-xl text-xs text-white placeholder-purple-300 focus:outline-none focus:border-amber-300 font-medium">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-purple-200 uppercase mb-1">Email Address</label>
                                <input type="email" required placeholder="investor@firm.com" class="w-full px-4 py-3 bg-purple-950/80 border border-purple-600 rounded-xl text-xs text-white placeholder-purple-300 focus:outline-none focus:border-amber-300 font-medium">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-purple-200 uppercase mb-1">Inquiry Topic</label>
                                <select class="w-full px-4 py-3 bg-purple-950/80 border border-purple-600 rounded-xl text-xs text-white focus:outline-none focus:border-amber-300 font-medium cursor-pointer">
                                    <option value="financial">Financial Reports & Earnings</option>
                                    <option value="stock">Stock & Shareholder Services</option>
                                    <option value="esg">ESG & Sustainability Inquiries</option>
                                    <option value="agm">Annual General Meeting (AGM)</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-purple-200 uppercase mb-1">Message / Question</label>
                            <textarea rows="4" required placeholder="Enter your inquiry details here..." class="w-full px-4 py-3 bg-purple-950/80 border border-purple-600 rounded-xl text-xs text-white placeholder-purple-300 focus:outline-none focus:border-amber-300 font-medium resize-none"></textarea>
                        </div>
                        <button type="submit" class="w-full py-3.5 bg-amber-500 hover:bg-amber-400 text-slate-950 font-extrabold text-xs uppercase tracking-wider rounded-xl transition shadow-lg shadow-amber-500/20 flex items-center justify-center gap-2">
                            <span>Submit IR Inquiry</span>
                            <i data-lucide="send" class="w-4 h-4"></i>
                        </button>
                    </form>
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
        let cart = [];
        let wishlist = [];

        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
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

        function switchStockTimeframe(tf) {
            ['1d', '1m', '1y', '5y'].forEach(id => {
                const btn = document.getElementById(`btn-${id}`);
                if(btn) {
                    btn.className = 'px-3 py-1.5 rounded-lg bg-purple-100 text-beautage-purple text-xs font-bold transition';
                }
            });
            const activeBtn = document.getElementById(`btn-${tf.toLowerCase()}`);
            if(activeBtn) {
                activeBtn.className = 'px-3 py-1.5 rounded-lg bg-beautage-purple text-white text-xs font-bold transition';
            }
            showToast(`Switched stock chart timeframe to ${tf}`);
        }

        function handleIrSubmit(event) {
            event.preventDefault();
            showToast('Investor Relations inquiry submitted successfully. Our IR desk will respond within 24 hours.');
            event.target.reset();
        }

        function handleNewsletterSubmit(event) {
            event.preventDefault();
            const emailInput = document.getElementById('newsletter-email');
            const email = emailInput.value.trim();
            if(email) {
                showToast(`Thank you! 15% off discount voucher sent to ${email}.`);
                emailInput.value = '';
            }
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
    </script>
@endverbatim
@endpush
