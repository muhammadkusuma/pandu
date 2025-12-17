@props([
    'icon', 
    'title', 
    'subtitle', 
    'href' => '#',
    'color' => 'blue' // default color
])

@php
    // Mapping warna untuk background dan text icon agar dinamis
    $colors = [
        'blue' => 'bg-blue-50 text-blue-600 hover:border-blue-400',
        'green' => 'bg-green-50 text-green-600 hover:border-green-400',
        'purple' => 'bg-purple-50 text-purple-600 hover:border-purple-400',
        'orange' => 'bg-orange-50 text-orange-600 hover:border-orange-400',
    ];
    $theme = $colors[$color] ?? $colors['blue'];
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'group bg-white p-6 rounded-xl shadow-sm border border-slate-200 hover:shadow-md transition text-center ' . ($color == 'blue' ? 'hover:border-blue-400' : 'hover:border-slate-300')]) }}>
    <div class="w-12 h-12 {{ explode(' ', $theme)[0] }} {{ explode(' ', $theme)[1] }} rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
        <i class="{{ $icon }} text-2xl"></i>
    </div>
    <h4 class="font-semibold text-slate-900 mb-1">{{ $title }}</h4>
    <p class="text-xs text-slate-500">{{ $subtitle }}</p>
</a>