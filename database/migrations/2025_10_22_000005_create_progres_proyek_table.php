<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('progres_proyek', function (Blueprint $table) {
            $table->bigIncrements('progres_id');
            $table->unsignedBigInteger('proyek_id');
            $table->unsignedBigInteger('tahap_id')->nullable();
            $table->decimal('persen_real',5,2)->nullable();
            $table->date('tanggal')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();

            $table->foreign('proyek_id')->references('proyek_id')->on('proyek')->onDelete('cascade');
            $table->foreign('tahap_id')->references('tahap_id')->on('tahapan_proyek')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('progres_proyek');
    }
};
