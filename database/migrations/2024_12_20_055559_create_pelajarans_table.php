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
    Schema::create('pelajaran', function (Blueprint $table) {
        $table->id();
        $table->string('kode_pelajaran')->unique();
        $table->string('nama_pelajaran');
        $table->unsignedBigInteger('kelas_id');
        $table->timestamps();

        $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('pelajaran');
}


};
