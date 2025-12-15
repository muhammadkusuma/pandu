<aside id="sidebar"
    class="fixed inset-y-0 left-0 z-30 w-64 bg-slate-900 text-slate-300 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out flex flex-col h-screen shadow-xl">

    <div class="h-16 flex items-center justify-between px-6 border-b border-slate-800 bg-slate-900 flex-shrink-0">
        <div class="flex items-center gap-2 text-white">
            <i class="ph ph-first-aid text-2xl text-blue-500"></i>
            <span class="font-bold text-lg tracking-wide">PANDU <span
                    class="text-xs text-blue-500 bg-blue-500/10 px-1 rounded">ADM</span></span>
        </div>

        <button onclick="toggleSidebar()" class="md:hidden text-slate-400 hover:text-white transition">
            <i class="ph ph-x text-2xl"></i>
        </button>
    </div>

    <nav class="flex-1 px-3 py-6 space-y-1 overflow-y-auto">
        <p class="px-3 text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Utama</p>

        <a href="#"
            class="flex items-center gap-3 px-3 py-2 rounded-lg bg-blue-600 text-white font-medium transition">
            <i class="ph ph-squares-four text-xl"></i> Dashboard
        </a>

        <a href="#"
            class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-slate-800 hover:text-white transition group">
            <i class="ph ph-article text-xl group-hover:text-blue-400"></i> Artikel Saya
        </a>

        <div class="my-4 border-t border-slate-800"></div>

        <p class="px-3 text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2 mt-2">Data</p>
        <a href="#"
            class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-slate-800 hover:text-white transition group">
            <i class="ph ph-tag text-xl group-hover:text-blue-400"></i> Kategori
        </a>
    </nav>

    <div class="p-4 border-t border-slate-800 flex-shrink-0 bg-slate-900">
        <div class="flex items-center gap-3">
            <img src="https://ui-avatars.com/api/?name=Wira+Ade&background=0D8ABC&color=fff"
                class="w-9 h-9 rounded-full bg-slate-700" alt="Avatar">
            <div class="flex-1 min-w-0">
                <p class="text-sm font-medium text-white truncate">Wira Ade</p>
                <p class="text-xs text-slate-500 truncate">IT Staff</p>
            </div>
            <a href="{{ url('/') }}" class="text-slate-400 hover:text-white" title="Logout">
                <i class="ph ph-sign-out text-xl"></i>
            </a>
        </div>
    </div>
</aside>
