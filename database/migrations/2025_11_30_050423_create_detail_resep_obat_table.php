<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detail_obat', function (Blueprint $table) {
            $table->id();

            // Foreign key ke resep_obat
            $table->unsignedBigInteger('resep_obat_id');
            $table->foreign('resep_obat_id')
                  ->references('id')
                  ->on('resep_obat')
                  ->onDelete('cascade');

            $table->string('nama_obat');
            $table->string('dosis')->nullable();
            $table->string('frekuensi')->nullable();
            $table->string('aturan_pakai')->nullable();
            $table->text('catatan')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_obat');
    }
};
