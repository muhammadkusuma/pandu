<header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-4 sm:px-6 z-10 sticky top-0">

    <div class="flex items-center gap-4">
        <button onclick="toggleSidebar()"
            class="md:hidden p-2 -ml-2 text-slate-600 rounded-lg hover:bg-slate-100 transition">
            <i class="ph ph-list text-2xl"></i>
        </button>

        <h2 class="text-lg font-bold text-slate-800 truncate">@yield('header_title', 'Dashboard')</h2>
    </div>

    <div class="flex items-center gap-4">
        <a href="#"
            class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded-lg text-sm font-medium transition shadow-sm">
            <i class="ph ph-plus-bold"></i>
            <span class="hidden sm:inline">Buat Artikel</span>
        </a>
    </div>
</header>
