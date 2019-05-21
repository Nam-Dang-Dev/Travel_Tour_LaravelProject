<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class reservationController extends Controller
{
    public function add(Request $request){
    	$firstName = $request->name;
    	$lastName = $request->name;
    	$address = $request->address;
    	$gmail = $request->email;
    	$birthday = $request->birthday;
    	$phone = $request->phone;
    	$cmnd = $request->name;
    	



		Cart::add(['id'=>1,'name' => $firstName,'price'=>123, 'lastName' => $lastName, 'address' => $address, 'gmail' => $gmail, 'birthday' => $birthday, 'phone' => $phone]);

		$cart = Cart::content();
		dd($cart);
	}
}
