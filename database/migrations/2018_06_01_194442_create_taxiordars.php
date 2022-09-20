<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxiordars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxiorders', function (Blueprint $table) {
            $table->increments('idOrderTaxi');
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');
            $table->string('officeName');
            $table->string('customerAddress');
            $table->string('reservationType');
            $table->string('reservationDate')->nullable();
            $table->string('reservationTime')->nullable();
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
        Schema::dropIfExists('taxiordars');
    }
}
