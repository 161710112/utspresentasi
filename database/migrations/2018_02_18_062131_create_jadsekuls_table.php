<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadsekulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadsekuls', function (Blueprint $table) {
            $table->increments('id');
            $table->String('hari');
            $table->Integer('jam');
            $table->String('materi');
            $table->String('pembina');
            $table->String('tempat');
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
        Schema::dropIfExists('jadsekuls');
    }
}
