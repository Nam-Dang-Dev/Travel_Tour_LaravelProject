<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
           $table->increments('id');
           $table->string('name');
           $table->string('departure_location');
           $table->string('end_location');
           $table->date('departure_day');
           $table->string('concentrate_place');
           $table->string('time');
           $table->integer('quantity_tourist');
           $table->string('description',3000);
           $table->string('image');
           $table->integer('flight_id')->unsigned();
           $table->integer('price_id')->unsigned();
           $table->integer('category_id')->unsigned();
           $table->timestamps();
           
           $table->foreign('price_id')->references('id')->on('prices')->onDelete('cascade');
           $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('flight_id')->references('id')->on('flights')->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
