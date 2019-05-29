<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Cart; 
use Mail;
use App\Mail\sendMail;
use App\tour;

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
       Cart::add(['id' => $idTour, 'name' => $nameTour, 'qty' => $quantity, 'price' => 0, 'weight' => 0, 'options' => ['contactFirstName' => $firstName,'contactLastName' => $lastName,'contactAddress' => $address,'contactEmail' => $email,'contactPhone' => $phone,'contactNote' => $note,'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),'pay' => $pay, $customerArray]]);



       $cart = Cart::content();

 
       $subject = "Thông tin đặt tour trên website Travel Tour";

      $request->session()->put('key', rand(1000, 9999));
      $message = $request->session()->get('key');

       Mail::to($email)->send(new sendMail($subject,$message));


        $tour_confirm = tour::find($idTour);

      return view('user.pages.confirm',compact('tour_confirm'));
       

   }
   public function postNumberConfirm(Request $request){
    $verify = $request->verify;
    $confirm = $request->session()->get('key');
    
    if ($verify == $confirm) {
      echo 1;
    }else{
      echo 0;
    }
   }
  
}
