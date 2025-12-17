<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1. Tabel Pivot untuk User Spesifik (Misal: User A dari divisi lain boleh lihat)
        Schema::create('article_allowed_users', function (Blueprint $table) {
            $table->id();
            // Hubungkan ke tabel articles, hapus data jika artikel dihapus
            $table->foreignId('article_id')->constrained('articles')->cascadeOnDelete();
            // Hubungkan ke tabel users, hapus data jika user dihapus
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->timestamps();

            // Mencegah duplikasi data (satu user tidak bisa di-input 2x untuk artikel yang sama)
            $table->unique(['article_id', 'user_id']);
        });

        // 2. Tabel Pivot untuk Divisi Spesifik (Misal: Share dokumen HRD ke divisi Finance)
        Schema::create('article_allowed_divisions', function (Blueprint $table) {
            $table->id();
            // Hubungkan ke tabel articles
            $table->foreignId('article_id')->constrained('articles')->cascadeOnDelete();
            // Hubungkan ke tabel divisions
            $table->foreignId('division_id')->constrained('divisions')->cascadeOnDelete();
            $table->timestamps();

            // Mencegah duplikasi data
            $table->unique(['article_id', 'division_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_allowed_users');
        Schema::dropIfExists('article_allowed_divisions');
    }
};
