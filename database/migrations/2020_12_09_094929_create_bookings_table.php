<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('moblie');
            $table->string('email');
            $table->string('gender');
            $table->string('adress');
            $table->string('age');
            $table->string('timein');
            $table->string('timeout');
            $table->string('roomtype');
            $table->string('adult');
            $table->string('childern');
            $table->string('roomno');
            $table->string('status');
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
        Schema::dropIfExists('bookings');
    }
}
