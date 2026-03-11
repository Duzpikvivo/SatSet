<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Nama file: database/migrations/2024_01_01_000001_create_layanans_table.php

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug')->unique();
            $table->string('kategori');              // "AC", "Elektronik Dapur", dll
            $table->string('deskripsi_singkat');
            $table->text('deskripsi_lengkap')->nullable();
            $table->string('gambar')->nullable();    // path di storage/
            $table->unsignedInteger('harga_mulai')->default(0);
            $table->string('satuan_harga')->default('per unit');
            $table->string('estimasi_waktu')->default('1–2 jam');
            $table->json('tags')->nullable();        // ["AC Split", "AC Cassette"]
            $table->json('cakupan')->nullable();     // ["Cuci indoor", "Cek freon"]
            $table->boolean('is_aktif')->default(true);
            $table->unsignedTinyInteger('urutan')->default(99);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('layanans');
    }
};