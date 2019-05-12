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
            


    	]);
    }
}
