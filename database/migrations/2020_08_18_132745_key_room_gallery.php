<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KeyRoomGallery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('room_gallery', function (Blueprint $table) {
            $table->foreign('fkRoomID')->references('id')->on('room');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('room_gallery', function (Blueprint $table) {
            $table->dropForeign('room_gallery_fkRoomID_foreign');
        });
    }
}
