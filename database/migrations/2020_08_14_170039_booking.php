<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Booking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bNameOnCart');
            $table->string('bCartNumber');
            $table->string('bCartTypes');       //cần coi lại
            $table->string('bExploration');     //cần coi lại
            $table->integer('bCVV');
            $table->integer('fkPaymentID')->unsigned();
            $table->integer('fkCustomerID')->unsigned();
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
        Schema::dropIfExists('booking');
    }
}
