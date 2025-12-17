@extends('layouts.admin')

@section('title', 'Dashboard')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard Overview') }}
    </h2>
@endsection

@section('content')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold">Halo, Nama User Login! 👋</h3>
                    <p class="text-gray-600">Selamat datang kembali di Panel Admin
                        <strong>{{ Auth::user()->division->name ?? 'Umum' }}</strong>. Berikut adalah ringkasan aktivitas
                        sistem hari ini.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-blue-500">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-blue-100 text-blue-500 mr-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm font-medium">Total Artikel</p>
                            <p class="text-2xl font-bold text-gray-800">{{ $stats['total_articles'] ?? 0 }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-yellow-500">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-yellow-100 text-yellow-500 mr-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm font-medium">Menunggu Review</p>
                            <p class="text-2xl font-bold text-gray-800">{{ $stats['pending_review'] ?? 0 }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-green-500">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-green-100 text-green-500 mr-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm font-medium">Total Pembaca</p>
                            <p class="text-2xl font-bold text-gray-800">{{ number_format($stats['total_views'] ?? 0) }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-purple-500">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-purple-100 text-purple-500 mr-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm font-medium">Dokumen Internal</p>
                            <p class="text-2xl font-bold text-gray-800">{{ $stats['internal_docs'] ?? 0 }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <div class="lg:col-span-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                        <h3 class="text-lg font-bold text-gray-800">Artikel Terbaru</h3>
                        <a href="{{ route('articles.create') }}"
                            class="text-sm bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">
                            + Buat Baru
                        </a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-50 text-gray-500 uppercase text-xs font-medium">
                                <tr>
                                    <th class="px-6 py-3 text-left">Judul</th>
                                    <th class="px-6 py-3 text-left">Penulis</th>
                                    <th class="px-6 py-3 text-center">Status</th>
                                    <th class="px-6 py-3 text-center">Akses</th>
                                    <th class="px-6 py-3 text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse($recentArticles as $article)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ Str::limit($article->title, 30) }}</div>
                                            <div class="text-xs text-gray-500">
                                                {{ $article->category->name ?? 'Uncategorized' }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $article->author->full_name }}</div>
                                            <div class="text-xs text-gray-500">{{ $article->division->name ?? '-' }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            @php
                                                $statusClasses = [
                                                    'published' => 'bg-green-100 text-green-800',
                                                    'draft' => 'bg-gray-100 text-gray-800',
                                                    'review' => 'bg-yellow-100 text-yellow-800',
                                                    'archived' => 'bg-red-100 text-red-800',
                                                ];
                                            @endphp
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusClasses[$article->status] ?? 'bg-gray-100' }}">
                                                {{ ucfirst($article->status) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            @if ($article->visibility === 'internal')
                                                <span
                                                    class="px-2 py-1 text-xs font-bold text-purple-700 bg-purple-100 rounded">
                                                    <i class="fas fa-lock mr-1"></i> Rahasia
                                                </span>
                                            @else
                                                <span
                                                    class="px-2 py-1 text-xs font-bold text-blue-700 bg-blue-100 rounded">Publik</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="{{ route('articles.show', $article->slug) }}"
                                                class="text-blue-600 hover:text-blue-900 mr-2">Lihat</a>
                                            {{-- <a href="{{ route('articles.edit', $article->id) }}" class="text-yellow-600 hover:text-yellow-900">Edit</a> --}}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">Belum ada artikel
                                            terbaru.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="space-y-6">

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 border-b border-gray-200">
                            <h3 class="text-lg font-bold text-gray-800">🔥 Paling Banyak Dibaca</h3>
                        </div>
                        <ul class="divide-y divide-gray-200">
                            @forelse($popularArticles as $article)
                                <li class="p-4 hover:bg-gray-50 transition">
                                    <a href="{{ route('articles.show', $article->slug) }}"
                                        class="flex justify-between items-start">
                                        <div>
                                            <p class="text-sm font-medium text-gray-900 line-clamp-2">
                                                {{ $article->title }}</p>
                                            <p class="text-xs text-gray-500 mt-1">
                                                {{ $article->created_at->diffForHumans() }}</p>
                                        </div>
                                        <span class="text-xs font-bold text-gray-500 bg-gray-100 px-2 py-1 rounded-full">
                                            {{ $article->view_count }}x
                                        </span>
                                    </a>
                                </li>
                            @empty
                                <li class="p-4 text-sm text-gray-500 text-center">Belum ada data populer.</li>
                            @endforelse
                        </ul>
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Divisi Anda</h3>
                        <div class="flex items-center space-x-3 mb-4">
                            <div
                                class="h-10 w-10 rounded-full bg-indigo-500 flex items-center justify-center text-white font-bold text-xl">
                                {{ substr(Auth::user()->division->name ?? 'G', 0, 1) }}
                            </div>
                            <div>
                                <p class="text-gray-900 font-medium">{{ Auth::user()->division->name ?? 'General' }}</p>
                                <p class="text-gray-500 text-xs">{{ Auth::user()->division->code ?? 'GEN' }}</p>
                            </div>
                        </div>
                        <div class="text-sm text-gray-600">
                            <p class="mb-1"><strong>Role Anda:</strong> Role</p>
                            <p><strong>Status:</strong> <span class="text-green-600">Aktif</span></p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
