<!DOCTYPE html>
<html lang="en" id="html-root" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounting & Finance - DistroManager</title>

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

<!-- MAIN CONTENT WRAPPER -->
<div id="main-content-wrapper" class="lg:ml-64 flex flex-col flex-1 min-width-0 overflow-hidden transition-all duration-300">
    <?php include "../components/topbar.php"; ?>

    <!-- PAGE CONTENT AREA -->
    <main class="flex-1 overflow-y-auto p-6 space-y-6">
        
        <!-- PAGE HEADER -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold tracking-tight" style="color: var(--color-text);">Accounting & Finance</h1>
                <nav class="flex items-center gap-1 text-xs text-slate-500 font-medium mt-1">
                    <span>Home</span>
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span class="text-slate-400">Accounting</span>
                </nav>
            </div>
            <div class="flex items-center gap-3">
                <button class="px-5 py-2.5 border border-[var(--color-border)] rounded-xl text-sm font-semibold hover:bg-slate-50 dark:hover:bg-slate-800 transition-all" style="color: var(--color-text);">
                    Close Period
                </button>
                <button class="inline-flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-5 py-2.5 rounded-xl font-semibold transition-all shadow-lg shadow-primary/20">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    New Entry
                </button>
            </div>
        </div>

        <!-- TABS BAR -->
        <div class="border-b border-[var(--color-border)]">
            <nav class="flex flex-wrap gap-8 text-sm font-bold" id="accounting-tabs">
                <button data-target="cashbook" class="tab-btn py-4 border-b-2 border-primary text-primary transition-all">Cash Book</button>
                <button data-target="expenses" class="tab-btn py-4 border-b-2 border-transparent text-slate-500 hover:text-slate-700 dark:hover:text-slate-300 transition-all">Expenses</button>
                <button data-target="payable" class="tab-btn py-4 border-b-2 border-transparent text-slate-500 hover:text-slate-700 dark:hover:text-slate-300 transition-all">Accounts Payable</button>
                <button data-target="receivable" class="tab-btn py-4 border-b-2 border-transparent text-slate-500 hover:text-slate-700 dark:hover:text-slate-300 transition-all">Accounts Receivable</button>
                <button data-target="summary" class="tab-btn py-4 border-b-2 border-transparent text-slate-500 hover:text-slate-700 dark:hover:text-slate-300 transition-all">Summary</button>
            </nav>
        </div>

        <!-- TAB CONTENTS -->
        <div id="tab-contents">
            
            <!-- CASH BOOK TAB -->
            <div id="cashbook" class="tab-pane space-y-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Money In Table -->
                    <div class="bg-[var(--color-surface)] rounded-2xl border border-[var(--color-border)] shadow-sm overflow-hidden flex flex-col">
                        <div class="p-4 border-b border-[var(--color-border)] bg-green-50/50 dark:bg-green-900/10">
                            <h3 class="text-sm font-bold text-green-700 dark:text-green-400 uppercase tracking-widest">Money In (Receipts)</h3>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-sm border-collapse">
                                <thead class="text-[10px] font-bold uppercase text-slate-400 border-b border-[var(--color-border)]">
                                    <tr>
                                        <th class="px-4 py-3">Date</th>
                                        <th class="px-4 py-3">Ref</th>
                                        <th class="px-4 py-3">Description</th>
                                        <th class="px-4 py-3">Source</th>
                                        <th class="px-4 py-3 text-right">Amount</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-[var(--color-border)]">
                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                        <td class="px-4 py-3">20 Mar</td>
                                        <td class="px-4 py-3 font-mono text-xs">REF-001</td>
                                        <td class="px-4 py-3">Sales Remittance</td>
                                        <td class="px-4 py-3">Peter K.</td>
                                        <td class="px-4 py-3 text-right font-bold text-green-600">45,000</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                        <td class="px-4 py-3">21 Mar</td>
                                        <td class="px-4 py-3 font-mono text-xs">REF-002</td>
                                        <td class="px-4 py-3">Sales Remittance</td>
                                        <td class="px-4 py-3">Moses M.</td>
                                        <td class="px-4 py-3 text-right font-bold text-green-600">38,000</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                        <td class="px-4 py-3">22 Mar</td>
                                        <td class="px-4 py-3 font-mono text-xs">REF-003</td>
                                        <td class="px-4 py-3">Sales Remittance</td>
                                        <td class="px-4 py-3">Aisha J.</td>
                                        <td class="px-4 py-3 text-right font-bold text-green-600">52,000</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                        <td class="px-4 py-3">23 Mar</td>
                                        <td class="px-4 py-3 font-mono text-xs">REF-004</td>
                                        <td class="px-4 py-3">Overdue Collection</td>
                                        <td class="px-4 py-3">Shop Mwisho</td>
                                        <td class="px-4 py-3 text-right font-bold text-green-600">12,500</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                        <td class="px-4 py-3">24 Mar</td>
                                        <td class="px-4 py-3 font-mono text-xs">REF-005</td>
                                        <td class="px-4 py-3">Sales Remittance</td>
                                        <td class="px-4 py-3">Peter K.</td>
                                        <td class="px-4 py-3 text-right font-bold text-green-600">68,000</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                        <td class="px-4 py-3">25 Mar</td>
                                        <td class="px-4 py-3 font-mono text-xs">REF-006</td>
                                        <td class="px-4 py-3">Sales Remittance</td>
                                        <td class="px-4 py-3">Moses M.</td>
                                        <td class="px-4 py-3 text-right font-bold text-green-600">69,000</td>
                                    </tr>
                                </tbody>
                                <tfoot class="bg-slate-50 dark:bg-slate-900 font-black border-t-2 border-[var(--color-border)]">
                                    <tr>
                                        <td colspan="4" class="px-4 py-3 text-right uppercase tracking-tighter text-slate-500">Total In</td>
                                        <td class="px-4 py-3 text-right text-green-600">KSh 284,500</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <!-- Money Out Table -->
                    <div class="bg-[var(--color-surface)] rounded-2xl border border-[var(--color-border)] shadow-sm overflow-hidden flex flex-col">
                        <div class="p-4 border-b border-[var(--color-border)] bg-red-50/50 dark:bg-red-900/10">
                            <h3 class="text-sm font-bold text-red-700 dark:text-red-400 uppercase tracking-widest">Money Out (Payments)</h3>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-sm border-collapse">
                                <thead class="text-[10px] font-bold uppercase text-slate-400 border-b border-[var(--color-border)]">
                                    <tr>
                                        <th class="px-4 py-3">Date</th>
                                        <th class="px-4 py-3">Ref</th>
                                        <th class="px-4 py-3">Description</th>
                                        <th class="px-4 py-3">Payee</th>
                                        <th class="px-4 py-3 text-right">Amount</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-[var(--color-border)]">
                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                        <td class="px-4 py-3">20 Mar</td>
                                        <td class="px-4 py-3 font-mono text-xs">VOUCH-01</td>
                                        <td class="px-4 py-3">Fuel Top-up</td>
                                        <td class="px-4 py-3">Shell Station</td>
                                        <td class="px-4 py-3 text-right font-bold text-red-500">5,000</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                        <td class="px-4 py-3">21 Mar</td>
                                        <td class="px-4 py-3 font-mono text-xs">VOUCH-02</td>
                                        <td class="px-4 py-3">Supplier Payment</td>
                                        <td class="px-4 py-3">Unga Group</td>
                                        <td class="px-4 py-3 text-right font-bold text-red-500">150,000</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                        <td class="px-4 py-3">22 Mar</td>
                                        <td class="px-4 py-3 font-mono text-xs">VOUCH-03</td>
                                        <td class="px-4 py-3">Warehouse Rent</td>
                                        <td class="px-4 py-3">Property Ltd</td>
                                        <td class="px-4 py-3 text-right font-bold text-red-500">25,000</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                        <td class="px-4 py-3">23 Mar</td>
                                        <td class="px-4 py-3 font-mono text-xs">VOUCH-04</td>
                                        <td class="px-4 py-3">Office Supplies</td>
                                        <td class="px-4 py-3">Stationery Inc</td>
                                        <td class="px-4 py-3 text-right font-bold text-red-500">3,150</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                        <td class="px-4 py-3">24 Mar</td>
                                        <td class="px-4 py-3 font-mono text-xs">VOUCH-05</td>
                                        <td class="px-4 py-3">Maintenance</td>
                                        <td class="px-4 py-3">Garage X</td>
                                        <td class="px-4 py-3 text-right font-bold text-red-500">12,000</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                        <td class="px-4 py-3">25 Mar</td>
                                        <td class="px-4 py-3 font-mono text-xs">VOUCH-06</td>
                                        <td class="px-4 py-3">Electricity</td>
                                        <td class="px-4 py-3">Utility Co</td>
                                        <td class="px-4 py-3 text-right font-bold text-red-500">3,000</td>
                                    </tr>
                                </tbody>
                                <tfoot class="bg-slate-50 dark:bg-slate-900 font-black border-t-2 border-[var(--color-border)]">
                                    <tr>
                                        <td colspan="4" class="px-4 py-3 text-right uppercase tracking-tighter text-slate-500">Total Out</td>
                                        <td class="px-4 py-3 text-right text-red-500">KSh 198,150</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Net Cash Position Card -->
                <div class="bg-primary/5 dark:bg-primary/10 border border-primary/20 rounded-2xl p-6 flex flex-col md:flex-row items-center justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.407 2.67 1a2.4 2.4 0 010 4.01C14.08 15.593 13.11 16 12 16M12 8V7m0 1V8m0 8v1m0-1V16m-6-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-primary uppercase tracking-widest">Net Cash Position</h4>
                            <p class="text-xs text-slate-500 font-medium">Calculation: Opening Bal + Total In - Total Out</p>
                        </div>
                    </div>
                    <div class="text-center md:text-right">
                        <span class="text-[11px] font-bold text-slate-400 uppercase">KSh 50,000 + 284,500 - 198,150 =</span>
                        <h2 class="text-3xl font-black text-primary">KSh 136,350</h2>
                    </div>
                </div>
            </div>

            <!-- EXPENSES TAB -->
            <div id="expenses" class="tab-pane hidden space-y-6">
                <div class="flex items-center justify-between">
                    <div class="flex flex-wrap gap-2">
                        <button class="px-4 py-1.5 rounded-full bg-primary text-white text-xs font-bold">All</button>
                        <button class="px-4 py-1.5 rounded-full bg-white dark:bg-slate-800 border border-[var(--color-border)] text-xs font-bold text-slate-500">Fuel</button>
                        <button class="px-4 py-1.5 rounded-full bg-white dark:bg-slate-800 border border-[var(--color-border)] text-xs font-bold text-slate-500">Staff</button>
                        <button class="px-4 py-1.5 rounded-full bg-white dark:bg-slate-800 border border-[var(--color-border)] text-xs font-bold text-slate-500">Utilities</button>
                        <button class="px-4 py-1.5 rounded-full bg-white dark:bg-slate-800 border border-[var(--color-border)] text-xs font-bold text-slate-500">Maintenance</button>
                    </div>
                    <button class="text-primary font-bold text-sm hover:underline">Record Expense</button>
                </div>

                <div class="bg-[var(--color-surface)] rounded-2xl border border-[var(--color-border)] shadow-sm overflow-hidden">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-slate-50 dark:bg-slate-900/50 text-[10px] font-bold uppercase text-slate-500 border-b">
                            <tr>
                                <th class="px-6 py-4">Date</th>
                                <th class="px-6 py-4">Category</th>
                                <th class="px-6 py-4">Description</th>
                                <th class="px-6 py-4">Amount</th>
                                <th class="px-6 py-4">Recorded By</th>
                                <th class="px-6 py-4">Receipt #</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[var(--color-border)]">
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                <td class="px-6 py-4">20 Mar</td>
                                <td class="px-6 py-4"><span class="px-2 py-0.5 bg-blue-100 text-blue-700 rounded text-[10px] font-bold">Fuel</span></td>
                                <td class="px-6 py-4">Truck KCA 123 - Delivery Run</td>
                                <td class="px-6 py-4 font-bold text-red-500">5,000</td>
                                <td class="px-6 py-4">Admin</td>
                                <td class="px-6 py-4 font-mono text-xs">RCP-901</td>
                            </tr>
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                <td class="px-6 py-4">21 Mar</td>
                                <td class="px-6 py-4"><span class="px-2 py-0.5 bg-purple-100 text-purple-700 rounded text-[10px] font-bold">Packaging</span></td>
                                <td class="px-6 py-4">Crates Purchase</td>
                                <td class="px-6 py-4 font-bold text-red-500">15,000</td>
                                <td class="px-6 py-4">Store Mgr</td>
                                <td class="px-6 py-4 font-mono text-xs">RCP-902</td>
                            </tr>
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                <td class="px-6 py-4">22 Mar</td>
                                <td class="px-6 py-4"><span class="px-2 py-0.5 bg-orange-100 text-orange-700 rounded text-[10px] font-bold">Staff</span></td>
                                <td class="px-6 py-4">Lunch Allowance</td>
                                <td class="px-6 py-4 font-bold text-red-500">2,500</td>
                                <td class="px-6 py-4">HR</td>
                                <td class="px-6 py-4 font-mono text-xs">RCP-903</td>
                            </tr>
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                <td class="px-6 py-4">23 Mar</td>
                                <td class="px-6 py-4"><span class="px-2 py-0.5 bg-yellow-100 text-yellow-700 rounded text-[10px] font-bold">Utilities</span></td>
                                <td class="px-6 py-4">Internet Bill</td>
                                <td class="px-6 py-4 font-bold text-red-500">4,000</td>
                                <td class="px-6 py-4">Admin</td>
                                <td class="px-6 py-4 font-mono text-xs">RCP-904</td>
                            </tr>
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                <td class="px-6 py-4">24 Mar</td>
                                <td class="px-6 py-4"><span class="px-2 py-0.5 bg-cyan-100 text-cyan-700 rounded text-[10px] font-bold">Maint</span></td>
                                <td class="px-6 py-4">Oil Change</td>
                                <td class="px-6 py-4 font-bold text-red-500">8,500</td>
                                <td class="px-6 py-4">Fleet Mgr</td>
                                <td class="px-6 py-4 font-mono text-xs">RCP-905</td>
                            </tr>
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                <td class="px-6 py-4">25 Mar</td>
                                <td class="px-6 py-4"><span class="px-2 py-0.5 bg-slate-100 text-slate-700 rounded text-[10px] font-bold">Other</span></td>
                                <td class="px-6 py-4">Cleaning Supplies</td>
                                <td class="px-6 py-4 font-bold text-red-500">1,200</td>
                                <td class="px-6 py-4">Admin</td>
                                <td class="px-6 py-4 font-mono text-xs">RCP-906</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ACCOUNTS PAYABLE TAB -->
            <div id="payable" class="tab-pane hidden space-y-6">
                <div class="bg-[var(--color-surface)] rounded-2xl border border-[var(--color-border)] shadow-sm overflow-hidden">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-slate-50 dark:bg-slate-900/50 text-[10px] font-bold uppercase text-slate-500 border-b">
                            <tr>
                                <th class="px-6 py-4">Supplier</th>
                                <th class="px-6 py-4">Invoice #</th>
                                <th class="px-6 py-4">Date</th>
                                <th class="px-6 py-4">Total</th>
                                <th class="px-6 py-4">Paid</th>
                                <th class="px-6 py-4">Balance</th>
                                <th class="px-6 py-4">Due Date</th>
                                <th class="px-6 py-4">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[var(--color-border)]">
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                <td class="px-6 py-4 font-bold">Unga Group</td>
                                <td class="px-6 py-4 font-mono text-xs">INV-882</td>
                                <td class="px-6 py-4">10 Mar</td>
                                <td class="px-6 py-4">200,000</td>
                                <td class="px-6 py-4 text-green-600">150,000</td>
                                <td class="px-6 py-4 font-bold text-red-500">50,000</td>
                                <td class="px-6 py-4">25 Mar</td>
                                <td class="px-6 py-4"><span class="px-2 py-1 bg-red-100 text-red-700 rounded-full text-[10px] font-black uppercase">Overdue</span></td>
                            </tr>
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                <td class="px-6 py-4 font-bold">Bidco Africa</td>
                                <td class="px-6 py-4 font-mono text-xs">INV-910</td>
                                <td class="px-6 py-4">15 Mar</td>
                                <td class="px-6 py-4">90,000</td>
                                <td class="px-6 py-4 text-green-600">90,000</td>
                                <td class="px-6 py-4 font-bold text-slate-400">0</td>
                                <td class="px-6 py-4">30 Mar</td>
                                <td class="px-6 py-4"><span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-[10px] font-black uppercase">Current</span></td>
                            </tr>
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                <td class="px-6 py-4 font-bold">Brookside</td>
                                <td class="px-6 py-4 font-mono text-xs">INV-442</td>
                                <td class="px-6 py-4">20 Mar</td>
                                <td class="px-6 py-4">15,000</td>
                                <td class="px-6 py-4 text-green-600">0</td>
                                <td class="px-6 py-4 font-bold text-red-500">15,000</td>
                                <td class="px-6 py-4">27 Mar</td>
                                <td class="px-6 py-4"><span class="px-2 py-1 bg-amber-100 text-amber-700 rounded-full text-[10px] font-black uppercase">Due Soon</span></td>
                            </tr>
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30">
                                <td class="px-6 py-4 font-bold">Kapa Oil</td>
                                <td class="px-6 py-4 font-mono text-xs">INV-331</td>
                                <td class="px-6 py-4">24 Mar</td>
                                <td class="px-6 py-4">45,000</td>
                                <td class="px-6 py-4 text-green-600">20,000</td>
                                <td class="px-6 py-4 font-bold text-red-500">25,000</td>
                                <td class="px-6 py-4">05 Apr</td>
                                <td class="px-6 py-4"><span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-[10px] font-black uppercase">Current</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- PLACEHOLDERS FOR REMAINING TABS -->
            <div id="receivable" class="tab-pane hidden p-12 text-center text-slate-400">Accounts Receivable module loading...</div>
            <div id="summary" class="tab-pane hidden p-12 text-center text-slate-400">Financial Summary charts loading...</div>

        </div>
    </main>
</div>

<script>
    (function() {
        'use strict';

        const initTabs = () => {
            const tabContainer = document.getElementById('accounting-tabs');
            if (!tabContainer) return;

            const buttons = tabContainer.querySelectorAll('.tab-btn');
            const panes = document.querySelectorAll('.tab-pane');

            tabContainer.addEventListener('click', (e) => {
                const targetBtn = e.target.closest('.tab-btn');
                if (!targetBtn) return;

                const targetId = targetBtn.getAttribute('data-target');

                // Update Button Styles
                buttons.forEach(btn => {
                    btn.classList.remove('border-primary', 'text-primary');
                    btn.classList.add('border-transparent', 'text-slate-500');
                });
                targetBtn.classList.add('border-primary', 'text-primary');
                targetBtn.classList.remove('border-transparent', 'text-slate-500');

                // Toggle Panes
                panes.forEach(pane => {
                    if (pane.id === targetId) {
                        pane.classList.remove('hidden');
                    } else {
                        pane.classList.add('hidden');
                    }
                });
            });
        };

        document.addEventListener('DOMContentLoaded', initTabs);
    })();
</script>
</body>
</html>