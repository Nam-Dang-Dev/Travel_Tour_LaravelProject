<?php

use Illuminate\Database\Seeder;

class tour_placeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('tour_places')->insert([
    		['tour_id' => '1','place_id' => '1'],
    		['tour_id' => '1','place_id' => '2'],
    		['tour_id' => '2','place_id' => '1'],
    		['tour_id' => '3','place_id' => '3'],
    		['tour_id' => '4','place_id' => '4'],
    		['tour_id' => '5','place_id' => '5'],
    		['tour_id' => '6','place_id' => '4'],
    		['tour_id' => '7','place_id' => '3'],
    		['tour_id' => '8','place_id' => '2'],


            ['tour_id' => '9','place_id' => '1'],
            ['tour_id' => '10','place_id' => '2'],
            ['tour_id' => '11','place_id' => '1'],
            ['tour_id' => '12','place_id' => '3'],
            ['tour_id' => '13','place_id' => '4'],
            ['tour_id' => '14','place_id' => '5'],
            ['tour_id' => '15','place_id' => '4'],
            ['tour_id' => '16','place_id' => '3'],
            ['tour_id' => '17','place_id' => '2'],


            ['tour_id' => '18','place_id' => '1'],
            ['tour_id' => '19','place_id' => '2'],
            ['tour_id' => '20','place_id' => '1'],
            ['tour_id' => '21','place_id' => '3'],
            ['tour_id' => '22','place_id' => '4'],
            ['tour_id' => '23','place_id' => '5'],
            ['tour_id' => '24','place_id' => '4'],
            ['tour_id' => '25','place_id' => '3'],
            ['tour_id' => '26','place_id' => '2'],


            ['tour_id' => '27','place_id' => '1'],
            ['tour_id' => '28','place_id' => '2'],
            ['tour_id' => '29','place_id' => '1'],
            ['tour_id' => '30','place_id' => '3'],
            ['tour_id' => '31','place_id' => '4'],
            ['tour_id' => '32','place_id' => '5'],
            ['tour_id' => '33','place_id' => '4'],
            ['tour_id' => '34','place_id' => '3'],
            ['tour_id' => '35','place_id' => '2'],
            


    	]);
    }
}
