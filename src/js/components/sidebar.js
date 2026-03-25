(function() {
    'use strict';

    /**
     * DistroManager Sidebar Controller
     * Manages collapse states, active navigation, and theme toggling.
     */
    const initSidebar = () => {
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('sidebar-toggle');
        const mobileToggleBtn = document.getElementById('mobile-sidebar-toggle');
        const themeBtn = document.getElementById('theme-toggle');
        const htmlRoot = document.getElementById('html-root');
        const overlay = document.getElementById('sidebar-overlay');
        const topbar = document.getElementById('topbar');
        const userMenuBtn = document.getElementById('user-menu-btn');
        const userDropdown = document.getElementById('user-dropdown');

        if (!sidebar || !toggleBtn || !themeBtn) return;

        // --- Sidebar Visibility & Collapse Logic ---
        const toggleSidebar = () => {
            const isMobile = window.innerWidth < 768;

            if (isMobile) {
                sidebar.classList.toggle('-translate-x-full');
                if (overlay) overlay.classList.toggle('hidden');
            } else {
                // Toggle collapsed state for desktop
                const isCollapsed = sidebar.classList.toggle('collapsed');
                
                // Manage explicit widths to ensure Tailwind transitions trigger correctly
                if (isCollapsed) {
                    sidebar.classList.replace('w-64', 'w-16');
                    if (topbar) {
                        topbar.classList.replace('md:ml-64', 'md:ml-16');
                    }
                } else {
                    sidebar.classList.replace('w-16', 'w-64');
                    if (topbar) {
                        topbar.classList.replace('md:ml-16', 'md:ml-64');
                    }
                }
            }
        };

        toggleBtn.addEventListener('click', (e) => {
            e.preventDefault();
            toggleSidebar();
        });

        if (mobileToggleBtn) {
            mobileToggleBtn.addEventListener('click', (e) => {
                e.preventDefault();
                toggleSidebar();
            });
        }

        if (overlay) {
            overlay.addEventListener('click', toggleSidebar);
        }

        // --- Theme Toggle Logic ---
        const updateThemeUI = (isDark) => {
            const label = themeBtn.querySelector('.theme-label');
            if (label) {
                label.textContent = isDark ? 'Light mode' : 'Dark mode';
            }
        };

        // Initial sync based on the class set in main.php head script
        updateThemeUI(htmlRoot.classList.contains('dark'));

        themeBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const isDark = htmlRoot.classList.toggle('dark');
            htmlRoot.classList.toggle('light', !isDark);
            
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
            updateThemeUI(isDark);
        });

        // --- User Dropdown Logic ---
        if (userMenuBtn && userDropdown) {
            userMenuBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                userDropdown.classList.toggle('hidden');
            });
            document.addEventListener('click', () => userDropdown.classList.add('hidden'));
        }

        // --- Navigation Active State ---
        const navLinks = sidebar.querySelectorAll('a[data-page]');
        const currentPath = window.location.pathname;

        navLinks.forEach(link => {
            const page = link.getAttribute('data-page');
            
            // Auto-highlight based on current URL path
            if (currentPath.includes(page)) {
                link.classList.add('bg-primary/20', 'text-white', 'border-l-2', 'border-accent');
            } else {
                link.classList.add('border-transparent');
            }
        });
    };

    // Initialize once DOM is ready
    document.addEventListener('DOMContentLoaded', initSidebar);
})();