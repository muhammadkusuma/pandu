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
        Schema::create('article_feedback', function (Blueprint $table) {
            $table->id()->comment('ID feedback');
            $table->foreignId('article_id')->constrained('articles')->cascadeOnDelete()->comment('ID artikel terkait feedback');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->comment('ID pengguna yang memberikan feedback');
            $table->boolean('is_helpful')->comment('Apakah artikel ini membantu');
            $table->text('comment')->nullable()->comment('Komentar atau masukan tambahan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_feedback');
    }
};
