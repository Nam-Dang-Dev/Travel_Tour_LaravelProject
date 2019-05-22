<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\background_image;
use App\category;
use App\flight;
use App\place;
use App\price;
use App\tour;
use App\tour_place;

class PageController extends Controller
{
   //ADMIN SITE
      //1. Category
   public function Admin_category_index(){
       return view('admin.category.pages.index');
      }
   public function Admin_category_add(){
      return view('admin.category.pages.add');
      }
   public function Admin_category_update(){
      return view('admin.category.pages.update');
      }
   public function Admin_category_view_detail(){
      return view('admin.category.pages.view_detail');
      }

         //2. Tour
   public function Admin_tour_index(){
      return view('admin.tour.pages.index');
      }
   public function Admin_tour_add(){
      return view('admin.tour.pages.add');
      }
   public function Admin_tour_update(){
      return view('admin.tour.pages.update');
      }
   public function Admin_tour_view_detail(){
      return view('admin.tour.pages.view_detail');
      }
         //2. reservation
   public function Admin_reservation_index(){
      return view('admin.reservation.pages.index');
      }
   public function Admin_reservation_add(){
      return view('admin.reservation.pages.add');
      }
   public function Admin_reservation_update(){
      return view('admin.reservation.pages.update');
      }
   public function Admin_reservation_view_detail(){
      return view('admin.reservation.pages.view_detail');
      }
      //END ADMIN SITE


   public function index(){
      $backgroundImages = background_image::all();
      // $backgroundImages = background_image::where('id',1)->get();
      return view('user.pages.index',compact('backgroundImages'));

      }
   public function detail(Request $req){
      //    $backgroundImages = background_image::all();
      //    $category = category::all();
      //    $tour_hienthi = tour::where('id',$req->id)->get();
      //    $place = place::where('id',$req->id)->get();
      //    $tour_theoloai = tour::where('id_type',$req->id_type)->get();
      //    $tour_khac=tour::where('id_type','<>',$req)->limit(3)->get();
      //    $type_tour = category::where('id',$req)->first();
      // return view('user.pages.detail',compact('backgroundImages'));
      }
   public function demo(){
      return view('user.pages.demo');
      }
   public function checkout(){
      return view('user.pages.checkout');
      }
   public function search(Request $request){
      $backgroundImages = background_image::all();
      $search = $request->input('diemdi');
      $search = $request->input('diemden');
      $search = $request->input('date');    
      $price = price::all();
      if ($search != "") {
         $tour = tour::where('departure_location','LIKE', '%' . $search .'%')
                        ->orWhere('end_location','LIKE', '%' . $search .'%')
                        ->orWhere('departure_day','LIKE', '%' . $search .'%')
                        ->paginate(8);
         if (count($tour) > 0) {
            return view('user.pages.search_result',compact('backgroundImages','price'))->withDetails($tour)->withQuery($search);
         }
      }
      return view('user.pages.search_result',compact('backgroundImages','price'))->withMessage('not found!');
      }
}
