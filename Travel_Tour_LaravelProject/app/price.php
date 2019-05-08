<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class price extends Model
{
    
     protected $table = 'prices';
	protected $fillabel = ['id','more12','5_to_12','2_to_5','less2'];

	public function tour()
	{
		return $this->belongsTo('App\tour', 'price_id', 'id');
	}
}
