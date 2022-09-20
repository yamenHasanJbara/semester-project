<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarordars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carorders', function (Blueprint $table) {
            $table->increments('idReservationCar');
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');
            $table->string('car');
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
        Schema::dropIfExists('carordars');
    }
}
