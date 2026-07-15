<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('albums', function (Blueprint $table) {
        // Menambahkan kolom spotify_link yang boleh kosong (nullable)
        $table->string('spotify_link')->nullable()->after('cover_image');
    });
}

public function down()
{
    Schema::table('albums', function (Blueprint $table) {
        $table->dropColumn('spotify_link');
    });
}
};
