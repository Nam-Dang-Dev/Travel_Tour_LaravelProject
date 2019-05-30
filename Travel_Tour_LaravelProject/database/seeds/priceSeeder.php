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
         ['more12' => '1200000','from5_to_12' => '1000000',  'from2_to_5' => "800000",'less2' => '450000','promotion'=>'5',  'description' => "Trẻ em từ 5 tuổi đến dưới 12 tuổi: 75% giá tour người lớn (không có chế độ giường riêng)."],
         ['more12' => '2890000','from5_to_12' => '2578000',  'from2_to_5' => "2199000",'less2' => '567000','promotion'=>'7',  'description' => "Trẻ em từ 5 tuổi đến dưới 12 tuổi: 75% giá tour người lớn (không có chế độ giường riêng)."],
         ['more12' => '3987000','from5_to_12' => '3100000',  'from2_to_5' => "2540000",'less2' => '1430000','promotion'=>'10',  'description' => "Trẻ em từ 5 tuổi đến dưới 12 tuổi: 75% giá tour người lớn (không có chế độ giường riêng)."],
         
         ['more12' => '4280000','from5_to_12' => '3500000',  'from2_to_5' => "3199000",'less2' => '2019000','promotion'=>'12',  'description' => "Trẻ em từ 5 tuổi đến dưới 12 tuổi: 75% giá tour người lớn (không có chế độ giường riêng)."],
         ['more12' => '10567000','from5_to_12' => '8599000',  'from2_to_5' => "7599700",'less2' => '5291000','promotion'=>'15',  'description' => "Trẻ em từ 5 tuổi đến dưới 12 tuổi: 75% giá tour người lớn (không có chế độ giường riêng)."],
         
         ['more12' => '1200000','from5_to_12' => '1000000',  'from2_to_5' => "800000",'less2' => '450000','promotion'=>'0',  'description' => "Trẻ em từ 5 tuổi đến dưới 12 tuổi: 75% giá tour người lớn (không có chế độ giường riêng)."],
         ['more12' => '2890000','from5_to_12' => '2578000',  'from2_to_5' => "2199000",'less2' => '567000','promotion'=>'0',  'description' => "Trẻ em từ 5 tuổi đến dưới 12 tuổi: 75% giá tour người lớn (không có chế độ giường riêng)."],
         ['more12' => '3987000','from5_to_12' => '3100000',  'from2_to_5' => "2540000",'less2' => '1430000','promotion'=>'0',  'description' => "Trẻ em từ 5 tuổi đến dưới 12 tuổi: 75% giá tour người lớn (không có chế độ giường riêng)."],
         
         ['more12' => '4280000','from5_to_12' => '3500000',  'from2_to_5' => "3199000",'less2' => '2019000','promotion'=>'0',  'description' => "Trẻ em từ 5 tuổi đến dưới 12 tuổi: 75% giá tour người lớn (không có chế độ giường riêng)."],
         ['more12' => '10567000','from5_to_12' => '8599000',  'from2_to_5' => "7599700",'less2' => '5291000','promotion'=>'0',  'description' => "Trẻ em từ 5 tuổi đến dưới 12 tuổi: 75% giá tour người lớn (không có chế độ giường riêng)."],
     ]);
    }
}
