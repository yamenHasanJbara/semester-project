<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangerorders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mangerorders', function (Blueprint $table) {
            $table->increments('idOrder');
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
        Schema::dropIfExists('mangerorders');
    }
}
