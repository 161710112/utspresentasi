<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSejarahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sejarahs', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nama')->unique;
            $table->Date('ttl');
            $table->String('warga_negara');
            $table->text('sejarah');
            $table->String('semenjak');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sejarahs');
    }
}
