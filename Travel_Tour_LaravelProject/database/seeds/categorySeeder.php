<?php

use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('categories')->insert([
    		['name' => 'Du lịch trong nước','image' => 'trongNuoc.jpg', 'description' => 'Du lịch trong nước luôn là lựa chọn tuyệt vời. Đường bờ biển dài hơn 3260km, những khu bảo tồn thiên nhiên tuyệt vời, những thành phố nhộn nhịp, những di tích lịch sử hào hùng, nền văn hóa độc đáo và hấp dẫn, cùng một danh sách dài những món ăn ngon nhất thế giới, Việt Nam có tất cả những điều đó. Với lịch trình dày, khởi hành đúng thời gian cam kết, Vietravel là công ty lữ hành uy tín nhất hiện nay tại Việt Nam, luôn sẵn sàng phục vụ du khách mọi lúc, mọi nơi, đảm bảo tính chuyên nghiệp và chất lượng dịch vụ tốt nhất thị trường'],
    		['name' => 'Du lịch nước ngoài','image' => 'nuocngoai.jpg', 'description' => 'Vietravel là công ty lữ hành số 1 Việt Nam, chuyên tổ chức các tour du lịch nước ngoài, với gần 1.000 tuyến khắp 5 châu. Bạn sẽ có dịp khám phá những miền đất mới tại các nước Đông Nam Á, Châu Á, châu Âu, Úc, Mỹ, hay khám phá những vùng đất Châu Phi xa xôi... Với lịch trình dày, khởi hành đúng thời gian cam kết, Vietravel là công ty lữ hành uy tín nhất hiện nay tại Việt Nam, luôn sẵn sàng phục vụ du khách mọi lúc, mọi nơi, đảm bảo tính chuyên nghiệp và chất lượng dịch vụ tốt nhất thị trường'],
    		['name' => 'Du lịch khám phá','image' => 'khamPha.jpg', 'description' => 'Du lịch khám phá là khái niệm khá mới mẻ ở Việt Nam nhưng rất phổ biến trên toàn thế giới. “Du lịch” ở đây được hiểu là việc thực hiện chuyến đi khỏi nơi cư trú đến một nơi nào đó, có thể ở lại ngắn ngày hoặc dài ngày và có sự trở về. Mục đích của chuyến đi là để vui chơi, thư giãn và nghĩ dưỡng. Còn “khám phá” có nghĩa là tìm kiếm một điều gì đó bí ẩn hoặc phát hiện ra những điều mới mẻ trong tự nhiên. Như vậy, “du lịch khám phá” có nghĩa là chuyến đi tìm kiếm những điều mới lạ trong cuộc sống. Nói một cách đơn giản thì du lịch khám phá là việc du khách tìm đến những nơi ít người biết đến hoặc những vùng thường chỉ dành cho người bản xứ. Loại hình khám phá có hơi chút mạo hiểm, phù hợp với hầu hết các đối tượng khách.'],
    		['name' => 'Du lịch khuyến mãi','image' => 'khuyenmai.jpg', 'description' => 'Đã trở thành thông lệ để đón chào những sự kiện đặc sắc cuối năm và mở đầu cho một năm mới nhiều hành trình mới, Vietravel tung ra chương trình khuyến mại Xuân 2019 độc đáo và tạo dấu ấn đặc biệt trên thị trường du lịch Việt Nam. Với thông điệp Du xuân ngày Tết - gắn kết yêu thương chương trình khuyến mại diễn ra từ 15/11/2018 – 20/2/2019 là cơ hội tốt nhất từ trước đến nay để khách hàng trải nghiệm hàng trăm tour mới lạ, hấp dẫn cùng nhiều ưu đãi khủng. Đặc biệt, trong 4 ngày Vàng từ 15 – 18/11/2018 chính là tâm điểm của sự kiện mở mùa xuân 2019, Vietravel tung ra chương trình ưu đãi tour lên đến 6,2 triệu đồng/khách và cơ hội trúng 40 triệu đồng/khách.'],
    		
    	]);
    }
}
