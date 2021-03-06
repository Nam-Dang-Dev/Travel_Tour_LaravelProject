<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('reservations', function (Blueprint $table) {
       $table->increments('id');
       $table->integer('tour_id')->unsigned();
      
       $table->dateTime('date');
       $table->integer('contact_id')->unsigned();
       $table->integer('quantity');
       $table->integer('total');
       $table->integer('status');
       $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');

       $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
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
      Schema::dropIfExists('reservations');
    }
  }   
