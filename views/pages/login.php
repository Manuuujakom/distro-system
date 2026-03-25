<!DOCTYPE html>
<html lang="en" id="html-root" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - DistroManager</title>

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
<body class="bg-[var(--color-bg)] text-[var(--color-text)] font-sans h-screen overflow-hidden">
    <div class="lg:grid lg:grid-cols-2 h-full">
        
        <!-- LEFT COLUMN: Branding Panel -->
        <div class="hidden lg:flex flex-col justify-between p-12 bg-gradient-to-br from-[#1E40AF] to-[#0F172A] text-white">
            <div class="flex-1 flex flex-col justify-center items-center text-center max-w-md mx-auto">
                <!-- Delivery Truck Icon -->
                <svg class="w-20 h-20 mb-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1.5 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/>
                </svg>
                <h1 class="text-4xl font-bold tracking-tight">DistroManager</h1>
                <p class="text-slate-300 mt-2 text-lg">Manage your distribution network with confidence.</p>
                
                <div class="mt-12 space-y-5 w-full text-left max-w-xs">
                    <div class="flex gap-4 items-center">
                        <div class="flex-shrink-0 w-6 h-6 rounded-full bg-white/10 flex items-center justify-center">
                            <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-slate-200 text-sm font-medium">Real-time stock tracking</span>
                    </div>
                    <div class="flex gap-4 items-center">
                        <div class="flex-shrink-0 w-6 h-6 rounded-full bg-white/10 flex items-center justify-center">
                            <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-slate-200 text-sm font-medium">Driver sales reconciliation</span>
                    </div>
                    <div class="flex gap-4 items-center">
                        <div class="flex-shrink-0 w-6 h-6 rounded-full bg-white/10 flex items-center justify-center">
                            <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-slate-200 text-sm font-medium">Instant financial reports</span>
                    </div>
                </div>
            </div>
            <p class="text-slate-400 text-xs font-medium uppercase tracking-widest">© 2026 DistroManager</p>
        </div>

        <!-- RIGHT COLUMN: Form Panel -->
        <div class="relative flex flex-col justify-center items-center px-8 bg-[var(--color-bg)] transition-colors duration-300">
            <!-- Theme Toggle -->
            <button id="theme-toggle-login" class="absolute top-6 right-6 p-2 rounded-xl bg-slate-100 dark:bg-slate-800 text-slate-500 hover:text-primary transition-all">
                <svg class="w-5 h-5 sun-icon hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z"/></svg>
                <svg class="w-5 h-5 moon-icon block dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/></svg>
            </button>

            <div class="w-full max-w-sm">
                <div class="mb-10 text-center lg:text-left">
                    <h2 class="text-3xl font-bold tracking-tight" style="color: var(--color-text);">Welcome back</h2>
                    <p class="text-slate-500 mt-2">Sign in to your account to continue</p>
                </div>

                <form method="post" onsubmit="return false;" class="space-y-5">
                    <!-- Role Selector (Segmented Control) -->
                    <div class="space-y-2">
                        <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Login Position</label>
                        <div class="grid grid-cols-3 p-1 bg-slate-100 dark:bg-slate-800/50 rounded-xl transition-all" id="role-selector">
                            <label class="cursor-pointer group">
                                <input type="radio" name="role" value="owner" class="hidden" checked>
                                <div class="role-btn py-2 text-center text-xs font-bold rounded-lg transition-all bg-primary text-white shadow-md">Owner</div>
                            </label>
                            <label class="cursor-pointer group">
                                <input type="radio" name="role" value="supervisor" class="hidden">
                                <div class="role-btn py-2 text-center text-xs font-bold rounded-lg transition-all text-slate-500 hover:text-slate-700 dark:hover:text-slate-300">Supervisor</div>
                            </label>
                            <label class="cursor-pointer group">
                                <input type="radio" name="role" value="driver" class="hidden">
                                <div class="role-btn py-2 text-center text-xs font-bold rounded-lg transition-all text-slate-500 hover:text-slate-700 dark:hover:text-slate-300">Driver</div>
                            </label>
                        </div>
                    </div>

                    <!-- Username Input -->
                    <div class="space-y-2">
                        <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Username</label>
                        <div class="relative group">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400 group-focus-within:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                            </span>
                            <input type="text" placeholder="Enter your username" class="block w-full pl-11 pr-4 py-3 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl focus:ring-4 focus:ring-primary/10 focus:border-primary transition-all outline-none text-base">
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div class="space-y-2">
                        <label class="text-xs font-bold uppercase tracking-wider text-slate-500">Password</label>
                        <div class="relative group">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400 group-focus-within:text-primary transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                            </span>
                            <input id="password-input" type="password" placeholder="••••••••" class="block w-full pl-11 pr-12 py-3 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl focus:ring-4 focus:ring-primary/10 focus:border-primary transition-all outline-none text-base">
                            <button type="button" id="password-toggle" class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-slate-400 hover:text-primary transition-colors">
                                <svg id="eye-open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                <svg id="eye-closed" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18"/></svg>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center justify-between py-1">
                        <label class="flex items-center cursor-pointer group">
                            <input id="remember-me" type="checkbox" class="h-4 w-4 text-primary border-slate-300 rounded focus:ring-primary/30 transition-all">
                            <span class="ml-2 text-sm text-slate-500 group-hover:text-slate-700 dark:group-hover:text-slate-300 transition-colors">Remember me</span>
                        </label>
                        <a href="#" class="text-sm font-bold text-primary hover:text-primary/80 transition-colors">Forgot password?</a>
                    </div>

                    <button type="submit" id="submit-btn" class="w-full flex justify-center items-center h-12 bg-primary hover:bg-primary/90 text-white font-bold rounded-xl transition-all shadow-lg shadow-primary/25 disabled:opacity-70 disabled:cursor-not-allowed">
                        <span id="btn-text">Sign In</span>
                        <svg id="btn-spinner" class="hidden animate-spin ml-3 h-5 w-5 text-white" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </button>
                </form>

                <p class="mt-10 text-center text-sm text-slate-500">
                    Need help? <a href="#" class="font-bold text-primary hover:text-primary/80 transition-colors">Contact Administrator</a>
                </p>
            </div>
        </div>
    </div>

    <script>
        (function() {
            // Password toggle logic
            const passInput = document.getElementById('password-input');
            const passToggle = document.getElementById('password-toggle');
            const eyeOpen = document.getElementById('eye-open');
            const eyeClosed = document.getElementById('eye-closed');
            passToggle.addEventListener('click', () => {
                const isPass = passInput.type === 'password';
                passInput.type = isPass ? 'text' : 'password';
                eyeOpen.classList.toggle('hidden', isPass);
                eyeClosed.classList.toggle('hidden', !isPass);
            });

            // Role selector active state
            const roleSelector = document.getElementById('role-selector');
            const roles = roleSelector.querySelectorAll('input');
            roles.forEach(radio => {
                radio.addEventListener('change', () => {
                    roleSelector.querySelectorAll('.role-btn').forEach(btn => {
                        btn.classList.remove('bg-primary', 'text-white', 'shadow-md');
                        btn.classList.add('text-slate-500');
                    });
                    const activeBtn = radio.parentElement.querySelector('.role-btn');
                    activeBtn.classList.add('bg-primary', 'text-white', 'shadow-md');
                    activeBtn.classList.remove('text-slate-500');
                });
            });

            // Submit loading state simulation
            const submitBtn = document.getElementById('submit-btn');
            const btnText = document.getElementById('btn-text');
            const btnSpinner = document.getElementById('btn-spinner');
            document.querySelector('form').addEventListener('submit', (e) => {
                e.preventDefault();
                submitBtn.disabled = true;
                btnText.textContent = 'Verifying...';
                btnSpinner.classList.remove('hidden');
                setTimeout(() => {
                    window.location.href = 'dashboard.php';
                }, 1200);
            });

            // Theme Toggle logic
            const themeBtn = document.getElementById('theme-toggle-login');
            const htmlRoot = document.getElementById('html-root');
            themeBtn.addEventListener('click', () => {
                const isDark = htmlRoot.classList.toggle('dark');
                htmlRoot.classList.toggle('light', !isDark);
                localStorage.setItem('theme', isDark ? 'dark' : 'light');
            });
        })();
    </script>
</body>
</html>