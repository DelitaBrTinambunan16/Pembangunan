<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('warga', function (Blueprint $table) {
            $table->bigIncrements('warga_id');
            $table->string('nama');
            $table->string('nik')->unique();
            $table->text('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->integer('umur')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('warga');
    }
};
