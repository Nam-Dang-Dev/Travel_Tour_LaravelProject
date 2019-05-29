<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class background_image extends Model
{
    protected $table = 'backround_images';
	protected $fillabel = ['id','image','caption1','caption2'];
 
}
