@extends('user.master')
@section('Content')
<div class="container">

  <!-- Các bước book tour -->
  <div class="row" style="margin-bottom: 30px;">
    <div class="col-md-4 col-sm-3" style="text-align: center;">
      <p style="font-size: 16px; position: relative; left: 5px; padding-top: 5px;color: red;"><b>1. NHẬP THÔNG TIN</b></p>
      <p style="font-size: 35px; color: #fc6600; margin-top: 12px"><i style="background: #fff; border-radius: 25px;" class="fa fa-check-circle"></i></p>
    </div>
    <div class="col-md-4 col-sm-3" style="text-align: center;">
      <p style="font-size: 16px; position: relative; left: 5px; padding-top: 5px">2. VIETRAVEL XÁC NHẬN</p>
      <p style="font-size: 35px; color: #d1d2e4; margin-top: 12px"><i style="background: #fff; border-radius: 25px;" class="fa fa-circle-thin"></i></p>
    </div>
    <div class="col-md-4 col-sm-3" style="text-align: center;">
      <p style="font-size: 16px; position: relative; left: 5px; padding-top: 5px">3. THANH TOÁN</p>
      <p style="font-size: 35px; color: #d1d2e4; margin-top: 12px"><i style="background: #fff; border-radius: 25px;" class="fa fa-circle-thin"></i></p>
    </div>
    
  </div><!-- end Các bước book tour -->

  <!-- Thông tin tour -->
  <div class="row tour-info" style="margin-bottom: 60px">
    <div class="col-xs-12">
      <div class="row">
        <div class="t-info-left col-md-4 col-sm-12 left tour-info-mgr mg-bot10">
          <div class="tour-info-left-frame">
            <img  src="{!! asset('public/user/images/'.$tour->image) !!} "  alt="" style="width:100%;" />
            <div style="margin-top: 10px">
              <div class="row">
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                  <div style="text-align: center; border: 1px solid silver; height: 50px; width: 170px; line-height: 50px">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>Số ngày: 
                    <span> {{$tour->time}} </span>
                  </div>

                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <div style="text-align: center; border: 1px solid silver; height: 50px; width: 190px; line-height: 50px; color: red;">
                    <i class="fa fa-clock-o"  aria-hidden="true"></i> 
                    @if ( $tour->promotion==0)
                    <span>{!!  number_format($tour->more12) !!} đ </span>
                    @else
                    <?php $promotion = ($tour->more12 * (100 - $tour->promotion))/100  ?>
                    <span style="color: red;"> {!!  number_format($promotion) !!} đ </span>

                    @endif


                  </div>

                </div>
              </div>

            </div>

          </div>
        </div>
        <div class="col-md-8 col-sm-12 right tour-info-right-frame">
          <div class="row tour-info-right-frame1">
            <div class="col-xs-12">
              <div style="font-weight: bold;font-size:17.5px;margin-bottom: 10px;line-height: 22px; text-align: center;">
                <h5 style="font-weight: bold;">{{$tour->name}}</h5>
              </div>
            </div>
          </div>
          <div class="row tour-info-right-frame2" style="border: 1px solid silver;">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">                    
              <div class="row" style="margin-top: 20px">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  Mã tour:
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                 {{$tour->id}}
                 <input type="hidden" name="" id="idTour" class="form-control" value="{{$tour->id}}">
               </div>
             </div>
             <div class="row" style="margin-top: 20px">
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                Ngày khởi hành:
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                {{$tour->departure_day}}
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

              </div>
            </div>
            <div class="row" style="margin-top: 20px">
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                Nơi khởi hành:
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
               {{$tour->departure_location}}
             </div>
             <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
              Số chỗ còn nhận: <i> {{$tour->quantity_tourist}}</i>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin-top: 40px;">
        <div class="col-xs-12" style="border: 1px solid silver;" >

          <span style="display: table-cell;vertical-align: middle;line-height: 18px;color: #cd2c24; padding-top: 18px">
            Khách nữ từ 55 tuổi trở lên, khách nam từ 60 tuổi trở lên đi tour một mình và khách mang thai trên 4 tháng (16 tuần) vui lòng đăng ký tour trực tiếp tại văn phòng của chúng tôi. Không áp dụng đăng ký tour online đối với khách từ 70 tuổi trở lên
          </span>

        </div>
      </div>
    </div>
  </div>
</div>
</div> <!-- end Thông tin tour -->

<!-- Bảng giá tour cơ bản -->
<div class="col-xs-12 text-center" style="margin: 40px 0 40px">
  <h3> <span class="title" style="text-transform: uppercase; color: red;"><b>Giá tour cơ bản</b></span></h3>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 <div class="row">
  <table class="table table-hover">
    <thead>
      <tr>
        <th></th>
        <th>Từ 12 tuổi trở lên</th>
        <th>Từ 5 - 12 tuổi</th>
        <th>Từ 2 - 5 tuổi</th>
        <th>Dưới 2 tuổi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Giá tour cơ bản</td>
        <td>
         @if ( $tour->promotion==0)
         <span>{!!  number_format($tour->more12) !!} đ </span>
         @else
         <?php $promotion = ($tour->more12 * (100 - $tour->promotion))/100  ?>
         <span> {!!  number_format($promotion) !!} đ </span>

         @endif

       </td>
       <td>
         @if ( $tour->promotion==0)
         <span>{!!  number_format($tour->from5_to_12) !!} đ </span>
         @else
         <?php $promotion = ($tour->from5_to_12 * (100 - $tour->promotion))/100  ?>
         <span > {!!  number_format($promotion) !!} đ </span>

         @endif



       </td>
       <td>
         @if ( $tour->promotion==0)
         <span>{!!  number_format($tour->from5_to_12) !!} đ </span>
         @else
         <?php $promotion = ($tour->from5_to_12 * (100 - $tour->promotion))/100  ?>
         <span > {!!  number_format($promotion) !!} đ </span>

         @endif

       </td>
       <td>
         @if ( $tour->promotion==0)
         <span>{!!  number_format($tour->less2) !!} đ </span>
         @else
         <?php $promotion = ($tour->less2 * (100 - $tour->promotion))/100  ?>
         <span> {!!  number_format($promotion) !!} đ </span>

         @endif

       </td>
     </tr>
     <tr>
      <td>Phụ thu phí</td>
      <td>$0</td>
      <td>$0</td>
      <td>$0</td>
      <td>$0</td>
    </tr>
  </tbody>
</table>

</div> 
</div><!-- end Bảng giá tour cơ bản -->

<!-- nhập thông tin liên lạc của khách hàng -->
<div >
  <form action="{{route('cart/user/postAddCart',[$tour->id,$tour->name])}}" method="POST" role="form">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
    <div class="col-xs-12 text-center" style="margin: 40px 0 40px">
      <h3><span class="title" style="text-transform: uppercase;color: red">Thông tin liên lạc</span></h3>
    </div>
    <div class="col-xs-12 ">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="form-group">
            <label>Tên: <span style="color: #cd2c24">*</span></label>
            <div>
              <input class="form-control" name="firstName" required="required" type="text" value="" />
            </div>
          </div>
          <div class="form-group">
            <label>Họ đệm<span style="color: #cd2c24">*</span></label>
            <div>
              <input class="form-control" name="lastName" required="required" type="text" value="" />
            </div>
          </div>
          <div class="form-group">
            <label>Địa chỉ</label>
            <div>
              <input class="form-control" name="address" type="text" value="" />
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="form-group">
            <label>EMAIL <span style="color: #cd2c24">*</span></label>
            <div>
              <input class="form-control input-lg" id="email" name="email" required="required" type="email" value="" />
            </div>
          </div>
          <div class="form-group">
            <label>Điện thoại</label>
            <div>
              <input class="form-control" name="phone" type="text" value="" />
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-12 col-sm-12 mg-bot15">
                <label>Số lượng</label>
                <div>
                  <input class="form-control" name="quantity" id="quantity" onblur="updateQuantity()"  type="number" value="0" />
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
            <label>Ghi chú</label>
            <div>
              <textarea class="form-control" cols="20" name="note" rows="4">
              </textarea>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
            <label><span style="color: #cd2c24">Ghi chú:</span> </label>
            <div style="line-height: 22px">
              <span class="bold">Người lớn từ :</span> trên 12 tuổi
              -
              <span class="bold">Trẻ em từ :</span> từ 5 - 12 tuổi
              - 
              <span class="bold">Trẻ em từ :</span> từ 2 - 5 tuổi
              - 
              <span class="bold">Trẻ nhỏ từ :</span> dưới 2 tuổi
            </div>
          </div>
        </div>
      </div>
    </div>
    <div  id="EnterInformation">
      
    </div>
    <div class="col-md-10 col-sm-10 col-xs-10 offset-md-1" style="margin-top: 40px;" >
      <span class="title" style="text-transform: uppercase;">Xin quý khách vui lòng chọn hình thức thanh toán</span>

      <div class="col-xs-12" style="margin-bottom: 30px">
        <div style="border:1px solid #ccc;padding: 20px 30px 20px 30px; text-align: left;">
          <div class="form-group">
            <div class="radio">
              <label ><input type="radio" class="chkPayment" name="paymentID" value="1"  /><label class="lb_r">Tiền mặt</label></label>
            </div>
            <div class="radio">
              <label ><input type="radio" class="chkPayment" name="paymentID" value="2" /><label class="lb_r">Thanh toán paypal</label></label>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- end chọn hình thức thanh toán -->  









    <button style="margin: 20px;" type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>









@endsection

@section('slideAboutUs')
@include('user.blocks.slideAboutUs')

@endsection

