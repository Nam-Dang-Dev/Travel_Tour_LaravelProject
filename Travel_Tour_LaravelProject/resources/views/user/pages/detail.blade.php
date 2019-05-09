@extends('user.master')
@section('Content')
	<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            
            <div class="mb-4">
              <div class="slide-one-item home-slider owl-carousel">
                <div><img src="https://du-lich.chudu24.com/f/m/1805/22/webp-net-resizeimage-85-1356473.jpg?w=800&h=500" alt="Image" class="img-fluid"></div>
                <div><img src="https://du-lich.chudu24.com/f/m/1805/22/webp-net-resizeimage-85-1356473.jpg?w=800&h=500" alt="Image" class="img-fluid"></div>
              </div>
            </div>
            
            <h2 class="font-weight-light text-primary">CHI TIẾT TOUR</h2>
            <div class="row" style="margin-top: 20px">
              <h4>Thông tin chuyến bay</h4>
              <table class="table table-hover">
                <thead >
                  <tr >
                    <th style="border: 1px solid silver">Ngày đi: 15/05/2019 7:00</th>
                    <th style="border: 1px solid silver">Đến: 16/05/2019 7:00</th>
                    <th style="border: 1px solid silver">Chuyến bay: NHT02</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="border: 1px solid silver">Ngày về: 25/05/2019 7:00</td>
                    <td style="border: 1px solid silver">Đến: 26/05/2019 7:00</td>
                    <td style="border: 1px solid silver">Chuyến bay: NHT01</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="row" style="margin-top: 20px">
              <h4>Thông tin khách sạn</h4>
              <table class="table table-hover">
                <thead >
                  <tr >
                    <th style="border: 1px solid silver">Tên khách sạn</th>
                    <th style="border: 1px solid silver">Địa chỉ</th>
                    <th style="border: 1px solid silver">Điện thoại</th>
                    <th style="border: 1px solid silver">Website</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="border: 1px solid silver">Mường Thanh</td>
                    <td style="border: 1px solid silver">Sơn Trà, Đà Nẵng</td>
                    <td style="border: 1px solid silver">01122233</td>
                    <td style="border: 1px solid silver">muongthanhhotel.com</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="row" style="margin-top: 20px">
              <h4>Thông tin hướng dẫn viên</h4>
              <table class="table table-hover">
                <thead >
                  <tr >
                    <th style="border: 1px solid silver">Họ tên</th>
                    <th style="border: 1px solid silver">Địa chỉ</th>
                    <th style="border: 1px solid silver">Điện thoại</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="border: 1px solid silver">Thao Tran</td>
                    <td style="border: 1px solid silver">Sơn Trà, Đà Nẵng</td>
                    <td style="border: 1px solid silver">01122233</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="row" style="margin-top: 20px">
              <h4>Thông tin tập trung</h4>
              <table class="table table-hover">
                <thead >
                  <tr >
                    <th style="border: 1px solid silver">Ngày giờ tập trung</th>
                    <th style="border: 1px solid silver">Địa chỉ tập trung</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="border: 1px solid silver">25/05/2019</td>
                    <td style="border: 1px solid silver">Sân bay quốc tế Đà Nẵng</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="row" style="margin-top: 20px">
              <h4>Giá tour và phụ thu phòng đơn</h4>
              <table class="table table-hover">
                <thead >
                  <tr >
                    <th style="border: 1px solid silver">Độ tuổi khách</th>
                    <th style="border: 1px solid silver">Giá tour bay</th>
                    <th style="border: 1px solid silver">Giá tour dưới đất</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="border: 1px solid silver">12 tuổi trở lên</td>
                    <td style="border: 1px solid silver">$250</td>
                    <td style="border: 1px solid silver">$200</td>
                  </tr>
                  <tr>
                    <td style="border: 1px solid silver">5 - 12 tuổi</td>
                    <td style="border: 1px solid silver">$250</td>
                    <td style="border: 1px solid silver">$100</td>
                  </tr>
                  <tr>
                    <td style="border: 1px solid silver">Dưới 5 tuổi</td>
                    <td style="border: 1px solid silver">$150</td>
                    <td style="border: 1px solid silver">$0</td>
                  </tr>
                  <tr>
                    <td style="border: 1px solid silver">Phụ thu phòng đơn</td>
                    <td style="border: 1px solid silver">$50</td>
                    <td style="border: 1px solid silver">$50</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <h2 class="font-weight-light text-primary">LƯU Ý</h2>
            <div class="row">
            <h5 style="font-weight: bold;">Giá tour bao gồm:</h5>
              <p>- Xe tham quan (15, 25, 35, 45 chỗ tùy theo số lượng khách) theo chương trình
                - Vé máy bay khứ hồi SGN - DAD -  SGN <br>
                - Hành lý ký gửi: 20 kg, xách tay 7 kg/1 khách <br>
                - Khách sạn theo tiêu chuẩn 2 khách/phòng hoặc 3 khách/phòng <br>
                Liệt kê tên khách sạn tham khảo, tùy ngày khởi hành, tiêu chuẩn khi đăng ký tên khách sạn khác nhau.<br>
                Ø Tương đương 4 sao: Seven Sea, Mường Thanh, Cicilia, Grand Sea,…<br>
                Ø Tương đương 5 sao: Vinpearl River Front,… <br>
                - Các bữa ăn theo chương trình, thực đơn Việt chuẩn ăn từ 130.000 - 160.000đồng <br>
                - Vé tham quan theo chương trình<br>
                - Hướng dẫn viên tiếng Việt nối tuyến<br>
                - Bảo hiểm du lịch với mức bồi thường cao nhất 120.000.000đ/vụ<br>
                - Nón Vietravel + Nước suối + Khăn lạnh <br>
                - Thuế VAT 
                Xem nội dung đầy đủ tại: https://travel.com.vn/tourNDSGN315-013-100519VJ-D-1/da-nang-ba-na-cau-vang-son-tra-kdl-than-tai-hoi-an-da-nang-khach-san-3sao-tang-show-ky-uc-hoi-an-tour-tieu-chuan.aspx
                Nguồn: travel.com.vn</p>
              <h5 style="font-weight: bold;">Lưu ý khi chuyển/hủy tour</h5>
              <p>- Sau khi thanh toán tiền, nếu Quý khách muốn chuyển/hủy tour xin vui lòng mang Vé Du Lịch đến văn phòng đăng ký tour để làm thủ tục chuyển/hủy tour và chịu chi phí theo quy định của Vietravel. Không giải quyết các trường hợp liên hệ chuyển/hủy tour qua điện thoại.</p>

              <h5 style="font-weight: bold;">Điều kiện hủy tour</h5>
              <p>- Được chuyển sang các tuyến du lịch khác trước ngày khởi  hành 20 ngày : Không mất chi phí.
                - Nếu hủy hoặc chuyển sang các chuyến du lịch khác ngay sau khi đăng ký đến từ 15-19 ngày trước ngày khởi hành: Chi phí hủy tour: 50% tiền cọc tour.<br>
                - Nếu hủy hoặc chuyển sang các chuyến du lịch khác từ 12-14 ngày trước ngày khởi hành: Chi phí hủy tour: 100% tiền cọc tour.<br>
                - Nếu hủy chuyến du lịch trong vòng từ 08-11 ngày trước ngày khởi hành: Chi phí hủy tour: 50% trên giá tour du lịch.<br>
                - Nếu hủy chuyến du lịch trong vòng từ 05-07 ngày trước ngày khởi hành: Chi phí hủy tour: 70% trên giá tour du lịch.<br>
                - Nếu hủy chuyến du lịch trong vòng từ 02-04 ngày trước ngày khởi hành: Chi phí hủy tour: 90% trên giá vé du lịch.<br>
                - Nếu hủy chuyến du lịch trong vòng 1 ngày trước ngày khởi hành : Chi phí hủy tour: 100% trên giá vé du lịch.</p>
              </div>

          </div>


          <div class="col-lg-4 ml-auto">

            <div class="mb-5">
              <h3 class="h5 text-black mb-3">THÔNG TIN</h3>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Mã tour:</th>
                    <th>123MHNUJG</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Khởi hành</td>
                    <td>25/05/2019</td>
                    <td><a href="">Ngày khác</a></td>    
                  </tr>
                  <tr>
                    <td>Địa điểm</td>
                    <td>Đà Nẵng</td>
                    <td><a href="">5 ngày</a></td>    
                  </tr>
                </tbody>
              </table>
            
            <div class="mb-5">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <p class="mb-0">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-secondary"></span>
                    <span class="review"></span>
                  </p>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <p>Có 20 đánh giá</p>
                </div>
                

              </div>
            </div>

            <div class="mb-5">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <center><div style="border: 1px solid silver; color: red; font-weight: bold;">$1000</div></center>
                  <center><div style="border: 1px solid silver">Chỗ còn nhận: 5</div></center>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <a href="{{route('checkout')}}"><button type="button" style="width: 250px; height: 58px; background-color: pink;" >Đặt ngay</button></a>
                </div>
              </div>
              <div class="row" style="margin-top: 5px">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <center><div style="border: 1px solid silver; color: skyblue; font-weight: bold">$900</div></center>
                  <center><div style="border: 1px solid silver">Chỗ còn nhận: 5</div></center>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <button type="button" style="width: 250px; height: 58px; background-color: skyblue;" >Ưu đãi khi đăng kí trực tuyến</button>
                </div>
              </div>
            </div>

            <div class="mb-5">
              <h3 class="h5 text-black mb-3">DỊCH VỤ ĐI KÈM</h3>
              <ul>
                <li>Bảo hiểm</li>
                <li>Bữa ăn theo chương trình</li>
                <li>Hướng dẫn viên</li>
                <li>Vé tham quan</li>
                <li>Vận chuyển</li>
              </ul>
            </div>

            <div class="mb-5">
              <h3 class="h5 text-black mb-3">CÁC TOUR TƯƠNG TỰ</h3>
              <h3 class="h5 text-black mb-3">Theo giá</h3>
              <div class="d-block d-md-flex listing vertical">
                <a href="{{route('detail')}}" class="img d-block" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3ya_s8juHYERVkRmDQbelCPsUz_qNF6tTiJ6bjZDNM9kBz0q5')"></a>
                <div class="lh-content">
                  <span class="category">VIETNAM - NEPAL</span>
                  <a href="listings-single.html">$1000</a>
                </div>
              </div>
              <div class="d-block d-md-flex listing vertical">
                <a href="{{route('detail')}}" class="img d-block" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3ya_s8juHYERVkRmDQbelCPsUz_qNF6tTiJ6bjZDNM9kBz0q5')"></a>
                <div class="lh-content">
                  <span class="category">VIETNAM - NEPAL</span>
                  <a href="listings-single.html">$1000</a>
                </div>
              </div>
              <div class="d-block d-md-flex listing vertical">
                <a href="{{route('detail')}}" class="img d-block" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3ya_s8juHYERVkRmDQbelCPsUz_qNF6tTiJ6bjZDNM9kBz0q5')"></a>
                <div class="lh-content">
                  <span class="category">VIETNAM - NEPAL</span>
                  <a href="listings-single.html">$1000</a>
                </div>
              </div>
            </div>
            
            <div class="mb-5">
              <h3 class="h5 text-black mb-3">Theo ngày khởi hành</h3>
              <div class="d-block d-md-flex listing vertical">
                <a href="{{route('detail')}}" class="img d-block" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3ya_s8juHYERVkRmDQbelCPsUz_qNF6tTiJ6bjZDNM9kBz0q5')"></a>
                <div class="lh-content">
                  <span class="category">VIETNAM - NEPAL</span>
                  <a href="listings-single.html">15/05/2019 7:00</a>
                </div>
              </div>
              <div class="d-block d-md-flex listing vertical">
                <a href="{{route('detail')}}" class="img d-block" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3ya_s8juHYERVkRmDQbelCPsUz_qNF6tTiJ6bjZDNM9kBz0q5')"></a>
                <div class="lh-content">
                  <span class="category">VIETNAM - NEPAL</span>
                  <a href="listings-single.html">15/05/2019 7:00</a>
                </div>
              </div>
              <div class="d-block d-md-flex listing vertical">
                <a href="{{route('detail')}}" class="img d-block" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3ya_s8juHYERVkRmDQbelCPsUz_qNF6tTiJ6bjZDNM9kBz0q5')"></a>
                <div class="lh-content">
                  <span class="category">VIETNAM - NEPAL</span>
                  <a href="listings-single.html">15/05/2019 7:00</a>
                </div>
              </div>
            </div>
            

          </div>

        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left border-primary">
            <h2 class="font-weight-light text-primary">Tour hot nhất hiện nay</h2>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-6">

            <div class="d-block d-md-flex listing">
              <a href="#" class="img d-block" style="background-image: url('https://cdn.getyourguide.com/img/tour_img-1004706-148.jpg')"></a>
              <div class="lh-content">
                <span class="category">HỘI AN - ĐÀ LẠT</span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                      <h3><a href="listings-single.html">$1000</a></h3>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                      <h3>1 chỗ</h3>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                      <a href="listings-single.html">15/05/2019 7:00</a>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                      <h3>5 ngày</h3> 
                    </div>
                  </div>
                <p class="mb-0">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-secondary"></span>
                  <span class="review">(3 Reviews)</span>
                </p>
              </div>
            </div>
            <div class="d-block d-md-flex listing">
                <a href="#" class="img d-block" style="background-image: url('https://cdn.getyourguide.com/img/tour_img-1004706-148.jpg')"></a>
                <div class="lh-content">
                <span class="category">HỘI AN - ĐÀ LẠT</span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                      <h3><a href="listings-single.html">$1000</a></h3>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                      <h3>1 chỗ</h3>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                      <a href="listings-single.html">15/05/2019 7:00</a>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                      <h3>5 ngày</h3> 
                    </div>
                  </div>
                <p class="mb-0">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-secondary"></span>
                  <span class="review">(3 Reviews)</span>
                </p>
              </div>
              </div>

              <div class="d-block d-md-flex listing">
                <a href="#" class="img d-block" style="background-image: url('https://cdn.getyourguide.com/img/tour_img-1004706-148.jpg')"></a>
                <div class="lh-content">
                <span class="category">HỘI AN - ĐÀ LẠT</span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                      <h3><a href="listings-single.html">$1000</a></h3>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                      <h3>1 chỗ</h3>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                      <a href="listings-single.html">15/05/2019 7:00</a>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                      <h3>5 ngày</h3> 
                    </div>
                  </div>
                <p class="mb-0">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-secondary"></span>
                  <span class="review">(3 Reviews)</span>
                </p>
              </div>
              </div>

             

          </div>
          <div class="col-lg-6">

            <div class="d-block d-md-flex listing">
              <a href="#" class="img d-block" style="background-image: url('https://cdn.getyourguide.com/img/tour_img-1004706-148.jpg')"></a>
              <div class="lh-content">
                <span class="category">HỘI AN - ĐÀ LẠT</span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                      <h3><a href="listings-single.html">$1000</a></h3>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                      <h3>1 chỗ</h3>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                      <a href="listings-single.html">15/05/2019 7:00</a>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                      <h3>5 ngày</h3> 
                    </div>
                  </div>
                <p class="mb-0">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-secondary"></span>
                  <span class="review">(3 Reviews)</span>
                </p>
              </div>
            </div>

            <div class="d-block d-md-flex listing">
              <a href="#" class="img d-block" style="background-image: url('https://cdn.getyourguide.com/img/tour_img-1004706-148.jpg')"></a>
              <div class="lh-content">
                <span class="category">HỘI AN - ĐÀ LẠT</span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                      <h3><a href="listings-single.html">$1000</a></h3>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                      <h3>1 chỗ</h3>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                      <a href="listings-single.html">15/05/2019 7:00</a>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                      <h3>5 ngày</h3> 
                    </div>
                  </div>
                <p class="mb-0">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-secondary"></span>
                  <span class="review">(3 Reviews)</span>
                </p>
              </div>
            </div>
            <div class="d-block d-md-flex listing">
                <a href="#" class="img d-block" style="background-image: url('https://cdn.getyourguide.com/img/tour_img-1004706-148.jpg')"></a>
                <div class="lh-content">
                <span class="category">HỘI AN - ĐÀ LẠT</span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                      <h3><a href="listings-single.html">$1000</a></h3>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                      <h3>1 chỗ</h3>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                      <a href="listings-single.html">15/05/2019 7:00</a>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                      <h3>5 ngày</h3> 
                    </div>
                  </div>
                <p class="mb-0">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-secondary"></span>
                  <span class="review">(3 Reviews)</span>
                </p>
              </div>
              </div>

          </div>
        </div>
      </div>
    </div>

	

@endsection

@section('slideAboutUs')
	@include('user.blocks.slideAboutUs')

@endsection

