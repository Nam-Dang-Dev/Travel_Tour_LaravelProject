<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    protected $table = 'hotels';
	protected $fillabel = ['id','name','address','phone'];

	public function tour()
	{
		return $this->belongsToMany('App\tour'); 
	}
}
