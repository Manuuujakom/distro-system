<!DOCTYPE html>
<html lang="en" id="html-root" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports & Analytics - DistroManager</title>

    <!-- Main Tailwind Output -->
    <link rel="stylesheet" href="../../public/css/app.css">

    <!-- Prevent Flash of Unstyled Theme -->
    <script>
        (function() {
            const theme = localStorage.getItem('theme');
            if (theme === 'dark') {
                document.getElementById('html-root').classList.add('dark');
                document.getElementById('html-root').classList.remove('light');
            }
        })();
    </script>
</head>
<body class="bg-[var(--color-bg)] text-[var(--color-text)] font-sans">

<?php include "../components/sidebar.php"; ?>
<?php include "../components/topbar.php"; ?>
<!-- MAIN CONTENT WRAPPER -->
<div id="main-content-wrapper" class="lg:ml-64 pt-14 flex flex-col flex-1 min-width-0 overflow-hidden transition-all duration-300">
    

    <!-- PAGE CONTENT AREA -->
    <main class="flex-1 overflow-y-auto p-6 space-y-8 bg-[var(--color-bg)] min-h-screen dark:bg-slate-900">
        
        <!-- PAGE HEADER -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold tracking-tight" style="color: var(--color-text);">Reports & Analytics</h1>
                <nav class="flex items-center gap-1 text-xs text-slate-500 font-medium mt-1">
                    <span>Home</span>
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span class="text-slate-400">Reports</span>
                </nav>
            </div>
            <div class="flex items-center gap-3">
                <select class="bg-white dark:bg-slate-800 border border-[var(--color-border)] rounded-xl px-4 py-2.5 text-sm font-semibold outline-none focus:ring-4 focus:ring-primary/10 transition-all" style="color: var(--color-text);">
                    <option>Last 30 Days</option>
                    <option>Last Quarter</option>
                    <option>Financial Year</option>
                </select>
                <button class="inline-flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-5 py-2.5 rounded-xl font-semibold transition-all shadow-lg shadow-primary/20">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                    Export Report
                </button>
            </div>
        </div>

        <!-- SECTION 1: PERFORMANCE KPI CARDS -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-[var(--color-surface)] p-5 rounded-2xl border border-slate-200/60 border-t-4 border-t-blue-500 shadow-md">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-500 mb-1">Total Revenue</p>
                <div class="flex items-baseline gap-2">
                    <h2 class="text-2xl font-black text-primary">KSh 4.2M</h2>
                    <span class="text-xs font-bold text-green-500">+15.2%</span>
                </div>
                <p class="text-[10px] text-slate-400 mt-2">vs. previous 30 days</p>
            </div>
            <div class="bg-[var(--color-surface)] p-5 rounded-2xl border border-slate-200/60 border-t-4 border-t-green-500 shadow-md">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-500 mb-1">Net Profit</p>
                <div class="flex items-baseline gap-2">
                    <h2 class="text-2xl font-black text-green-600">KSh 1.1M</h2>
                    <span class="text-xs font-bold text-green-500">+8.4%</span>
                </div>
                <p class="text-[10px] text-slate-400 mt-2">Margin: 26.2%</p>
            </div>
            <div class="bg-[var(--color-surface)] p-5 rounded-2xl border border-slate-200/60 border-t-4 border-t-orange-500 shadow-md">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-500 mb-1">Avg. Order Value</p>
                <div class="flex items-baseline gap-2">
                    <h2 class="text-2xl font-black" style="color: var(--color-text);">KSh 3,450</h2>
                    <span class="text-xs font-bold text-red-500">-2.1%</span>
                </div>
                <p class="text-[10px] text-slate-400 mt-2">42 orders / day avg</p>
            </div>
            <div class="bg-[var(--color-surface)] p-5 rounded-2xl border border-slate-200/60 border-t-4 border-t-indigo-500 shadow-md">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-500 mb-1">New Customers</p>
                <div class="flex items-baseline gap-2">
                    <h2 class="text-2xl font-black text-indigo-600">+124</h2>
                    <span class="text-xs font-bold text-green-500">+12%</span>
                </div>
                <p class="text-[10px] text-slate-400 mt-2">Total: 1,840 active</p>
            </div>
        </div>

        <!-- SECTION 2: CHARTS & DISTRIBUTION -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Monthly Revenue Trend -->
            <div class="bg-[var(--color-surface)] dark:bg-slate-800 rounded-2xl border border-slate-200/60 dark:border-slate-700 p-6 shadow-md">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="font-bold text-slate-700 dark:text-slate-200">Revenue Trend (6 Months)</h3>
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div class="flex items-end justify-between h-48 gap-2 px-2">
                    <div class="flex-1 bg-primary/10 rounded-t-lg hover:bg-primary/30 transition-all relative group" style="height: 40%;">
                        <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">0.8M</div>
                    </div>
                    <div class="flex-1 bg-primary/10 rounded-t-lg hover:bg-primary/30 transition-all relative group" style="height: 55%;">
                        <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">1.2M</div>
                    </div>
                    <div class="flex-1 bg-primary/10 rounded-t-lg hover:bg-primary/30 transition-all relative group" style="height: 75%;">
                        <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">1.8M</div>
                    </div>
                    <div class="flex-1 bg-primary/10 rounded-t-lg hover:bg-primary/30 transition-all relative group" style="height: 65%;">
                        <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">1.5M</div>
                    </div>
                    <div class="flex-1 bg-primary/10 rounded-t-lg hover:bg-primary/30 transition-all relative group" style="height: 85%;">
                        <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">2.1M</div>
                    </div>
                    <div class="flex-1 bg-primary rounded-t-lg shadow-lg relative group" style="height: 95%;">
                        <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-primary text-white text-[10px] font-bold px-2 py-1 rounded shadow-md">2.4M</div>
                    </div>
                </div>
                <div class="flex justify-between mt-4 px-2 text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                    <span>Oct</span><span>Nov</span><span>Dec</span><span>Jan</span><span>Feb</span><span class="text-primary">Mar</span>
                </div>
            </div>

            <!-- Sales by Category -->
            <div class="bg-[var(--color-surface)] dark:bg-slate-800 rounded-2xl border border-slate-200/60 dark:border-slate-700 p-6 shadow-md">
                <h3 class="font-bold text-slate-700 dark:text-slate-200 mb-6">Sales by Category</h3>
                <div class="space-y-4">
                    <div class="space-y-1.5">
                        <div class="flex justify-between text-xs font-bold">
                            <span class="text-slate-500">Oils & Fats</span>
                            <span style="color: var(--color-text);">42%</span>
                        </div>
                        <div class="w-full bg-slate-100 dark:bg-slate-700 h-2 rounded-full overflow-hidden">
                            <div class="bg-blue-500 h-full w-[42%]"></div>
                        </div>
                    </div>
                    <div class="space-y-1.5">
                        <div class="flex justify-between text-xs font-bold">
                            <span class="text-slate-500">Grains & Flours</span>
                            <span style="color: var(--color-text);">30%</span>
                        </div>
                        <div class="w-full bg-slate-100 dark:bg-slate-700 h-2 rounded-full overflow-hidden">
                            <div class="bg-green-500 h-full w-[30%]"></div>
                        </div>
                    </div>
                    <div class="space-y-1.5">
                        <div class="flex justify-between text-xs font-bold">
                            <span class="text-slate-500">Dry Goods (Sugar/Salt)</span>
                            <span style="color: var(--color-text);">18%</span>
                        </div>
                        <div class="w-full bg-slate-100 dark:bg-slate-700 h-2 rounded-full overflow-hidden">
                            <div class="bg-amber-500 h-full w-[18%]"></div>
                        </div>
                    </div>
                    <div class="space-y-1.5">
                        <div class="flex justify-between text-xs font-bold">
                            <span class="text-slate-500">Bakery & Others</span>
                            <span style="color: var(--color-text);">10%</span>
                        </div>
                        <div class="w-full bg-slate-100 dark:bg-slate-700 h-2 rounded-full overflow-hidden">
                            <div class="bg-indigo-500 h-full w-[10%]"></div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 pt-4 border-t border-dashed border-slate-200 dark:border-slate-700 flex justify-around">
                    <div class="text-center">
                        <p class="text-[10px] font-bold text-slate-400 uppercase">Top Item</p>
                        <p class="text-xs font-black text-primary">Cooking Oil 5L</p>
                    </div>
                    <div class="w-px h-8 bg-slate-200 dark:bg-slate-700"></div>
                    <div class="text-center">
                        <p class="text-[10px] font-bold text-slate-400 uppercase">Slowest</p>
                        <p class="text-xs font-black text-red-500">Salt 1kg</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECTION 3: PERFORMANCE TABLES -->
        <div class="space-y-4">
            <h2 class="text-lg font-bold" style="color: var(--color-text);">Driver Performance Ranking</h2>
            <div class="bg-[var(--color-surface)] dark:bg-slate-800 rounded-2xl border border-slate-200/60 dark:border-slate-700 shadow-md overflow-hidden">
                <div class="overflow-x-auto scrollbar-none">
                    <table class="w-full text-left text-sm border-collapse">
                        <thead class="bg-slate-50 dark:bg-slate-900/50 text-[10px] font-bold uppercase tracking-wider text-slate-500 border-b border-[var(--color-border)]">
                            <tr>
                                <th class="px-6 py-4">Rank</th>
                                <th class="px-6 py-4">Driver Name</th>
                                <th class="px-6 py-4 text-center">Deliveries</th>
                                <th class="px-6 py-4 text-right">Revenue Generated</th>
                                <th class="px-6 py-4 text-center">Avg. Order</th>
                                <th class="px-6 py-4 text-center">Return Rate</th>
                                <th class="px-6 py-4">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[var(--color-border)]">
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                                <td class="px-6 py-4 font-black text-primary">#1</td>
                                <td class="px-6 py-4 font-semibold">Peter Kamau</td>
                                <td class="px-6 py-4 text-center">412</td>
                                <td class="px-6 py-4 text-right font-bold">KSh 842,500</td>
                                <td class="px-6 py-4 text-center font-mono text-xs">2,044</td>
                                <td class="px-6 py-4 text-center font-bold text-green-600">0.5%</td>
                                <td class="px-6 py-4"><span class="px-2 py-0.5 rounded bg-blue-100 text-blue-800 text-[10px] font-bold">Top Tier</span></td>
                            </tr>
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                                <td class="px-6 py-4 font-black text-slate-400">#2</td>
                                <td class="px-6 py-4 font-semibold">Moses Mwangi</td>
                                <td class="px-6 py-4 text-center">385</td>
                                <td class="px-6 py-4 text-right font-bold">KSh 712,000</td>
                                <td class="px-6 py-4 text-center font-mono text-xs">1,849</td>
                                <td class="px-6 py-4 text-center font-bold text-green-600">1.2%</td>
                                <td class="px-6 py-4"><span class="px-2 py-0.5 rounded bg-blue-100 text-blue-800 text-[10px] font-bold">Excellent</span></td>
                            </tr>
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                                <td class="px-6 py-4 font-black text-slate-400">#3</td>
                                <td class="px-6 py-4 font-semibold">Aisha Juma</td>
                                <td class="px-6 py-4 text-center">310</td>
                                <td class="px-6 py-4 text-right font-bold">KSh 624,300</td>
                                <td class="px-6 py-4 text-center font-mono text-xs">2,013</td>
                                <td class="px-6 py-4 text-center font-bold text-amber-600">4.5%</td>
                                <td class="px-6 py-4"><span class="px-2 py-0.5 rounded bg-slate-100 text-slate-600 text-[10px] font-bold">Stable</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- SECTION 4: PRODUCT MARGIN ANALYSIS -->
        <div class="space-y-4">
            <h2 class="text-lg font-bold" style="color: var(--color-text);">Profit Margin Analysis</h2>
            <div class="bg-[var(--color-surface)] dark:bg-slate-800 rounded-2xl border border-slate-200/60 dark:border-slate-700 shadow-md overflow-hidden">
                <div class="overflow-x-auto scrollbar-none">
                    <table class="w-full text-left text-sm border-collapse">
                        <thead class="bg-slate-50 dark:bg-slate-900/50 text-[10px] font-bold uppercase tracking-wider text-slate-500 border-b border-[var(--color-border)]">
                            <tr>
                                <th class="px-6 py-4">Product</th>
                                <th class="px-6 py-4 text-right">Unit Cost</th>
                                <th class="px-6 py-4 text-right">Unit Sale Price</th>
                                <th class="px-6 py-4 text-right">Margin / Unit</th>
                                <th class="px-6 py-4 text-center">Margin %</th>
                                <th class="px-6 py-4 text-center">Trend</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[var(--color-border)]">
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                                <td class="px-6 py-4 font-semibold">Cooking Oil 5L</td>
                                <td class="px-6 py-4 text-right font-mono">220</td>
                                <td class="px-6 py-4 text-right font-mono">300</td>
                                <td class="px-6 py-4 text-right font-bold text-green-600">+80</td>
                                <td class="px-6 py-4 text-center font-black">26.6%</td>
                                <td class="px-6 py-4 text-center text-green-500">↑</td>
                            </tr>
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                                <td class="px-6 py-4 font-semibold">Maize Flour 2kg</td>
                                <td class="px-6 py-4 text-right font-mono">160</td>
                                <td class="px-6 py-4 text-right font-mono">200</td>
                                <td class="px-6 py-4 text-right font-bold text-green-600">+40</td>
                                <td class="px-6 py-4 text-center font-black">20.0%</td>
                                <td class="px-6 py-4 text-center text-slate-400">→</td>
                            </tr>
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                                <td class="px-6 py-4 font-semibold">Sugar 2kg</td>
                                <td class="px-6 py-4 text-right font-mono">175</td>
                                <td class="px-6 py-4 text-right font-mono">200</td>
                                <td class="px-6 py-4 text-right font-bold text-amber-600">+25</td>
                                <td class="px-6 py-4 text-center font-black text-red-500">12.5%</td>
                                <td class="px-6 py-4 text-center text-red-500">↓</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>

<script>
    (function() {
        'use strict';
        // Future: Initialize interactive charts here (e.g. Chart.js)
    })();
</script>
</body>
</html>