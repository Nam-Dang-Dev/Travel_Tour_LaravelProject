<?php

use Illuminate\Database\Seeder;

class priceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        DB::table('prices')->insert([
         ['more12' => '456445','from5_to_12' => '45645',  'from2_to_5' => "4545",'less2' => '45','promotion'=>'5',  'description' => "Trẻ em từ 5 tuổi đến dưới 12 tuổi: 75% giá tour người lớn (không có chế độ giường riêng)."],
         ['more12' => '456445','from5_to_12' => '45645',  'from2_to_5' => "4545",'less2' => '45','promotion'=>'5',  'description' => "Trẻ em từ 5 tuổi đến dưới 12 tuổi: 75% giá tour người lớn (không có chế độ giường riêng)."],
         
         ['more12' => '456445','from5_to_12' => '45645',  'from2_to_5' => "4545",'less2' => '45','promotion'=>'5',  'description' => "Trẻ em từ 5 tuổi đến dưới 12 tuổi: 75% giá tour người lớn (không có chế độ giường riêng)."],
         
         ['more12' => '456445','from5_to_12' => '45645',  'from2_to_5' => "4545",'less2' => '45','promotion'=>'5',  'description' => "Trẻ em từ 5 tuổi đến dưới 12 tuổi: 75% giá tour người lớn (không có chế độ giường riêng)."],
         ['more12' => '456445','from5_to_12' => '45645',  'from2_to_5' => "4545",'less2' => '45','promotion'=>'5',  'description' => "Trẻ em từ 5 tuổi đến dưới 12 tuổi: 75% giá tour người lớn (không có chế độ giường riêng)."],
         


     ]);
    }
}
