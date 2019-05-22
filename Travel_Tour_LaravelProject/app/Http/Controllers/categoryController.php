<?php

namespace App\Http\Controllers;
use App;
use App\category;
use App\price;
use App\tour;
use DB;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function catePage($id){
    	
		$tours = DB::table('categories')
		->join('tours','categories.id','=','tours.category_id')
		->join('prices','tours.price_id','=','prices.id')
		->where('categories.id','=', $id)
		->paginate(8);
		$cate = DB::table('categories')->where('id', $id)->first();
		
		return view('user.pages.category',compact('tours','cate'));
	}

	

}
