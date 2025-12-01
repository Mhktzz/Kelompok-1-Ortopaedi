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
        Schema::create('pasien', function (Blueprint $table) {
            $table->bigIncrements('id_pasien');

            $table->string('nama_pasien', 100);
            $table->char('nik', 16)->unique();
            $table->char('no_bpjs', 13)->nullable()->unique();

            $table->date('tanggal_lahir');
            $table->integer('umur')->unsigned();

            $table->enum('jenis_kelamin', ['L', 'P']); // L = Laki-laki, P = Perempuan

            $table->string('alamat', 255);
            $table->string('nomor_hp', 15)->nullable();

            $table->string('penanggung_jawab', 100)->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien');
    }
};
