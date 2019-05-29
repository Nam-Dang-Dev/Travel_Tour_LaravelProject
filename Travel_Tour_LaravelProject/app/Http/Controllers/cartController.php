<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class cartController extends Controller
{
    public function PostPrice(Request $request){
    	$id = $request->id;
    	$typeTourist = $request->typeTourist;
    	$idTour = $request->idTour;

    	$price = DB::table('prices')
		->join('tours', 'tours.price_id', '=', 'prices.id')
		->select('prices.*')
		->where('tours.id', $idTour)
		->first();

		echo $price->$typeTourist;

    	
    }
}
