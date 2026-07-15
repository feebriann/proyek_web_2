<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            // Menghubungkan review dengan akun user (jika user dihapus, review ikut terhapus)
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // Menghubungkan review dengan album (jika album dihapus, review ikut terhapus)
            $table->foreignId('album_id')->constrained()->onDelete('cascade');
            $table->text('comment');
            $table->integer('rating');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};