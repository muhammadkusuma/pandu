<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantuan - PANDU RS</title>
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
                        <div class="bg-blue-600 text-white p-1.5 rounded-lg"><i class="ph ph-first-aid text-2xl"></i>
                        </div>
                        <h1 class="text-xl font-bold text-slate-900 tracking-tight">PANDU</h1>
                    </a>
                </div>
                <div class="flex items-center gap-4">
                    <a href="{{ route('landingpage.about') }}" class="text-sm font-medium text-slate-600 hover:text-blue-600">Tentang</a>
                    <a href="{{ route('landingpage.help') }}" class="text-sm font-bold text-blue-600">Bantuan</a>
                    <a href="{{ route('auth.login') }}"
                        class="bg-white border border-slate-300 text-slate-700 hover:bg-slate-50 px-4 py-2 rounded-lg text-sm font-medium transition">Login
                        Staff</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-3xl mx-auto px-4 py-12 flex-grow">
        <div class="text-center mb-10">
            <h1 class="text-2xl font-bold text-slate-900">Pusat Bantuan</h1>
            <p class="text-slate-500">Pertanyaan yang sering diajukan (FAQ)</p>
        </div>

        <div class="space-y-4">
            <div class="bg-white border border-slate-200 rounded-lg p-5">
                <h3 class="font-bold text-slate-900 mb-2 flex items-center gap-2">
                    <i class="ph ph-question text-blue-600"></i> Saya lupa password akun PANDU?
                </h3>
                <p class="text-slate-600 text-sm">
                    Untuk alasan keamanan, reset password hanya bisa dilakukan oleh Admin IT. Silakan hubungi ekstensi
                    <strong>119</strong> atau datang ke ruangan IT di Gedung A Lantai 2.
                </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-lg p-5">
                <h3 class="font-bold text-slate-900 mb-2 flex items-center gap-2">
                    <i class="ph ph-wifi-slash text-blue-600"></i> Bagaimana cara lapor internet mati?
                </h3>
                <p class="text-slate-600 text-sm">
                    Cek terlebih dahulu lampu indikator pada modem di ruangan Anda. Jika lampu merah, silakan buat tiket
                    pelaporan melalui menu "Kategori IT > Jaringan" atau WA ke Helpdesk IT.
                </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-lg p-5">
                <h3 class="font-bold text-slate-900 mb-2 flex items-center gap-2">
                    <i class="ph ph-file-lock text-blue-600"></i> Kenapa saya tidak bisa akses dokumen tertentu?
                </h3>
                <p class="text-slate-600 text-sm">
                    Beberapa dokumen memiliki status <strong>Internal</strong> yang hanya bisa diakses oleh divisi
                    terkait. Jika Anda merasa butuh akses, mintalah persetujuan Kepala Ruangan untuk diajukan ke IT.
                </p>
            </div>
        </div>

        <div
            class="mt-10 bg-blue-50 border border-blue-100 rounded-xl p-6 flex flex-col md:flex-row items-center justify-between gap-4">
            <div>
                <h4 class="font-bold text-blue-900">Masih butuh bantuan?</h4>
                <p class="text-sm text-blue-700">Tim IT siap membantu 24 Jam untuk kendala SIMRS.</p>
            </div>
            <div class="flex gap-3">
                <a href="#"
                    class="bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-green-700 flex items-center gap-2">
                    <i class="ph ph-whatsapp-logo text-lg"></i> WA Helpdesk
                </a>
                <a href="#"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 flex items-center gap-2">
                    <i class="ph ph-phone text-lg"></i> Ext. 119
                </a>
            </div>
        </div>
    </main>

    <footer class="bg-slate-900 text-slate-300 py-6 mt-auto text-center text-xs">
        &copy; 2023 Instalasi Teknologi Informasi RS.
    </footer>
</body>

</html>
