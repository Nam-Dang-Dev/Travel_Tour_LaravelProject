<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    
     protected $table = 'places';
	protected $fillabel = ['id','name','image','description'];

	public function tour()
    {
       return $this->belongsToMany('App\tour'); 
    }
}
