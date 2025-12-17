@extends('layouts.app')

@section('title', 'Tentang PANDU - RS XYZ')

@section('content')
    <x-landing.hero title="Tentang PANDU" subtitle="Sistem Manajemen Pengetahuan & Arsip Digital RS XYZ" :showSearch="false" />

    <section class="max-w-4xl mx-auto px-4 sm:px-6 md:px-8 py-16">
        <div class="prose prose-md prose-slate mx-auto">
            <h3>Visi & Misi</h3>
            <p>
                PANDU (Pusat Arsip & Notulensi Terpadu) dikembangkan oleh Instalasi Teknologi Informasi RS XYZ
                untuk mempermudah seluruh staff dalam mengakses informasi, SOP, dan panduan teknis secara mandiri
                dan terpusat.
            </p>

            <h3>Fitur Utama</h3>
            <ul class="list-disc pl-5 space-y-2 text-slate-600">
                <li><strong>Bank Pengetahuan:</strong> Akses ribuan artikel panduan troubleshooting IT.</li>
                <li><strong>Arsip Digital:</strong> Penyimpanan notulensi rapat dan dokumen resmi yang aman.</li>
                <li><strong>Tiket Layanan:</strong> Integrasi dengan sistem pelaporan kendala (Work Order).</li>
            </ul>

            <div class="bg-blue-50 border-l-4 border-blue-600 p-6 my-8 rounded-r-lg">
                <h4 class="text-blue-900 font-bold mb-2">Butuh Akses Lebih?</h4>
                <p class="text-blue-800 text-sm">
                    Jika Anda adalah Kepala Ruangan atau Manajemen yang membutuhkan akses ke arsip rahasia,
                    silakan hubungi Admin IT di Ekstensi <strong>101</strong>.
                </p>
            </div>
        </div>
    </section>
@endsection
