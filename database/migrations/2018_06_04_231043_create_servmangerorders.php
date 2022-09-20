<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServmangerorders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servmangerorders', function (Blueprint $table) {
            $table->increments('id-order');
            $table->integer('idToffice')->unsigned();
            $table->foreign('idToffice')->references('id')->on('taxioffices');
            $table->string('orderType');
            $table->string('TheLanternNumber')->unique();
            $table->string('carNumber')->unique();
            $table->boolean('served')->default(false);
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
        Schema::dropIfExists('servmangerorders');
    }
}
