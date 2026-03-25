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
    <main class="flex-1 overflow-y-auto p-6 space-y-8">
        
        <!-- PAGE HEADER -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold tracking-tight" style="color: var(--color-text);">Stock Management</h1>
                <nav class="flex items-center gap-1 text-xs text-slate-500 font-medium mt-1">
                    <span>Home</span>
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span class="text-slate-400">Stock Management</span>
                </nav>
            </div>
            <div class="flex items-center gap-3">
                <button class="px-5 py-2.5 border border-[var(--color-border)] rounded-xl text-sm font-semibold hover:bg-slate-50 dark:hover:bg-slate-800 transition-all" style="color: var(--color-text);">
                    Record Adjustment
                </button>
                <button id="open-dispatch-drawer" class="inline-flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-5 py-2.5 rounded-xl font-semibold transition-all shadow-lg shadow-primary/20">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                    Dispatch Stock
                </button>
            </div>
        </div>

        <!-- SECTION 1: STOCK OVERVIEW CARDS -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Card 1 -->
            <div class="bg-[var(--color-surface)] p-5 rounded-2xl border border-[var(--color-border)] shadow-sm space-y-4">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-sm" style="color: var(--color-text);">Cooking Oil 5L</h3>
                        <p class="text-[10px] text-slate-500 uppercase font-bold tracking-wider">Oils</p>
                    </div>
                    <span class="p-1.5 bg-green-500/10 text-green-600 rounded-lg">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </span>
                </div>
                <div>
                    <p class="text-2xl font-black text-primary">1,240 <span class="text-xs font-normal text-slate-400">units</span></p>
                    <div class="w-full bg-slate-100 dark:bg-slate-800 h-1.5 rounded-full mt-2 overflow-hidden">
                        <div class="bg-green-500 h-full w-[80%]"></div>
                    </div>
                    <p class="text-[10px] text-slate-500 mt-2">Reorder level: <span class="font-bold">200 units</span></p>
                </div>
                <div class="flex gap-2 pt-2">
                    <span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 rounded text-[10px] font-bold text-slate-600 dark:text-slate-400">In Transit: 80</span>
                    <span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 rounded text-[10px] font-bold text-slate-600 dark:text-slate-400">Dispatched: 320</span>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-[var(--color-surface)] p-5 rounded-2xl border border-[var(--color-border)] shadow-sm space-y-4">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-sm" style="color: var(--color-text);">Maize Flour 2kg</h3>
                        <p class="text-[10px] text-slate-500 uppercase font-bold tracking-wider">Grains</p>
                    </div>
                    <span class="p-1.5 bg-amber-500/10 text-amber-600 rounded-lg">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    </span>
                </div>
                <div>
                    <p class="text-2xl font-black text-primary">340 <span class="text-xs font-normal text-slate-400">units</span></p>
                    <div class="w-full bg-slate-100 dark:bg-slate-800 h-1.5 rounded-full mt-2 overflow-hidden">
                        <div class="bg-amber-500 h-full w-[35%]"></div>
                    </div>
                    <p class="text-[10px] text-slate-500 mt-2">Reorder level: <span class="font-bold">150 units</span></p>
                </div>
                <div class="flex gap-2 pt-2">
                    <span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 rounded text-[10px] font-bold text-slate-600 dark:text-slate-400">In Transit: 0</span>
                    <span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 rounded text-[10px] font-bold text-slate-600 dark:text-slate-400">Dispatched: 140</span>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-[var(--color-surface)] p-5 rounded-2xl border border-[var(--color-border)] shadow-sm space-y-4">
                <div class="flex justify-between items-start border-l-4 border-red-500 -ml-5 pl-4">
                    <div>
                        <h3 class="font-semibold text-sm" style="color: var(--color-text);">Sugar 2kg</h3>
                        <p class="text-[10px] text-slate-500 uppercase font-bold tracking-wider">Dry Goods</p>
                    </div>
                    <span class="p-1.5 bg-red-500/10 text-red-600 rounded-lg">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                </div>
                <div>
                    <p class="text-2xl font-black text-red-600">89 <span class="text-xs font-normal text-slate-400">units</span></p>
                    <div class="w-full bg-slate-100 dark:bg-slate-800 h-1.5 rounded-full mt-2 overflow-hidden">
                        <div class="bg-red-500 h-full w-[15%]"></div>
                    </div>
                    <p class="text-[10px] text-red-500 mt-2 font-bold uppercase tracking-tighter">Low Stock Alert</p>
                </div>
                <div class="flex gap-2 pt-2">
                    <span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 rounded text-[10px] font-bold text-slate-600 dark:text-slate-400">In Transit: 200</span>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-[var(--color-surface)] p-5 rounded-2xl border border-[var(--color-border)] shadow-sm space-y-4">
                <div class="flex justify-between items-start border-l-4 border-red-600 -ml-5 pl-4">
                    <div>
                        <h3 class="font-semibold text-sm" style="color: var(--color-text);">Bread (Loaves)</h3>
                        <p class="text-[10px] text-slate-500 uppercase font-bold tracking-wider">Bakery</p>
                    </div>
                    <span class="p-1.5 bg-red-600/10 text-red-600 rounded-lg">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                </div>
                <div>
                    <p class="text-2xl font-black text-red-700">42 <span class="text-xs font-normal text-slate-400">units</span></p>
                    <div class="w-full bg-slate-100 dark:bg-slate-800 h-1.5 rounded-full mt-2 overflow-hidden">
                        <div class="bg-red-600 h-full w-[10%]"></div>
                    </div>
                    <p class="text-[10px] text-red-600 mt-2 font-bold uppercase">Critical Level</p>
                </div>
                <div class="flex gap-2 pt-2">
                    <span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 rounded text-[10px] font-bold text-slate-600 dark:text-slate-400">Dispatched: 250</span>
                </div>
            </div>
        </div>

        <!-- SECTION 2: STOCK DISPATCH LOG -->
        <div class="space-y-4">
            <h2 class="text-lg font-bold" style="color: var(--color-text);">Stock Dispatch Log</h2>
            <div class="bg-[var(--color-surface)] rounded-xl border border-[var(--color-border)] shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-sm">
                        <thead class="bg-slate-50 dark:bg-slate-900/50 text-[10px] font-bold uppercase tracking-wider text-slate-500 border-b border-[var(--color-border)]">
                            <tr>
                                <th class="px-6 py-4">#</th>
                                <th class="px-6 py-4">Date</th>
                                <th class="px-6 py-4">Driver</th>
                                <th class="px-6 py-4">Products Dispatched</th>
                                <th class="px-6 py-4 text-center">Qty Out</th>
                                <th class="px-6 py-4">Expected Return</th>
                                <th class="px-6 py-4 text-center">Returned Qty</th>
                                <th class="px-6 py-4 text-center">Variance</th>
                                <th class="px-6 py-4">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[var(--color-border)]">
                            <!-- Row 1 -->
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                                <td class="px-6 py-4 font-mono text-xs text-slate-400">001</td>
                                <td class="px-6 py-4 whitespace-nowrap">24 Mar</td>
                                <td class="px-6 py-4 font-semibold">Peter Kamau</td>
                                <td class="px-6 py-4 text-xs">Cooking Oil 5L</td>
                                <td class="px-6 py-4 text-center font-bold">50</td>
                                <td class="px-6 py-4">25 Mar</td>
                                <td class="px-6 py-4 text-center font-bold">50</td>
                                <td class="px-6 py-4 text-center font-bold text-green-600">0</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 rounded-full text-[10px] font-bold bg-green-100 text-green-800 dark:bg-green-900/20 dark:text-green-400">Returned</span>
                                </td>
                            </tr>
                            <!-- Row 2 -->
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                                <td class="px-6 py-4 font-mono text-xs text-slate-400">002</td>
                                <td class="px-6 py-4 whitespace-nowrap">25 Mar</td>
                                <td class="px-6 py-4 font-semibold">Moses Mwangi</td>
                                <td class="px-6 py-4 text-xs">Maize Flour 2kg</td>
                                <td class="px-6 py-4 text-center font-bold">100</td>
                                <td class="px-6 py-4">26 Mar</td>
                                <td class="px-6 py-4 text-center text-slate-300">—</td>
                                <td class="px-6 py-4 text-center text-slate-300">—</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 rounded-full text-[10px] font-bold bg-blue-100 text-blue-800 dark:bg-blue-900/20 dark:text-blue-400">Out</span>
                                </td>
                            </tr>
                            <!-- Row 3 -->
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                                <td class="px-6 py-4 font-mono text-xs text-slate-400">003</td>
                                <td class="px-6 py-4 whitespace-nowrap">23 Mar</td>
                                <td class="px-6 py-4 font-semibold">Aisha Juma</td>
                                <td class="px-6 py-4 text-xs">Sugar 2kg</td>
                                <td class="px-6 py-4 text-center font-bold">30</td>
                                <td class="px-6 py-4">24 Mar</td>
                                <td class="px-6 py-4 text-center font-bold">25</td>
                                <td class="px-6 py-4 text-center font-bold text-red-600">-5</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 rounded-full text-[10px] font-bold bg-red-100 text-red-800 dark:bg-red-900/20 dark:text-red-400">Variance</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- SECTION 3: STOCK ADJUSTMENTS -->
        <div class="space-y-4">
            <h2 class="text-lg font-bold" style="color: var(--color-text);">Stock Adjustments</h2>
            <div class="bg-[var(--color-surface)] rounded-xl border border-[var(--color-border)] shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-sm">
                        <thead class="bg-slate-50 dark:bg-slate-900/50 text-[10px] font-bold uppercase tracking-wider text-slate-500 border-b border-[var(--color-border)]">
                            <tr>
                                <th class="px-6 py-4">Date</th>
                                <th class="px-6 py-4">Product</th>
                                <th class="px-6 py-4">Adjusted By</th>
                                <th class="px-6 py-4 text-center">Previous Qty</th>
                                <th class="px-6 py-4 text-center">New Qty</th>
                                <th class="px-6 py-4">Reason</th>
                                <th class="px-6 py-4">Approved By</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[var(--color-border)]">
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                                <td class="px-6 py-4">24 Mar</td>
                                <td class="px-6 py-4 font-semibold">Bread (Loaves)</td>
                                <td class="px-6 py-4">John Doe</td>
                                <td class="px-6 py-4 text-center text-slate-500">50</td>
                                <td class="px-6 py-4 text-center font-bold text-red-500">42</td>
                                <td class="px-6 py-4 text-xs italic">Damage write-off</td>
                                <td class="px-6 py-4 font-medium">Admin</td>
                            </tr>
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                                <td class="px-6 py-4">22 Mar</td>
                                <td class="px-6 py-4 font-semibold">Rice 5kg</td>
                                <td class="px-6 py-4">John Doe</td>
                                <td class="px-6 py-4 text-center text-slate-500">500</td>
                                <td class="px-6 py-4 text-center font-bold text-green-600">520</td>
                                <td class="px-6 py-4 text-xs italic">Recount correction</td>
                                <td class="px-6 py-4 font-medium">Admin</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- DISPATCH STOCK DRAWER -->
<div id="drawer-overlay-dispatch" class="fixed inset-0 bg-black/40 z-[60] hidden backdrop-blur-sm transition-opacity"></div>

<div id="dispatch-drawer" class="fixed right-0 top-0 h-screen w-full max-w-md bg-[var(--color-surface)] shadow-2xl z-[70] translate-x-full transition-transform duration-300 ease-in-out border-l border-[var(--color-border)] flex flex-col">
    <div class="p-6 border-b border-[var(--color-border)] flex items-center justify-between">
        <div>
            <h2 class="text-xl font-bold" style="color: var(--color-text);">Dispatch Stock</h2>
            <p class="text-xs text-slate-500 mt-0.5">Assign stock to driver for delivery</p>
        </div>
        <button id="close-dispatch-drawer" class="p-2 hover:bg-red-50 hover:text-red-500 rounded-lg transition-colors text-slate-400">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </div>

    <form class="flex-1 overflow-y-auto p-6 space-y-6">
        <div class="space-y-1.5">
            <label class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Select Driver</label>
            <select class="w-full bg-slate-50 dark:bg-slate-900 border border-[var(--color-border)] rounded-xl py-2.5 px-4 text-sm outline-none focus:ring-4 focus:ring-primary/10 transition-all">
                <option>Peter Kamau</option>
                <option>Moses Mwangi</option>
                <option>Aisha Juma</option>
            </select>
        </div>

        <!-- Product Dispatch Items -->
        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-bold uppercase tracking-widest text-primary">Products to Dispatch</h3>
                <button type="button" id="add-dispatch-row" class="text-xs font-bold text-accent hover:underline">+ Add Product</button>
            </div>
            
            <div id="dispatch-list" class="space-y-4">
                <!-- Row Template -->
                <div class="dispatch-row grid grid-cols-12 gap-3 items-end p-4 bg-slate-50 dark:bg-slate-900/50 rounded-xl border border-slate-100 dark:border-slate-800 relative group">
                    <div class="col-span-12 sm:col-span-7 space-y-1">
                        <label class="text-[10px] font-bold uppercase text-slate-400">Product</label>
                        <select class="product-select w-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-lg py-1.5 px-3 text-xs outline-none">
                            <option value="">Select Product</option>
                            <option value="Cooking Oil 5L">Cooking Oil 5L</option>
                            <option value="Maize Flour 2kg">Maize Flour 2kg</option>
                            <option value="Sugar 2kg">Sugar 2kg</option>
                            <option value="Rice 5kg">Rice 5kg</option>
                            <option value="Bread (Loaves)">Bread (Loaves)</option>
                        </select>
                    </div>
                    <div class="col-span-6 sm:col-span-3 space-y-1">
                        <label class="text-[10px] font-bold uppercase text-slate-400">Qty</label>
                        <input type="number" value="0" class="qty-input w-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-lg py-1.5 px-3 text-xs outline-none">
                    </div>
                    <div class="col-span-6 sm:col-span-2 text-right">
                        <p class="text-[9px] font-bold uppercase text-slate-400 mb-1">Available</p>
                        <span class="stock-display font-bold text-slate-500 text-xs">—</span>
                    </div>
                    <button type="button" class="remove-row absolute -top-2 -right-2 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity shadow-lg">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div class="space-y-1.5">
                <label class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Dispatch Date</label>
                <input type="date" value="2026-03-25" class="w-full bg-slate-50 dark:bg-slate-900 border border-[var(--color-border)] rounded-xl py-2.5 px-4 text-sm outline-none">
            </div>
            <div class="space-y-1.5">
                <label class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Expected Return</label>
                <input type="date" value="2026-03-26" class="w-full bg-slate-50 dark:bg-slate-900 border border-[var(--color-border)] rounded-xl py-2.5 px-4 text-sm outline-none">
            </div>
        </div>

        <div class="space-y-1.5">
            <label class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Notes</label>
            <textarea rows="3" placeholder="Add dispatch instructions..." class="w-full bg-slate-50 dark:bg-slate-900 border border-[var(--color-border)] rounded-xl py-2.5 px-4 text-sm outline-none"></textarea>
        </div>
    </form>

    <div class="p-6 border-t border-[var(--color-border)] bg-slate-50/50 dark:bg-slate-900/30">
        <button type="button" class="w-full py-3 bg-primary text-white rounded-xl font-bold hover:bg-primary/90 transition-all shadow-lg shadow-primary/25">Confirm Dispatch</button>
    </div>
</div>

<script>
    (function() {
        'use strict';

        const drawer = document.getElementById('dispatch-drawer');
        const overlay = document.getElementById('drawer-overlay-dispatch');
        const openBtn = document.getElementById('open-dispatch-drawer');
        const closeBtn = document.getElementById('close-dispatch-drawer');
        const dispatchList = document.getElementById('dispatch-list');
        const addRowBtn = document.getElementById('add-dispatch-row');

        // Dummy stock levels
        const stockLevels = {
            "Cooking Oil 5L": 1240,
            "Maize Flour 2kg": 340,
            "Sugar 2kg": 89,
            "Rice 5kg": 520,
            "Bread (Loaves)": 42
        };

        // Drawer Controls
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
        [closeBtn, overlay].forEach(el => el.addEventListener('click', () => toggleDrawer(false)));

        // Handle product selection (Auto-fill stock)
        dispatchList.addEventListener('change', (e) => {
            if (e.target.classList.contains('product-select')) {
                const row = e.target.closest('.dispatch-row');
                const display = row.querySelector('.stock-display');
                const value = e.target.value;
                display.textContent = stockLevels[value] || '—';
            }
        });

        // Add Row Management
        addRowBtn.addEventListener('click', () => {
            const firstRow = dispatchList.querySelector('.dispatch-row');
            const template = firstRow.cloneNode(true);
            template.querySelector('.product-select').selectedIndex = 0;
            template.querySelector('.qty-input').value = 0;
            template.querySelector('.stock-display').textContent = '—';
            
            // Remove Listener for new row
            template.querySelector('.remove-row').addEventListener('click', function() {
                if (dispatchList.children.length > 1) this.closest('.dispatch-row').remove();
            });

            dispatchList.appendChild(template);
        });

        // Remove Listener for initial row
        dispatchList.querySelector('.remove-row').addEventListener('click', function() {
            if (dispatchList.children.length > 1) this.closest('.dispatch-row').remove();
        });

    })();
</script>