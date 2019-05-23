<?php

use Illuminate\Database\Seeder;

class backgroundImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('backround_images')->insert([
        	['image'=>'https://quoctevinhlong.com/wp-content/uploads/2017/07/5020116-thailand-travel-background-concept.jpg','caption1'=>'Nhanh, tiện lợi, cho bạn và cho mọi người','caption2'=>'Hãy đi những nơi bạn muốn'],
        	]);
    }
}
