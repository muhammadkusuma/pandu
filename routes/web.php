<?php

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
    return view('admin.dashboard.index');
})->name('dashboard.index');
Route::get('/create', function () {
    return view('admin.articles.create');
})->name('articles.create');