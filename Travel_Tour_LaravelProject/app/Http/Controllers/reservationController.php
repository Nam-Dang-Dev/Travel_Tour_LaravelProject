<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Cart; 
use Mail;
use App\Mail\sendMail;
use App\tour;
use App\customer;
use App\reservations;
use App\reservations_customer;
use App\contact;
use DB;

class reservationController extends Controller
{
  public function postAddCart(Request $request, $idTour,$nameTour){

   $quantity = $request->quantity;
   $firstName = $request->firstName;
   $lastName = $request->lastName;
   $address = $request->address;
   $note = $request->note;
   $email = $request->email;
   $phone = $request->phone;
   $pay = $request->paymentID;
   $pay = (int)$pay;
   $customerArray = array();

   for ($i=0; $i < $quantity; $i++) { 
     $fullnameCustomer= 'fullname'.$i;
     $genderCustomer= 'gender'.$i;
     $birthdayCustomer= 'birthday'.$i;
     $loaikhachCustomer= 'loaikhach'.$i;

     $customer = array('fullName' =>  $request->$fullnameCustomer, 'gender' => $request->$genderCustomer,'birthday' =>  $request->$birthdayCustomer, 'loaikhach' => $request->$loaikhachCustomer);

     $customerArray[$i]=$customer;
   }
   Cart::add(['id' => $idTour, 'name' => $nameTour, 'qty' => $quantity, 'price' => 0, 'weight' => 0, 'options' => ['contactFirstName' => $firstName,'contactLastName' => $lastName,'contactAddress' => $address,'contactEmail' => $email,'contactPhone' => $phone,'contactNote' => $note,'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),'cus'=> $customerArray]]);


   $cart = Cart::content();
   //Cart::destroy();
   $subject = "Thông tin đặt tour trên website Travel Tour";

   $request->session()->put('key', rand(1000, 9999));
   $message = $request->session()->get('key');

   Mail::to($email)->send(new sendMail($subject,$message));


   $tour_confirm = tour::find($idTour);

   return view('user.pages.confirm',compact('tour_confirm'));


 }
 public function postNumberConfirm(Request $request){
  $verify = $request->verify;
  $total = $request->total;
  $confirm = $request->session()->get('key');

  if ($verify == $confirm) {

    $cart = Cart::content();


    foreach($cart as $cus){
     
      $dupMail = DB::table('contacts')
      ->select('contacts.id')
      ->where('email', $cus->options->contactEmail)
      ->first();

      if($dupMail == null){
        $contact = new contact;
        $contact->first_name = $cus->options->contactFirstName;
        $contact->last_name = $cus->options->contactLastName;
        $contact->address = $cus->options->contactAddress;
        $contact->email = $cus->options->contactEmail;
        $contact->phone_number = $cus->options->contactPhone;
        $contact->save();


        $contact1 = DB::table('contacts')
        ->select('contacts.id')
        ->where('email', $cus->options->contactEmail)
        ->first();

        $dt = Carbon::now('Asia/Ho_Chi_Minh');

        $reservations = new reservations;
        $reservations->tour_id = (int)$cus->id;
        $reservations->date = $dt->toDateTimeString();

        $reservations->contact_id =$contact1->id;


        $reservations->quantity = (int)$cus->qty;


        $reservations->total = (int)$total;

        $reservations->status = 0;

        $reservations->save();
        Cart::destroy();
      }else{
       $dt = Carbon::now('Asia/Ho_Chi_Minh');

       $reservations = new reservations;
       $reservations->tour_id = (int)$cus->id;
       $reservations->date = $dt->toDateTimeString();

       $reservations->contact_id =(int)$dupMail->id;


       $reservations->quantity = (int)$cus->qty;


       $reservations->total = (int)$total;

       $reservations->status = 0;

       $reservations->save();
       Cart::destroy();
     }




   }


   echo 1;
 }else{
  echo 0;
}
}
public function payment($idTour, $email){

  $tours = DB::table('tours')
  ->select('tours.*')
  ->where('id', $idTour)
  ->first();

  $contact = DB::table('contacts')
  ->select('contacts.*')
  ->where('email', $email)
  ->first();


  return view('user.pages.checkout.pay',compact('tours','contact'));
}

public function Admin_reservation_index(){

  $orders = DB::table('reservations')
  ->orderBy('status')
  ->get();


  return view('admin.reservation.pages.index',compact('orders'));
}


public function Admin_reservation_view_detail($idBooking){

  $book = DB::table('reservations')
  ->join('contacts', 'reservations.contact_id', '=', 'contacts.id')
  ->join('tours', 'tours.id', '=', 'reservations.tour_id')
  ->select('reservations.*', 'contacts.*','tours.*')
  ->first();


  return view('admin.reservation.pages.view_detail',compact('book'));
}



}

