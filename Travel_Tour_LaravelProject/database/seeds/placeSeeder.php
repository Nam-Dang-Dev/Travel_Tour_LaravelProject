<?php

use Illuminate\Database\Seeder;

class placeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('places')->insert([
    		['name' => 'Vịnh Hạ Long','image' => '16.jpg',  'description' => "Vịnh Hạ Long nơi rồng đáp xuống, là danh thắng quốc gia được xếp hạng từ năm 1962. Hạ Long có 1.969 hòn đảo, lô nhô trên mặt biển, nổi tiếng nhất là các hòn Lư Hương, Gà Chọi, Cánh Buồm, Mâm Xôi, đảo Ngọc Vừng, Ti Tốp, Tuần Châu. Hạ Long như bức tranh thủy mặc khổng lồ, tuyệt đẹp, xứng đáng là biểu tượng du lịch Việt Nam."],
    		['name' => 'SaPa','image' => '17.jpg',  'description' => "Lào Cai là khu du lịch trọng tâm của miền Bắc với những thắng cảnh Sa Pa thị trấn trong mây, chợ tình quyến rũ, đỉnh Phan Xi Păng và Cửa khẩu Quốc tế Lào Cai Hà Khẩu. Lào Cai có nhiều địa danh lịch sử, hang động tự nhiên, đặc sản và là nơi mang đậm nét đặc trưng văn hoá độc đáo của nhiều dân tộc anh em."],
    		['name' => 'Đà Nẵng','image' => '17.jpg',  'description' => "Đà Nẵng nằm giữa ba di sản thế giới: cố đô Huế, phố cổ Hội An và thánh địa Mỹ Sơn. Đà Nẵng còn có nhiều danh thắng tuyệt đẹp say lòng du khách như Ngũ Hành Sơn, Bà Nà, bán đảo Sơn Trà, đèo Hải Vân, sông Hàn thơ mộng và cầu quay Sông Hàn – niềm tự hào của thành phố, và biển Mỹ Khê đẹp nhất hành tinh."],
    		['name' => 'Quy Nhơn','image' => '18.jpg',  'description' => "Bình Định như kho báu thiên nhiên với bờ biển dài: Quy Nhơn, Tam Quan, Tân Thanh, Vĩnh Hội, Trung Lương, Hải Giang, Đảo Yến, bãi tắm đẹp như Hoàng Hậu, Quy Hòa, Bãi Dại, Tân Phụng, Vĩnh Lợi. Làng nghề vô cùng hấp dẫn như Rượu Bàu Đá, mộc mỹ nghệ, gốm, đặc sản Bún Song Thằn, Bánh tráng nước dừa, bánh tráng mè."],
    		['name' => 'Huế','image' => '19.jpg',  'description' => "Huế nơi rồng đáp xuống, là danh thắng quốc gia được xếp hạng từ năm 1962. Hạ Long có 1.969 hòn đảo, lô nhô trên mặt biển, nổi tiếng nhất là các hòn Lư Hương, Gà Chọi, Cánh Buồm, Mâm Xôi, đảo Ngọc Vừng, Ti Tốp, Tuần Châu. Hạ Long như bức tranh thủy mặc khổng lồ, tuyệt đẹp, xứng đáng là biểu tượng du lịch Việt Nam."],



    	]);
    }
}
