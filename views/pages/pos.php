<!DOCTYPE html>
<html lang="en" id="html-root" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS — Sales Entry - DistroManager</title>

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

<div id="main-content-wrapper" class="lg:ml-64 flex flex-col h-full transition-all duration-300 relative overflow-hidden">
    
    <?php include "../components/topbar.php"; ?>
    
    <!-- MOBILE POS HEADER (Replaces standard topbar on mobile) -->
    <header class="lg:hidden flex items-center justify-between h-[48px] px-4 bg-primary text-white shrink-0 sticky top-0 z-50 shadow-sm">
        <button id="pos-sidebar-toggle" class="p-2 -ml-2 hover:bg-white/10 rounded-lg active:scale-95 transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
        <h2 class="text-sm font-bold uppercase tracking-wider">POS — Sales Entry</h2>
        <div class="flex items-center gap-3">
            <span class="text-[11px] font-medium opacity-80">Peter Kamau</span>
            <button class="p-1 hover:bg-white/10 rounded-full"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg></button>
        </div>
    </header>

    <!-- LEFT / TOP PANE: Entry Form -->
    <div class="flex-1 overflow-y-auto p-4 lg:p-6 lg:w-[55%] pb-32 lg:pb-6">
        
        <!-- CUSTOMER SECTION -->
        <section class="bg-[var(--color-surface)] rounded-2xl p-4 mb-4 border border-[var(--color-border)] shadow-sm">
            <h3 class="text-sm font-bold uppercase tracking-wider text-slate-500 mb-4">Customer Details</h3>
            <div class="space-y-4">
                <div class="space-y-1">
                    <input type="text" id="cust-name" placeholder="Customer name (optional)" 
                        class="w-full h-12 px-4 bg-white dark:bg-slate-900 border border-[var(--color-border)] rounded-xl text-base focus:ring-4 focus:ring-primary/10 outline-none transition-all">
                </div>
                <div class="space-y-1">
                    <input type="tel" id="cust-phone" inputmode="tel" placeholder="07XX XXX XXX" 
                        class="w-full h-12 px-4 bg-white dark:bg-slate-900 border border-[var(--color-border)] rounded-xl text-base focus:ring-4 focus:ring-primary/10 outline-none transition-all">
                </div>
            </div>
        </section>

        <!-- PRODUCT ENTRY SECTION -->
        <section class="bg-[var(--color-surface)] rounded-2xl p-4 border border-[var(--color-border)] shadow-sm">
            <h3 class="text-sm font-bold uppercase tracking-wider text-slate-500 mb-4">Add Product</h3>
            
            <div class="space-y-6">
                <!-- Product Selector -->
                <div class="space-y-2">
                    <select id="prod-select" class="w-full h-12 px-4 bg-white dark:bg-slate-900 border border-[var(--color-border)] rounded-xl text-base focus:ring-4 focus:ring-primary/10 outline-none transition-all appearance-none cursor-pointer">
                        <option value="" disabled selected>Select a product...</option>
                        <option value="cooking_oil_5l">Cooking Oil 5L — KSh 300</option>
                        <option value="maize_flour_2kg">Maize Flour 2kg — KSh 200</option>
                        <option value="sugar_2kg">Sugar 2kg — KSh 200</option>
                        <option value="rice_5kg">Rice 5kg — KSh 350</option>
                        <option value="bread">Bread — KSh 55</option>
                    </select>
                </div>

                <!-- Qty Stepper -->
                <div class="flex items-center justify-between bg-slate-100 dark:bg-slate-800 p-2 rounded-2xl">
                    <button id="qty-minus" class="min-w-[48px] h-[48px] flex items-center justify-center bg-white dark:bg-slate-700 rounded-xl shadow-sm text-2xl font-bold active:bg-primary active:text-white transition-all">-</button>
                    <div class="flex flex-col items-center">
                        <span class="text-[10px] font-bold uppercase text-slate-400">Quantity</span>
                        <input type="number" id="qty-input" value="1" min="1" inputmode="numeric" class="w-16 bg-transparent text-center text-xl font-bold outline-none">
                    </div>
                    <button id="qty-plus" class="min-w-[48px] h-[48px] flex items-center justify-center bg-white dark:bg-slate-700 rounded-xl shadow-sm text-2xl font-bold active:bg-primary active:text-white transition-all">+</button>
                </div>

                <!-- Price & Total Display -->
                <div class="flex items-end justify-between px-2">
                    <div>
                        <p class="text-[11px] font-bold uppercase text-slate-500">Unit Price</p>
                        <p class="text-xl font-bold text-primary" id="unit-price-display">KSh 0</p>
                    </div>
                    <div class="text-right">
                        <p class="text-[11px] font-bold uppercase text-slate-500">Line Total</p>
                        <p class="text-2xl font-black" style="color: var(--color-text);" id="line-total-display">KSh 0</p>
                    </div>
                </div>

                <button id="add-to-cart-btn" class="w-full h-14 bg-primary text-white rounded-2xl font-bold text-lg shadow-lg shadow-primary/25 active:scale-[0.98] transition-all">
                    Add to Cart
                </button>
            </div>
        </section>
    </div>

    <!-- RIGHT / BOTTOM PANE: Cart & Checkout -->
    <aside id="cart-aside" class="w-full lg:w-[45%] lg:border-l border-[var(--color-border)] flex flex-col bg-slate-50 dark:bg-slate-900 transition-colors">
        <div class="p-6 shrink-0 border-b border-[var(--color-border)] flex items-center justify-between">
            <h2 class="text-xl font-bold" style="color: var(--color-text);">Current Order</h2>
            <button id="clear-cart-btn" class="text-xs font-bold text-red-500 uppercase tracking-widest hover:bg-red-50 dark:hover:bg-red-900/10 px-3 py-1.5 rounded-lg transition-all">Clear Cart</button>
        </div>

        <!-- Cart Item List -->
        <div id="cart-items-list" class="flex-1 overflow-y-auto p-4 lg:p-6 space-y-3 min-h-[150px]">
            <!-- Empty State -->
            <div id="empty-cart-state" class="h-full flex flex-col items-center justify-center text-slate-400 space-y-2 opacity-60">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                <p class="text-sm font-medium">Cart is empty</p>
            </div>
        </div>

        <!-- Summary & Fixed Checkout Bar -->
        <div class="p-6 border-t border-[var(--color-border)] bg-[var(--color-surface)] shadow-[0_-10px_30px_rgba(0,0,0,0.05)] sticky bottom-0 z-40">
            <div class="space-y-2 mb-4">
                <div class="flex justify-between text-sm">
                    <span class="text-slate-500">Subtotal</span>
                    <span class="font-bold" id="cart-subtotal">KSh 0</span>
                </div>
                <div class="flex justify-between text-sm">
                    <span class="text-slate-500">Discount</span>
                    <span class="font-bold text-green-600">KSh 0</span>
                </div>
                <div class="flex justify-between text-xl font-black pt-2 border-t border-dashed border-[var(--color-border)]">
                    <span style="color: var(--color-text);">TOTAL</span>
                    <span class="text-primary" id="cart-total">KSh 0</span>
                </div>
            </div>
            <button id="record-sale-btn" class="w-full h-14 bg-green-600 text-white rounded-2xl font-bold text-lg shadow-lg shadow-green-600/20 active:scale-[0.98] transition-all disabled:grayscale disabled:opacity-50">
                Record Sale
            </button>
        </div>
    </aside>
</div>

<!-- SUCCESS MODAL -->
<div id="success-modal" class="fixed inset-0 bg-black/60 z-[100] hidden items-center justify-center p-6 backdrop-blur-sm">
    <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 max-w-xs w-full text-center shadow-2xl scale-95 transition-transform duration-300 transform" id="modal-card">
        <div class="w-20 h-20 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
        </div>
        <h2 class="text-2xl font-black mb-2" style="color: var(--color-text);">Sale Recorded!</h2>
        <div class="bg-slate-50 dark:bg-slate-900/50 rounded-2xl p-4 mb-8 text-sm space-y-2">
            <div class="flex justify-between text-slate-500"><span>Customer:</span><span class="font-bold text-slate-700 dark:text-slate-300" id="summary-cust">—</span></div>
            <div class="flex justify-between text-slate-500"><span>Amount:</span><span class="font-bold text-primary" id="summary-total">KSh 0</span></div>
            <div class="flex justify-between text-slate-500"><span>Time:</span><span class="font-bold text-slate-700 dark:text-slate-300" id="summary-time">Now</span></div>
        </div>
        <div class="space-y-3">
            <button id="new-sale-btn" class="w-full h-12 bg-primary text-white rounded-xl font-bold transition-all">New Sale</button>
            <button id="close-modal-btn" class="w-full h-12 border border-[var(--color-border)] rounded-xl font-bold text-slate-500 transition-all">Print Receipt</button>
        </div>
    </div>
</div>

<script>
    (function() {
        'use strict';

        const prices = {
            "cooking_oil_5l": { name: "Cooking Oil 5L", price: 300 },
            "maize_flour_2kg": { name: "Maize Flour 2kg", price: 200 },
            "sugar_2kg": { name: "Sugar 2kg", price: 200 },
            "rice_5kg": { name: "Rice 5kg", price: 350 },
            "bread": { name: "Bread", price: 55 }
        };

        let cart = [];

        // DOM Elements
        const prodSelect = document.getElementById('prod-select');
        const qtyInput = document.getElementById('qty-input');
        const unitPriceDisp = document.getElementById('unit-price-display');
        const lineTotalDisp = document.getElementById('line-total-display');
        const cartList = document.getElementById('cart-items-list');
        const emptyState = document.getElementById('empty-cart-state');
        const totalDisp = document.getElementById('cart-total');
        const subtotalDisp = document.getElementById('cart-subtotal');
        const recordBtn = document.getElementById('record-sale-btn');
        const successModal = document.getElementById('success-modal');

        // --- UI Updates ---

        const updateLineTotal = () => {
            const prodId = prodSelect.value;
            const qty = parseInt(qtyInput.value) || 1;
            if (prodId && prices[prodId]) {
                const unitPrice = prices[prodId].price;
                unitPriceDisp.textContent = `KSh ${unitPrice.toLocaleString()}`;
                lineTotalDisp.textContent = `Total: KSh ${(unitPrice * qty).toLocaleString()}`;
            } else {
                unitPriceDisp.textContent = 'KSh 0';
                lineTotalDisp.textContent = 'KSh 0';
            }
        };

        const renderCart = () => {
            if (cart.length === 0) {
                cartList.innerHTML = '';
                cartList.appendChild(emptyState);
                emptyState.classList.remove('hidden');
                recordBtn.disabled = true;
            } else {
                emptyState.classList.add('hidden');
                recordBtn.disabled = false;
                cartList.innerHTML = cart.map((item, index) => `
                    <div class="flex items-center justify-between p-4 bg-white dark:bg-slate-800 rounded-2xl border border-[var(--color-border)] shadow-sm animate-in slide-in-from-right-4 duration-300">
                        <div class="flex-1">
                            <h4 class="font-bold text-sm" style="color: var(--color-text);">${item.name}</h4>
                            <p class="text-[11px] text-slate-500">${item.qty} × KSh ${item.unitPrice.toLocaleString()}</p>
                        </div>
                        <div class="text-right px-4">
                            <p class="font-black text-primary">KSh ${(item.qty * item.unitPrice).toLocaleString()}</p>
                        </div>
                        <button onclick="removeFromCart(${index})" class="min-w-[44px] h-[44px] flex items-center justify-center text-red-500 hover:bg-red-50 dark:hover:bg-red-900/10 rounded-xl transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                        </button>
                    </div>
                `).join('');
            }

            const total = cart.reduce((sum, item) => sum + (item.qty * item.unitPrice), 0);
            totalDisp.textContent = `KSh ${total.toLocaleString()}`;
            subtotalDisp.textContent = `KSh ${total.toLocaleString()}`;
        };

        // --- Global Actions ---

        window.removeFromCart = (index) => {
            cart.splice(index, 1);
            renderCart();
        };

        const resetForm = () => {
            prodSelect.selectedIndex = 0;
            qtyInput.value = 1;
            updateLineTotal();
        };

        // --- Event Listeners ---

        prodSelect.addEventListener('change', updateLineTotal);
        
        document.getElementById('qty-plus').addEventListener('click', () => {
            qtyInput.value = parseInt(qtyInput.value) + 1;
            updateLineTotal();
        });

        document.getElementById('qty-minus').addEventListener('click', () => {
            if (parseInt(qtyInput.value) > 1) {
                qtyInput.value = parseInt(qtyInput.value) - 1;
                updateLineTotal();
            }
        });

        document.getElementById('add-to-cart-btn').addEventListener('click', () => {
            const prodId = prodSelect.value;
            const qty = parseInt(qtyInput.value);
            if (!prodId) return;

            const product = prices[prodId];
            cart.push({
                id: prodId,
                name: product.name,
                qty: qty,
                unitPrice: product.price
            });

            renderCart();
            resetForm();
        });

        document.getElementById('clear-cart-btn').addEventListener('click', () => {
            cart = [];
            renderCart();
        });

        // Checkout / Success Modal Logic
        recordBtn.addEventListener('click', () => {
            const custName = document.getElementById('cust-name').value || 'Guest';
            const total = cart.reduce((sum, item) => sum + (item.qty * item.unitPrice), 0);
            
            document.getElementById('summary-cust').textContent = custName;
            document.getElementById('summary-total').textContent = `KSh ${total.toLocaleString()}`;
            document.getElementById('summary-time').textContent = new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});

            successModal.classList.replace('hidden', 'flex');
            setTimeout(() => document.getElementById('modal-card').classList.replace('scale-95', 'scale-100'), 10);
            
            console.log("Sale Recorded:", { customer: custName, items: cart, total: total });
        });

        const closeAndReset = () => {
            cart = [];
            renderCart();
            document.getElementById('cust-name').value = '';
            document.getElementById('cust-phone').value = '';
            successModal.classList.replace('flex', 'hidden');
            document.getElementById('modal-card').classList.replace('scale-100', 'scale-95');
        };

        document.getElementById('new-sale-btn').addEventListener('click', closeAndReset);
        document.getElementById('close-modal-btn').addEventListener('click', closeAndReset);

        // Sidebar Toggle for Mobile (using IDs from previous component requirements)
        const mobileToggle = document.getElementById('pos-sidebar-toggle');
        if (mobileToggle) {
            mobileToggle.addEventListener('click', () => {
                const sidebar = document.getElementById('sidebar');
                const overlay = document.getElementById('sidebar-overlay');
                if (sidebar) sidebar.classList.toggle('-translate-x-full');
                if (overlay) overlay.classList.toggle('hidden');
            });
        }

        // Initialization
        updateLineTotal();
        renderCart();

    })();
</script>

<style>
    /* Prevents input zoom on iOS while keeping font size at 16px */
    input, select, textarea {
        font-size: 16px !important;
    }

    /* Hide scrollbar for Chrome, Safari and Opera */
    .scrollbar-none::-webkit-scrollbar {
        display: none;
    }
    /* Hide scrollbar for IE, Edge and Firefox */
    .scrollbar-none {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    @keyframes swing {
        0% { transform: rotate(0deg); }
        20% { transform: rotate(15deg); }
        40% { transform: rotate(-10deg); }
        60% { transform: rotate(5deg); }
        80% { transform: rotate(-5deg); }
        100% { transform: rotate(0deg); }
    }
    .animate-swing {
        animation: swing 1s ease-in-out;
    }

    /* Mobile-specific adjustments to standard layout components if they exist */
    @media (max-width: 1023px) {
        /* If pos.php is in main.php, we need to hide the standard topbar to use our 48px one */
        #topbar {
            display: none !important;
        }
    }
</style>
</body>
</html>