<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_hotels', function (Blueprint $table) {
         $table->integer('tour_id')->unsigned();
         $table->integer('hotel_id')->unsigned();
         $table->primary(['tour_id', 'hotel_id']);
         $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
         $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour_hotels');
    }
}
