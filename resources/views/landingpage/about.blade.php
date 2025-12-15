<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang PANDU - RS Prototype</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 flex flex-col min-h-screen">

    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center gap-3">
                    <a href="{{ route('landingpage.index') }}" class="flex items-center gap-3">
                        <div class="bg-blue-600 text-white p-1.5 rounded-lg">
                            <i class="ph ph-first-aid text-2xl"></i>
                        </div>
                        <div>
                            <h1 class="text-xl font-bold text-slate-900 tracking-tight">PANDU</h1>
                        </div>
                    </a>
                </div>
                <div class="flex items-center gap-4">
                    <a href="{{ route('landingpage.about') }}" class="text-sm font-bold text-blue-600">Tentang</a>
                    <a href="{{ route('landingpage.help') }}" class="text-sm font-medium text-slate-600 hover:text-blue-600">Bantuan</a>
                    <a href="{{ route('auth.login') }}"
                        class="bg-white border border-slate-300 text-slate-700 hover:bg-slate-50 px-4 py-2 rounded-lg text-sm font-medium transition">Login
                        Staff</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-4 py-12 flex-grow">
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-slate-900 mb-4">Tentang PANDU</h1>
            <p class="text-lg text-slate-500">Pusat Arsip & Notulensi Terpadu Rumah Sakit</p>
        </div>

        <div class="bg-white p-8 rounded-xl shadow-sm border border-slate-200 mb-8">
            <h2 class="text-xl font-bold text-slate-900 mb-4">Latar Belakang</h2>
            <div class="prose text-slate-600 max-w-none">
                <p class="mb-4">
                    PANDU diinisiasi oleh Divisi Teknologi Informasi sebagai respons terhadap kebutuhan akses informasi
                    yang cepat dan akurat di lingkungan Rumah Sakit. Sistem ini dirancang sebagai <strong>Single Source
                        of Truth</strong> (SSOT) untuk seluruh Standar Operasional Prosedur (SOP), panduan teknis, dan
                    arsip dokumen.
                </p>
                <p>
                    Dimulai sebagai pilot project untuk dokumentasi IT, PANDU kini dikembangkan untuk mendukung seluruh
                    unit kerja medis dan non-medis guna mewujudkan efisiensi pelayanan pasien.
                </p>
            </div>
        </div>

        <h3 class="text-xl font-bold text-slate-900 mb-6 text-center">Tim Pengembang (Divisi IT)</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl border border-slate-200 text-center">
                <div class="w-20 h-20 bg-slate-200 rounded-full mx-auto mb-4 overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name=Kepala+IT&background=0D8ABC&color=fff"
                        alt="Ka instalasi">
                </div>
                <h4 class="font-bold text-slate-900">Dr. Teknik</h4>
                <p class="text-xs text-blue-600 uppercase font-bold tracking-wide mb-2">Kepala Instalasi</p>
                <p class="text-sm text-slate-500">Penanggung Jawab Sistem & Kebijakan.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-slate-200 text-center">
                <div class="w-20 h-20 bg-slate-200 rounded-full mx-auto mb-4 overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name=Wira+Ade&background=0D8ABC&color=fff" alt="Wira">
                </div>
                <h4 class="font-bold text-slate-900">Wira Ade</h4>
                <p class="text-xs text-blue-600 uppercase font-bold tracking-wide mb-2">Lead Developer</p>
                <p class="text-sm text-slate-500">Arsitek Sistem & Fullstack Engineer.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-slate-200 text-center">
                <div class="w-20 h-20 bg-slate-200 rounded-full mx-auto mb-4 overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name=Support+IT&background=0D8ABC&color=fff" alt="Support">
                </div>
                <h4 class="font-bold text-slate-900">Tim Support</h4>
                <p class="text-xs text-blue-600 uppercase font-bold tracking-wide mb-2">Content Writer</p>
                <p class="text-sm text-slate-500">Penulis dokumentasi dan panduan teknis.</p>
            </div>
        </div>
    </main>

    <footer class="bg-slate-900 text-slate-300 py-8 mt-auto">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-xs text-slate-500">&copy; 2023 Instalasi Teknologi Informasi RS.</p>
        </div>
    </footer>
</body>

</html>
