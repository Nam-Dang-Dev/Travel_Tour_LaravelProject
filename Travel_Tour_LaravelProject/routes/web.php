<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 
*/
//ADMIN SITE
	//1.Category
Route::group(['prefix' => 'admin/category/'], function () {
	Route::get('index', [
		'as' 	=> 'admin/category/index',
		'uses' 	=> 'PageController@Admin_category_index',
	]); 
	Route::get('add', [
		'as' 	=> 'admin/category/add',
		'uses' 	=> 'PageController@Admin_category_add',
	]);
	Route::get('update', [
		'as' 	=> 'admin/category/update',
		'uses' 	=> 'PageController@Admin_category_update',
	]);
	Route::get('view_detail', [
		'as' 	=> 'admin/category/view_detail',
		'uses' 	=> 'PageController@Admin_category_view_detail',
	]);    
});
	//2. Tour
Route::group(['prefix' => 'admin/tour/'], function () {
	Route::get('index', [
		'as' 	=> 'admin/tour/index',
		'uses' 	=> 'TourController@Admin_tour_index',
	]); 

	Route::get('add', [
		'as' 	=> 'admin/tour/get_add',
		'uses' 	=> 'TourController@Admin_tour_get_add',
	]);
	Route::post('add', [
		'as' 	=> 'admin/tour/post_add',
		'uses' 	=> 'TourController@Admin_tour_post_add',
	]);

	Route::get('update/{id}', [
		'as' 	=> 'admin/tour/get_update',
		'uses' 	=> 'TourController@Admin_tour_get_update',
	]);
	Route::post('update/{id}', [
		'as' 	=> 'admin/tour/post_update',
		'uses' 	=> 'TourController@Admin_tour_post_update',
	]);

	Route::get('delete/{id}', [
		'as' 	=> 'admin/tour/delete',
		'uses' 	=> 'TourController@Admin_tour_delete'
	]);
	
	Route::get('view_detail/{id}', [
		'as' 	=> 'admin/tour/view_detail',
		'uses' 	=> 'TourController@Admin_tour_view_detail',
	]);    
});
	//2. Revervation
Route::group(['prefix' => 'admin/reservation/'], function () {
	Route::get('index', [
		'as' 	=> 'admin/reservation/index',
		'uses' 	=> 'TourController@Admin_reservation_index',
	]); 
	Route::get('view_detail', [
		'as' 	=> 'admin/reservation/view_detail',
		'uses' 	=> 'TourController@Admin_reservation_view_detail',
	]);    
});


		//các route liên quan đến user
Route::group(['prefix' => 'user/'], function () {
	Route::get('index', [
		'as' 	=> 'indexUser',
		'uses' 	=> 'TourController@indexUser',
	]);   
	Route::get('Tourdetail/{id}', [
		'as' 	=> 'Tourdetail',
		'uses' 	=> 'TourController@Tourdetail',
	]);  
	Route::get('demo', [
		'as' 	=> 'demo',
		'uses' 	=> 'PageController@demo',
	]);  
	Route::get('checkout/{id}', [
		'as' 	=> 'checkout',
		'uses' 	=> 'TourController@checkout',
		
	]);  
	Route::get('catePage/{id}', [
		'as' 	=> 'catePage',
		'uses' 	=> 'categoryController@catePage',

	]);   



	Route::get('updateQuantity', [
		'as' 	=> 'user/updateQuantity',
		'uses' 	=> 'TourController@updateQuantity',
	]);  
	Route::get('profile', function () {
		return view('user.pages.profile');
	});

	//***********************login and singin**********************************////
	Route::get('login', [
		'as' 	=> 'user/login',
		'uses' 	=> 'loginController@getlogin',
	]); 
	Route::post('login', [
		'as' 	=> 'user/login',
		'uses' 	=> 'loginController@postlogin',
	]); 

	Route::post('search', [
		'as' 	=> 'search',
		'uses' 	=> 'PageController@search',
	]);  

}); 


Route::group(['prefix' => 'cart/'], function () {
	Route::post('user/postAddCart/{idTour}/{nameTour}', [
		'as' 	=> 'cart/user/postAddCart',
		'uses' 	=> 'reservationController@postAddCart',
	]);   

	Route::get('user/confirm', [
		'as' 	=> 'cart/user/getConfirm',
		'uses' 	=> 'reservationController@getConfirm',
	]);  

	Route::get('user/numberConfirm', [
		'as' 	=> 'user/numberConfirm',
		'uses' 	=> 'reservationController@postNumberConfirm',
	]);  

	Route::get('user/price', [
		'as' 	=> 'cart/user/price',
		'uses' 	=> 'cartController@PostPrice',
	]);  




	
	
}); 

Route::get('login','LoginController@getLogin')->name('login');
Route::post('login/handle','LoginController@postLogin')->name('login/handle');
Route::get('logout','LoginController@logout')->name('logout');

Route::get('signup','RegisterController@getSignup')->name('signup');
Route::post('signup/handle','RegisterController@postSignup')->name('signup/handle');
//////////////////////////////////////////////////////////////////////////////////////////////////