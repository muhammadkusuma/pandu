@props(['category', 'categoryColor' => 'blue', 'date', 'title', 'excerpt', 'author', 'views', 'href' => '#'])

@php
    $badgeColors = [
        'blue' => 'bg-blue-100 text-blue-700',
        'green' => 'bg-green-100 text-green-700',
        'yellow' => 'bg-yellow-100 text-yellow-700',
        'red' => 'bg-red-100 text-red-700',
    ];
    $badgeClass = $badgeColors[$categoryColor] ?? $badgeColors['blue'];
@endphp

<article
    class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-md transition flex flex-col h-full">
    <div class="p-5 flex-1">
        <div class="flex items-center gap-2 mb-3">
            <span
                class="{{ $badgeClass }} text-[10px] font-bold px-2 py-0.5 rounded uppercase">{{ $category }}</span>
            <span class="text-xs text-slate-400 flex items-center gap-1"><i class="ph ph-clock"></i>
                {{ $date }}</span>
        </div>
        <h4 class="font-bold text-slate-900 mb-2 leading-snug">
            <a href="{{ $href }}" class="hover:text-blue-600">{{ $title }}</a>
        </h4>
        <p class="text-sm text-slate-500 line-clamp-3">
            {{ $excerpt }}
        </p>
    </div>
    <div class="px-5 py-3 border-t border-slate-100 bg-slate-50 flex items-center justify-between">
        <div class="flex items-center gap-2">
            <div
                class="w-6 h-6 rounded-full bg-slate-300 overflow-hidden flex items-center justify-center text-[10px] font-bold text-slate-600">
                {{ substr($author, 0, 1) }}
            </div>
            <span class="text-xs font-medium text-slate-600">{{ $author }}</span>
        </div>
        <span class="text-xs text-slate-400 flex items-center gap-1"><i class="ph ph-eye"></i>
            {{ $views }}</span>
    </div>
</article>
