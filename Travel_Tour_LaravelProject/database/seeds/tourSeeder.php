<?php

use Illuminate\Database\Seeder;

class tourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('tours')->insert([
            ['name' => 'Đà Nẵng - Bà Nà - Cầu Vàng ','departure_location' => 'Đà nẵng',  'end_location' => "Sơn trà", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => '- Bán đảo Sơn Trà, viếng Chùa Linh Ứng - Nơi đây có tượng Phật Quan Thế Âm cao nhất Việt Nam, đứng nơi đây, Quý khách sẽ được chiêm ngưỡng toàn cảnh thành phố, núi rừng và biển đảo Sơn Trà một cách hoàn hảo nhất. 
            - Phố Cổ Hội An - Chùa Cầu, Nhà Cổ Phùng Hưng, Hội Quán Phước Kiến, Cơ sở Thủ Công Mỹ Nghệ,…
            - Tặng Show Ký Ức Hội An - Vở diễn thực cảnh ngoài trời với số lượng diễn viên đạt kỷ lục Việt Nam, tái hiện nhịp nhàng sinh động miền ký ức đa văn hóa: Champa, Bồ Đào Nha, Nhật, Trung… chứng kiến cuộc sống thôn quê bình dị bên dòng sông Hoài, khoảnh khắc hùng tráng trong lịch sử, nét hoàng kim của cảng thị một thời... và Công Viên Ấn tượng Hội An - Tái hiện Hội An của quá khứ, một cảng thị quốc tế sầm uất với sự hiện diện của các nền văn hóa Á, Âu, tìm hiểu nghề nuôi tằm ươm tơ, quay tơ dệt lụa bằng khung cửi, làm bánh đậu xanh Hội An, thưởng thức trà đạo phong cách Nhật Bản … Đoàn quay về lại Đà Nẵng, tự do nghỉ ngơi. Nghỉ đêm tại Đà Nẵng','image' => '1.jpg','flight_id' => '1', 'price_id' => "6", 'category_id' => '1', 'status' => '0'],

            ['name' => 'Đà Nẵng - Huế','departure_location' => 'Đà nẵng',  'end_location' => "Huế", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Huế thương sơn thủy hữu tình, nơi tọa lạc Đại Nội, Ngọ Môn, Điện Thái Hòa, Tử Cấm Thành, Lăng Tự Đức, Thế Miếu, Hiển Lâm Các, Cửu Đỉnh xưa của 13 vị vua triều Nguyễn. Chùa Thiên Mụ lưu giữ cổ vật lịch sử, nghệ thuật quý giá. Chiều buông, ta ngồi thuyền rồng xuôi dòng sông Hương thưởng thức ca hò Huế, thả hoa đăng cầu phúc lộc.','image' => 'hue.jpg','flight_id' => '1', 'price_id' => "1", 'category_id' => '1', 'status' => '0'],

            ['name' => 'Đà Nẵng - Bà Nà Hills ','departure_location' => 'Đà nẵng',  'end_location' => "Bà Nà Hills", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Không khí B’estival tuôn tràn khắp đỉnh núi Chúa – Bà Nà, ngay từ khi du khách đặt chân tới Khu du lịch. Những ly bia khổng lồ trào bọt đặt tại khu vực Cổng thành, cờ phướn rộn ràng, những chiếc xe độc đáo được kết tạo từ những thùng bia, rơm và lúa mạch thôi thúc du khách check-in. Một cảm giác muốn “dzô” được khởi đầu đầy hứng khởi như thế.
                Chủ thể quan trọng nhất và tạo cho du khách cảm giác đã đời nhất khi tham dự B’estival Bà Nà Hills năm nay sẽ là những ly bia tươi mát lạnh đến từ 25 thương hiệu bia Đức thượng hạng như Budweiser, Paulaner, Kulmbacher, Monchshof, Benedictine… Đây là sự khác biệt lớn nhất của B’estival 2019, bởi ở các lễ hội bia trước, du khách chỉ có thể thưởng thức 2 dòng bia Đức đen và bia vàng.
                Các loại bia phục vụ trong dịp lễ hội sẽ có giá từ 50.000 VNĐ – 190.000 VNĐ/ly. Sun World Ba Na Hills còn có chương trình hấp dẫn ”Mua 2 tặng 1”: du khách mua 2 ly bia Đức sẽ được tặng thêm 1 ly bia tươi.
                Bia chuẩn thì chẳng thể thiếu “mồi” ngon. Để gia tăng hương vị đậm đà cho những ly bia Đức mát lạnh, thơm ngon, du khách sẽ có nhiều sự lựa chọn món ăn kèm hấp dẫn tại các quầy ẩm thực của B’estival. Chỉ cần đặt chân đến Beer Plaza là đã không thể cưỡng được mùi thơm lan tỏa từ các quầy đồ nướng. Các món nướng đa dạng từ thịt, hải sản tẩm gia vị hấp dẫn được nướng trực tiếp tại quầy hứa hẹn sẽ khơi dậy mọi giác quan của người thưởng thức. Bên cạnh đó, du khách còn có nhiều lựa chọn khác với các món ăn nhanh như xúc xích, gà rán, khoai tây chiên, pizza, kebab Hala… Và tất nhiên là không thể thiếu những món ăn đặc trưng Oktoberfest như xúc xích Đức, bánh mì muối… được bày biện hấp dẫn tại các quầy ẩm thực.','image' => '3.jpg','flight_id' => '1', 'price_id' => "1", 'category_id' => '1', 'status' => '0'],

            ['name' => 'Đà Nẵng - Hội An ','departure_location' => 'Đà nẵng',  'end_location' => "Hội An", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Quảng Nam còn được biết đến là vùng đất Địa Linh Nhân Kiệt, Ngũ Phụng Tề Phi, với di tích lịch sử lâu đời và nhiều lễ hội văn hóa đặc sắc. Những điểm đến thú vị tại Quảng Nam: Cù lao Chàm biển xanh sóng lặng, biển Cửa Đại nước trong vắt, Hội An hoài cổ, đền tháp Mỹ Sơn rực rỡ, và thiên nhiên núi Thành kỳ vĩ.','image' => 'hoian.jpg','flight_id' => '4', 'price_id' => "1", 'category_id' => '1', 'status' => '0'],

            ['name' => 'Đà Nẵng - Nha Trang ','departure_location' => 'Đà nẵng',  'end_location' => "Nha Trang", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => '- Biển Nha Trang tuyệt vời với Vinpearl Nha Trang 5* sang trọng, hòn Mun Hòn Tằm nước trong veo và san hô lộng lẫy, cùng với vịnh Ninh Vân, vịnh Vân Phong hoang sơ và thuần khiết. Viện Hải dương học Nha Trang có trên 20.000 mẫu sinh vật dưới nước, tháp Bà Ponagar hoàn mỹ của người Chăm, cảng Vũng Rô, làng Đại Lãnh và chợ Đầm nhộn nhịp.
                Tại Nha Trang Bạn có thể thăm quan các điểm đến sau Hòn Tằm, White Sand Dốc Lết, Lặn Biển, Nha Trang, Hòn Lao, Vinpearl Land, Đầm Nha Phu, Suối khoáng nóng I-Resort, Hòn Chồng, Điệp Sơn','image' => 'nhatrang.jpg','flight_id' => '1', 'price_id' => "1", 'category_id' => '1', 'status' => '0'],

            ['name' => 'Đà Nẵng - Phú Quốc ','departure_location' => 'Đà nẵng',  'end_location' => "Phú Quốc", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Phú Quốc là điểm nghỉ dưỡng, tham quan, và khám phá sinh thái tuyệt vời. Mũi Ông Đội, Đá Chào là thế giới san hô và cá biển sặc sỡ. Bãi Sao cát trắng mịn, dáng cong, nước xanh ngọc bích. Đặc sản danh tiếng cả nước là tiêu sọ, nước mắm, rượu sim, ngọc trai. Phú Quốc thực sự là một viên ngọc quý trên bản đồ Việt Nam.','image' => 'phuquoc.jpg','flight_id' => '3', 'price_id' => "5", 'category_id' => '1', 'status' => '0'],

             ['name' => 'Đà Nẵng - Pleiku ','departure_location' => 'Đà nẵng',  'end_location' => "Pleiku", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Pleiku nằm bên Biển Hồ Tơ Nưng, một miệng núi lửa ngừng hoạt động trăm triệu năm, tài nguyên quý để xây dựng thuỷ điện Yaly. Đường Biển Hồ đẹp như mơ với rặng thông xanh ngắt, chùa Minh Thành hay chùa Thày Năm bình an, thanh tĩnh. Pleiku lãng đãng sương mù, ngày hội đủ 4 mùa sáng Xuân, trưa Hạ, chiều Thu, tối Đông, đẹp say lòng người.','image' => 'pleiku.jpg','flight_id' => '2', 'price_id' => "6", 'category_id' => '1', 'status' => '0'],

             ['name' => 'Đà Nẵng - Cà Mau ','departure_location' => 'Đà nẵng',  'end_location' => "Cà Mau", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Cà Mau quê hương của Bác Ba Phi, là thành phố trẻ 300 năm, là cực nam Việt Nam với 3 mặt tiếp giáp biển. Điểm hấp dẫn của Cà Mau là các đình quán cổ, khu di tích lịch sử, và tham quan vườn chim trong Rừng U Minh. Đặc sản nổi tiếng của Cà Mau phải kể đến mắm cá lóc, ba khía, tôm cua sò…','image' => 'camau.jpg','flight_id' => '2', 'price_id' => "7", 'category_id' => '1', 'status' => '0'],

             ['name' => 'Đà Nẵng - Phong Nha Kẻ Bàng ','departure_location' => 'Đà nẵng',  'end_location' => "Quảng Bình", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Khoảng gần chục năm trở lại đây, khu vực Di sản thiên nhiên thế giới Phong Nha - Kẻ Bàng (Quảng Bình) được mệnh danh là “vương quốc” hang động, với gần 300 hang động lớn nhỏ được phát hiện trong đó có hàng chục hang đang được khai thác để du khách tham quan du lịch.','image' => 'kebang.jpg','flight_id' => '2', 'price_id' => "9", 'category_id' => '1', 'status' => '0'],

             ['name' => 'Đà Nẵng - Hà Giang ','departure_location' => 'Đà nẵng',  'end_location' => "Hà Giang", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Hà Giang ở cực Bắc, cuốn hút lòng người vì núi đá vôi hùng vĩ, cao nguyên Đồng Văn huyền thoại bên bờ sông Lô, những cung đường uốn lượn, những ruộng bậc thang đẹp như tranh, nhà Vương trầm mặc, phố cổ Đồng Văn, và chợ tình Khâu Vai cho những mối tơ duyên dở dang.
                 Tại Hà Giang Bạn có thể thăm quan các điểm đến sau Hà Giang, Lũng Cú, Đồng Văn, Hoàng Su Phì,','image' =>'hagiang.jpg','flight_id' => '2', 'price_id' => "8", 'category_id' => '1', 'status' => '0'],

                 //11 tour trong nước

             ['name' => 'Đà Nẵng - Sapa ','departure_location' => 'Đà nẵng',  'end_location' => "Sapa", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Sapa – thành phố sương mù nằm ở phía Tây Bắc của Việt Nam là nơi ẩn chứa vô vàn điều diệu kỳ cũng như những trải nghiệm mới lạ, chờ đợi du khách khám phá. Những kinh nghiệm du lịch Sapa sau đây sẽ giúp bạn có chuyến đi thú vị, độc đáo, đặc biệt là những người lần đầu đến Sapa.Các món nướng trong khu ẩm thực, cơm lam, xôi ngũ sắc, cá hồi, cá tầm, rau rừng, lẩu, thắng cố… là những món bạn không nên bỏ qua.','image' => 'sapa.jpg','flight_id' => '2', 'price_id' => "2", 'category_id' => '3', 'status' => '0'],

             ['name' => 'Đà Nẵng - Cầu Vàng - Sơn Trà ','departure_location' => 'Đà nẵng',  'end_location' => "Sơn trà", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => '- Bán đảo Sơn Trà, viếng Chùa Linh Ứng - Nơi đây có tượng Phật Quan Thế Âm cao nhất Việt Nam, đứng nơi đây, Quý khách sẽ được chiêm ngưỡng toàn cảnh thành phố, núi rừng và biển đảo Sơn Trà một cách hoàn hảo nhất. 
            - Phố Cổ Hội An - Chùa Cầu, Nhà Cổ Phùng Hưng, Hội Quán Phước Kiến, Cơ sở Thủ Công Mỹ Nghệ,…
            - Tặng Show Ký Ức Hội An - Vở diễn thực cảnh ngoài trời với số lượng diễn viên đạt kỷ lục Việt Nam, tái hiện nhịp nhàng sinh động miền ký ức đa văn hóa: Champa, Bồ Đào Nha, Nhật, Trung… chứng kiến cuộc sống thôn quê bình dị bên dòng sông Hoài, khoảnh khắc hùng tráng trong lịch sử, nét hoàng kim của cảng thị một thời... và Công Viên Ấn tượng Hội An - Tái hiện Hội An của quá khứ, một cảng thị quốc tế sầm uất với sự hiện diện của các nền văn hóa Á, Âu, tìm hiểu nghề nuôi tằm ươm tơ, quay tơ dệt lụa bằng khung cửi, làm bánh đậu xanh Hội An, thưởng thức trà đạo phong cách Nhật Bản … Đoàn quay về lại Đà Nẵng, tự do nghỉ ngơi. Nghỉ đêm tại Đà Nẵng','image' => '12.jpg','flight_id' => '2', 'price_id' => "2", 'category_id' => '3', 'status' => '0'],

            ['name' => 'Đà Nẵng  - Bình Định ','departure_location' => 'Sân bay Đà nẵng',  'end_location' => "Bình Định", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Thành phố trung tâm của Bình Định luôn hấp dẫn bởi núi non cùng biển cả hòa quyện tạo nên cảnh sắc hùng vĩ, thơ mộng. Du khách sẽ có một kỳ nghỉ lý tưởng khi đến mảnh đất trải dài như hình cánh cung, với một bên là biển xanh sóng vỗ rì rào, một bên là các khách sạn, resort hiện đại hóng gió biển. Sóng biển Quy Nhơn từ lâu cũng đã trở thành nguồn cảm hứng bất tận của thơ ca.Khí hậu trong lành và phong cảnh hữu tình nơi đây đã được vua Bảo Đại chọn làm nơi nghỉ mát từ năm 1927. Dưới chân Ghềnh Ráng, là bãi tắm độc đáo với vô số viên đá cuội được sóng biển mài nhẵn, dành riêng cho hoàng hậu Nam Phương nên còn gọi là bãi tắm Hoàng Hậu. Từ trên sườn đồi có thể ngắm bao quát toàn bộ phía đông thành phố Quy Nhơn như một bức tranh thủy mặc.','image' => 'binhdinh.jpg','flight_id' => '3', 'price_id' => "3", 'category_id' => '3', 'status' => '0'],

             ['name' => 'Đà Nẵng  - Hạ Long Bay','departure_location' => 'Đà nẵng',  'end_location' => "Hạ Long Bay", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Vịnh Hạ Long là địa điểm du lịch nổi tiếng của Việt Nam, nằm ở phần bờ Tây vịnh Bắc Bộ tại khu vực biển Đông Bắc Việt Nam. Với hàng nghìn hòn đảo kỳ vĩ, thành quả kì diệu của tạo hóa, vịnh Hạ Long được UNESCO nhiều lần công nhận là di sản thiên nhiên của thế giới. Du lịch Hạ Long có lợi thế phong cảnh tuyệt đẹp, hấp dẫn với du khách trong nước và quốc tế.','image' => '14.jpg','flight_id' => '3', 'price_id' => "7", 'category_id' => '3', 'status' => '0'],

             ['name' => 'Đà Nẵng - Bến Tre','departure_location' => 'Đà nẵng',  'end_location' => "Bến Tre", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Khu du lịch Lan Vương nằm ngay thành phố Bến Tre, cách Sài Gòn khoảng hơn 90km. Được ghép lại từ những mảnh ruộng hoang sơ, hình thành nên miền sông nước miệt vườn, có một dòng sông nhỏ trải dài xuyên suốt cả khu. Du lịch Bến Tre, đến Lan Vương, bạn sẽ được thưởng thức các món ănvà tận hưởng không gian mát mẻ với vườn cây, trái ngọt, xuôi theo dòng sông.','image' => 'bentre.jpg','flight_id' => '3', 'price_id' => "1", 'category_id' => '3', 'status' => '0'],

             ['name' => 'Đà Nẵng - TP Hồ Chí Minh ','departure_location' => 'Đà nẵng',  'end_location' => "Sơn trà", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'u lịch đến với thành phố Hồ Chí Minh bạn có thể gặp những tòa nhà cao tầng nằm san sát, những khu vui chơi giải trí, trung tâm mua sắm sầm uất, nhưng cũng không thiếu những biệt thự cổ kính, những ngôi chợ truyền thống. Sài Gòn rộng lớn và không thiếu những “đặc sản” du lịch như du ngoạn ven sông Sài Gòn bằng tàu, thăm phố Tây Phạm Ngũ Lão, mua sắm ở chợ Bến Thành hay về với biển Cần Giờ.','image' => 'hochiminh.jpg','flight_id' => '3', 'price_id' => "6", 'category_id' => '3', 'status' => '0'],

             ['name' => 'Bà Nà  - Cam Ranh ','departure_location' => 'Đà nẵng',  'end_location' => "Cam Ranh", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Cam Ranh có nhiều thắng cảnh nổi tiếng như Hòn Rồng, đảo Bình Ba, khu du lịch suối khoáng Cam Ranh, Bãi Dài. Ngoài ra, Vịnh Cam Ranh được xem là một trong ba vịnh thiên nhiên tốt và đẹp nhất thế giới với sóng biển rất êm ả được so sánh ngang với vịnh Sanfrancisco của Mỹ. Đến Cam Ranh chắc chắn sẽ mang đến cho du khách những trải nghiệm khó quên.','image' => 'camranh.jpg','flight_id' => '3', 'price_id' => "2", 'category_id' => '3', 'status' => '0'],

             ['name' => 'Đà Nẵng  - Cần Thơ','departure_location' => 'Đà nẵng',  'end_location' => "Cần Thơ", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Về Cần Thơ thăm Bến Ninh Kiều, ngắm cầu Quang Trung, dạo chợ nổi Cái Răng nhộn nhịp, tham quan Nhà Cổ, thưởng thức đặc sản trái cây miền Tây trĩu ngọt. Khu du lịch sinh thái Mỹ Khánh là nơi bạn trải nghiệm các trò chơi dân gian vui nhộn như câu cá, chèo thuyền trên sông, đua heo.','image' => 'cantho.jpg','flight_id' => '3', 'price_id' => "3", 'category_id' => '2', 'status' => '0'],

             ['name' => 'Đà Nẵng  - Bắc Kạn ','departure_location' => 'Đà nẵng',  'end_location' => "Bắc Kạn", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Bắc Kạn là tỉnh nhiều tiềm năng du lịch với phong cảnh tự nhiên và nền văn hóa đậm đà bản sắc dân tộc miền núi Đông Bắc Việt Nam. Đến với Bắc Kạn, các bạn sẽ có dịp ghé thăm hồ Ba Bể với không gian yên bình, động Nàng Tiên - Na Rỳ, thác Nà Khoang hay bản Pác Ngòi nép mình bên triền núi. Bên cạnh đó, Bắc Kạn còn có các di tích lịch sử quan trọng.','image' => 'backan.jpg','flight_id' => '3', 'price_id' => "3", 'category_id' => '3', 'status' => '0'],

            ['name' => 'Sơn Trà - KDL Thần Tài','departure_location' => 'Đà nẵng',  'end_location' => "Sơn trà", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => '- Bán đảo Sơn Trà, viếng Chùa Linh Ứng - Nơi đây có tượng Phật Quan Thế Âm cao nhất Việt Nam, đứng nơi đây, Quý khách sẽ được chiêm ngưỡng toàn cảnh thành phố, núi rừng và biển đảo Sơn Trà một cách hoàn hảo nhất. 
            - Phố Cổ Hội An - Chùa Cầu, Nhà Cổ Phùng Hưng, Hội Quán Phước Kiến, Cơ sở Thủ Công Mỹ Nghệ,…
            - Tặng Show Ký Ức Hội An - Vở diễn thực cảnh ngoài trời với số lượng diễn viên đạt kỷ lục Việt Nam, tái hiện nhịp nhàng sinh động miền ký ức đa văn hóa: Champa, Bồ Đào Nha, Nhật, Trung… chứng kiến cuộc sống thôn quê bình dị bên dòng sông Hoài, khoảnh khắc hùng tráng trong lịch sử, nét hoàng kim của cảng thị một thời... và Công Viên Ấn tượng Hội An - Tái hiện Hội An của quá khứ, một cảng thị quốc tế sầm uất với sự hiện diện của các nền văn hóa Á, Âu, tìm hiểu nghề nuôi tằm ươm tơ, quay tơ dệt lụa bằng khung cửi, làm bánh đậu xanh Hội An, thưởng thức trà đạo phong cách Nhật Bản … Đoàn quay về lại Đà Nẵng, tự do nghỉ ngơi. Nghỉ đêm tại Đà Nẵng','image' => '20.jpg','flight_id' => '4', 'price_id' => "8", 'category_id' => '3', 'status' => '0'],

            ['name' => 'Sơn Trà - Cao Bằng','departure_location' => 'Đà nẵng',  'end_location' => "Cao Bằng", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Cao Bằng núi sông hùng vĩ, thiên nhiên hoang sơ, bao la với thác Bản Giốc đẹp nhất Việt Nam, động Ngườm Ngao thế giới của nhũ đá thiên nhiên. Cao Bằng cũng là vùng đất của truyền thống cách mạng với những di tích danh tiếng như hang Pác Bó, mộ anh Kim Đồng, nơi thành lập tiền thân của Quân đội Nhân dân Việt Nam.','image' => 'caobang.jpg','flight_id' => '4', 'price_id' => "4", 'category_id' => '3', 'status' => '0'],
            //end 11 tours khám phá

            //10 tours khuyến mãi
            ['name' => 'Sơn Trà - KDL Thần Tài','departure_location' => 'Đà nẵng',  'end_location' => "Sơn trà", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => '- Bán đảo Sơn Trà, viếng Chùa Linh Ứng - Nơi đây có tượng Phật Quan Thế Âm cao nhất Việt Nam, đứng nơi đây, Quý khách sẽ được chiêm ngưỡng toàn cảnh thành phố, núi rừng và biển đảo Sơn Trà một cách hoàn hảo nhất. 
            - Phố Cổ Hội An - Chùa Cầu, Nhà Cổ Phùng Hưng, Hội Quán Phước Kiến, Cơ sở Thủ Công Mỹ Nghệ,…
            - Tặng Show Ký Ức Hội An - Vở diễn thực cảnh ngoài trời với số lượng diễn viên đạt kỷ lục Việt Nam, tái hiện nhịp nhàng sinh động miền ký ức đa văn hóa: Champa, Bồ Đào Nha, Nhật, Trung… chứng kiến cuộc sống thôn quê bình dị bên dòng sông Hoài, khoảnh khắc hùng tráng trong lịch sử, nét hoàng kim của cảng thị một thời... và Công Viên Ấn tượng Hội An - Tái hiện Hội An của quá khứ, một cảng thị quốc tế sầm uất với sự hiện diện của các nền văn hóa Á, Âu, tìm hiểu nghề nuôi tằm ươm tơ, quay tơ dệt lụa bằng khung cửi, làm bánh đậu xanh Hội An, thưởng thức trà đạo phong cách Nhật Bản … Đoàn quay về lại Đà Nẵng, tự do nghỉ ngơi. Nghỉ đêm tại Đà Nẵng','image' => '22.jpg','flight_id' => '4', 'price_id' => "2", 'category_id' => '4', 'status' => '0'],

           ['name' => 'Vietnam - Singapore và Malaysia','departure_location' => 'Đà nẵng',  'end_location' => "Malaysia", 'departure_day' => '2019-06-30 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '10 ngày',  'quantity_tourist' => "15", 'description' => 'Singapore và Malaysia - hai quốc gia được cả thế giới biết đến với ngành du lịch và giải trí rất hấp dẫn, là điểm đến thú vị với nhiều địa danh du lịch và giải trí nổi tiếng như: Sentosa kì thú, vườn thú Safari hoang dã, phố Orchard – thiên đường mua sắm, phố cổ Malacca, cao nguyên Genting nổi tiếng…
            - Đây là một chuyến du lịch chứa đựng nhiều điều thú vị và mới lạ đang chờ bạn khám phá. Một thành phố Singapore năng động với nhiều nét tương phản và màu sắc sinh động, luôn luôn tràn đầy sức sống, là hiện thân cho những gì tốt đẹp nhất của hai nền văn hoá Đông Tây. Một Malaysia huyền bí của phương Đông với nền văn hóa vừa quen, vừa lạ, vừa gần gũi, vừa có cái gì đó rất riêng của nơi đây từ lâu đã thu hút du khách khắp mọi nơi ghé thăm…. 
            -  Nhà hát Victoria – nhà hát cổ kính nhất Singapore. Nơi đây còn là tâm điểm cho nghệ thuật biểu diễn của đảo quốc sư tử ngay từ thời thuộc địa.','image' => 'singapore.jpg','flight_id' => '5', 'price_id' => "4", 'category_id' => '4', 'status' => '0'],

            ['name' => 'Vietnam - Nga','departure_location' => 'Đà nẵng',  'end_location' => "Nga", 'departure_day' => '2019-06-30 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '10 ngày',  'quantity_tourist' => "15", 'description' => ' Quảng trường Đỏ: di sản văn hóa thế giới được UNESCO công nhận, xứng đáng là kiệt tác nghệ thuật xây dựng – niềm tự hào của nước Nga.
            - Tham quan bên ngoài nhà thờ thánh Basil: Nhìn từ trên cao xuống, nhà thờ St. Basil giống như một ngôi sao 8 cánh (8 tòa tháp vây quanh một tòa tháp chính). Không phải ngẫu nhiên nhà thờ được thiết kế như vậy bởi vì hình ngôi sao 8 cánh và con số 8 mang nhiều ý nghĩa tâm linh và tôn giáo 
            -  Vườn Alexandrovsky và Ngọn lửa vĩnh cửu (nơi tưởng nhớ những người lính hồng quân đã anh dũng hy sinh vì đất nước trong cuộc chiến tranh vệ quốc vĩ đại).','image' => 'nga.jpg','flight_id' => '5', 'price_id' => "5", 'category_id' => '4', 'status' => '0'],
            ['name' => 'Bà Nà  - Cam Ranh ','departure_location' => 'Đà nẵng',  'end_location' => "Cam Ranh", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Cam Ranh có nhiều thắng cảnh nổi tiếng như Hòn Rồng, đảo Bình Ba, khu du lịch suối khoáng Cam Ranh, Bãi Dài. Ngoài ra, Vịnh Cam Ranh được xem là một trong ba vịnh thiên nhiên tốt và đẹp nhất thế giới với sóng biển rất êm ả được so sánh ngang với vịnh Sanfrancisco của Mỹ. Đến Cam Ranh chắc chắn sẽ mang đến cho du khách những trải nghiệm khó quên.','image' => 'camranh.jpg','flight_id' => '3', 'price_id' => "5", 'category_id' => '4', 'status' => '0'],

             ['name' => 'Đà Nẵng  - Cần Thơ','departure_location' => 'Đà nẵng',  'end_location' => "Cần Thơ", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Về Cần Thơ thăm Bến Ninh Kiều, ngắm cầu Quang Trung, dạo chợ nổi Cái Răng nhộn nhịp, tham quan Nhà Cổ, thưởng thức đặc sản trái cây miền Tây trĩu ngọt. Khu du lịch sinh thái Mỹ Khánh là nơi bạn trải nghiệm các trò chơi dân gian vui nhộn như câu cá, chèo thuyền trên sông, đua heo.','image' => 'cantho.jpg','flight_id' => '3', 'price_id' => "4", 'category_id' => '4', 'status' => '0'],

             ['name' => 'Đà Nẵng  - Bắc Kạn ','departure_location' => 'Đà nẵng',  'end_location' => "Bắc Kạn", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Bắc Kạn là tỉnh nhiều tiềm năng du lịch với phong cảnh tự nhiên và nền văn hóa đậm đà bản sắc dân tộc miền núi Đông Bắc Việt Nam. Đến với Bắc Kạn, các bạn sẽ có dịp ghé thăm hồ Ba Bể với không gian yên bình, động Nàng Tiên - Na Rỳ, thác Nà Khoang hay bản Pác Ngòi nép mình bên triền núi. Bên cạnh đó, Bắc Kạn còn có các di tích lịch sử quan trọng.','image' => 'backan.jpg','flight_id' => '3', 'price_id' => "3", 'category_id' => '4', 'status' => '0'],
             ['name' => 'Đà Nẵng - Hội An ','departure_location' => 'Đà nẵng',  'end_location' => "Hội An", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Quảng Nam còn được biết đến là vùng đất Địa Linh Nhân Kiệt, Ngũ Phụng Tề Phi, với di tích lịch sử lâu đời và nhiều lễ hội văn hóa đặc sắc. Những điểm đến thú vị tại Quảng Nam: Cù lao Chàm biển xanh sóng lặng, biển Cửa Đại nước trong vắt, Hội An hoài cổ, đền tháp Mỹ Sơn rực rỡ, và thiên nhiên núi Thành kỳ vĩ.','image' => 'hoian.jpg','flight_id' => '1', 'price_id' => "3", 'category_id' => '4', 'status' => '0'],

            ['name' => 'Đà Nẵng - Nha Trang ','departure_location' => 'Đà nẵng',  'end_location' => "Nha Trang", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => '- Biển Nha Trang tuyệt vời với Vinpearl Nha Trang 5* sang trọng, hòn Mun Hòn Tằm nước trong veo và san hô lộng lẫy, cùng với vịnh Ninh Vân, vịnh Vân Phong hoang sơ và thuần khiết. Viện Hải dương học Nha Trang có trên 20.000 mẫu sinh vật dưới nước, tháp Bà Ponagar hoàn mỹ của người Chăm, cảng Vũng Rô, làng Đại Lãnh và chợ Đầm nhộn nhịp.
                Tại Nha Trang Bạn có thể thăm quan các điểm đến sau Hòn Tằm, White Sand Dốc Lết, Lặn Biển, Nha Trang, Hòn Lao, Vinpearl Land, Đầm Nha Phu, Suối khoáng nóng I-Resort, Hòn Chồng, Điệp Sơn','image' => 'nhatrang.jpg','flight_id' => '1', 'price_id' => "2", 'category_id' => '4', 'status' => '0'],

            ['name' => 'Đà Nẵng - Phú Quốc ','departure_location' => 'Đà nẵng',  'end_location' => "Phú Quốc", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => 'Phú Quốc là điểm nghỉ dưỡng, tham quan, và khám phá sinh thái tuyệt vời. Mũi Ông Đội, Đá Chào là thế giới san hô và cá biển sặc sỡ. Bãi Sao cát trắng mịn, dáng cong, nước xanh ngọc bích. Đặc sản danh tiếng cả nước là tiêu sọ, nước mắm, rượu sim, ngọc trai. Phú Quốc thực sự là một viên ngọc quý trên bản đồ Việt Nam.','image' => 'phuquoc.jpg','flight_id' => '3', 'price_id' => "1", 'category_id' => '4', 'status' => '0'],

            //end khuyến mãi
            ['name' => 'Vietnam - Singapore và Malaysia','departure_location' => 'Đà nẵng',  'end_location' => "Malaysia", 'departure_day' => '2019-07-30 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '10 ngày',  'quantity_tourist' => "15", 'description' => 'Singapore và Malaysia - hai quốc gia được cả thế giới biết đến với ngành du lịch và giải trí rất hấp dẫn, là điểm đến thú vị với nhiều địa danh du lịch và giải trí nổi tiếng như: Sentosa kì thú, vườn thú Safari hoang dã, phố Orchard – thiên đường mua sắm, phố cổ Malacca, cao nguyên Genting nổi tiếng…
            - Đây là một chuyến du lịch chứa đựng nhiều điều thú vị và mới lạ đang chờ bạn khám phá. Một thành phố Singapore năng động với nhiều nét tương phản và màu sắc sinh động, luôn luôn tràn đầy sức sống, là hiện thân cho những gì tốt đẹp nhất của hai nền văn hoá Đông Tây. Một Malaysia huyền bí của phương Đông với nền văn hóa vừa quen, vừa lạ, vừa gần gũi, vừa có cái gì đó rất riêng của nơi đây từ lâu đã thu hút du khách khắp mọi nơi ghé thăm…. 
            -  Nhà hát Victoria – nhà hát cổ kính nhất Singapore. Nơi đây còn là tâm điểm cho nghệ thuật biểu diễn của đảo quốc sư tử ngay từ thời thuộc địa.','image' => 'singapore.jpg','flight_id' => '5', 'price_id' => "9", 'category_id' => '2', 'status' => '0'],

            ['name' => 'Vietnam - Singapore và Malaysia','departure_location' => 'Đà nẵng',  'end_location' => "Malaysia", 'departure_day' => '2019-06-30 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '10 ngày',  'quantity_tourist' => "15", 'description' => 'Singapore và Malaysia - hai quốc gia được cả thế giới biết đến với ngành du lịch và giải trí rất hấp dẫn, là điểm đến thú vị với nhiều địa danh du lịch và giải trí nổi tiếng như: Sentosa kì thú, vườn thú Safari hoang dã, phố Orchard – thiên đường mua sắm, phố cổ Malacca, cao nguyên Genting nổi tiếng…
            - Đây là một chuyến du lịch chứa đựng nhiều điều thú vị và mới lạ đang chờ bạn khám phá. Một thành phố Singapore năng động với nhiều nét tương phản và màu sắc sinh động, luôn luôn tràn đầy sức sống, là hiện thân cho những gì tốt đẹp nhất của hai nền văn hoá Đông Tây. Một Malaysia huyền bí của phương Đông với nền văn hóa vừa quen, vừa lạ, vừa gần gũi, vừa có cái gì đó rất riêng của nơi đây từ lâu đã thu hút du khách khắp mọi nơi ghé thăm…. 
            -  Nhà hát Victoria – nhà hát cổ kính nhất Singapore. Nơi đây còn là tâm điểm cho nghệ thuật biểu diễn của đảo quốc sư tử ngay từ thời thuộc địa.','image' => 'singapore.jpg','flight_id' => '5', 'price_id' => "4", 'category_id' => '2', 'status' => '0'],

            ['name' => 'Vietnam - Nga','departure_location' => 'Đà nẵng',  'end_location' => "Nga", 'departure_day' => '2019-06-30 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '10 ngày',  'quantity_tourist' => "15", 'description' => ' Quảng trường Đỏ: di sản văn hóa thế giới được UNESCO công nhận, xứng đáng là kiệt tác nghệ thuật xây dựng – niềm tự hào của nước Nga.
            - Tham quan bên ngoài nhà thờ thánh Basil: Nhìn từ trên cao xuống, nhà thờ St. Basil giống như một ngôi sao 8 cánh (8 tòa tháp vây quanh một tòa tháp chính). Không phải ngẫu nhiên nhà thờ được thiết kế như vậy bởi vì hình ngôi sao 8 cánh và con số 8 mang nhiều ý nghĩa tâm linh và tôn giáo 
            -  Vườn Alexandrovsky và Ngọn lửa vĩnh cửu (nơi tưởng nhớ những người lính hồng quân đã anh dũng hy sinh vì đất nước trong cuộc chiến tranh vệ quốc vĩ đại).','image' => 'nga.jpg','flight_id' => '5', 'price_id' => "5", 'category_id' => '2', 'status' => '0'],

            ['name' => 'Vietnam - Hàn Quốc','departure_location' => 'Đà nẵng',  'end_location' => "Hàn Quốc", 'departure_day' => '2019-06-30 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '10 ngày',  'quantity_tourist' => "15", 'description' => 'Chắc hẳn không còn điều gì tuyệt với hơn khi được thưởng thức khí trời trong lành trên hòn đảo Jeju- nơi được mệnh danh là Hawai của Hàn Quốc.
            - Sau những ngày vùi mình trong giấc ngủ đông dài đằng đẵng, xứ sở kim chi cũng thay màu áo mới để đón tiết xuân ngọt ngào. Từ Seoul thủ đô đến miền biển Busan, từ Incheon tràn trề sức sống đến ‘thành phố ánh sáng’ Gwangju, đi đến đâu người ta cũng phải ngây ngất trước sắc hồng phơn phớt mỏng manh của loài hoa anh đào đang nở rộ hai bên đường.Đến Jeju, thả mình vào gió biển lồng lộng, hít hà hương vị của đại dương, lắng nghe những thanh âm mộc mạc làng vạn chài còn gì tuyệt hơn.
            -  Trái ngược với Seoul nhộn nhịp, tấp nập người và xe, nhà cao tầng san sát, Jeju lắng đọng và êm đềm, xứng đáng với danh hiệu “Hòn đảo của hòa bình.','image' => 'hanquoc.jpg','flight_id' => '5', 'price_id' => "3", 'category_id' => '2', 'status' => '0'],

            ['name' => 'Vietnam - ThaiLan','departure_location' => 'Đà nẵng',  'end_location' => "ThaiLan", 'departure_day' => '2019-06-30 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '10 ngày',  'quantity_tourist' => "15", 'description' => 'Tham quan Chùa Phật Lớn: Đây là ngôi chùa cổ kính huyền bí và thiêng liêng trên đất Thái, thường xuyên đón chào rất nhiều du khách đến tham quan, chiêm ngưỡng và Phật tử khắp nơi đến hành hương, trao đổi thông tin Phật giáo.
            - Thăm đỉnh núi Phật Chechan Mountain – có tên gọi khác là Trân Bảo Ngọc Sơn - tượng Phật Thích Ca Mâu Ni đang ngồi thiền- được tạc trên một vách núi giữa trời. Sự độc đáo của bức tượng Phật lớn này là được khắc nổi bằng vàng ròng 24 kara, cao 130 m, rộng hơn 70m, được xây dựng vào năm 1996, nhân dịp Quốc vương RaMa IX trị vì vương quốc Thái Lan được 50 năm.
            -  Công viên Suon Thai - Đây là một khu công viên rộng lớn với mô hình tái hiện cuộc sống ngày xưa của người dân Thái., Ở đây khách sẽ được trải nghiệm cưỡi voi, ngồi xe ngựa, dạo thuyền. Tham quan thác nước nhân tạo và các lễ hội truyền thống.','image' => 'thailan.jpg','flight_id' => '5', 'price_id' => "4", 'category_id' => '2', 'status' => '0'],

            ['name' => 'Vietnam - Lao','departure_location' => 'Đà nẵng',  'end_location' => "Lao", 'departure_day' => '2019-07-30 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '10 ngày',  'quantity_tourist' => "15", 'description' => 'Theo truyền thống cách đây hàng nghìn năm, mỗi khi Tết đến xuân về, người Lào lại tổ chức lễ hội té nước. Trong lễ hội này, người dân Lào và cả khách du lịch nước ngoài, không phân biệt giàu nghèo, tôn giáo đều cùng hưởng niềm vui, niềm hạnh phúc của một ngày hội thực thụ
            - Giữa tháng 4, khi gió mùa tây-nam thổi, mưa mùa sắp rơi, bắt đầu năm mới ở nhiều nước trong khu vực Ðông – Nam Á, Tết cổ truyền Bun Pi May của Lào (lễ hội năm mới) hay Lễ hội Hốt Nậm (Té nước), cầu mong nước về, cho cuộc sống sinh sôi, đâm chồi, nảy lộc. Người Lào sống hiền lành và thiên về điều thiện.
            -  Tục té nước ngày Tết cổ truyền Bun Pi May của Lào còn có nét đặc trưng là trong những ngày này không kể dù lạ hay quen, dù có hay không có địa vị trong xã hội cũng đều được gia chủ tiếp đón ân cần như nhau và được thể hiện sự quý trọng bằng những “gầu” nước dội lên khắp người khi đến thăm.','image' => 'lao.jpg','flight_id' => '5', 'price_id' => "10", 'category_id' => '2', 'status' => '0'],

            ['name' => 'Vietnam - Canada ','departure_location' => 'Đà nẵng',  'end_location' => "Canada", 'departure_day' => '2019-07-30 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '10 ngày',  'quantity_tourist' => "15", 'description' => 'Phố cổ nơi khai sinh Vancouver - Historic Gastown. Tại đây quý khách sẽ được chiêm ngưỡng chiếc đồng hồ chạy bằng hơi nước độc nhất vô nhị - Steam Clock.
            - Khu chợ ngòai trời với các hoạt động mua bán tấp nập và tham quan bảo tàng nghệ thuật ngoài trời – Granville Island.
            -  Grouse Mountain (chi phí tự túc). Quý khách sẽ đi cáp treo lên đỉnh núi, đừng quên máy chụp hình và quay phim để bắt lại những phong cảnh tuyệt vời của thành phố, của biển khi cáp treo dần đi lên đỉnh núi. Tham gia các họat động giải trí trên đỉnh núi.','image' => 'canada.jpg','flight_id' => '3', 'price_id' => "8", 'category_id' => '2', 'status' => '0'],

            ['name' => 'Vietnam - Canada ','departure_location' => 'Đà nẵng',  'end_location' => "Canada", 'departure_day' => '2019-06-30 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '10 ngày',  'quantity_tourist' => "15", 'description' => 'Phố cổ nơi khai sinh Vancouver - Historic Gastown. Tại đây quý khách sẽ được chiêm ngưỡng chiếc đồng hồ chạy bằng hơi nước độc nhất vô nhị - Steam Clock.
            - Khu chợ ngòai trời với các hoạt động mua bán tấp nập và tham quan bảo tàng nghệ thuật ngoài trời – Granville Island.
            -  Grouse Mountain (chi phí tự túc). Quý khách sẽ đi cáp treo lên đỉnh núi, đừng quên máy chụp hình và quay phim để bắt lại những phong cảnh tuyệt vời của thành phố, của biển khi cáp treo dần đi lên đỉnh núi. Tham gia các họat động giải trí trên đỉnh núi.','image' => 'canada.jpg','flight_id' => '4', 'price_id' => "9", 'category_id' => '2', 'status' => '0'],

            ['name' => 'Vietnam - Canada ','departure_location' => 'Đà nẵng',  'end_location' => "Canada", 'departure_day' => '2019-07-28 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '10 ngày',  'quantity_tourist' => "15", 'description' => 'Phố cổ nơi khai sinh Vancouver - Historic Gastown. Tại đây quý khách sẽ được chiêm ngưỡng chiếc đồng hồ chạy bằng hơi nước độc nhất vô nhị - Steam Clock.
            - Khu chợ ngòai trời với các hoạt động mua bán tấp nập và tham quan bảo tàng nghệ thuật ngoài trời – Granville Island.
            -  Grouse Mountain (chi phí tự túc). Quý khách sẽ đi cáp treo lên đỉnh núi, đừng quên máy chụp hình và quay phim để bắt lại những phong cảnh tuyệt vời của thành phố, của biển khi cáp treo dần đi lên đỉnh núi. Tham gia các họat động giải trí trên đỉnh núi.','image' => 'canada.jpg','flight_id' => '5', 'price_id' => "10", 'category_id' => '2', 'status' => '0'],
            
            
        ]);
    }
}
