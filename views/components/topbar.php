<header id="topbar" class="h-14 fixed top-0 left-0 right-0 lg:left-64 z-40 flex items-center justify-between px-6 transition-all duration-300 ease-in-out shadow-lg bg-primary dark:bg-slate-900">
    
    <!-- Left Section: Mobile Toggle & Page Info -->
    <div class="flex items-center gap-4">
        <!-- Mobile Sidebar Toggle (Visible < 1024px) -->
        <button id="mobile-sidebar-toggle" class="lg:hidden p-2 -ml-2 text-white hover:bg-white/20 rounded-lg transition-colors" aria-label="Open Menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <div class="flex flex-col justify-center">
            <h1 id="page-title" class="text-lg font-bold leading-tight text-white dark:text-slate-200">Dashboard</h1>
            <nav class="hidden sm:flex items-center gap-1 text-[10px] text-white/70 dark:text-slate-400 font-bold uppercase tracking-wider">
                <span class="hover:text-white dark:hover:text-slate-200 cursor-pointer transition-colors">Home</span>
                <svg class="w-2 h-2 text-white/50 dark:text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <span class="text-white/50 dark:text-slate-500">Dashboard</span>
            </nav>
        </div>
    </div>

    <!-- Right Section: Search, Notifs, User -->
    <div class="flex items-center gap-2 md:gap-4">
        
        <!-- Search Bar -->
        <div class="relative group flex items-center">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-white/50 dark:text-slate-400 group-focus-within:text-white dark:group-focus-within:text-slate-200 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
            </div>
            <input type="text" placeholder="Search..." 
                class="w-10 md:w-48 focus:w-64 bg-white/10 dark:bg-slate-800 border border-white/20 dark:border-slate-700 text-white dark:text-slate-200 placeholder:text-white/60 dark:placeholder-slate-400 rounded-full py-1.5 pl-10 pr-4 text-base focus:outline-none focus:bg-white/20 dark:focus:bg-slate-700 transition-all duration-300 placeholder:opacity-0 md:placeholder:opacity-100 focus:placeholder:opacity-100">
        </div>

        <!-- Notification Bell -->
        <button id="notif-btn" class="relative p-2 text-white/80 dark:text-slate-400 hover:bg-white/10 dark:hover:bg-slate-700 rounded-full transition-colors group">
            <svg class="w-5 h-5 group-hover:animate-swing" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
            <span class="absolute top-2 right-2.5 w-2 h-2 bg-red-500 rounded-full border-2 border-[var(--color-surface)]"></span>
        </button>

        <!-- Date Display -->
        <div class="hidden lg:block text-[11px] font-bold text-white/80 dark:text-slate-400 border-x border-white/10 dark:border-slate-700 px-4 h-8 flex items-center">
            Mon, 25 Mar 2026
        </div>

        <!-- User Profile Dropdown -->
        <div class="relative" id="user-menu-container">
            <button id="user-menu-btn" class="flex items-center justify-center w-[34px] h-[34px] rounded-full bg-white dark:bg-slate-700 text-[#1E40AF] dark:text-slate-200 font-bold text-xs border-2 border-white/20 dark:border-slate-600 hover:scale-105 transition-all">
                JD
            </button>
            
            <!-- Dropdown Menu -->
            <div id="user-dropdown" class="hidden absolute right-0 mt-3 w-52 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl shadow-xl py-2 z-50 transform origin-top-right text-slate-600 dark:text-slate-300">
                <div class="px-4 py-2 border-b border-slate-100 dark:border-slate-700 mb-2">
                    <p class="text-sm font-bold text-slate-700 dark:text-slate-200">John Doe</p>
                    <p class="text-[10px] text-slate-500 dark:text-slate-400 font-medium">Administrator</p>
                </div>
                
                <a href="#" class="flex items-center px-4 py-2 text-sm text-slate-600 dark:text-slate-300 hover:bg-primary/5 hover:text-primary transition-colors">
                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                    My Profile
                </a>
                
                <a href="#" class="flex items-center px-4 py-2 text-sm text-slate-600 dark:text-slate-300 hover:bg-primary/5 hover:text-primary transition-colors">
                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    Settings
                </a>

                <div class="border-t border-slate-100 dark:border-slate-700 my-2"></div>
                
                <a href="#" class="flex items-center px-4 py-2 text-sm text-red-500 hover:bg-red-50 dark:hover:bg-red-900/10 transition-colors">
                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg>
                    Log Out
                </a>
            </div>
        </div>
    </div>
</header>

<script>
    (function() {
        const topbar = document.getElementById('topbar');
        const mainContent = document.querySelector('main');
        let lastScrollTop = 0;

        if (!topbar || !mainContent) return;

        // Detect scroll on the main scrollable container
        mainContent.addEventListener('scroll', () => {
            let scrollTop = mainContent.scrollTop;
            
            if (scrollTop > 100) { // Only start hiding after initial scroll
                if (scrollTop > lastScrollTop) {
                    // Scrolling Down - Hide Header
                    topbar.style.transform = 'translateY(-100%)';
                } else {
                    // Scrolling Up - Show Header
                    topbar.style.transform = 'translateY(0)';
                }
            } else {
                // At the top
                topbar.style.transform = 'translateY(0)';
            }
            
            lastScrollTop = scrollTop;
        }, { passive: true });
    })();
</script>