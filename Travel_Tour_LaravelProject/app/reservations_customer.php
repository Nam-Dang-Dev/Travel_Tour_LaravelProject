<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservations_customer extends Model
{
    protected $table = 'reservations_customers';

	protected $fillabel = ['reservations_id','customer_id'];
}
