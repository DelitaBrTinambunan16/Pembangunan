<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tahapan_proyek', function (Blueprint $table) {
            $table->bigIncrements('tahap_id');
            $table->unsignedBigInteger('proyek_id');
            $table->string('nama_tahap');
            $table->decimal('target_persen',5,2)->nullable();
            $table->date('tgl_mulai')->nullable();
            $table->date('tgl_selesai')->nullable();
            $table->timestamps();

            $table->foreign('proyek_id')->references('proyek_id')->on('proyek')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tahapan_proyek');
    }
};
