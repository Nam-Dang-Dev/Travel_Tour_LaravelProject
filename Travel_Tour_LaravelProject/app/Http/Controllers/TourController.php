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

use Input,File;

use Cart;


use DB;
use Illuminate\Http\Request;

class TourController extends Controller
{
	//1.User Tour
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

	

	public function checkout($id){

		$tour = DB::table('tours')
		->join('prices', 'tours.price_id', '=', 'prices.id')
		->where('tours.id',$id)
		->select('tours.*', 'prices.more12', 'prices.from5_to_12', 'prices.from5_to_12', 'prices.less2','prices.promotion')
		->first();
		return view('user.pages.checkout.checkout',compact('tour'));
	}

	public function updateQuantity(Request $request){
		$qty = $request->qty;
		
		return view('user.pages.checkout.getInformationCustomer',compact('qty'));

	}

	//2. Admin Tour
		//2.1 show data to index page
		public function Admin_tour_index(){
		  
		   return view('admin.tour.pages.index');
		}

		//2.2 add new tour into database
		public function Admin_tour_get_add(){
		   return view('admin.tour.pages.add');
		}
		public function Admin_tour_post_add(Request $request) {
	      $tour_add = new tour();
	      $tour_add->name= $request->name;
	      $file_name = $request->file('image')->getClientOriginalName();
	      $request->file('image')->move('user/images/',$file_name);
		  $tour_add->image = $file_name;
	      $tour_add->departure_location= $request->departure_location;
	      $tour_add->end_location= $request->end_location;
	      $tour_add->departure_day= $request->departure_day;
	      $tour_add->concentrate_place= $request->concentrate_place;
	      $tour_add->time= $request->time;
	      $tour_add->quantity_tourist= $request->quantity_tourist;
	      $tour_add->description= $request->description;
	      $tour_add->flight_id= $request->flight_id;
	      $tour_add->price_id= $request->price_id;
	      $tour_add->category_id= $request->category_id;
	      $tour_add->status= 0;
	      $tour_add->save();
	      return view('admin.tour.pages.add');
	    }

	    //2.2 update tour already exists in database
		public function Admin_tour_get_update($id){
	      $tour_update=tour::find($id);
		  return view('admin.tour.pages.update', compact('tour_update','id'));
		}
		public function Admin_tour_post_update($id,Request $request){
	      $tour_update=tour::find($id);
	      $tour_update->name= $request->name;
	      $image= $request->image;
	      if ($image!=null) {
	      	$file_name = $request->file('image')->getClientOriginalName();
	      	$request->file('image')->move('user/images/',$file_name);
	      	$tour_update->image = $file_name;
	      }
	      $tour_update->departure_location= $request->departure_location;
	      $tour_update->end_location= $request->end_location;
	      $tour_update->departure_day= $request->departure_day;
	      $tour_update->concentrate_place= $request->concentrate_place;
	      $tour_update->time= $request->time;
	      $tour_update->quantity_tourist= $request->quantity_tourist;
	      $tour_update->description= $request->description;
	      $tour_update->flight_id= $request->flight_id;
	      $tour_update->price_id= $request->price_id;
	      $tour_update->category_id= $request->category_id;
	      $tour_update->status= 0;
	      $tour_update->save();
    	return view('admin.tour.pages.index')->with('success','Sửa sản phẩm thành công!');
		}
		//2.2 delete tour already exists in database
		public function Admin_tour_delete($id) {
		    $tour_del = tour::find($id);
		    $tour_del->delete($id);
		    return back()->with('success','Xóa tour thành công!');
		  }

		//2.1 show detail data of tour to detai page
		public function Admin_tour_view_detail($id){
		   $detail_tour = tour::find($id);
		   return view('admin.tour.pages.view_detail',compact('detail_tour'));
		}
}

