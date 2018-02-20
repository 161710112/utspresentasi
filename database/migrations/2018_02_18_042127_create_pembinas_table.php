<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembinas', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nama')->unique;
            $table->Date('ttl');
            $table->Integer('umur');
            $table->String('alamat');
            $table->String('spesialis_materi');
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
        Schema::dropIfExists('pembinas');
    }
}
