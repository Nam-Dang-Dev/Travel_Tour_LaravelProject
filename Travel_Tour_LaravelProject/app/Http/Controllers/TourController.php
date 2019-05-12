<?php
namespace App\Http\Controllers;
use App;
use App\place;
use App\tour_place;
use App\category;
use App\price;
use App\tour;

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


	public function Tourdetail(){

		$tour = App\tour::with('place')->find(1);
	//dd($tour);

		
		return view('user.pages.detail',compact('tour'));
	}


}
