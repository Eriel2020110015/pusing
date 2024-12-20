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
    Schema::create('guru', function (Blueprint $table) {
        $table->id();
        $table->string('kode_guru')->unique();  // Kode Guru (unik)
        $table->string('nama_guru');
        $table->unsignedBigInteger('kelas_id')->nullable();  // Relasi dengan tabel kelas, nullable jika guru bisa tidak memiliki kelas
        $table->timestamps();

        // Relasi dengan tabel kelas
        $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('set null');
    });
}

public function down()
{
    Schema::dropIfExists('guru');
}

};
