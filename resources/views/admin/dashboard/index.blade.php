@extends('layouts.admin')

@section('title', 'Dashboard Overview')
@section('header_title', 'Dashboard Overview')

@section('content')

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8">

        <div class="bg-white p-5 rounded-xl shadow-sm border border-slate-200 flex items-center justify-between">
            <div>
                <p class="text-xs text-slate-500 font-semibold uppercase tracking-wide">Total Artikel</p>
                <h3 class="text-2xl font-bold text-slate-900 mt-1">124</h3>
            </div>
            <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center text-2xl"><i
                    class="ph ph-files"></i></div>
        </div>

    </div>

    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
        <div
            class="px-4 sm:px-6 py-4 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <h3 class="font-bold text-slate-900">Artikel Terbaru</h3>
            <div class="w-full sm:w-auto">
                <input type="text" placeholder="Cari..."
                    class="w-full sm:w-64 text-sm border border-slate-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 transition">
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-slate-600 min-w-[600px]">
                <thead class="bg-slate-50 text-slate-900 font-semibold border-b border-slate-200">
                    <tr>
                        <th class="px-6 py-3 whitespace-nowrap">Judul Artikel</th>
                        <th class="px-6 py-3 whitespace-nowrap">Kategori</th>
                        <th class="px-6 py-3 whitespace-nowrap">Status</th>
                        <th class="px-6 py-3 whitespace-nowrap text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-6 py-4 font-medium text-slate-900">
                            <div class="line-clamp-1">Cara Mengatasi Error Connection Timeout</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">Troubleshooting</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-full flex w-fit items-center gap-1">Published</span>
                        </td>
                        <td class="px-6 py-4 text-right whitespace-nowrap space-x-2">
                            <button class="text-blue-600 font-medium">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="px-6 py-4 border-t border-slate-100 text-xs text-slate-500 flex justify-between items-center">
            <span>Showing 1-5</span>
            <div class="flex gap-2">
                <button class="px-2 py-1 border rounded hover:bg-slate-50">Prev</button>
                <button class="px-2 py-1 border rounded hover:bg-slate-50">Next</button>
            </div>
        </div>
    </div>

@endsection
