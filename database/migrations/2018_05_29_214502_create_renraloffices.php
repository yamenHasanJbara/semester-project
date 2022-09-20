<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenraloffices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentaloffices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('owner')->unique();
            $table->double('lat',15,10);
            $table->double('lng',15,10);
            $table->string('phone');
            $table->string('contract')->unique();
            $table->integer('numOfCars');
            $table->boolean('available')->default(false);
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
        Schema::dropIfExists('rentaloffices');
    }
}
