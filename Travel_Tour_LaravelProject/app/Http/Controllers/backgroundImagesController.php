<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\background_image;
use input;

class backgroundImagesController extends Controller
{
   public function add(Request $request) {
    	$backgroundImages = new background_image;
    	$backgroundImages->caption1 = $request->caption1;
    	$backgroundImages->caption2 = $request->caption2;
    	$filename = $request->file('image')->getClientOriginalName();
    	$backgroundImages->image = $filename;
    	$request->file('image')->move('public/user/images/',$filename);
		$backgroundImages->save();
		return view('add.background_image.pages.index',compact('backgroundImages'));
    }
    public function show() {
    	$backgroundImages = new background_image;
		return view('user.pages.index',compact('backgroundImages'));
    }

    
}
