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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            // Jika null = Kategori Global (bisa dilihat semua divisi)
            $table->foreignId('division_id')->nullable()->constrained('divisions')->cascadeOnDelete()->comment('ID divisi terkait kategori');
            $table->string('name')->comment('Nama kategori');
            $table->string('slug')->unique()->comment('Slug unik untuk kategori');
            $table->text('description')->nullable()->comment('Deskripsi atau keterangan tambahan tentang kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
