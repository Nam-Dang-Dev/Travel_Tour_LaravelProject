<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
	protected $table = 'categories';
	protected $fillabel = ['id','name','image','icon','description'];
 public function tour()
    {
       return $this->hasMany('App\tour', 'category_id', 'id');
    }

}
