<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tour;

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
   $tour = tour::all();
   return view('admin.tour.pages.index', compact('tour'));
}
public function Admin_tour_add(){
   return view('admin.tour.pages.add');
}
public function Admin_tour_update(){
   return view('admin.tour.pages.update');
}
public function Admin_tour_delete($id) {
    $tour_del = tour::find($id);
    $tour_del->delete($id);
    return back()->with('success','Xóa tour thành công!');
  }
public function Admin_tour_view_detail($id){
   $detail_tour = tour::find($id);
   return view('admin.tour.pages.view_detail',compact('detail_tour'));
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





public function detail(){
   return view('user.pages.detail');
}
public function demo(){
   return view('user.pages.demo');
}
public function checkout(){
   return view('user.pages.checkout');
}
}
