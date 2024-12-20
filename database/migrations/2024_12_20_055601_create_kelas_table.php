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
    Schema::create('kelas', function (Blueprint $table) {
        $table->id();
        $table->string('kode_kelas')->unique();
        $table->string('nama_kelas');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('kelas');
}

};
