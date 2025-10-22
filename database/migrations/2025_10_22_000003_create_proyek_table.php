<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('proyek', function (Blueprint $table) {
            $table->bigIncrements('proyek_id');
            $table->string('kode_proyek')->unique();
            $table->string('nama_proyek');
            $table->year('tahun')->nullable();
            $table->string('lokasi')->nullable();
            $table->decimal('anggaran', 15, 2)->nullable();
            $table->string('sumber_dana')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('proyek');
    }
};
