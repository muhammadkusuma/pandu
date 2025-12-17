@props([
    'title' => 'Apa yang bisa kami bantu?',
    'subtitle' => 'Cari SOP, panduan troubleshooting IT, dan arsip dokumen RS.',
    'showSearch' => true,
])

<header class="bg-white pb-16 pt-12 border-b border-slate-200">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">{{ $title }}</h2>
        <p class="text-slate-500 mb-8 text-lg">{{ $subtitle }}</p>

        @if ($showSearch)
            <div class="relative max-w-2xl mx-auto shadow-lg rounded-xl mb-8">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="ph ph-magnifying-glass text-slate-400 text-xl"></i>
                </div>
                <input type="text"
                    class="block w-full pl-12 pr-4 py-4 rounded-xl border-0 ring-1 ring-slate-200 focus:ring-2 focus:ring-blue-500 text-slate-900 placeholder:text-slate-400 sm:text-lg"
                    placeholder="Contoh: 'Printer macet', 'Cara login WiFi'...">
                <div class="absolute inset-y-0 right-2 flex items-center">
                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition">
                        Cari
                    </button>
                </div>
            </div>
        @endif

        <div class="mt-4 text-sm text-slate-500">
            {{ $slot }}
        </div>
    </div>
</header>
