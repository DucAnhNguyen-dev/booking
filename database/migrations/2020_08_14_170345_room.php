<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Room extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rFloor');
            $table->integer('rAdults');
            $table->integer('rChildren');
            $table->integer('rNumberRoom');
            $table->longText('rDescriptions');
            $table->string('rFeatureImage');
            $table->integer('rRoomPopular');
            $table->integer('status');
            $table->integer('fkRoomTypeID')->unsigned();
            $table->integer('fkRateID')->unsigned();
            $table->integer('fkRoomViewID')->unsigned();
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
        Schema::dropIfExists('room');
    }
}
