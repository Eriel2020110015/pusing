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
    Schema::create('penilaian', function (Blueprint $table) {
        $table->id();
        $table->string('kode_penilaian')->unique(); // Kode Penilaian unik
        $table->integer('nilai');  // Kolom untuk nilai penilaian
        $table->unsignedBigInteger('siswa_id');  // Relasi dengan tabel siswa
        $table->unsignedBigInteger('guru_id');   // Relasi dengan tabel guru
        $table->timestamps();

        // Relasi ke tabel siswa
        $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('cascade');
        // Relasi ke tabel guru
        $table->foreign('guru_id')->references('id')->on('guru')->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('penilaian');
}

};
