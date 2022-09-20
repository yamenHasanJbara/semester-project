<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxioffices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxioffices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('owner')->unique();
            $table->double('lat',15,10);
            $table->double('lng',15,10);
            $table->string('phone');
            $table->String('contract')->unique();
            $table->string('carsnumber');
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
        Schema::dropIfExists('taxioffices');
    }
}
