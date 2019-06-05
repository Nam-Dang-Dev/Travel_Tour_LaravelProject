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

            ['tour_id' => '7','hotel_id' => '1'],
            ['tour_id' => '8','hotel_id' => '2'],
            ['tour_id' => '9','hotel_id' => '2'],
            ['tour_id' => '10','hotel_id' => '3'],
            ['tour_id' => '11','hotel_id' => '4'],
            ['tour_id' => '12','hotel_id' => '5'],
            ['tour_id' => '13','hotel_id' => '4'],
            ['tour_id' => '14','hotel_id' => '6'],
            ['tour_id' => '15','hotel_id' => '1'],
            ['tour_id' => '16','hotel_id' => '2'],
            ['tour_id' => '17','hotel_id' => '1'],

            ['tour_id' => '18','hotel_id' => '1'],
            ['tour_id' => '19','hotel_id' => '2'],
            ['tour_id' => '20','hotel_id' => '2'],
            ['tour_id' => '21','hotel_id' => '3'],
            ['tour_id' => '22','hotel_id' => '4'],
            ['tour_id' => '23','hotel_id' => '5'],
            ['tour_id' => '24','hotel_id' => '4'],
            ['tour_id' => '25','hotel_id' => '6'],
            ['tour_id' => '26','hotel_id' => '1'],
            ['tour_id' => '27','hotel_id' => '2'],
            ['tour_id' => '28','hotel_id' => '1'],

            ['tour_id' => '29','hotel_id' => '1'],
            ['tour_id' => '30','hotel_id' => '2'],
            ['tour_id' => '31','hotel_id' => '2'],
            ['tour_id' => '32','hotel_id' => '3'],
            ['tour_id' => '33','hotel_id' => '4'],
            ['tour_id' => '34','hotel_id' => '5'],
            ['tour_id' => '35','hotel_id' => '4'],
            ['tour_id' => '36','hotel_id' => '6'],
            ['tour_id' => '37','hotel_id' => '1'],
            ['tour_id' => '38','hotel_id' => '2'],
            ['tour_id' => '39','hotel_id' => '1'],
    		
            


    	]);
    }
}
