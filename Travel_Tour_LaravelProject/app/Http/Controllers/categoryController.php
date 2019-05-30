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

	public function search(Request $request){
		$diemdi = $request->get('chosen_di');
		$diemden = $request->get('chosen_den');	
		$date = $request->get('date');
		if ( $diemdi==="Điểm đi" && $diemden==="Điểm đến" && $date=null ) {
			 return redirect()->route('user.index')
             ->with('alert','User deleted successfully');
		}
		
		if ($diemdi!=null && $diemden!=null && $date!=null ) {
			$tours = DB::table('tours')->where([
		    ['departure_location', '=',$diemdi],
		    ['end_location', '=', $diemden],
		    ['departure_day', '=', $date],
		])->get();
		}

		if ($diemdi!=null && $diemden!=null && $date==null ) {
			$tours = DB::table('tours')->where([
		    ['departure_location', '=',$diemdi],
		    ['end_location', '=', $diemden],
		])->get();
		}

		if ($diemdi!=null && $diemden==="Điểm đến" && $date!=null ) {
						
			$tours = DB::table('tours')->where([
		    ['departure_location', '=', $diemdi],
		    ['departure_day', '=', $date],
		])->get();

		}
		if ($diemdi==="Điểm đi" && $diemden!=null && $date!=null ) {
			$tours = DB::table('tours')->where([
		    ['end_location', '=', $diemden],
		    ['departure_day', '=', $date],
		])->get();

		}
		if ($diemdi!=null && $diemden==="Điểm đến" && $date==null ) {
			$tours = DB::table('tours')->where([
		    ['departure_location', '=', $diemdi],
		])->get();

		}
		if ($diemdi==="Điểm đi" && $diemden!=null && $date==null ) {
			$tours = DB::table('tours')->where([
		    ['end_location', '=', $diemden],
		])->get();

		}
		if ($diemdi==="Điểm đi" && $diemden==="Điểm đến" && $date!=null ) {
			$tours = DB::table('tours')->where([
		    ['departure_day', '=', $date],
		])->get();
		}
		

		//dd($tours);
		
		return view('user.pages.search_result',compact('tours'));
}}
