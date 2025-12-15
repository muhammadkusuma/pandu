<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel - PANDU')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 antialiased">

    <div id="mobile-overlay" onclick="toggleSidebar()"
        class="fixed inset-0 bg-slate-900/50 z-20 hidden transition-opacity opacity-0"></div>

    <div class="flex min-h-screen relative">

        @include('admin.partials.sidebar')

        <div class="flex-1 md:ml-64 flex flex-col min-h-screen transition-all duration-300">

            @include('admin.partials.topbar')

            <main class="flex-1 p-4 sm:p-6 lg:p-8">
                @yield('content')
            </main>

        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('mobile-overlay');

        function toggleSidebar() {
            // Toggle class translate untuk memunculkan/menyembunyikan sidebar
            sidebar.classList.toggle('-translate-x-full');

            // Toggle overlay
            if (overlay.classList.contains('hidden')) {
                overlay.classList.remove('hidden');
                setTimeout(() => {
                    overlay.classList.remove('opacity-0');
                }, 10); // delay dikit biar animasi jalan
            } else {
                overlay.classList.add('opacity-0');
                setTimeout(() => {
                    overlay.classList.add('hidden');
                }, 300); // sesuaikan durasi transition
            }
        }
    </script>

</body>

</html>
