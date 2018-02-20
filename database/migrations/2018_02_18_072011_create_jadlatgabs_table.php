<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadlatgabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadlatgabs', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('no_absen');
            $table->String('lokasi');
            $table->Integer('jam');
            $table->String('hari');
            $table->String('materi');
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
        Schema::dropIfExists('jadlatgabs');
    }
}
