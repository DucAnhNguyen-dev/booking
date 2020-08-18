<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookingDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_details', function (Blueprint $table) {
            $table->date('bdDateTo');
            $table->date('bdDateFrom');
            $table->integer('bdAdults');
            $table->integer('bdChildren');
            $table->integer('bdRoomCount');
            $table->string('bdRoomType');
            $table->double('bdRate');
            $table->integer('fkBookingID')->unsigned();
            $table->integer('fkRoomID')->unsigned();
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
        Schema::dropIfExists('booking_details');
    }
}
