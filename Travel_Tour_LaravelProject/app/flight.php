<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flight extends Model
{
	
	protected $table = 'flights';
	protected $fillabel = ['id','name','departure_day','day_back'];

	public function tour()
	{
		return $this->belongsTo('App\tour', 'flight_id', 'id');
	}
}
