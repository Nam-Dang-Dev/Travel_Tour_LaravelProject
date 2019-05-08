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
					'uses' 	=> 'PageController@Admin_tour_index',
				]); 
				Route::get('add', [
					'as' 	=> 'admin/tour/add',
					'uses' 	=> 'PageController@Admin_tour_add',
				]);
				Route::get('update', [
					'as' 	=> 'admin/tour/update',
					'uses' 	=> 'PageController@Admin_tour_update',
				]);
				Route::get('view_detail', [
					'as' 	=> 'admin/tour/view_detail',
					'uses' 	=> 'PageController@Admin_tour_view_detail',
				]);    
		});
	//2. Revervation
		Route::group(['prefix' => 'admin/reservation/'], function () {
				Route::get('index', [
					'as' 	=> 'admin/reservation/index',
					'uses' 	=> 'PageController@Admin_reservation_index',
				]); 
				Route::get('view_detail', [
					'as' 	=> 'admin/reservation/view_detail',
					'uses' 	=> 'PageController@Admin_reservation_view_detail',
				]);    
		});