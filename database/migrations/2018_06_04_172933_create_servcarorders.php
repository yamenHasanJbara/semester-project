<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServcarorders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servcarorders', function (Blueprint $table) {
            $table->increments('idservReserCar');
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');
            $table->integer('idcar')->unsigned();
            $table->foreign('idcar')->references('id')->on('cars');
            $table->string('officeName');
            $table->string('customerAddress');
            $table->date('birthday');
            $table->string('socialSecurityNumber');
            $table->string('reservationDate');
            $table->string('reservationTime');
            $table->string('extraFeatures')->nullable();
            $table->string('duration');
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
        Schema::dropIfExists('servcarorders');
    }
}
