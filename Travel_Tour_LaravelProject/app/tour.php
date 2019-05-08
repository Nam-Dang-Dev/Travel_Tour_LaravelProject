<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tour extends Model
{
	
	protected $table = 'tours';
	protected $fillabel = ['id','name','departure_location','end_location','departure_day','departure_day','time','quantity_tourist','description','image','flight_id','price_id','category_id'];

	public function category()
	{
		return $this->belongsTo('App\category', 'category_id', 'id');
	}

	public function flight()
    {
        return $this->hasOne('App\flight', 'flight_id', 'id');
    }

    public function place()
    {
        return $this->belongsToMany('App\place');
    }

    public function price()
    {
        return $this->hasOne('App\price', 'price_id', 'id');
    }

     public function reservations()
    {
        return $this->hasMany('App\reservations', 'tour_id', 'id');
    }
}
