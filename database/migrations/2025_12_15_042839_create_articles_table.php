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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained('users')->comment('ID pengguna pembuat artikel'); // User pembuat
            $table->foreignId('category_id')->constrained('categories')->comment('ID kategori artikel');
            $table->foreignId('division_id')->constrained('divisions')->comment('ID divisi artikel'); // Artikel milik divisi mana

            $table->string('title')->comment('Judul artikel');
            $table->string('slug')->unique()->comment('Slug unik untuk artikel');
            $table->longText('content')->comment('Isi atau konten artikel');

            $table->enum('visibility', ['public', 'internal'])->default('public')->comment('Visibilitas artikel');
            $table->enum('status', ['draft', 'review', 'published', 'archived'])->default('draft')->comment('Status publikasi artikel');
            $table->integer('view_count')->default(0)->comment('Jumlah tampilan artikel');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
