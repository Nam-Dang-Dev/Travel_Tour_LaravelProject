<?php

use Illuminate\Database\Seeder;

class flightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('flights')->insert([
    		['name' => 'Vietnam Airlines ','departure_day' => '2019-06-23 11:46:05',  'day_back' => "2019-06-27 11:46:05"],
            ['name' => 'Vietnam Airlines ','departure_day' => '2019-06-23 11:46:05',  'day_back' => "2019-06-27 11:46:05"],
            ['name' => 'Vietnam Airlines ','departure_day' => '2019-06-23 11:46:05',  'day_back' => "2019-06-27 11:46:05"],
            ['name' => 'Vietnam Airlines ','departure_day' => '2019-06-23 11:46:05',  'day_back' => "2019-06-27 11:46:05"],
            ['name' => 'Vietnam Airlines ','departure_day' => '2019-06-23 11:46:05',  'day_back' => "2019-06-27 11:46:05"],
    		


    	]);
    }
}
