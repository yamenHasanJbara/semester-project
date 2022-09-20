<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxis', function (Blueprint $table) {
            $table->increments('idTaxi');
            $table->string('TheLanternNumber')->unique();
            $table->integer('idOffice')->unsigned();
            $table->foreign('idOffice')->references('id')->on('taxioffices');
            $table->string('carNumber')->unique();
            $table->string('available')->default(false);
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
        Schema::dropIfExists('taxis');
    }
}
