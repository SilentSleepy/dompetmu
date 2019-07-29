<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUangMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uang_masuk', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('master_id');
            $table->dateTime('tanggal');
            $table->integer('kategori_id');
            $table->string('deskripsi');
            $table->UnsignedInteger('nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uang_masuk');
    }
}
