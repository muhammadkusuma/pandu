@extends('layouts.app')

@section('content')
    <x-landing.hero>
        <a href="#"
            class="inline-block bg-slate-100 hover:bg-slate-200 px-2 py-1 rounded text-slate-600 text-xs transition mb-2">#ResetPassword</a>
        <a href="#"
            class="inline-block bg-slate-100 hover:bg-slate-200 px-2 py-1 rounded text-slate-600 text-xs transition mb-2">#PrinterEpson</a>
        <a href="#"
            class="inline-block bg-slate-100 hover:bg-slate-200 px-2 py-1 rounded text-slate-600 text-xs transition mb-2">#VPN</a>
    </x-landing.hero>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h3 class="text-lg font-bold text-slate-900 mb-6 flex items-center gap-2">
            <i class="ph ph-squares-four text-blue-600"></i> Kategori Divisi IT
        </h3>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <x-landing.category-card icon="ph-desktop" title="Hardware & PC" subtitle="Printer, Monitor, CPU"
                color="blue" />

            <x-landing.category-card icon="ph-wifi-high" title="Jaringan & WiFi" subtitle="Internet, LAN, VPN"
                color="green" />

            <x-landing.category-card icon="ph-first-aid-kit" title="Aplikasi SIMRS" subtitle="E-Resep, Data Pasien"
                color="purple" />

            <x-landing.category-card icon="ph-lock-key" title="Akun & Keamanan" subtitle="Password, Antivirus"
                color="orange" />
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

                <x-landing.article-card category="SIMRS" categoryColor="blue" date="2 hari lalu"
                    title='Cara Mengatasi Error "Connection Timeout"'
                    excerpt="Jika muncul pesan error timeout saat input resep, lakukan langkah pengecekan ping..."
                    author="Wira (IT)" views="124" />

                <x-landing.article-card category="Jaringan" categoryColor="green" date="1 minggu lalu"
                    title="Panduan Menghubungkan Laptop ke WiFi Staff"
                    excerpt="Staff medis dapat menggunakan jaringan khusus. Pastikan sertifikat SSL sudah terinstall..."
                    author="Support IT" views="890" />

                <x-landing.article-card category="SOP" categoryColor="yellow" date="1 bulan lalu"
                    title="Prosedur Permintaan Perbaikan Hardware"
                    excerpt="Jangan menghubungi staff IT via WhatsApp pribadi. Gunakan formulir Work Order digital..."
                    author="Ka. Instalasi" views="2.1k" />

            </div>
        </div>
    </section>
@endsection
