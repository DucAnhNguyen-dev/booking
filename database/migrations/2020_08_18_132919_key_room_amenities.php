<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KeyRoomAmenities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('room_amenities', function (Blueprint $table) {
            $table->foreign('fkRoomID')->references('id')->on('room');
            $table->foreign('fkAmenitiesID')->references('id')->on('amenities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('room_amenities', function (Blueprint $table) {
            $table->dropForeign('room_amenities_fkRoomID_foreign');
            $table->dropForeign('room_amenities_fkAmenitiesID_foreign');
        });
    }
}
