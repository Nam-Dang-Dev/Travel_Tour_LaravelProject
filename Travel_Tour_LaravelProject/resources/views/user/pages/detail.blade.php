@extends('user.master')
@section('Content')

	<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            
            <div class="mb-4">
              <div class="slide-one-item home-slider owl-carousel">
                @foreach ($place as $place) 
                <div><img  src="{!! asset('public/user/images/'.$place->image) !!} " alt="Image" class="img-fluid" style="width: 800px; height: 500px;"></div>
                 @endforeach
              </div>
            </div>
            
            <h2 class="font-weight-light text-primary">CHI TIẾT TOUR</h2>
            <div class="row" style="margin-top: 20px">
              <h4>Thông tin chuyến bay</h4>
              <table class="table table-hover">
                <thead >
                  <tr >
                    <th style="border: 1px solid silver">Ngày đi:  </th>
                    <th style="border: 1px solid silver">Ngày về</th>
                    <th style="border: 1px solid silver">Chuyến bay</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="border: 1px solid silver">{{$tour->departure_day}} </td>
                    <td style="border: 1px solid silver">{{$tour->day_back}}  </td>
                    <td style="border: 1px solid silver">{{$tour->name}}</td>
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
                   
                  </tr>
                </thead>
                <tbody>
                    @foreach($hotel as $hotel)
                  <tr>

                    <td style="border: 1px solid silver">{{$hotel->name}}</td>
                    <td style="border: 1px solid silver">{{$hotel->address}}</td>
                    <td style="border: 1px solid silver">{{$hotel->phone}}</td>
                   
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

             <!-- <div class="row" style="margin-top: 20px">
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
            </div> -->

            <div class="row" style="margin-top: 20px">
              <h4>Giá tour và phụ thu phòng đơn</h4>
              <table class="table table-hover">
                <thead >
                  <tr >
                    <th style="border: 1px solid silver">Độ tuổi khách</th>
                    <th style="border: 1px solid silver">Giá tour</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="border: 1px solid silver">12 tuổi trở lên</td>
                    <td style="border: 1px solid silver">
                        @if ( $tour->promotion==0)
                      <span>{!!  number_format($tour->more12) !!} đ </span>
                      @else
                      <?php $promotion = ($tour->more12 * (100 - $tour->promotion))/100  ?>
                      <span style="color: red;"> {!!  number_format($promotion) !!} đ </span>
                      
                      @endif

                    </td>
                    
                  </tr>
                  <tr>
                    <td style="border: 1px solid silver">5 - 12 tuổi</td>
                    <td style="border: 1px solid silver">
                       @if ( $tour->promotion==0)
                      <span>{!!  number_format($tour->from5_to_12) !!} đ </span>
                      @else
                      <?php $promotion = ($tour->from5_to_12 * (100 - $tour->promotion))/100  ?>
                      <span style="color: red;"> {!!  number_format($promotion) !!} đ </span>
                      
                      @endif

                    </td>
                   
                  </tr>
                  <tr>
                    <td style="border: 1px solid silver"> 2 - 5 tuổi</td>
                    <td style="border: 1px solid silver">
                      @if ( $tour->promotion==0)
                      <span>{!!  number_format($tour->from5_to_12) !!} đ </span>
                      @else
                      <?php $promotion = ($tour->from5_to_12 * (100 - $tour->promotion))/100  ?>
                      <span style="color: red;"> {!!  number_format($promotion) !!} đ </span>
                      
                      @endif

                    </td>
                   
                  </tr>

                  <tr>
                    <td style="border: 1px solid silver"> Nhỏ hơn 2 tuổi</td>
                    <td style="border: 1px solid silver">
                      @if ( $tour->promotion==0)
                      <span>{!!  number_format($tour->less2) !!} đ </span>
                      @else
                      <?php $promotion = ($tour->less2 * (100 - $tour->promotion))/100  ?>
                      <span style="color: red;"> {!!  number_format($promotion) !!} đ </span>
                      
                      @endif

                    </td>
                   
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
                    <th width="250px">Mã tour:</th>
                    <th width="250px">{{$tour->id}}</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td width="250px" >Khởi hành</td>
                    <td width="350px">{{$tour->departure_day}}</td>
                    
                  </tr>
                  <tr>
                    <td>Địa điểm</td>
                    <td>{{$place->name}}</td>
                 
                  </tr>
                  <tr>
                    <td>Thời gian</td>
                     <td><a href="#">{{$tour->time}}</a></td>    
                  </tr>

                  <tr>
                    <td>Điểm tập trung</td>
                     <td><a href="#">{{$tour->concentrate_place}}</a></td>    
                  </tr>
                </tbody>
              </table>
            
            

            <div class="mb-5">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <center><div style="color: red; font-weight: bold;">

                   
                  @if ( $tour->promotion==0)
                      <span>{!!  number_format($tour->more12) !!} đ </span>
                      @else
                      <?php $promotion = ($tour->more12 * (100 - $tour->promotion))/100  ?>
                      <span style="color: red;"> {!!  number_format($promotion) !!} đ </span>
                      
                  @endif


                  </div></center>
                  <center><div>Chỗ còn nhận: {{$tour->quantity_tourist}}</div></center>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <a href="{{route('checkout',$tour->id)}}"><button type="button" style="width: 230px; height: 58px; background-color: red; color: white;" >ĐẶT NGAY</button></a>
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

              @foreach($samePrice as $value)
               
              <div class="d-block d-md-flex listing vertical">
                <a href="#" ><img src="{!! asset('public/user/images/'.$value->image) !!} "  class="img-responsive" alt="Image" style="width: 100%; height: 150px "></a>
                <div class="lh-content">
                  <span class="category">{{$value->name}}</span>
                  <a href="listings-single.html">{{  number_format($value->more12)}} đ</a>
                </div>
              </div>

              @endforeach
             
            </div>
            
            <div class="mb-5">
              <h3 class="h5 text-black mb-3">Theo ngày khởi hành</h3>
                @foreach($sameDate as $value)
               
              <div class="d-block d-md-flex listing vertical">
                <a href="#" ><img src="{!! asset('public/user/images/'.$value->image) !!} "  class="img-responsive" alt="Image" style="width: 100%; height: 150px "></a>
                <div class="lh-content">
                  <span class="category">{{$value->name}}</span>
                  <a href="listings-single.html">{{  number_format($value->more12)}} đ</a>
                </div>
              </div>

              @endforeach
             
            </div>
            

          </div>

        </div>
      </div>
    </div>

   <!--  <div class="site-section bg-light">
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
    </div> -->

	

@endsection

@section('slideAboutUs')
	@include('user.blocks.slideAboutUs')

@endsection

