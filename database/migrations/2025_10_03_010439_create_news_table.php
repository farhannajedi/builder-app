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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('opd_id')->constrained('opds')->cascadeOnDelete();
            $table->foreignId('category_id')->constrained('news_categories')->cascadeOnDelete();
            $table->string('title');                             // Judul berita
            $table->string('slug')->unique();                    // Slug untuk URL berita
            $table->longText('content');                              // Isi berita
            $table->json('images')->nullable();              // Gambar 
            $table->date('published_at')->nullable();        // Waktu terbit berita
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
