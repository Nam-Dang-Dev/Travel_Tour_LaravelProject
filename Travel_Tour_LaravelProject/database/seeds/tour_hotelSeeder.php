<?php

use Illuminate\Database\Seeder;

class tour_hotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('tour_hotels')->insert([
    		['tour_id' => '1','hotel_id' => '1'],
    		['tour_id' => '2','hotel_id' => '2'],
    		['tour_id' => '1','hotel_id' => '2'],
    		['tour_id' => '3','hotel_id' => '3'],
    		['tour_id' => '4','hotel_id' => '4'],
    		['tour_id' => '5','hotel_id' => '5'],
    		['tour_id' => '5','hotel_id' => '4'],
    		['tour_id' => '6','hotel_id' => '6'],
    		['tour_id' => '4','hotel_id' => '1'],
    		['tour_id' => '6','hotel_id' => '2'],
    		['tour_id' => '3','hotel_id' => '1'],
    		
            


    	]);
    }
}
