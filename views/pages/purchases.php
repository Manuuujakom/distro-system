<!DOCTYPE html>
<html lang="en" id="html-root" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchases - DistroManager</title>

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
<div class="flex flex-col flex-1 min-width-0 overflow-hidden">
    
    <!-- TOPBAR PARTIAL -->
    <!-- include "../components/topbar.php" -->

    <!-- PAGE CONTENT AREA -->
    <main class="flex-1 overflow-y-auto p-6 space-y-6">
        
        <!-- PAGE HEADER -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold tracking-tight" style="color: var(--color-text);">Purchases</h1>
                <nav class="flex items-center gap-1 text-xs text-slate-500 font-medium mt-1">
                    <span>Home</span>
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span class="text-slate-400">Purchases</span>
                </nav>
            </div>
            <button id="open-purchase-drawer" class="inline-flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-5 py-2.5 rounded-xl font-semibold transition-all shadow-lg shadow-primary/20">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                New Purchase
            </button>
        </div>

        <!-- KPI CHIPS -->
        <div class="flex flex-wrap gap-3">
            <div class="flex items-center gap-3 px-4 py-2 bg-[var(--color-surface)] border border-[var(--color-border)] rounded-full shadow-sm">
                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-500">Month Purchases</span>
                <span class="text-sm font-bold text-primary">KSh 820,000</span>
            </div>
            <div class="flex items-center gap-3 px-4 py-2 bg-[var(--color-surface)] border border-[var(--color-border)] rounded-full shadow-sm">
                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-500">This Week</span>
                <span class="text-sm font-bold" style="color: var(--color-text);">KSh 142,000</span>
            </div>
            <div class="flex items-center gap-3 px-4 py-2 bg-[var(--color-surface)] border border-[var(--color-border)] rounded-full shadow-sm">
                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-500">Suppliers</span>
                <span class="text-sm font-bold" style="color: var(--color-text);">4</span>
            </div>
            <div class="flex items-center gap-3 px-4 py-2 bg-[var(--color-surface)] border border-[var(--color-border)] rounded-full shadow-sm">
                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-500">Pending Payments</span>
                <span class="text-sm font-bold text-red-500">KSh 38,000</span>
            </div>
        </div>

        <!-- TABS -->
        <div class="sticky top-14 z-20 -mx-6 px-6 bg-[var(--color-surface)] border-b border-[var(--color-border)] transition-colors">
            <div class="flex items-center gap-6 text-sm font-semibold text-slate-500">
                <button data-tab="all" class="py-3 border-b-2 border-primary text-primary transition-colors">All Purchases</button>
                <button data-tab="pending" class="py-3 border-b-2 border-transparent hover:border-slate-300 transition-colors">Pending Payment</button>
                <button data-tab="paid" class="py-3 border-b-2 border-transparent hover:border-slate-300 transition-colors">Paid</button>
                <button data-tab="returns" class="py-3 border-b-2 border-transparent hover:border-slate-300 transition-colors">Returns</button>
            </div>
        </div>

        <!-- PURCHASES TABLE -->
        <div class="bg-[var(--color-surface)] rounded-xl border border-[var(--color-border)] shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-slate-50 dark:bg-slate-900/50 text-[10px] font-bold uppercase tracking-wider text-slate-500 border-b border-[var(--color-border)]">
                        <tr>
                            <th class="px-6 py-4"># <span class="ml-1 opacity-30">↕</span></th>
                            <th class="px-6 py-4">Date <span class="ml-1 opacity-30">↕</span></th>
                            <th class="px-6 py-4">Supplier <span class="ml-1 opacity-30">↕</span></th>
                            <th class="px-6 py-4">Invoice No.</th>
                            <th class="px-6 py-4">Products</th>
                            <th class="px-6 py-4 text-center">Qty</th>
                            <th class="px-6 py-4 text-right">Unit Cost</th>
                            <th class="px-6 py-4 text-right">Total Cost</th>
                            <th class="px-6 py-4 text-right">Paid</th>
                            <th class="px-6 py-4 text-right">Balance</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[var(--color-border)] text-sm">
                        <!-- Row 1: Paid -->
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 font-mono text-xs text-slate-400">001</td>
                            <td class="px-6 py-4 whitespace-nowrap">20 Mar</td>
                            <td class="px-6 py-4 font-semibold">Unga Group</td>
                            <td class="px-6 py-4">INV-2024-031</td>
                            <td class="px-6 py-4 truncate max-w-[150px]">Maize Flour 2kg</td>
                            <td class="px-6 py-4 text-center font-medium">500</td>
                            <td class="px-6 py-4 text-right">180</td>
                            <td class="px-6 py-4 text-right font-bold">90,000</td>
                            <td class="px-6 py-4 text-right font-bold text-green-600">90,000</td>
                            <td class="px-6 py-4 text-right font-bold">0</td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 rounded-full text-[10px] font-bold bg-green-100 text-green-800 dark:bg-green-900/20 dark:text-green-400">Paid</span>
                            </td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <button class="p-1.5 hover:bg-primary/10 rounded-lg text-primary transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></button>
                            </td>
                        </tr>
                        <!-- Row 2: Partial -->
                        <tr class="bg-slate-50/30 dark:bg-slate-900/20 hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 font-mono text-xs text-slate-400">002</td>
                            <td class="px-6 py-4 whitespace-nowrap">22 Mar</td>
                            <td class="px-6 py-4 font-semibold">Bidco Africa</td>
                            <td class="px-6 py-4">INV-2024-047</td>
                            <td class="px-6 py-4 truncate max-w-[150px]">Cooking Oil 5L</td>
                            <td class="px-6 py-4 text-center font-medium">200</td>
                            <td class="px-6 py-4 text-right">450</td>
                            <td class="px-6 py-4 text-right font-bold">90,000</td>
                            <td class="px-6 py-4 text-right font-bold text-amber-600">52,000</td>
                            <td class="px-6 py-4 text-right font-bold text-red-500">38,000</td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 rounded-full text-[10px] font-bold bg-amber-100 text-amber-800 dark:bg-amber-900/20 dark:text-amber-400">Partial</span>
                            </td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <button class="p-1.5 hover:bg-primary/10 rounded-lg text-primary transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></button>
                                <button class="p-1.5 bg-primary/10 hover:bg-primary/20 rounded-lg text-primary transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg></button>
                            </td>
                        </tr>
                        <!-- Row 3: Unpaid -->
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 font-mono text-xs text-slate-400">003</td>
                            <td class="px-6 py-4 whitespace-nowrap">23 Mar</td>
                            <td class="px-6 py-4 font-semibold">Kapa Oil Ref.</td>
                            <td class="px-6 py-4">INV-2024-050</td>
                            <td class="px-6 py-4 truncate max-w-[150px]">Sugar 1kg</td>
                            <td class="px-6 py-4 text-center font-medium">1000</td>
                            <td class="px-6 py-4 text-right">150</td>
                            <td class="px-6 py-4 text-right font-bold">150,000</td>
                            <td class="px-6 py-4 text-right font-bold text-red-600">0</td>
                            <td class="px-6 py-4 text-right font-bold text-red-500">150,000</td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 rounded-full text-[10px] font-bold bg-red-100 text-red-800 dark:bg-red-900/20 dark:text-red-400">Unpaid</span>
                            </td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <button class="p-1.5 hover:bg-primary/10 rounded-lg text-primary transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></button>
                                <button class="p-1.5 bg-primary/10 hover:bg-primary/20 rounded-lg text-primary transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg></button>
                            </td>
                        </tr>
                        <!-- Row 4: Paid -->
                        <tr class="bg-slate-50/30 dark:bg-slate-900/20 hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 font-mono text-xs text-slate-400">004</td>
                            <td class="px-6 py-4 whitespace-nowrap">24 Mar</td>
                            <td class="px-6 py-4 font-semibold">Brookside Dairies</td>
                            <td class="px-6 py-4">INV-2024-055</td>
                            <td class="px-6 py-4 truncate max-w-[150px]">Milk 500ml</td>
                            <td class="px-6 py-4 text-center font-medium">300</td>
                            <td class="px-6 py-4 text-right">60</td>
                            <td class="px-6 py-4 text-right font-bold">18,000</td>
                            <td class="px-6 py-4 text-right font-bold text-green-600">18,000</td>
                            <td class="px-6 py-4 text-right font-bold">0</td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 rounded-full text-[10px] font-bold bg-green-100 text-green-800 dark:bg-green-900/20 dark:text-green-400">Paid</span>
                            </td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <button class="p-1.5 hover:bg-primary/10 rounded-lg text-primary transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></button>
                            </td>
                        </tr>
                        <!-- Row 5: Partial -->
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 font-mono text-xs text-slate-400">005</td>
                            <td class="px-6 py-4 whitespace-nowrap">24 Mar</td>
                            <td class="px-6 py-4 font-semibold">Unga Group</td>
                            <td class="px-6 py-4">INV-2024-056</td>
                            <td class="px-6 py-4 truncate max-w-[150px]">Rice 1kg</td>
                            <td class="px-6 py-4 text-center font-medium">400</td>
                            <td class="px-6 py-4 text-right">120</td>
                            <td class="px-6 py-4 text-right font-bold">48,000</td>
                            <td class="px-6 py-4 text-right font-bold text-amber-600">20,000</td>
                            <td class="px-6 py-4 text-right font-bold text-red-500">28,000</td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 rounded-full text-[10px] font-bold bg-amber-100 text-amber-800 dark:bg-amber-900/20 dark:text-amber-400">Partial</span>
                            </td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <button class="p-1.5 hover:bg-primary/10 rounded-lg text-primary transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></button>
                                <button class="p-1.5 bg-primary/10 hover:bg-primary/20 rounded-lg text-primary transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg></button>
                            </td>
                        </tr>
                        <!-- Row 6: Unpaid -->
                        <tr class="bg-slate-50/30 dark:bg-slate-900/20 hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 font-mono text-xs text-slate-400">006</td>
                            <td class="px-6 py-4 whitespace-nowrap">25 Mar</td>
                            <td class="px-6 py-4 font-semibold">Bidco Africa</td>
                            <td class="px-6 py-4">INV-2024-060</td>
                            <td class="px-6 py-4 truncate max-w-[150px]">Salt 1kg</td>
                            <td class="px-6 py-4 text-center font-medium">150</td>
                            <td class="px-6 py-4 text-right">50</td>
                            <td class="px-6 py-4 text-right font-bold">7,500</td>
                            <td class="px-6 py-4 text-right font-bold text-red-600">0</td>
                            <td class="px-6 py-4 text-right font-bold text-red-500">7,500</td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 rounded-full text-[10px] font-bold bg-red-100 text-red-800 dark:bg-red-900/20 dark:text-red-400">Unpaid</span>
                            </td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <button class="p-1.5 hover:bg-primary/10 rounded-lg text-primary transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></button>
                                <button class="p-1.5 bg-primary/10 hover:bg-primary/20 rounded-lg text-primary transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- PAGINATION BAR -->
            <div class="px-6 py-4 flex flex-col sm:flex-row items-center justify-between gap-4 border-t border-[var(--color-border)] bg-slate-50/50 dark:bg-slate-900/30">
                <p class="text-xs text-slate-500">Showing <span class="font-bold text-slate-700 dark:text-slate-300">1–6</span> of 6 records</p>
                <div class="flex items-center gap-1">
                    <button class="p-2 rounded-lg border border-[var(--color-border)] text-slate-400 hover:text-primary transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg></button>
                    <button class="px-3.5 py-1.5 rounded-lg bg-primary text-white text-xs font-bold">1</button>
                    <button class="p-2 rounded-lg border border-[var(--color-border)] text-slate-400 hover:text-primary transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></button>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- SLIDE-OVER DRAWER: New Purchase -->
<div id="drawer-overlay-purchase" class="fixed inset-0 bg-black/40 z-[60] hidden backdrop-blur-sm transition-opacity"></div>

<div id="purchase-drawer" class="fixed right-0 top-0 h-screen w-full max-w-md bg-[var(--color-surface)] shadow-2xl z-[70] translate-x-full transition-transform duration-300 ease-in-out border-l border-[var(--color-border)] flex flex-col">
    <!-- Drawer Header -->
    <div class="p-6 border-b border-[var(--color-border)] flex items-center justify-between">
        <div>
            <h2 class="text-xl font-bold" style="color: var(--color-text);">New Purchase</h2>
            <p class="text-xs text-slate-500 mt-0.5">Record a new stock-in transaction</p>
        </div>
        <button id="close-purchase-drawer" class="p-2 hover:bg-red-50 hover:text-red-500 rounded-lg transition-colors text-slate-400">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </div>

    <!-- Drawer Body (Form) -->
    <form class="flex-1 overflow-y-auto p-6 space-y-6">
        <div class="space-y-1.5">
            <label class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Supplier</label>
            <div class="flex items-center gap-2">
                <select id="supplier-select" class="flex-1 bg-slate-50 dark:bg-slate-900 border border-[var(--color-border)] rounded-xl py-2.5 px-4 text-sm outline-none focus:ring-4 focus:ring-primary/10 transition-all">
                    <option>Unga Group</option>
                    <option>Bidco Africa</option>
                    <option>Kapa Oil Ref.</option>
                    <option>Brookside Dairies</option>
                </select>
                <button type="button" id="new-supplier-btn" class="text-xs font-bold text-accent hover:underline whitespace-nowrap">+ New Supplier</button>
            </div>
            <input type="text" id="new-supplier-input" placeholder="Enter new supplier name" class="hidden w-full bg-slate-50 dark:bg-slate-900 border border-[var(--color-border)] rounded-xl py-2.5 px-4 text-sm outline-none focus:ring-4 focus:ring-primary/10 transition-all mt-2">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div class="space-y-1.5">
                <label class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Invoice Number</label>
                <input type="text" placeholder="INV-2024-XXX" class="w-full bg-slate-50 dark:bg-slate-900 border border-[var(--color-border)] rounded-xl py-2.5 px-4 text-sm outline-none focus:ring-4 focus:ring-primary/10 transition-all">
            </div>
            <div class="space-y-1.5">
                <label class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Purchase Date</label>
                <input type="date" value="2026-03-25" class="w-full bg-slate-50 dark:bg-slate-900 border border-[var(--color-border)] rounded-xl py-2.5 px-4 text-sm outline-none focus:ring-4 focus:ring-primary/10 transition-all">
            </div>
            <div class="col-span-2 space-y-1.5">
                <label class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Expected Delivery Date</label>
                <input type="date" value="2026-03-28" class="w-full bg-slate-50 dark:bg-slate-900 border border-[var(--color-border)] rounded-xl py-2.5 px-4 text-sm outline-none focus:ring-4 focus:ring-primary/10 transition-all">
            </div>
        </div>

        <!-- Products Section -->
        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-bold uppercase tracking-widest text-primary">Products</h3>
                <button type="button" id="add-product-row" class="text-xs font-bold text-accent hover:underline">+ Add Product</button>
            </div>
            
            <div id="product-list" class="space-y-4">
                <!-- Product Row Template -->
                <div class="product-row grid grid-cols-12 gap-3 items-end p-4 bg-slate-50 dark:bg-slate-900/50 rounded-xl border border-slate-100 dark:border-slate-800 relative group">
                    <div class="col-span-5 space-y-1">
                        <label class="text-[10px] font-bold uppercase text-slate-400">Product</label>
                        <select class="product-select w-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-lg py-1.5 px-3 text-xs outline-none focus:ring-2 focus:ring-primary/20">
                            <option value="" data-price="0">Select Product</option>
                            <option value="Maize Flour 2kg" data-price="180">Maize Flour 2kg</option>
                            <option value="Cooking Oil 5L" data-price="450">Cooking Oil 5L</option>
                            <option value="Sugar 1kg" data-price="150">Sugar 1kg</option>
                            <option value="Milk 500ml" data-price="60">Milk 500ml</option>
                            <option value="Rice 1kg" data-price="120">Rice 1kg</option>
                            <option value="Salt 1kg" data-price="50">Salt 1kg</option>
                        </select>
                    </div>
                    <div class="col-span-3 space-y-1">
                        <label class="text-[10px] font-bold uppercase text-slate-400">Qty</label>
                        <input type="number" value="1" min="1" class="qty-input w-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-lg py-1.5 px-3 text-xs outline-none focus:ring-2 focus:ring-primary/20">
                    </div>
                    <div class="col-span-4 text-right pt-6">
                        <p class="text-[10px] font-bold uppercase text-slate-400 mb-1">Total</p>
                        <span class="line-total font-bold text-primary text-sm">KSh 0</span>
                    </div>
                    <button type="button" class="remove-row absolute -top-2 -right-2 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity shadow-lg">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Payment Details -->
        <div class="pt-6 border-t border-[var(--color-border)] space-y-6">
            <div class="flex items-center justify-between">
                <span class="text-sm font-bold text-slate-500">Total Cost</span>
                <span class="text-xl font-black text-primary" id="total-cost-display">KSh 0</span>
            </div>

            <div class="space-y-2">
                <label class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Payment Method</label>
                <div class="grid grid-cols-3 p-1 bg-slate-100 dark:bg-slate-800/50 rounded-xl transition-all" id="payment-method-selector">
                    <label class="cursor-pointer group">
                        <input type="radio" name="payment_method" value="cash" class="hidden" checked>
                        <div class="payment-btn py-2 text-center text-xs font-bold rounded-lg transition-all bg-primary text-white shadow-md">Cash</div>
                    </label>
                    <label class="cursor-pointer group">
                        <input type="radio" name="payment_method" value="bank" class="hidden">
                        <div class="payment-btn py-2 text-center text-xs font-bold rounded-lg transition-all text-slate-500 hover:text-slate-700 dark:hover:text-slate-300">Bank Transfer</div>
                    </label>
                    <label class="cursor-pointer group">
                        <input type="radio" name="payment_method" value="credit" class="hidden">
                        <div class="payment-btn py-2 text-center text-xs font-bold rounded-lg transition-all text-slate-500 hover:text-slate-700 dark:hover:text-slate-300">Credit</div>
                    </label>
                </div>
            </div>

            <div class="space-y-1.5">
                <label class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Amount Paid</label>
                <input type="number" id="amount-paid-input" value="0" min="0" class="w-full bg-slate-50 dark:bg-slate-900 border border-[var(--color-border)] rounded-xl py-2.5 px-4 text-sm outline-none focus:ring-4 focus:ring-primary/10 transition-all">
            </div>

            <div class="flex items-center justify-between pt-4 border-t border-dashed border-[var(--color-border)]">
                <span class="text-sm font-bold text-slate-500">Balance Due</span>
                <span class="text-xl font-black text-red-500" id="balance-display">KSh 0</span>
            </div>

            <div class="space-y-1.5">
                <label class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Notes (Optional)</label>
                <textarea rows="3" placeholder="Any additional notes for this purchase..." class="w-full bg-slate-50 dark:bg-slate-900 border border-[var(--color-border)] rounded-xl py-2.5 px-4 text-sm outline-none focus:ring-4 focus:ring-primary/10 transition-all"></textarea>
            </div>
        </div>
    </form>

    <!-- Drawer Footer -->
    <div class="p-6 border-t border-[var(--color-border)] grid grid-cols-2 gap-3 bg-slate-50/50 dark:bg-slate-900/30">
        <button type="button" id="cancel-purchase" class="py-3 rounded-xl font-bold text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all">Cancel</button>
        <button type="button" class="py-3 bg-primary text-white rounded-xl font-bold hover:bg-primary/90 transition-all shadow-lg shadow-primary/25">Save Purchase</button>
    </div>
</div>

<script>
    (function() {
        'use strict';

        const drawer = document.getElementById('purchase-drawer');
        const overlay = document.getElementById('drawer-overlay-purchase');
        const openBtn = document.getElementById('open-purchase-drawer');
        const closeBtn = document.getElementById('close-purchase-drawer');
        const cancelBtn = document.getElementById('cancel-purchase');
        const productList = document.getElementById('product-list');
        const addRowBtn = document.getElementById('add-product-row');
        const totalCostDisplay = document.getElementById('total-cost-display');
        const amountPaidInput = document.getElementById('amount-paid-input');
        const balanceDisplay = document.getElementById('balance-display');
        const newSupplierBtn = document.getElementById('new-supplier-btn');
        const newSupplierInput = document.getElementById('new-supplier-input');
        const supplierSelect = document.getElementById('supplier-select');
        const paymentMethodSelector = document.getElementById('payment-method-selector');
        const tabButtons = document.querySelectorAll('[data-tab]');

        // Dummy product prices for calculation
        const productPrices = {
            "Maize Flour 2kg": 180,
            "Cooking Oil 5L": 450,
            "Sugar 1kg": 150,
            "Milk 500ml": 60,
            "Rice 1kg": 120,
            "Salt 1kg": 50
        };

        // --- Drawer Controls ---
        const toggleDrawer = (isOpen) => {
            if (isOpen) {
                overlay.classList.remove('hidden');
                setTimeout(() => {
                    overlay.classList.add('opacity-100');
                    drawer.classList.remove('translate-x-full');
                }, 10);
            } else {
                drawer.classList.add('translate-x-full');
                overlay.classList.remove('opacity-100');
                setTimeout(() => overlay.classList.add('hidden'), 300);
            }
        };

        openBtn.addEventListener('click', () => toggleDrawer(true));
        [closeBtn, cancelBtn, overlay].forEach(el => {
            el.addEventListener('click', () => toggleDrawer(false));
        });

        // --- Dynamic Calculations ---
        const calculatePurchaseTotals = () => {
            let grandTotalCost = 0;
            const rows = productList.querySelectorAll('.product-row');

            rows.forEach(row => {
                const select = row.querySelector('.product-select');
                const qtyInput = row.querySelector('.qty-input');
                const lineSpan = row.querySelector('.line-total');

                const selectedProduct = select.value;
                const price = productPrices[selectedProduct] || 0;
                const qty = parseInt(qtyInput.value || 0);
                const lineTotal = price * qty;

                lineSpan.textContent = `KSh ${lineTotal.toLocaleString()}`;
                grandTotalCost += lineTotal;
            });

            totalCostDisplay.textContent = `KSh ${grandTotalCost.toLocaleString()}`;

            const amountPaid = parseFloat(amountPaidInput.value || 0);
            const balance = grandTotalCost - amountPaid;
            balanceDisplay.textContent = `KSh ${balance.toLocaleString()}`;
            balanceDisplay.classList.toggle('text-red-500', balance > 0);
            balanceDisplay.classList.toggle('text-green-600', balance <= 0);
        };

        // Event Delegation for Product Inputs
        productList.addEventListener('input', (e) => {
            if (e.target.classList.contains('product-select') || e.target.classList.contains('qty-input')) {
                calculatePurchaseTotals();
            }
        });

        // Amount Paid input listener
        amountPaidInput.addEventListener('input', calculatePurchaseTotals);

        // --- Product Row Management ---
        const addProductRow = () => {
            const template = productList.querySelector('.product-row').cloneNode(true);
            // Reset values
            template.querySelector('.product-select').selectedIndex = 0;
            template.querySelector('.qty-input').value = 1;
            template.querySelector('.line-total').textContent = 'KSh 0';
            
            // Add remove listener
            template.querySelector('.remove-row').addEventListener('click', function() {
                if (productList.children.length > 1) { // Ensure at least one row remains
                    this.closest('.product-row').remove();
                    calculatePurchaseTotals();
                }
            });

            productList.appendChild(template);
            calculatePurchaseTotals(); // Recalculate after adding a row
        };

        addRowBtn.addEventListener('click', addProductRow);

        // Initial Setup for first row remove button and calculation
        if (productList.querySelector('.product-row')) {
            productList.querySelector('.remove-row').addEventListener('click', function() {
                if (productList.children.length > 1) {
                    this.closest('.product-row').remove();
                    calculatePurchaseTotals();
                }
            });
            calculatePurchaseTotals(); // Initial calculation for the default row
        }

        // --- Supplier Management ---
        newSupplierBtn.addEventListener('click', () => {
            const isHidden = newSupplierInput.classList.toggle('hidden');
            if (!isHidden) {
                supplierSelect.classList.add('hidden');
                newSupplierInput.focus();
            } else {
                supplierSelect.classList.remove('hidden');
            }
        });

        // --- Payment Method Segmented Control ---
        paymentMethodSelector.addEventListener('change', (e) => {
            if (e.target.name === 'payment_method') {
                paymentMethodSelector.querySelectorAll('.payment-btn').forEach(btn => {
                    btn.classList.remove('bg-primary', 'text-white', 'shadow-md');
                    btn.classList.add('text-slate-500', 'hover:text-slate-700', 'dark:hover:text-slate-300');
                });
                const activeBtn = e.target.parentElement.querySelector('.payment-btn');
                activeBtn.classList.add('bg-primary', 'text-white', 'shadow-md');
                activeBtn.classList.remove('text-slate-500', 'hover:text-slate-700', 'dark:hover:text-slate-300');
            }
        });

        // --- Tab Switching Logic ---
        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                tabButtons.forEach(btn => {
                    btn.classList.remove('border-primary', 'text-primary');
                    btn.classList.add('border-transparent', 'hover:border-slate-300');
                });
                this.classList.add('border-primary', 'text-primary');
                this.classList.remove('border-transparent', 'hover:border-slate-300');
                // In a real app, you'd load content based on this.dataset.tab
            });
        });

    })();
</script>
</body>
</html>
</script>