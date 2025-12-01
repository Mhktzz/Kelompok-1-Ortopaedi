<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('resep_obat', function (Blueprint $table) {
            $table->id(); // PK

            $table->string('kode_resep')->unique();
            $table->date('tanggal')->nullable();
            $table->string('nama_dokter');
            $table->string('nama_pasien');
            $table->text('catatan')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('resep_obat');
    }
};
