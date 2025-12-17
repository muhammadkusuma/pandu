@extends('layouts.app')

@section('title', 'Pusat Bantuan - PANDU')

@section('content')
    <x-landing.hero title="Pusat Bantuan" subtitle="Ketik kendala Anda di bawah atau cari topik manual." :showSearch="true">
        <span class="text-slate-400 text-xs">Topik populer: Lupa Password, Printer Offline, BPJS Error</span>
    </x-landing.hero>

    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <h3 class="text-xl font-bold text-slate-900 mb-8 text-center">Pertanyaan Umum (FAQ)</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-xl border border-slate-200 hover:border-blue-400 transition">
                <div class="flex gap-4">
                    <div class="flex-shrink-0 mt-1">
                        <i class="ph ph-question text-blue-600 text-xl"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 mb-2">Bagaimana cara reset password SIMRS?</h4>
                        <p class="text-sm text-slate-600 mb-3">
                            Anda tidak bisa reset sendiri. Harap minta Kepala Ruangan untuk membuat surat permintaan reset
                            ke IT.
                        </p>
                        <a href="#" class="text-sm text-blue-600 font-medium hover:underline">Baca selengkapnya →</a>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-xl border border-slate-200 hover:border-blue-400 transition">
                <div class="flex gap-4">
                    <div class="flex-shrink-0 mt-1">
                        <i class="ph ph-wifi-slash text-red-500 text-xl"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 mb-2">WiFi "Staff-RS" tidak bisa connect?</h4>
                        <p class="text-sm text-slate-600 mb-3">
                            Pastikan Anda sudah login menggunakan NIP dan password default (tanggal lahir ddmmyyyy).
                        </p>
                        <a href="#" class="text-sm text-blue-600 font-medium hover:underline">Lihat panduan koneksi
                            →</a>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-xl border border-slate-200 hover:border-blue-400 transition">
                <div class="flex gap-4">
                    <div class="flex-shrink-0 mt-1">
                        <i class="ph ph-printer text-orange-500 text-xl"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 mb-2">Printer macet / kertas nyangkut?</h4>
                        <p class="text-sm text-slate-600 mb-3">
                            Jangan paksa tarik kertas! Buka cover depan dan tarik perlahan sesuai arah roda gigi.
                        </p>
                        <a href="#" class="text-sm text-blue-600 font-medium hover:underline">Video Tutorial →</a>
                    </div>
                </div>
            </div>

            <div class="bg-blue-50 p-6 rounded-xl border border-blue-100 flex items-center justify-center text-center">
                <div>
                    <i class="ph ph-headset text-4xl text-blue-600 mb-3"></i>
                    <h4 class="font-bold text-slate-900">Masih butuh bantuan?</h4>
                    <p class="text-sm text-slate-600 mb-4">Hubungi Helpdesk IT langsung.</p>
                    <a href="https://wa.me/628123456789"
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 transition">
                        Chat WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
