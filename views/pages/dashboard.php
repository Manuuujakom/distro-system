<!DOCTYPE html>
<html lang="en" id="html-root" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - DistroManager</title>

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

<!-- SIDEBAR PARTIAL -->
<!-- include "../components/sidebar.php" -->

<!-- MAIN CONTENT WRAPPER -->
<div id="main-content-wrapper" class="lg:ml-64 flex flex-col flex-1 min-width-0 overflow-hidden transition-all duration-300">
    
    <!-- TOPBAR PARTIAL -->
    <!-- include "../components/topbar.php" -->

    <!-- PAGE CONTENT AREA -->
    <main class="flex-1 overflow-y-auto p-6 space-y-6 bg-[var(--color-bg)] min-h-screen dark:bg-slate-900">
        
        <!-- SECTION 4: STOCK ALERT BANNER (Full Width) -->
        <div id="stock-alert-banner" class="flex items-center justify-between p-4 bg-amber-50 dark:bg-amber-900/20 border-l-4 border-amber-500 rounded-r-xl shadow-sm animate-in fade-in slide-in-from-top-2 duration-500">
            <div class="flex items-center gap-3">
                <div class="flex-shrink-0 text-amber-600 dark:text-amber-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
                <p class="text-sm font-medium text-amber-800 dark:text-amber-200">
                    3 products are running low. Review stock levels immediately to avoid stockouts.
                </p>
                <button class="ml-4 px-3 py-1 text-xs font-bold uppercase tracking-wider text-amber-600 border border-amber-600 rounded-lg hover:bg-amber-600 hover:text-white transition-all">
                    Review Stock
                </button>
            </div>
            <button id="dismiss-stock-alert" class="p-1 hover:bg-amber-100 dark:hover:bg-amber-800/50 rounded-full text-amber-500 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <!-- SECTION 1: KPI STAT CARDS -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Total Revenue -->
            <div class="bg-[var(--color-surface)] p-5 rounded-xl border border-[var(--color-border)] shadow-sm group hover:border-primary/30 transition-all">
                <div class="flex justify-between items-start">
                    <div class="w-10 h-10 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    </div>
                    <span class="px-2 py-1 rounded-full text-[10px] font-bold bg-green-100 text-green-700 dark:bg-green-900/40 dark:text-green-400">+12% ↑</span>
                </div>
                <h2 class="text-3xl font-bold mt-3" style="color: var(--color-text);">KSh 284,500</h2>
                <p class="text-sm text-slate-500 font-medium">Total Revenue Today</p>
            </div>

            <!-- Active Drivers -->
            <div class="bg-[var(--color-surface)] p-5 rounded-xl border border-[var(--color-border)] shadow-sm group hover:border-primary/30 transition-all">
                <div class="flex justify-between items-start">
                    <div class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                    </div>
                    <span class="px-2 py-1 rounded-full text-[10px] font-bold bg-blue-100 text-blue-700 dark:bg-blue-900/40 dark:text-blue-400">+2 today</span>
                </div>
                <h2 class="text-3xl font-bold mt-3" style="color: var(--color-text);">8 <span class="text-lg font-medium text-slate-400">of 12</span></h2>
                <p class="text-sm text-slate-500 font-medium">Active Drivers</p>
            </div>

            <!-- Stock Dispatched -->
            <div class="bg-[var(--color-surface)] p-5 rounded-xl border border-[var(--color-border)] shadow-sm group hover:border-primary/30 transition-all">
                <div class="flex justify-between items-start">
                    <div class="w-10 h-10 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-orange-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                    </div>
                    <span class="px-2 py-1 rounded-full text-[10px] font-bold bg-red-100 text-red-700 dark:bg-red-900/40 dark:text-red-400">−3% ↓</span>
                </div>
                <h2 class="text-3xl font-bold mt-3" style="color: var(--color-text);">1,240 <span class="text-lg font-medium text-slate-400 text-sm">units</span></h2>
                <p class="text-sm text-slate-500 font-medium">Stock Dispatched</p>
            </div>

            <!-- Pending Reconciliations -->
            <div class="bg-[var(--color-surface)] p-5 rounded-xl border border-[var(--color-border)] shadow-sm group hover:border-primary/30 transition-all">
                <div class="flex justify-between items-start">
                    <div class="w-10 h-10 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-red-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <span class="px-2 py-1 rounded-full text-[10px] font-black uppercase tracking-tighter bg-red-500 text-white animate-pulse">Urgent</span>
                </div>
                <h2 class="text-3xl font-bold mt-3" style="color: var(--color-text);">3</h2>
                <p class="text-sm text-slate-500 font-medium">Pending Reconciliations</p>
            </div>
        </div>

        <!-- SECTION 2: SALES OVERVIEW & TOP PRODUCTS -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Sales Overview Chart (2/3) -->
            <div class="lg:col-span-2 bg-[var(--color-surface)] dark:bg-slate-800 rounded-xl border border-[var(--color-border)] dark:border-slate-700 p-5 shadow-sm flex flex-col">
                <div class="flex items-center justify-between mb-8">
                    <h3 class="font-bold text-slate-700 dark:text-slate-200">Sales Overview</h3>
                    <div class="flex p-1 bg-slate-100 dark:bg-slate-800 rounded-lg">
                        <button class="px-3 py-1 text-[10px] font-bold uppercase rounded-md bg-white dark:bg-slate-700 shadow-sm transition-all">Today</button>
                        <button class="px-3 py-1 text-[10px] font-bold uppercase rounded-md text-slate-500 hover:text-slate-700 transition-all">This Week</button>
                        <button class="px-3 py-1 text-[10px] font-bold uppercase rounded-md text-slate-500 hover:text-slate-700 transition-all">This Month</button>
                    </div>
                </div>
                
                <!-- Dummy CSS Bar Chart -->
                <div id="sales-chart" data-chart="bar" class="flex-1 flex items-end justify-between gap-2 sm:gap-4 px-2 min-h-[260px]">
                    <div class="flex-1 flex flex-col items-center gap-2 group">
                        <div class="w-full bg-primary/20 group-hover:bg-primary/40 rounded-t-lg transition-all" style="height: 60%;"></div>
                        <span class="text-[10px] font-bold text-slate-400">Mon</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-2 group">
                        <div class="w-full bg-primary/20 group-hover:bg-primary/40 rounded-t-lg transition-all" style="height: 45%;"></div>
                        <span class="text-[10px] font-bold text-slate-400">Tue</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-2 group">
                        <div class="w-full bg-primary/80 rounded-t-lg transition-all shadow-lg shadow-primary/20" style="height: 80%;"></div>
                        <span class="text-[10px] font-bold text-slate-600 dark:text-slate-200">Wed</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-2 group">
                        <div class="w-full bg-primary/20 group-hover:bg-primary/40 rounded-t-lg transition-all" style="height: 55%;"></div>
                        <span class="text-[10px] font-bold text-slate-400">Thu</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-2 group">
                        <div class="w-full bg-primary/20 group-hover:bg-primary/40 rounded-t-lg transition-all" style="height: 90%;"></div>
                        <span class="text-[10px] font-bold text-slate-400">Fri</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-2 group">
                        <div class="w-full bg-primary/20 group-hover:bg-primary/40 rounded-t-lg transition-all" style="height: 70%;"></div>
                        <span class="text-[10px] font-bold text-slate-400">Sat</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center gap-2 group">
                        <div class="w-full bg-primary/20 group-hover:bg-primary/40 rounded-t-lg transition-all" style="height: 40%;"></div>
                        <span class="text-[10px] font-bold text-slate-400">Sun</span>
                    </div>
                </div>
            </div>

            <!-- Top Products (1/3) -->
            <div class="bg-[var(--color-surface)] dark:bg-slate-800 rounded-xl border border-[var(--color-border)] dark:border-slate-700 p-5 shadow-sm">
                <h3 class="font-bold text-slate-700 dark:text-slate-200 mb-6">Top Products Today</h3>
                <div class="space-y-5">
                    <!-- Product 1 -->
                    <div class="space-y-2">
                        <div class="flex justify-between text-sm">
                            <span class="font-medium" style="color: var(--color-text);">Cooking Oil 5L</span>
                            <span class="font-bold text-primary">KSh 96,000</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-1 h-1.5 bg-primary/10 rounded-full overflow-hidden">
                                <div class="bg-primary h-full w-[100%] rounded-full"></div>
                            </div>
                            <span class="text-[10px] font-bold text-slate-400 w-12 text-right">320 units</span>
                        </div>
                    </div>
                    <!-- Product 2 -->
                    <div class="space-y-2">
                        <div class="flex justify-between text-sm">
                            <span class="font-medium" style="color: var(--color-text);">Maize Flour 2kg</span>
                            <span class="font-bold text-primary">KSh 56,000</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-1 h-1.5 bg-primary/10 rounded-full overflow-hidden">
                                <div class="bg-primary h-full w-[87%] rounded-full"></div>
                            </div>
                            <span class="text-[10px] font-bold text-slate-400 w-12 text-right">280 units</span>
                        </div>
                    </div>
                    <!-- Product 3 -->
                    <div class="space-y-2">
                        <div class="flex justify-between text-sm">
                            <span class="font-medium" style="color: var(--color-text);">Sugar 2kg</span>
                            <span class="font-bold text-primary">KSh 42,000</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-1 h-1.5 bg-primary/10 rounded-full overflow-hidden">
                                <div class="bg-primary h-full w-[65%] rounded-full"></div>
                            </div>
                            <span class="text-[10px] font-bold text-slate-400 w-12 text-right">210 units</span>
                        </div>
                    </div>
                    <!-- Product 4 -->
                    <div class="space-y-2">
                        <div class="flex justify-between text-sm">
                            <span class="font-medium" style="color: var(--color-text);">Rice 5kg</span>
                            <span class="font-bold text-primary">KSh 63,000</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-1 h-1.5 bg-primary/10 rounded-full overflow-hidden">
                                <div class="bg-primary h-full w-[56%] rounded-full"></div>
                            </div>
                            <span class="text-[10px] font-bold text-slate-400 w-12 text-right">180 units</span>
                        </div>
                    </div>
                    <!-- Product 5 -->
                    <div class="space-y-2">
                        <div class="flex justify-between text-sm">
                            <span class="font-medium" style="color: var(--color-text);">Bread</span>
                            <span class="font-bold text-primary">KSh 22,500</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-1 h-1.5 bg-primary/10 rounded-full overflow-hidden">
                                <div class="bg-primary h-full w-[46%] rounded-full"></div>
                            </div>
                            <span class="text-[10px] font-bold text-slate-400 w-12 text-right">150 units</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECTION 3: DRIVER ACTIVITY & RECENT TRANSACTIONS -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Driver Activity -->
            <div class="bg-[var(--color-surface)] dark:bg-slate-800 rounded-xl border border-[var(--color-border)] dark:border-slate-700 shadow-sm overflow-hidden flex flex-col">
                <div class="p-5 border-b border-[var(--color-border)] flex items-center justify-between">
                    <h3 class="font-bold text-slate-700 dark:text-slate-200">Driver Activity</h3>
                    <a href="#" class="text-xs font-bold text-primary hover:underline">View All</a>
                </div>
                <div class="overflow-x-auto scrollbar-none">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-slate-50 dark:bg-slate-900/50 text-[10px] font-bold uppercase tracking-wider text-slate-500 border-b border-[var(--color-border)]">
                            <tr>
                                <th class="px-5 py-3">Driver</th>
                                <th class="px-5 py-3 text-center">Assigned</th>
                                <th class="px-5 py-3 text-center">Sold</th>
                                <th class="px-5 py-3 text-center">Balance</th>
                                <th class="px-5 py-3">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[var(--color-border)]">
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors cursor-pointer group">
                                <td class="px-5 py-3 font-semibold group-hover:text-primary" style="color: var(--color-text);">Peter Kamau</td>
                                <td class="px-5 py-3 text-center font-mono">150</td>
                                <td class="px-5 py-3 text-center font-mono">142</td>
                                <td class="px-5 py-3 text-center font-mono font-bold">8</td>
                                <td class="px-5 py-3"><span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-green-100 text-green-700 dark:bg-green-900/20 dark:text-green-400">Active</span></td>
                            </tr>
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors cursor-pointer group">
                                <td class="px-5 py-3 font-semibold group-hover:text-primary" style="color: var(--color-text);">Moses Mwangi</td>
                                <td class="px-5 py-3 text-center font-mono">120</td>
                                <td class="px-5 py-3 text-center font-mono">120</td>
                                <td class="px-5 py-3 text-center font-mono font-bold">0</td>
                                <td class="px-5 py-3"><span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-blue-100 text-blue-700 dark:bg-blue-900/20 dark:text-blue-400">Reconciled</span></td>
                            </tr>
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors cursor-pointer group">
                                <td class="px-5 py-3 font-semibold group-hover:text-primary" style="color: var(--color-text);">Aisha Juma</td>
                                <td class="px-5 py-3 text-center font-mono">200</td>
                                <td class="px-5 py-3 text-center font-mono">185</td>
                                <td class="px-5 py-3 text-center font-mono font-bold">15</td>
                                <td class="px-5 py-3"><span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-700 dark:bg-amber-900/20 dark:text-amber-400">Pending</span></td>
                            </tr>
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors cursor-pointer group">
                                <td class="px-5 py-3 font-semibold group-hover:text-primary" style="color: var(--color-text);">John Mutua</td>
                                <td class="px-5 py-3 text-center font-mono">100</td>
                                <td class="px-5 py-3 text-center font-mono">98</td>
                                <td class="px-5 py-3 text-center font-mono font-bold">2</td>
                                <td class="px-5 py-3"><span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-green-100 text-green-700 dark:bg-green-900/20 dark:text-green-400">Active</span></td>
                            </tr>
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors cursor-pointer group">
                                <td class="px-5 py-3 font-semibold group-hover:text-primary" style="color: var(--color-text);">Jane Wanjiru</td>
                                <td class="px-5 py-3 text-center font-mono">80</td>
                                <td class="px-5 py-3 text-center font-mono">80</td>
                                <td class="px-5 py-3 text-center font-mono font-bold">0</td>
                                <td class="px-5 py-3"><span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-blue-100 text-blue-700 dark:bg-blue-900/20 dark:text-blue-400">Reconciled</span></td>
                            </tr>
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors cursor-pointer group">
                                <td class="px-5 py-3 font-semibold group-hover:text-primary" style="color: var(--color-text);">Samson K.</td>
                                <td class="px-5 py-3 text-center font-mono">140</td>
                                <td class="px-5 py-3 text-center font-mono">135</td>
                                <td class="px-5 py-3 text-center font-mono font-bold">5</td>
                                <td class="px-5 py-3"><span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-green-100 text-green-700 dark:bg-green-900/20 dark:text-green-400">Active</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Recent Transactions -->
            <div class="bg-[var(--color-surface)] rounded-xl border border-[var(--color-border)] shadow-sm flex flex-col">
                <div class="p-5 border-b border-[var(--color-border)] flex items-center justify-between">
                    <h3 class="font-bold text-slate-700 dark:text-slate-200">Recent Transactions</h3>
                    <select class="text-xs bg-slate-50 dark:bg-slate-800 border-none outline-none focus:ring-0 rounded-lg p-1 font-bold text-slate-500 cursor-pointer">
                        <option>All</option>
                        <option>Sales</option>
                        <option>Purchases</option>
                    </select>
                </div>
                <div class="p-5 space-y-4">
                    <!-- Item 1 -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.407 2.67 1a2.4 2.4 0 010 4.01C14.08 15.593 13.11 16 12 16M12 8V7m0 1V8m0 8v1m0-1V16m-6-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold" style="color: var(--color-text);">Sale — Cooking Oil</p>
                                <p class="text-[10px] text-slate-500 font-medium">Driver: Moses Mwangi</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-black text-green-600">+KSh 4,800</p>
                            <p class="text-[10px] text-slate-400">09:32 AM</p>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-red-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold" style="color: var(--color-text);">Purchase — Rice Stock</p>
                                <p class="text-[10px] text-slate-500 font-medium">Supplier: Unga Group</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-black text-red-500">−KSh 124,000</p>
                            <p class="text-[10px] text-slate-400">08:45 AM</p>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.407 2.67 1a2.4 2.4 0 010 4.01C14.08 15.593 13.11 16 12 16M12 8V7m0 1V8m0 8v1m0-1V16m-6-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold" style="color: var(--color-text);">Sale — Maize Flour</p>
                                <p class="text-[10px] text-slate-500 font-medium">Driver: Peter Kamau</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-black text-green-600">+KSh 2,400</p>
                            <p class="text-[10px] text-slate-400">08:15 AM</p>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="flex items-center justify-between opacity-60">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold" style="color: var(--color-text);">Petty Cash — Fuel</p>
                                <p class="text-[10px] text-slate-500 font-medium">Driver: Aisha Juma</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-black text-red-500">−KSh 1,500</p>
                            <p class="text-[10px] text-slate-400">Yesterday</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script>
    (function() {
        'use strict';

        // Dismiss Stock Alert Logic
        const alertBanner = document.getElementById('stock-alert-banner');
        const dismissBtn = document.getElementById('dismiss-stock-alert');
        
        if (dismissBtn && alertBanner) {
            dismissBtn.addEventListener('click', () => {
                alertBanner.classList.add('hidden');
            });
        }
    })();
</script>
</body>
</html>