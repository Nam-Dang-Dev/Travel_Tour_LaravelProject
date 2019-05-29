<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations_customers', function (Blueprint $table) {
         $table->integer('reservations_id')->unsigned();
         $table->integer('customer_id')->unsigned();
         $table->integer('contact_id')->unsigned();
         $table->primary(['reservations_id', 'customer_id']);

         $table->foreign('reservations_id')->references('id')->on('reservations')->onDelete('cascade');
         $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations_customers');
    }
}
