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
        Schema::create('opd_configs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('opd_id')                         // FK ke OPD
                ->constrained('opds')
                ->cascadeOnDelete();                          // Hapus config jika OPD dihapus
            $table->foreignId('template_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('theme_color', 50)->nullable();      // Warna tema OPD
            $table->string('banner_image')->nullable();         // Banner homepage
            $table->string('favicon')->nullable();              // Favicon OPD
            $table->string('homepage_layout', 100)->nullable(); // Layout homepage
            $table->json('extra_settings')->nullable();         // Pengaturan tambahan (jika perlu)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opd_configs');
    }
};