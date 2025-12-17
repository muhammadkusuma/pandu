<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('landingpage.index');

Route::get('/about', function () {
    return view('landingpage.about');
})->name('landingpage.about');

Route::get('/help', function () {
    return view('landingpage.help');
})->name('landingpage.help');

Route::get('/login', function () {
    return view('auth.login');
})->name('auth.login');

Route::get('/artikel', function () {
    return view('articles.show');
})->name('articles.show');

Route::get('/dashboard', function () {
    // 1. Statistik Cards
    $stats = [
        'total_articles' => Article::count(),
        'pending_review' => Article::where('status', 'review')->count(),
        'total_views'    => Article::sum('view_count'),
        'internal_docs'  => Article::where('visibility', 'internal')->count(),
    ];

    // 2. Artikel Terbaru (List Table) - Ambil 5 terakhir
    $recentArticles = Article::with(['author', 'category', 'division'])
        ->latest()
        ->take(5)
        ->get();

    // 3. Artikel Populer (Sidebar Kanan) - Ambil 5 teratas berdasarkan view
    $popularArticles = Article::orderBy('view_count', 'desc')
        ->where('status', 'published') // Hanya yang publish
        ->take(5)
        ->get();
    return view('admin.dashboard.index', compact('stats', 'recentArticles', 'popularArticles'));
})->name('dashboard.index');
Route::get('/create', function () {
    return view('admin.articles.create');
})->name('articles.create');
