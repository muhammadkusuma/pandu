<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANDU - Pusat Arsip & Notulensi Terpadu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800">

    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center gap-3">
                    <div class="bg-blue-600 text-white p-1.5 rounded-lg">
                        <i class="ph ph-first-aid text-2xl"></i>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-slate-900 tracking-tight">PANDU</h1>
                        <p class="text-[10px] text-slate-500 uppercase tracking-wider font-semibold">RS.XYZ</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <a href="{{ route('landingpage.about') }}" class="text-sm font-medium text-slate-600 hover:text-blue-600 hidden md:block">Tentang</a>
                    <a href="{{ route('landingpage.help') }}" class="text-sm font-medium text-slate-600 hover:text-blue-600 hidden md:block">Bantuan</a>
                    <a href="{{ route('auth.login') }}" class="bg-white border border-slate-300 text-slate-700 hover:bg-slate-50 px-4 py-2 rounded-lg text-sm font-medium transition">
                        Login Staff
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <header class="bg-white pb-16 pt-12 border-b border-slate-200">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Apa yang bisa kami bantu?</h2>
            <p class="text-slate-500 mb-8 text-lg">Cari SOP, panduan troubleshooting IT, dan arsip dokumen RS.</p>
            
            <div class="relative max-w-2xl mx-auto shadow-lg rounded-xl">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="ph ph-magnifying-glass text-slate-400 text-xl"></i>
                </div>
                <input type="text" 
                    class="block w-full pl-12 pr-4 py-4 rounded-xl border-0 ring-1 ring-slate-200 focus:ring-2 focus:ring-blue-500 text-slate-900 placeholder:text-slate-400 sm:text-lg" 
                    placeholder="Contoh: 'Printer macet', 'Cara login WiFi', 'Lupa password SIMRS'...">
                <div class="absolute inset-y-0 right-2 flex items-center">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition">
                        Cari
                    </button>
                </div>
            </div>

            <div class="mt-4 text-sm text-slate-500">
                <span class="mr-2">Sering dicari:</span>
                <a href="#" class="inline-block bg-slate-100 hover:bg-slate-200 px-2 py-1 rounded text-slate-600 text-xs transition mb-2">#ResetPassword</a>
                <a href="#" class="inline-block bg-slate-100 hover:bg-slate-200 px-2 py-1 rounded text-slate-600 text-xs transition mb-2">#PrinterEpson</a>
                <a href="#" class="inline-block bg-slate-100 hover:bg-slate-200 px-2 py-1 rounded text-slate-600 text-xs transition mb-2">#VPN</a>
                <a href="#" class="inline-block bg-slate-100 hover:bg-slate-200 px-2 py-1 rounded text-slate-600 text-xs transition mb-2">#AbsensiOnline</a>
            </div>
        </div>
    </header>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h3 class="text-lg font-bold text-slate-900 mb-6 flex items-center gap-2">
            <i class="ph ph-squares-four text-blue-600"></i> Kategori Divisi IT
        </h3>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <a href="#" class="group bg-white p-6 rounded-xl shadow-sm border border-slate-200 hover:border-blue-400 hover:shadow-md transition text-center">
                <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <i class="ph ph-desktop text-2xl"></i>
                </div>
                <h4 class="font-semibold text-slate-900 mb-1">Hardware & PC</h4>
                <p class="text-xs text-slate-500">Printer, Monitor, CPU</p>
            </a>

            <a href="#" class="group bg-white p-6 rounded-xl shadow-sm border border-slate-200 hover:border-blue-400 hover:shadow-md transition text-center">
                <div class="w-12 h-12 bg-green-50 text-green-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <i class="ph ph-wifi-high text-2xl"></i>
                </div>
                <h4 class="font-semibold text-slate-900 mb-1">Jaringan & WiFi</h4>
                <p class="text-xs text-slate-500">Internet, LAN, VPN</p>
            </a>

            <a href="#" class="group bg-white p-6 rounded-xl shadow-sm border border-slate-200 hover:border-blue-400 hover:shadow-md transition text-center">
                <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <i class="ph ph-first-aid-kit text-2xl"></i>
                </div>
                <h4 class="font-semibold text-slate-900 mb-1">Aplikasi SIMRS</h4>
                <p class="text-xs text-slate-500">E-Resep, Data Pasien, Error</p>
            </a>

            <a href="#" class="group bg-white p-6 rounded-xl shadow-sm border border-slate-200 hover:border-blue-400 hover:shadow-md transition text-center">
                <div class="w-12 h-12 bg-orange-50 text-orange-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <i class="ph ph-lock-key text-2xl"></i>
                </div>
                <h4 class="font-semibold text-slate-900 mb-1">Akun & Keamanan</h4>
                <p class="text-xs text-slate-500">Password, Email, Antivirus</p>
            </a>
        </div>
    </section>

    <section class="bg-slate-50 border-t border-slate-200 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-bold text-slate-900 flex items-center gap-2">
                    <i class="ph ph-files text-blue-600"></i> Panduan Terbaru
                </h3>
                <a href="#" class="text-sm text-blue-600 font-medium hover:underline">Lihat Semua →</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <article class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-md transition flex flex-col h-full">
                    <div class="p-5 flex-1">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-blue-100 text-blue-700 text-[10px] font-bold px-2 py-0.5 rounded uppercase">SIMRS</span>
                            <span class="text-xs text-slate-400 flex items-center gap-1"><i class="ph ph-clock"></i> 2 hari lalu</span>
                        </div>
                        <h4 class="font-bold text-slate-900 mb-2 leading-snug">
                            <a href="article.html" class="hover:text-blue-600">Cara Mengatasi Error "Connection Timeout" pada SIMRS Khanza</a>
                        </h4>
                        <p class="text-sm text-slate-500 line-clamp-3">
                            Jika muncul pesan error timeout saat input resep, lakukan langkah pengecekan ping ke server lokal sebelum memanggil IT...
                        </p>
                    </div>
                    <div class="px-5 py-3 border-t border-slate-100 bg-slate-50 flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 rounded-full bg-slate-300 overflow-hidden">
                                <img src="https://ui-avatars.com/api/?name=Wira+Ade&background=random" alt="Avatar">
                            </div>
                            <span class="text-xs font-medium text-slate-600">Wira (IT)</span>
                        </div>
                        <span class="text-xs text-slate-400 flex items-center gap-1"><i class="ph ph-eye"></i> 124</span>
                    </div>
                </article>

                <article class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-md transition flex flex-col h-full">
                    <div class="p-5 flex-1">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-green-100 text-green-700 text-[10px] font-bold px-2 py-0.5 rounded uppercase">Jaringan</span>
                            <span class="text-xs text-slate-400 flex items-center gap-1"><i class="ph ph-clock"></i> 1 minggu lalu</span>
                        </div>
                        <h4 class="font-bold text-slate-900 mb-2 leading-snug">
                            <a href="article.html" class="hover:text-blue-600">Panduan Menghubungkan Laptop Pribadi ke WiFi Staff-RS</a>
                        </h4>
                        <p class="text-sm text-slate-500 line-clamp-3">
                            Staff medis dapat menggunakan jaringan khusus. Pastikan sertifikat SSL sudah terinstall di browser Anda...
                        </p>
                    </div>
                    <div class="px-5 py-3 border-t border-slate-100 bg-slate-50 flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 rounded-full bg-slate-300 overflow-hidden">
                                <img src="https://ui-avatars.com/api/?name=Admin+IT&background=random" alt="Avatar">
                            </div>
                            <span class="text-xs font-medium text-slate-600">Support IT</span>
                        </div>
                        <span class="text-xs text-slate-400 flex items-center gap-1"><i class="ph ph-eye"></i> 890</span>
                    </div>
                </article>

                <article class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-md transition flex flex-col h-full">
                    <div class="p-5 flex-1">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-yellow-100 text-yellow-700 text-[10px] font-bold px-2 py-0.5 rounded uppercase">SOP</span>
                            <span class="text-xs text-slate-400 flex items-center gap-1"><i class="ph ph-clock"></i> 1 bulan lalu</span>
                        </div>
                        <h4 class="font-bold text-slate-900 mb-2 leading-snug">
                            <a href="article.html" class="hover:text-blue-600">Prosedur Permintaan Perbaikan Hardware (Work Order)</a>
                        </h4>
                        <p class="text-sm text-slate-500 line-clamp-3">
                            Jangan menghubungi staff IT via WhatsApp pribadi. Gunakan formulir Work Order digital agar tercatat di sistem...
                        </p>
                    </div>
                    <div class="px-5 py-3 border-t border-slate-100 bg-slate-50 flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 rounded-full bg-slate-300 overflow-hidden">
                                <img src="https://ui-avatars.com/api/?name=Kepala+IT&background=random" alt="Avatar">
                            </div>
                            <span class="text-xs font-medium text-slate-600">Ka. Instalasi</span>
                        </div>
                        <span class="text-xs text-slate-400 flex items-center gap-1"><i class="ph ph-eye"></i> 2.1k</span>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <footer class="bg-slate-900 text-slate-300 py-8 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="text-center md:text-left">
                <h5 class="text-white font-bold text-lg tracking-tight">PANDU</h5>
                <p class="text-xs text-slate-500">Sistem Manajemen Pengetahuan Rumah Sakit</p>
            </div>
            <div class="text-sm text-slate-500 text-center md:text-right">
                &copy; 2025 Divisi IT RS. XYZ<br>
                Internal Use Only.
            </div>
        </div>
    </footer>

</body>
</html>