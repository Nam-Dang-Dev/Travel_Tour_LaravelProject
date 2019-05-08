<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tour_place extends Model
{
    
     protected $table = 'tour_places';
	protected $fillabel = ['tour_id','place_id'];
}
