<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerlombaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perlombaans', function (Blueprint $table) {
            $table->increments('id');
            $table->String('spesialis');
            $table->string('nama_perlombaan');
            $table->Integer('tgl_lomba');
            $table->Integer('tgl_daftar_ulang');
            $table->String('tempat');
            $table->Integer('jumlah_peserta');
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
        Schema::dropIfExists('perlombaans');
    }
}
