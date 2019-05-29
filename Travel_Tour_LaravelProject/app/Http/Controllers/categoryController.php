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
		$search = $request->get('diemdi');
		$search = $request->get('diemden');	
		$search = $request->get('date');
		if ($search !="") {
		$tours = DB::table('tours') ->join('prices', 'tours.price_id', '=', 'prices.id')->where('departure_location','like','%'.$search.'%')
		->orwhere('end_location','like','%'.$search.'%')
		->orwhere('departure_day','like','%'.$search.'%')->get();
		if(count($tours) > 0)
		return view('user.pages.search_result',compact('tours'))->withDetails($tours)->withQuery($search);
		}
	   return view ('user.pages.search_result')->withMessage('Không có tour nào được tìm thấy!') ;
	}

}
