<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Nama file: database/migrations/2024_01_01_000002_create_pesanan_servis_table.php

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pesanan_servis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('telepon', 20);
            $table->string('alamat');
            $table->string('layanan');
            $table->text('keluhan')->nullable();
            $table->enum('status', ['baru', 'dikonfirmasi', 'selesai', 'dibatalkan'])
                  ->default('baru');
            $table->string('paket')->nullable();     // dari ?paket=standar di URL
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanan_servis');
    }
};