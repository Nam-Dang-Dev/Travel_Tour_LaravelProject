<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservations extends Model
{

	protected $table = 'reservations';
	protected $fillabel = ['id','tour_id','cus_id','date','status'];

	public function customer()
	{
		return $this->belongsTo('App\customer', 'cus_id', 'id');
	}

	public function tour()
	{
		 return $this->belongsTo('App\tour', 'tour_id', 'id');
	}
}
