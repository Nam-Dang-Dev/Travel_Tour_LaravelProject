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
	public function contact()
    {
       return $this->hasMany('App\contact', 'contact_id', 'id');
    }

    public function customer()
    {
        
        return $this->belongsToMany('App\customer', 'reservations_customer', 'reservations_id', 'customer_id');
    }
}
