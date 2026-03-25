<!-- 
  Note: This file is intended to be rendered within the main.php layout. 
  It includes placeholders for sidebar and topbar partials as requested.
-->

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
                <h1 class="text-2xl font-bold tracking-tight" style="color: var(--color-text);">Sales Management</h1>
                <nav class="flex items-center gap-1 text-xs text-slate-500 font-medium mt-1">
                    <span>Home</span>
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span class="text-slate-400">Sales</span>
                </nav>
            </div>
            <button id="open-sale-drawer" class="inline-flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-5 py-2.5 rounded-xl font-semibold transition-all shadow-lg shadow-primary/20">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                Record Sale
            </button>
        </div>

        <!-- KPI CHIPS -->
        <div class="flex flex-wrap gap-3">
            <div class="flex items-center gap-3 px-4 py-2 bg-[var(--color-surface)] border border-[var(--color-border)] rounded-full shadow-sm">
                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-500">Today's Sales</span>
                <span class="text-sm font-bold text-primary">KSh 142,300</span>
            </div>
            <div class="flex items-center gap-3 px-4 py-2 bg-[var(--color-surface)] border border-[var(--color-border)] rounded-full shadow-sm">
                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-500">Transactions</span>
                <span class="text-sm font-bold" style="color: var(--color-text);">48</span>
            </div>
            <div class="flex items-center gap-3 px-4 py-2 bg-[var(--color-surface)] border border-[var(--color-border)] rounded-full shadow-sm">
                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-500">Avg Order</span>
                <span class="text-sm font-bold" style="color: var(--color-text);">KSh 2,965</span>
            </div>
            <div class="flex items-center gap-3 px-4 py-2 bg-[var(--color-surface)] border border-[var(--color-border)] rounded-full shadow-sm">
                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-500">Top Driver</span>
                <div class="flex items-center gap-2">
                    <div class="w-5 h-5 rounded-full bg-accent text-[10px] flex items-center justify-center text-white font-bold">PK</div>
                    <span class="text-sm font-bold" style="color: var(--color-text);">Peter K.</span>
                </div>
            </div>
        </div>

        <!-- FILTER BAR -->
        <div class="sticky top-0 z-20 -mx-6 px-6 py-3 border-y flex flex-wrap items-center gap-4 transition-colors" style="background-color: var(--color-surface); border-color: var(--color-border);">
            <div class="flex items-center gap-2">
                <input type="date" class="bg-white dark:bg-slate-900 border border-[var(--color-border)] rounded-lg px-3 py-1.5 text-xs outline-none focus:ring-2 focus:ring-primary/20">
                <span class="text-slate-400">→</span>
                <input type="date" class="bg-white dark:bg-slate-900 border border-[var(--color-border)] rounded-lg px-3 py-1.5 text-xs outline-none focus:ring-2 focus:ring-primary/20">
            </div>
            
            <select class="bg-white dark:bg-slate-900 border border-[var(--color-border)] rounded-lg px-3 py-1.5 text-xs outline-none focus:ring-2 focus:ring-primary/20 min-w-[140px]">
                <option>All Drivers</option>
                <option>Peter Kamau</option>
                <option>Moses Mwangi</option>
                <option>Aisha Juma</option>
            </select>

            <div class="h-6 w-px bg-slate-200 dark:bg-slate-700"></div>

            <div class="flex items-center gap-1">
                <button class="px-3 py-1.5 rounded-lg text-xs font-bold bg-primary text-white">All</button>
                <button class="px-3 py-1.5 rounded-lg text-xs font-bold text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">Pending</button>
                <button class="px-3 py-1.5 rounded-lg text-xs font-bold text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">Reconciled</button>
                <button class="px-3 py-1.5 rounded-lg text-xs font-bold text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">Disputed</button>
            </div>

            <div class="ml-auto flex items-center gap-3">
                <button class="flex items-center gap-2 px-3 py-1.5 border border-[var(--color-border)] rounded-lg text-xs font-bold hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                    Export CSV
                </button>
                <button class="text-xs font-bold text-slate-400 hover:text-red-500 transition-colors">Clear Filters</button>
            </div>
        </div>

        <!-- SALES TABLE -->
        <div class="bg-[var(--color-surface)] rounded-xl border border-[var(--color-border)] shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-slate-50 dark:bg-slate-900/50 text-[10px] font-bold uppercase tracking-wider text-slate-500 border-b border-[var(--color-border)]">
                        <tr>
                            <th class="px-6 py-4"># <span class="ml-1 opacity-30">↕</span></th>
                            <th class="px-6 py-4">Date/Time <span class="ml-1 opacity-30">↕</span></th>
                            <th class="px-6 py-4">Driver <span class="ml-1 opacity-30">↕</span></th>
                            <th class="px-6 py-4">Customer <span class="ml-1 opacity-30">↕</span></th>
                            <th class="px-6 py-4">Phone</th>
                            <th class="px-6 py-4">Products</th>
                            <th class="px-6 py-4 text-center">Qty</th>
                            <th class="px-6 py-4 text-right">Price</th>
                            <th class="px-6 py-4 text-right">Total</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[var(--color-border)] text-sm">
                        <!-- Row 1 -->
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 font-mono text-xs text-slate-400">001</td>
                            <td class="px-6 py-4 whitespace-nowrap">25 Mar 09:14</td>
                            <td class="px-6 py-4 font-semibold">Peter Kamau</td>
                            <td class="px-6 py-4">Jane Wanjiru</td>
                            <td class="px-6 py-4 text-slate-500">0712 345 678</td>
                            <td class="px-6 py-4 truncate max-w-[150px]">Cooking Oil 5L</td>
                            <td class="px-6 py-4 text-center font-medium">6</td>
                            <td class="px-6 py-4 text-right">300</td>
                            <td class="px-6 py-4 text-right font-bold text-primary">1,800</td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 rounded-full text-[10px] font-bold bg-green-100 text-green-800 dark:bg-green-900/20 dark:text-green-400">Reconciled</span>
                            </td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <button class="p-1.5 hover:bg-primary/10 rounded-lg text-primary transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></button>
                                <button class="p-1.5 hover:bg-slate-200 dark:hover:bg-slate-700 rounded-lg text-slate-500 transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg></button>
                            </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="bg-slate-50/30 dark:bg-slate-900/20 hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 font-mono text-xs text-slate-400">002</td>
                            <td class="px-6 py-4 whitespace-nowrap">25 Mar 09:31</td>
                            <td class="px-6 py-4 font-semibold">Moses Mwangi</td>
                            <td class="px-6 py-4">Shop Mwisho</td>
                            <td class="px-6 py-4 text-slate-500">0723 456 789</td>
                            <td class="px-6 py-4 truncate max-w-[150px]">Maize Flour 2kg</td>
                            <td class="px-6 py-4 text-center font-medium">12</td>
                            <td class="px-6 py-4 text-right">200</td>
                            <td class="px-6 py-4 text-right font-bold text-primary">2,400</td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 rounded-full text-[10px] font-bold bg-amber-100 text-amber-800 dark:bg-amber-900/20 dark:text-amber-400">Pending</span>
                            </td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <button class="p-1.5 hover:bg-primary/10 rounded-lg text-primary transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></button>
                                <button class="p-1.5 hover:bg-slate-200 dark:hover:bg-slate-700 rounded-lg text-slate-500 transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg></button>
                            </td>
                        </tr>
                        <!-- [Repeat for 10 rows total with varied data] -->
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 font-mono text-xs text-slate-400">003</td>
                            <td class="px-6 py-4">25 Mar 10:05</td>
                            <td class="px-6 py-4 font-semibold">Aisha Juma</td>
                            <td class="px-6 py-4">Mama Sarah Store</td>
                            <td class="px-6 py-4 text-slate-500">0733 111 222</td>
                            <td class="px-6 py-4">Sugar 1kg</td>
                            <td class="px-6 py-4 text-center font-medium">20</td>
                            <td class="px-6 py-4 text-right">150</td>
                            <td class="px-6 py-4 text-right font-bold text-primary">3,000</td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 rounded-full text-[10px] font-bold bg-red-100 text-red-800 dark:bg-red-900/20 dark:text-red-400">Disputed</span>
                            </td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <button class="p-1.5 hover:bg-primary/10 rounded-lg text-primary transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></button>
                                <button class="p-1.5 hover:bg-slate-200 dark:hover:bg-slate-700 rounded-lg text-slate-500 transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg></button>
                            </td>
                        </tr>
                        <!-- [Additional rows would go here...] -->
                    </tbody>
                </table>
            </div>
            
            <!-- PAGINATION BAR -->
            <div class="px-6 py-4 flex flex-col sm:flex-row items-center justify-between gap-4 border-t border-[var(--color-border)] bg-slate-50/50 dark:bg-slate-900/30">
                <p class="text-xs text-slate-500">Showing <span class="font-bold text-slate-700 dark:text-slate-300">1–10</span> of 48 records</p>
                <div class="flex items-center gap-1">
                    <button class="p-2 rounded-lg border border-[var(--color-border)] text-slate-400 hover:text-primary transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg></button>
                    <button class="px-3.5 py-1.5 rounded-lg bg-primary text-white text-xs font-bold">1</button>
                    <button class="px-3.5 py-1.5 rounded-lg text-xs font-bold text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800">2</button>
                    <button class="px-3.5 py-1.5 rounded-lg text-xs font-bold text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800">3</button>
                    <span class="px-2 text-slate-300">...</span>
                    <button class="px-3.5 py-1.5 rounded-lg text-xs font-bold text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800">5</button>
                    <button class="p-2 rounded-lg border border-[var(--color-border)] text-slate-400 hover:text-primary transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></button>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- SLIDE-OVER DRAWER: Record New Sale -->
<div id="drawer-overlay" class="fixed inset-0 bg-black/40 z-[60] hidden backdrop-blur-sm transition-opacity"></div>

<div id="sale-drawer" class="fixed right-0 top-0 h-screen w-full max-w-md bg-[var(--color-surface)] shadow-2xl z-[70] translate-x-full transition-transform duration-300 ease-in-out border-l border-[var(--color-border)] flex flex-col">
    <!-- Drawer Header -->
    <div class="p-6 border-b border-[var(--color-border)] flex items-center justify-between">
        <div>
            <h2 class="text-xl font-bold" style="color: var(--color-text);">Record New Sale</h2>
            <p class="text-xs text-slate-500 mt-0.5">Enter transaction details below</p>
        </div>
        <button id="close-sale-drawer" class="p-2 hover:bg-red-50 hover:text-red-500 rounded-lg transition-colors text-slate-400">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </div>

    <!-- Drawer Body (Form) -->
    <form class="flex-1 overflow-y-auto p-6 space-y-6">
        <div class="grid grid-cols-2 gap-4">
            <div class="col-span-2 space-y-1.5">
                <label class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Select Driver</label>
                <select class="w-full bg-slate-50 dark:bg-slate-900 border border-[var(--color-border)] rounded-xl py-2.5 px-4 text-sm outline-none focus:ring-4 focus:ring-primary/10 transition-all">
                    <option>Peter Kamau</option>
                    <option>Moses Mwangi</option>
                    <option>Aisha Juma</option>
                </select>
            </div>
            <div class="space-y-1.5">
                <label class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Customer Name</label>
                <input type="text" placeholder="e.g. Jane Doe" class="w-full bg-slate-50 dark:bg-slate-900 border border-[var(--color-border)] rounded-xl py-2.5 px-4 text-sm outline-none focus:ring-4 focus:ring-primary/10 transition-all">
            </div>
            <div class="space-y-1.5">
                <label class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Phone Number</label>
                <input type="tel" placeholder="07XX XXX XXX" class="w-full bg-slate-50 dark:bg-slate-900 border border-[var(--color-border)] rounded-xl py-2.5 px-4 text-sm outline-none focus:ring-4 focus:ring-primary/10 transition-all">
            </div>
            <div class="col-span-2 space-y-1.5">
                <label class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Sale Date</label>
                <input type="date" value="2026-03-25" class="w-full bg-slate-50 dark:bg-slate-900 border border-[var(--color-border)] rounded-xl py-2.5 px-4 text-sm outline-none focus:ring-4 focus:ring-primary/10 transition-all">
            </div>
        </div>

        <!-- Products Section -->
        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-bold uppercase tracking-widest text-primary">Products Sold</h3>
                <button type="button" id="add-product-row" class="text-xs font-bold text-accent hover:underline">+ Add Product</button>
            </div>
            
            <div id="product-list" class="space-y-4">
                <!-- Product Row Template -->
                <div class="product-row grid grid-cols-12 gap-3 items-end p-4 bg-slate-50 dark:bg-slate-900/50 rounded-xl border border-slate-100 dark:border-slate-800 relative group">
                    <div class="col-span-7 space-y-1">
                        <label class="text-[10px] font-bold uppercase text-slate-400">Product</label>
                        <select class="product-select w-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-lg py-1.5 px-3 text-xs outline-none focus:ring-2 focus:ring-primary/20">
                            <option value="" data-price="0">Select Product</option>
                            <option value="Cooking Oil 5L" data-price="300">Cooking Oil 5L (KSh 300)</option>
                            <option value="Maize Flour 2kg" data-price="200">Maize Flour 2kg (KSh 200)</option>
                            <option value="Sugar 1kg" data-price="150">Sugar 1kg (KSh 150)</option>
                            <option value="Milk 500ml" data-price="60">Milk 500ml (KSh 60)</option>
                        </select>
                    </div>
                    <div class="col-span-3 space-y-1">
                        <label class="text-[10px] font-bold uppercase text-slate-400">Qty</label>
                        <input type="number" value="1" min="1" class="qty-input w-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-lg py-1.5 px-3 text-xs outline-none focus:ring-2 focus:ring-primary/20">
                    </div>
                    <div class="col-span-2 text-right pt-6">
                        <p class="text-[10px] font-bold uppercase text-slate-400 mb-1">Total</p>
                        <span class="line-total font-bold text-primary text-sm">0</span>
                    </div>
                    <button type="button" class="remove-row absolute -top-2 -right-2 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity shadow-lg">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="pt-6 border-t border-[var(--color-border)]">
            <div class="flex items-center justify-between mb-6">
                <span class="text-sm font-bold text-slate-500">Order Total</span>
                <span class="text-2xl font-black text-primary" id="order-total-display">KSh 0</span>
            </div>
            <div class="space-y-1.5 mb-6">
                <label class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Notes (Optional)</label>
                <textarea rows="3" placeholder="Add specific delivery instructions..." class="w-full bg-slate-50 dark:bg-slate-900 border border-[var(--color-border)] rounded-xl py-2.5 px-4 text-sm outline-none focus:ring-4 focus:ring-primary/10 transition-all"></textarea>
            </div>
        </div>
    </form>

    <!-- Drawer Footer -->
    <div class="p-6 border-t border-[var(--color-border)] grid grid-cols-2 gap-3 bg-slate-50/50 dark:bg-slate-900/30">
        <button type="button" id="cancel-sale" class="py-3 rounded-xl font-bold text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all">Cancel</button>
        <button type="button" class="py-3 bg-primary text-white rounded-xl font-bold hover:bg-primary/90 transition-all shadow-lg shadow-primary/25">Save Sale</button>
    </div>
</div>

<script>
    (function() {
        'use strict';

        const drawer = document.getElementById('sale-drawer');
        const overlay = document.getElementById('drawer-overlay');
        const openBtn = document.getElementById('open-sale-drawer');
        const closeBtn = document.getElementById('close-sale-drawer');
        const cancelBtn = document.getElementById('cancel-sale');
        const productList = document.getElementById('product-list');
        const addRowBtn = document.getElementById('add-product-row');
        const totalDisplay = document.getElementById('order-total-display');

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
        const calculateTotals = () => {
            let grandTotal = 0;
            const rows = productList.querySelectorAll('.product-row');

            rows.forEach(row => {
                const select = row.querySelector('.product-select');
                const qtyInput = row.querySelector('.qty-input');
                const lineSpan = row.querySelector('.line-total');

                const price = parseFloat(select.options[select.selectedIndex].dataset.price || 0);
                const qty = parseInt(qtyInput.value || 0);
                const lineTotal = price * qty;

                lineSpan.textContent = lineTotal.toLocaleString();
                grandTotal += lineTotal;
            });

            totalDisplay.textContent = `KSh ${grandTotal.toLocaleString()}`;
        };

        // Event Delegation for Inputs
        productList.addEventListener('input', (e) => {
            if (e.target.classList.contains('product-select') || e.target.classList.contains('qty-input')) {
                calculateTotals();
            }
        });

        // --- Row Management ---
        const addProductRow = () => {
            const template = productList.querySelector('.product-row').cloneNode(true);
            // Reset values
            template.querySelector('.product-select').selectedIndex = 0;
            template.querySelector('.qty-input').value = 1;
            template.querySelector('.line-total').textContent = '0';
            
            // Add remove listener
            template.querySelector('.remove-row').addEventListener('click', function() {
                if (productList.children.length > 1) {
                    this.closest('.product-row').remove();
                    calculateTotals();
                }
            });

            productList.appendChild(template);
            calculateTotals();
        };

        addRowBtn.addEventListener('click', addProductRow);

        // Initial Setup for first row remove button
        productList.querySelector('.remove-row').addEventListener('click', function() {
            if (productList.children.length > 1) {
                this.closest('.product-row').remove();
                calculateTotals();
            }
        });

    })();
</script>