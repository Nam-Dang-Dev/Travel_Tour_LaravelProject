<?php
namespace App\Http\Controllers;
use App;
use App\place;
use App\tour_place;
use App\category;
use App\price;
use App\tour;
use App\flight;
use App\hotel;
use App\tour_hotel;

use DB;
use Illuminate\Http\Request;

class TourController extends Controller
{
	public function indexUser(){

		$tours = DB::table('tours')
		->join('prices', 'tours.price_id', '=', 'prices.id')
		->select('tours.*', 'prices.more12','prices.promotion')
		->where('tours.status', 0)
		->get();
		return view('user.pages.index',compact('tours'));
	}


	public function Tourdetail($id){

		$tour = DB::table('tours')
		->join('prices', 'tours.price_id', '=', 'prices.id')
		->join('flights', 'tours.flight_id', '=', 'flights.id')
		->where('tours.id',$id)
		->select('tours.*', 'prices.more12', 'prices.from5_to_12', 'prices.from5_to_12', 'prices.less2','prices.promotion', 'flights.name', 'flights.departure_day','flights.day_back')
		->first();
	
		$place = App\tour::find($id)->place()->get();
		$hotel = App\tour::find($id)->hotel()->get();


		$samePrice = DB::table('tours')
		->join('prices', 'tours.price_id', '=', 'prices.id')
		->select('tours.*', 'prices.more12','prices.promotion')
		->where('tours.status', 0)
		 ->whereBetween('prices.more12', [$tour->more12 - (($tour->more12*10)/100), $tour->more12 + (($tour->more12*10)/100)])
		 ->paginate(3);

		
		 $sameDate = DB::table('tours')
		->join('prices', 'tours.price_id', '=', 'prices.id')
		->select('tours.*', 'prices.more12','prices.promotion')
		->where('tours.status', 0)
		->whereDate('tours.departure_day',date('Y-m-d', strtotime($tour->departure_day)))
		->paginate(3);
		

		
		

		
		
		return view('user.pages.detail',compact('place','tour','hotel','samePrice','sameDate'));
	}


}
