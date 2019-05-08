<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    
     protected $table = 'places';
	protected $fillabel = ['id','name','image','description'];

	public function place()
    {
       return $this->belongsToMany('App\place', 'tour_places', 'tour_id', 'place_id');
    }
}
