<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PANDU - RS Prototype')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
    @stack('styles')
</head>

<body class="bg-slate-50 text-slate-800 flex flex-col min-h-screen">

    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center gap-3">
                    <a href="{{ url('/') }}" class="flex items-center gap-3">
                        <div class="bg-blue-600 text-white p-1.5 rounded-lg"><i class="ph ph-first-aid text-2xl"></i>
                        </div>
                        <h1 class="text-xl font-bold text-slate-900 tracking-tight">PANDU</h1>
                    </a>
                </div>
                <div class="flex items-center gap-4">
                    <a href="{{ url('/about') }}"
                        class="text-sm font-medium text-slate-600 hover:text-blue-600">Tentang</a>
                    <a href="{{ url('/help') }}"
                        class="text-sm font-medium text-slate-600 hover:text-blue-600">Bantuan</a>
                    <a href="{{ url('/login') }}"
                        class="bg-white border border-slate-300 text-slate-700 hover:bg-slate-50 px-4 py-2 rounded-lg text-sm font-medium transition">Login
                        Staff</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-slate-900 text-slate-300 py-8 mt-auto">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-xs text-slate-500">&copy; {{ date('Y') }} Instalasi Teknologi Informasi RS.</p>
        </div>
    </footer>

</body>

</html>
