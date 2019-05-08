<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_places', function (Blueprint $table) {
         $table->integer('tour_id')->unsigned();
         $table->integer('place_id')->unsigned();
         $table->primary(['tour_id', 'place_id']);
         $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
         $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');

     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour_places');
    }
}
