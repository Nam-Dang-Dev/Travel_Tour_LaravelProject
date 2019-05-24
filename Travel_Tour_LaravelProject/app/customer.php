<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customers';
	protected $fillabel = ['id','first_name','last_name','address','email','phone_number','birthday','user_id'];

	 public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function reservations()
    {
       return $this->hasMany('App\reservations', 'cus_id', 'id');
    }

    public function reservations()
    {
        return $this->belongsToMany('App\reservations'); 
    }
}
