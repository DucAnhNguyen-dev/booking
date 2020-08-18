<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KeyRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('room', function (Blueprint $table) {
            $table->foreign('fkRoomTypeID')->references('id')->on('room_types');
            $table->foreign('fkRateID')->references('id')->on('rate');
            $table->foreign('fkRoomViewID')->references('id')->on('room_view');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('room', function (Blueprint $table) {
            $table->dropForeign('room_fkRoomTypeID_foreign');
            $table->dropForeign('room_fkRateID_foreign');
            $table->dropForeign('room_fkRoomViewID_foreign');
        });
    }
}
