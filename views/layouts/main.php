<!DOCTYPE html>
<html lang="en" id="html-root" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DistroManager</title>

    <!-- Preconnect to Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Main Tailwind Output -->
    <link rel="stylesheet" href="/public/css/app.css">

    <!-- Prevent Flash of Unstyled Theme (FOUT) -->
    <script>
        (function() {
            const theme = localStorage.getItem('theme');
            if (theme === 'dark') {
                const root = document.getElementById('html-root');
                root.classList.add('dark');
                root.classList.remove('light');
            }
        })();
    </script>
</head>
<body style="display: flex; flex-direction: row; height: 100vh; overflow: hidden; background-color: var(--color-bg); color: var(--color-text); font-family: 'Inter', sans-serif; font-size: 14px;">

    <!-- SIDEBAR -->

    <!-- Main Content Wrapper -->
    <div style="display: flex; flex-direction: column; flex: 1; min-width: 0; overflow: hidden;">
        
        <!-- TOPBAR -->

        <!-- Scrollable Page Area -->
        <main style="flex: 1; overflow-y: auto; position: relative;">
            <!-- PAGE CONTENT -->
        </main>

    </div>

    <script src="/public/js/app.js" defer></script>
</body>
</html>