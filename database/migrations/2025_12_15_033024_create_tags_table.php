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
        Schema::create('tags', function (Blueprint $table) {
            $table->id()->comment('ID tag');
            $table->string('name')->unique()->comment('Nama tag');
            $table->timestamps();
        });

        // Pivot table untuk Many-to-Many (Article <-> Tag)
        Schema::create('article_tag', function (Blueprint $table) {
            $table->foreignId('article_id')->constrained()->cascadeOnDelete()->comment('ID artikel terkait tag');
            $table->foreignId('tag_id')->constrained()->cascadeOnDelete()->comment('ID tag terkait artikel');
            $table->primary(['article_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('article_tag');
    }
};
