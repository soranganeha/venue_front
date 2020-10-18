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
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('venue_id');
            $table->foreign('venue_id')->references('id')->on('venues');
            $table->unsignedBigInteger('package_id');
            $table->foreign('package_id')->references('id')->on('packages');
            //$table->integer('booking_cost');
            $table->unsignedBigInteger('decoration_id');
            $table->foreign('decoration_id')->references('id')->on('decorations');
            $table->unsignedBigInteger('cateringes_id');
            $table->foreign('cateringes_id')->references('id')->on('cateringes');
            $table->integer('booking_cost');
            $table->date('date');
            $table->time('time_slot');
            $table->rememberToken();
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
