<!-- Sidebar Overlay (Mobile Only) -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-30 hidden lg:hidden"></div>

<nav id="sidebar" class="group fixed left-0 top-0 h-screen z-50 w-64 -translate-x-full lg:translate-x-0 transition-all duration-300 ease-in-out flex flex-col text-white bg-primary dark:bg-slate-900 border-r-0 shadow-lg">
    
    <!-- Top Section: Logo & Toggle -->
    <div class="flex items-center justify-between p-4 mb-4">
        <div class="flex items-center overflow-hidden">
            <div class="w-8 h-8 bg-accent rounded flex-shrink-0 flex items-center justify-center text-white font-bold">D</div>
            <span class="logo-text ml-3 text-lg font-semibold whitespace-nowrap transition-all duration-300 opacity-100 group-[.collapsed]:opacity-0 group-[.collapsed]:w-0 group-[.collapsed]:ml-0">
                DistroMgr
            </span>
        </div>
        <button id="sidebar-toggle" class="p-1 hover:bg-white/10 rounded transition-colors" aria-label="Toggle Sidebar">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <!-- Navigation Links -->
    <div class="flex-1 px-2 space-y-1 overflow-y-auto overflow-x-hidden scrollbar-none">
        <a href="dashboard.php" data-page="dashboard" class="flex items-center px-4 py-3 rounded-lg mx-2 my-0.5 transition-all border-l-2 border-transparent hover:bg-white/20 text-white/90 group/link">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h7v7H3V3zM14 3h7v7h-7V3zM3 14h7v7H3v-7zM14 14h7v7h-7v-7z" /></svg>
            <span class="nav-label ml-3 text-sm font-medium whitespace-nowrap transition-all duration-300 opacity-100 group-[.collapsed]:opacity-0 group-[.collapsed]:w-0 group-[.collapsed]:ml-0">Dashboard</span>
        </a>
        <a href="purchases.php" data-page="purchases" class="flex items-center px-4 py-3 rounded-lg mx-2 my-0.5 transition-all border-l-2 border-transparent hover:bg-white/20 text-white/90 group/link">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
            <span class="nav-label ml-3 text-sm font-medium whitespace-nowrap transition-all duration-300 opacity-100 group-[.collapsed]:opacity-0 group-[.collapsed]:w-0 group-[.collapsed]:ml-0">Purchases</span>
        </a>
        <a href="stock.php" data-page="stock" class="flex items-center px-4 py-3 rounded-lg mx-2 my-0.5 transition-all border-l-2 border-transparent hover:bg-white/20 text-white/90 group/link">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" /></svg>
            <span class="nav-label ml-3 text-sm font-medium whitespace-nowrap transition-all duration-300 opacity-100 group-[.collapsed]:opacity-0 group-[.collapsed]:w-0 group-[.collapsed]:ml-0">Stock Management</span>
        </a>
        <a href="sales.php" data-page="sales" class="flex items-center px-4 py-3 rounded-lg mx-2 my-0.5 transition-all border-l-2 border-transparent hover:bg-white/20 text-white/90 group/link">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" /></svg>
            <span class="nav-label ml-3 text-sm font-medium whitespace-nowrap transition-all duration-300 opacity-100 group-[.collapsed]:opacity-0 group-[.collapsed]:w-0 group-[.collapsed]:ml-0">Sales</span>
        </a>
        <a href="pos.php" data-page="pos" class="flex items-center px-4 py-3 rounded-lg mx-2 my-0.5 transition-all border-l-2 border-transparent hover:bg-white/20 text-white/90 group/link">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
            <span class="nav-label ml-3 text-sm font-medium whitespace-nowrap transition-all duration-300 opacity-100 group-[.collapsed]:opacity-0 group-[.collapsed]:w-0 group-[.collapsed]:ml-0">POS</span>
        </a>
        <a href="reports.php" data-page="reports" class="flex items-center px-4 py-3 rounded-lg mx-2 my-0.5 transition-all border-l-2 border-transparent hover:bg-white/20 text-white/90 group/link">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
            <span class="nav-label ml-3 text-sm font-medium whitespace-nowrap transition-all duration-300 opacity-100 group-[.collapsed]:opacity-0 group-[.collapsed]:w-0 group-[.collapsed]:ml-0">Reports</span>
        </a>
        <a href="accounting.php" data-page="accounting" class="flex items-center px-4 py-3 rounded-lg mx-2 my-0.5 transition-all border-l-2 border-transparent hover:bg-white/20 text-white/90 group/link">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.407 2.67 1a2.4 2.4 0 010 4.01C14.08 15.593 13.11 16 12 16M12 8V7m0 1V8m0 8v1m0-1V16m-6-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span class="nav-label ml-3 text-sm font-medium whitespace-nowrap transition-all duration-300 opacity-100 group-[.collapsed]:opacity-0 group-[.collapsed]:w-0 group-[.collapsed]:ml-0">Accounting</span>
        </a>
        <a href="logistics.php" data-page="logistics" class="flex items-center px-4 py-3 rounded-lg mx-2 my-0.5 transition-all border-l-2 border-transparent hover:bg-white/20 text-white/90 group/link">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0zM13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 011 1v2a1 1 0 01-1 1h-1m-4-13h4a1 1 0 011 1v6l4 2v1a1 1 0 01-1 1h-1" /></svg>
            <span class="nav-label ml-3 text-sm font-medium whitespace-nowrap transition-all duration-300 opacity-100 group-[.collapsed]:opacity-0 group-[.collapsed]:w-0 group-[.collapsed]:ml-0">Logistics</span>
        </a>
    </div>

    <!-- Bottom Section -->
    <div class="mt-auto border-t border-white/20 p-2 space-y-1">
        <!-- User Information -->
        <div class="flex items-center p-3 mb-2 overflow-hidden">
            <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center flex-shrink-0 text-xs font-bold text-white">JD</div>
            <div class="nav-label ml-3 transition-all duration-300 opacity-100 group-[.collapsed]:opacity-0 group-[.collapsed]:w-0">
                <p class="text-sm font-medium text-white truncate">John Doe</p>
                <p class="text-[11px] text-white/70 truncate">Administrator</p>
            </div>
        </div>

        <!-- Theme Toggle -->
        <button id="theme-toggle" class="w-full flex items-center px-3 py-2 rounded-lg hover:bg-white/20 transition-colors text-white/80 hover:text-white">
            <div class="w-5 h-5 flex-shrink-0 relative">
                <svg class="sun-icon absolute inset-0 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z" /></svg>
                <svg class="moon-icon absolute inset-0 dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" /></svg>
            </div>
            <span class="theme-label nav-label ml-3 text-sm font-medium whitespace-nowrap transition-all duration-300 opacity-100 group-[.collapsed]:opacity-0 group-[.collapsed]:w-0">Light Mode</span>
        </button>

        <!-- Logout -->
        <a href="login.php" class="w-full flex items-center px-3 py-2 rounded-lg hover:bg-red-500/20 text-white/80 hover:text-red-400 transition-colors">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg>
            <span class="nav-label ml-3 text-sm font-medium whitespace-nowrap transition-all duration-300 opacity-100 group-[.collapsed]:opacity-0 group-[.collapsed]:w-0">Logout</span>
        </a>
    </div>
</nav>