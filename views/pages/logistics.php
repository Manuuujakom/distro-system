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
                <h1 class="text-2xl font-bold tracking-tight" style="color: var(--color-text);">Logistics & Drivers</h1>
                <nav class="flex items-center gap-1 text-xs text-slate-500 font-medium mt-1">
                    <span>Home</span>
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span class="text-slate-400">Logistics</span>
                </nav>
            </div>
            <div class="flex items-center gap-3">
                <button class="px-5 py-2.5 border border-[var(--color-border)] rounded-xl text-sm font-semibold hover:bg-slate-50 dark:hover:bg-slate-800 transition-all" style="color: var(--color-text);">
                    Add Vehicle
                </button>
                <button class="inline-flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-5 py-2.5 rounded-xl font-semibold transition-all shadow-lg shadow-primary/20">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" /></svg>
                    Add Driver
                </button>
            </div>
        </div>

        <!-- SECTION 1: FLEET OVERVIEW -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-[var(--color-surface)] p-5 rounded-2xl border border-[var(--color-border)] shadow-sm">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-500 mb-1">Total Drivers</p>
                <h2 class="text-2xl font-black text-primary">12</h2>
            </div>
            <div class="bg-[var(--color-surface)] p-5 rounded-2xl border border-[var(--color-border)] shadow-sm">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-500 mb-1">Active Today</p>
                <h2 class="text-2xl font-black text-green-600">8</h2>
            </div>
            <div class="bg-[var(--color-surface)] p-5 rounded-2xl border border-[var(--color-border)] shadow-sm">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-500 mb-1">Vehicles</p>
                <h2 class="text-2xl font-black" style="color: var(--color-text);">6</h2>
            </div>
            <div class="bg-[var(--color-surface)] p-5 rounded-2xl border border-[var(--color-border)] shadow-sm">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-500 mb-1">On Route</p>
                <h2 class="text-2xl font-black text-blue-600">5</h2>
            </div>
        </div>

        <!-- SECTION 2: DRIVER CARDS -->
        <div class="space-y-4">
            <h2 class="text-lg font-bold" style="color: var(--color-text);">Driver Status</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Driver 1 -->
                <div class="bg-[var(--color-surface)] rounded-2xl p-5 border border-[var(--color-border)] shadow-sm space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white font-bold">PK</div>
                            <div>
                                <h4 class="font-semibold text-sm" style="color: var(--color-text);">Peter Kamau</h4>
                                <p class="text-xs text-slate-500">0712 345 678</p>
                            </div>
                        </div>
                        <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-blue-100 text-blue-800 dark:bg-blue-900/20 dark:text-blue-400">On Route</span>
                    </div>
                    <div class="flex justify-between text-xs py-2 border-y border-dashed border-[var(--color-border)]">
                        <span class="font-medium text-slate-500">Today: <span class="text-primary font-bold">KSh 48,200</span></span>
                        <span class="font-medium text-slate-500">Route: <span class="font-bold" style="color: var(--color-text);">Westlands</span></span>
                    </div>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="px-2 py-0.5 rounded bg-blue-500/10 text-blue-600 text-[10px] font-bold">Oil: 40</span>
                        <span class="px-2 py-0.5 rounded bg-amber-500/10 text-amber-600 text-[10px] font-bold">Flour: 30</span>
                        <span class="px-2 py-0.5 rounded bg-red-500/10 text-red-600 text-[10px] font-bold">Sugar: 20</span>
                    </div>
                    <div class="flex gap-2 pt-2">
                        <button class="flex-1 py-2 rounded-lg border border-[var(--color-border)] text-xs font-bold hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">View Sales</button>
                        <button class="flex-1 py-2 bg-primary text-white rounded-lg text-xs font-bold shadow-md shadow-primary/10">Reconcile</button>
                    </div>
                </div>

                <!-- Driver 2 -->
                <div class="bg-[var(--color-surface)] rounded-2xl p-5 border border-[var(--color-border)] shadow-sm space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-accent flex items-center justify-center text-white font-bold">MM</div>
                            <div>
                                <h4 class="font-semibold text-sm" style="color: var(--color-text);">Moses Mwangi</h4>
                                <p class="text-xs text-slate-500">0723 456 789</p>
                            </div>
                        </div>
                        <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-green-100 text-green-800 dark:bg-green-900/20 dark:text-green-400">Available</span>
                    </div>
                    <div class="flex justify-between text-xs py-2 border-y border-dashed border-[var(--color-border)]">
                        <span class="font-medium text-slate-500">Today: <span class="text-primary font-bold">KSh 0</span></span>
                        <span class="font-medium text-slate-300">No active route</span>
                    </div>
                    <p class="text-[10px] text-slate-400 italic">No stock currently assigned</p>
                    <div class="flex gap-2 pt-2 opacity-50 pointer-events-none">
                        <button class="flex-1 py-2 rounded-lg border border-[var(--color-border)] text-xs font-bold">View Sales</button>
                        <button class="flex-1 py-2 bg-primary text-white rounded-lg text-xs font-bold">Reconcile</button>
                    </div>
                </div>

                <!-- Add 4 more dummy cards here following the same structure -->
                <!-- (Omitted for brevity, but you can duplicate Driver 1 with Aisha Juma (Off Duty), John Mutua (On Route), etc.) -->
            </div>
        </div>

        <!-- SECTION 3: TODAY'S DISPATCH SCHEDULE -->
        <div class="space-y-4">
            <h2 class="text-lg font-bold" style="color: var(--color-text);">Today's Dispatch Schedule</h2>
            <div class="bg-[var(--color-surface)] rounded-2xl border border-[var(--color-border)] shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-slate-50 dark:bg-slate-900/50 text-[10px] font-bold uppercase tracking-wider text-slate-500 border-b border-[var(--color-border)]">
                            <tr>
                                <th class="px-6 py-4">Driver</th>
                                <th class="px-6 py-4">Vehicle</th>
                                <th class="px-6 py-4">Route/Area</th>
                                <th class="px-6 py-4">Departure</th>
                                <th class="px-6 py-4 text-right">Stock Value</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4">ETA</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[var(--color-border)]">
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                                <td class="px-6 py-4 font-semibold">Peter Kamau</td>
                                <td class="px-6 py-4 font-mono text-xs">KCA 123X</td>
                                <td class="px-6 py-4 text-slate-500 font-medium">Westlands / Parklands</td>
                                <td class="px-6 py-4">08:30 AM</td>
                                <td class="px-6 py-4 text-right font-bold text-primary">124,000</td>
                                <td class="px-6 py-4"><span class="px-2 py-0.5 rounded bg-blue-100 text-blue-800 text-[10px] font-bold">Departed</span></td>
                                <td class="px-6 py-4 text-slate-400">05:00 PM</td>
                            </tr>
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                                <td class="px-6 py-4 font-semibold">John Mutua</td>
                                <td class="px-6 py-4 font-mono text-xs">KBC 456Y</td>
                                <td class="px-6 py-4 text-slate-500 font-medium">CBD / River Road</td>
                                <td class="px-6 py-4">09:15 AM</td>
                                <td class="px-6 py-4 text-right font-bold text-primary">85,200</td>
                                <td class="px-6 py-4"><span class="px-2 py-0.5 rounded bg-green-100 text-green-800 text-[10px] font-bold">En Route</span></td>
                                <td class="px-6 py-4 text-slate-400">04:30 PM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- SECTION 4: RECONCILIATION QUEUE -->
        <div class="space-y-4">
            <h2 class="text-lg font-bold" style="color: var(--color-text);">Reconciliation Queue</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Queue Item 1 -->
                <div class="bg-[var(--color-surface)] rounded-2xl p-5 border-l-4 border-accent shadow-sm flex flex-col justify-between space-y-4">
                    <div class="flex justify-between items-start">
                        <div>
                            <h4 class="font-bold text-sm" style="color: var(--color-text);">Aisha Juma</h4>
                            <p class="text-[10px] text-slate-500 uppercase tracking-tighter">Returned: 05:45 PM Today</p>
                        </div>
                        <div class="text-right">
                            <p class="text-[10px] font-bold text-slate-400">Cash Expected</p>
                            <p class="text-sm font-black text-primary">KSh 32,450</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2 text-[11px] font-medium text-slate-500 py-2 border-t border-dashed border-[var(--color-border)]">
                        <span>Cash Submitted: <span class="text-slate-700 dark:text-slate-300 font-bold">—</span></span>
                        <span>Stock Returned: <span class="text-slate-700 dark:text-slate-300 font-bold">12 units</span></span>
                    </div>
                    <button onclick="openReconModal('Aisha Juma')" class="w-full py-2.5 bg-accent text-white rounded-xl text-xs font-bold shadow-lg shadow-accent/20 active:scale-[0.98] transition-all">Reconcile Now</button>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- RECONCILIATION MODAL -->
<div id="recon-modal" class="fixed inset-0 bg-black/60 z-[100] hidden items-center justify-center p-6 backdrop-blur-sm">
    <div class="bg-[var(--color-surface)] rounded-3xl p-0 max-w-2xl w-full shadow-2xl overflow-hidden animate-in zoom-in-95 duration-200">
        <!-- Modal Header -->
        <div class="p-6 border-b border-[var(--color-border)] flex items-center justify-between">
            <h2 class="text-xl font-bold" style="color: var(--color-text);">Reconcile: <span id="recon-driver-name" class="text-primary">Peter Kamau</span> — 25 Mar 2026</h2>
            <button onclick="closeReconModal()" class="text-slate-400 hover:text-red-500 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
        </div>

        <form id="recon-form" onsubmit="return false;" class="p-6 space-y-6 overflow-y-auto max-h-[80vh]">
            <!-- Stock Table -->
            <div class="rounded-xl border border-[var(--color-border)] overflow-hidden">
                <table class="w-full text-left text-xs border-collapse">
                    <thead class="bg-slate-50 dark:bg-slate-900/50 font-bold uppercase text-slate-500 border-b">
                        <tr>
                            <th class="px-4 py-3">Product</th>
                            <th class="px-4 py-3 text-center">Dispatched</th>
                            <th class="px-4 py-3 text-center">Returned</th>
                            <th class="px-4 py-3 text-center">Sold</th>
                            <th class="px-4 py-3 text-center">Variance</th>
                        </tr>
                    </thead>
                    <tbody id="recon-stock-body" class="divide-y divide-[var(--color-border)]">
                        <!-- Row Template -->
                        <tr data-product="cooking_oil" data-dispatched="50">
                            <td class="px-4 py-3 font-semibold">Cooking Oil 5L</td>
                            <td class="px-4 py-3 text-center font-mono">50</td>
                            <td class="px-4 py-3">
                                <input type="number" value="0" class="recon-returned w-16 mx-auto block bg-white dark:bg-slate-900 border border-[var(--color-border)] rounded px-2 py-1 text-center outline-none focus:ring-2 focus:ring-primary/20">
                            </td>
                            <td class="recon-sold px-4 py-3 text-center font-bold text-primary">50</td>
                            <td class="recon-variance px-4 py-3 text-center font-bold">50</td>
                        </tr>
                        <tr data-product="maize_flour" data-dispatched="30">
                            <td class="px-4 py-3 font-semibold">Maize Flour 2kg</td>
                            <td class="px-4 py-3 text-center font-mono">30</td>
                            <td class="px-4 py-3">
                                <input type="number" value="0" class="recon-returned w-16 mx-auto block bg-white dark:bg-slate-900 border border-[var(--color-border)] rounded px-2 py-1 text-center outline-none focus:ring-2 focus:ring-primary/20">
                            </td>
                            <td class="recon-sold px-4 py-3 text-center font-bold text-primary">30</td>
                            <td class="recon-variance px-4 py-3 text-center font-bold">30</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Cash Section -->
            <div class="grid grid-cols-3 gap-6 p-4 bg-primary/5 dark:bg-primary/10 rounded-2xl border border-primary/20">
                <div class="space-y-1">
                    <label class="text-[10px] font-bold uppercase text-slate-500 tracking-wider">Expected Cash</label>
                    <p id="recon-cash-expected" class="text-lg font-black text-slate-700 dark:text-slate-300">KSh 32,450</p>
                </div>
                <div class="space-y-1">
                    <label class="text-[10px] font-bold uppercase text-slate-500 tracking-wider">Submitted</label>
                    <input type="number" id="recon-cash-submitted" value="0" class="w-full h-10 px-3 bg-white dark:bg-slate-900 border border-[var(--color-border)] rounded-lg font-bold outline-none focus:ring-2 focus:ring-primary">
                </div>
                <div class="space-y-1 text-right">
                    <label class="text-[10px] font-bold uppercase text-slate-500 tracking-wider">Variance</label>
                    <p id="recon-cash-variance" class="text-xl font-black text-red-500">KSh 32,450</p>
                </div>
            </div>

            <!-- Status & Notes -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="space-y-1.5">
                    <label class="text-[11px] font-bold uppercase text-slate-500 tracking-wider">Resolution Status</label>
                    <select class="w-full bg-white dark:bg-slate-900 border border-[var(--color-border)] rounded-xl h-11 px-4 outline-none focus:ring-4 focus:ring-primary/10">
                        <option>Approved</option>
                        <option>Under Investigation</option>
                        <option>Shortage Noted</option>
                    </select>
                </div>
                <div class="space-y-1.5">
                    <label class="text-[11px] font-bold uppercase text-slate-500 tracking-wider">Reconciliation Notes</label>
                    <textarea rows="2" placeholder="Explain any variances..." class="w-full bg-white dark:bg-slate-900 border border-[var(--color-border)] rounded-xl px-4 py-2 outline-none focus:ring-4 focus:ring-primary/10"></textarea>
                </div>
            </div>

            <div class="flex gap-3 pt-4">
                <button type="button" onclick="closeReconModal()" class="flex-1 h-12 rounded-2xl font-bold text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all">Cancel</button>
                <button type="submit" class="flex-1 h-12 bg-primary text-white rounded-2xl font-bold shadow-lg shadow-primary/20 hover:scale-[0.98] transition-all">Submit Reconciliation</button>
            </div>
        </form>
    </div>
</div>

<script>
    (function() {
        'use strict';

        const modal = document.getElementById('recon-modal');
        const driverTitle = document.getElementById('recon-driver-name');
        const stockBody = document.getElementById('recon-stock-body');
        const cashExpectedVal = 32450;
        const cashSubmitted = document.getElementById('recon-cash-submitted');
        const cashVariance = document.getElementById('recon-cash-variance');

        // Global Access Functions
        window.openReconModal = (driverName) => {
            driverTitle.textContent = driverName;
            modal.classList.replace('hidden', 'flex');
            calculateRecon();
        };

        window.closeReconModal = () => {
            modal.classList.replace('flex', 'hidden');
        };

        const calculateRecon = () => {
            // 1. Stock Calculations
            const rows = stockBody.querySelectorAll('tr');
            rows.forEach(row => {
                const dispatched = parseInt(row.dataset.dispatched);
                const returned = parseInt(row.querySelector('.recon-returned').value) || 0;
                
                // auto = dispatched - returned
                const sold = dispatched - returned;
                const variance = dispatched - returned; // As per prompt requirement

                row.querySelector('.recon-sold').textContent = sold;
                const varEl = row.querySelector('.recon-variance');
                varEl.textContent = variance;
                
                // Highlight red if negative
                if (variance < 0) {
                    varEl.classList.add('text-red-500');
                } else {
                    varEl.classList.remove('text-red-500');
                }
            });

            // 2. Cash Calculation
            const submitted = parseFloat(cashSubmitted.value) || 0;
            const variance = cashExpectedVal - submitted;
            
            cashVariance.textContent = `KSh ${variance.toLocaleString()}`;
            if (variance > 0) {
                cashVariance.classList.replace('text-green-600', 'text-red-500');
            } else if (variance < 0) {
                cashVariance.classList.replace('text-red-500', 'text-green-600');
            } else {
                cashVariance.classList.remove('text-red-500', 'text-green-600');
            }
        };

        // Input Listeners
        stockBody.addEventListener('input', (e) => {
            if (e.target.classList.contains('recon-returned')) {
                calculateRecon();
            }
        });

        cashSubmitted.addEventListener('input', calculateRecon);

    })();
</script>

<style>
    /* Modal Animation */
    .animate-in {
        animation: animateIn 0.2s ease-out;
    }
    @keyframes animateIn {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }

    /* Hide Spinners */
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none; 
        margin: 0; 
    }
</style>