<?php

use Illuminate\Database\Seeder;

class hotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
    		['name' => 'Mường Thanh','address' => '123 Võ văn kiệt',  'phone' => "012345678"],
    		['name' => 'Hoàng đại','address' => '123 Võ văn kiệt',  'phone' => "012345678"],
    		['name' => 'Mường Thanh','address' => '123 Võ văn kiệt',  'phone' => "012345678"],
    		['name' => 'Mường Thanh','address' => '123 Võ văn kiệt',  'phone' => "012345678"],
    		['name' => 'Mường Thanh','address' => '123 Võ văn kiệt',  'phone' => "012345678"],
    		['name' => 'Mường Thanh','address' => '123 Võ văn kiệt',  'phone' => "012345678"],
    		

    	]);
    }
}
