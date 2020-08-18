<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
           $table->increments('id');
           $table->string('cFirstName');
           $table->string('cLastName');
           $table->string('cPhoneNumber');
           $table->string('cGender');
           $table->date('cDOB');
           $table->string('cMail');
           $table->string('cCompanyName');
           $table->string('cTravelAgencyName');
           $table->string('cIATA');
           $table->string('cVAT');
           $table->string('cAgentName');
           $table->string('cAgentEmail');
           $table->string('cAgentTel');
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
        Schema::dropIfExists('customer');
    }
}
