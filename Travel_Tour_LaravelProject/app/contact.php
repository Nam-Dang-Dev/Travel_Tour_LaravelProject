<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    //
    protected $table = 'contacts';
	protected $fillabel = ['id','first_name','last_name','address','email','phone_number'];


    public function reservations()
	{
		return $this->belongsTo('App\reservations', 'contact_id', 'id');
	}
}
