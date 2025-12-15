<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PANDU RS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-100 text-slate-800 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden">
        <div class="bg-blue-600 p-8 text-center">
            <div
                class="bg-white/20 w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4 backdrop-blur-sm text-white">
                <i class="ph ph-first-aid text-4xl"></i>
            </div>
            <h2 class="text-2xl font-bold text-white tracking-tight">PANDU Login</h2>
            <p class="text-blue-100 text-sm mt-1">Masuk untuk mengakses dokumen internal</p>
        </div>

        <div class="p-8">
            <form action="admin-dashboard.html" method="GET">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-slate-700 mb-1">NIP / Email</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                            <i class="ph ph-user"></i>
                        </span>
                        <input type="email" placeholder="contoh@rs-sakit.co.id"
                            class="w-full pl-10 pr-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-slate-700 mb-1">Password</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                            <i class="ph ph-lock-key"></i>
                        </span>
                        <input type="password" placeholder="••••••••"
                            class="w-full pl-10 pr-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2.5 rounded-lg transition shadow-md hover:shadow-lg">
                    Masuk
                </button>
            </form>

            <div class="mt-6 text-center">
                <a href="help.html" class="text-sm text-slate-500 hover:text-blue-600">Lupa password? Hubungi IT</a>
            </div>
        </div>

        <div class="bg-slate-50 px-8 py-4 border-t border-slate-100 text-center">
            <p class="text-xs text-slate-400">Hanya untuk staff aktif Rumah Sakit.</p>
        </div>
    </div>

</body>

</html>
