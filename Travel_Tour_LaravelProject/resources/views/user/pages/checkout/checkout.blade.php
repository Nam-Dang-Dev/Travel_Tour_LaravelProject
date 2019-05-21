@extends('user.master')
@section('Content')
<div class="container">

  <!-- Các bước book tour -->
  <div class="row" style="margin-bottom: 30px;">
    <div class="col-md-4 col-sm-3" style="text-align: center;">
      <p style="font-size: 16px; position: relative; left: 5px; padding-top: 5px">1. NHẬP THÔNG TIN</p>
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
  <span class="title" style="text-transform: uppercase;"><b>Giá tour cơ bản</b></span></div>
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
  <form action="" method="POST" role="form">
   <div class="col-xs-12 text-center" style="margin: 40px 0 40px">
    <span class="title" style="text-transform: uppercase;">Thông tin liên lạc</span></div>
    <div class="col-xs-12 ">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="form-group">
            <label>Họ tên: <span style="color: #cd2c24">*</span></label>
            <div>
              <input class="form-control" name="name" required="required" type="text" value="" />
            </div>
          </div>
          <div class="form-group">
            <label>Di động <span style="color: #cd2c24">*</span></label>
            <div>
              <input class="form-control" name="phone" required="required" type="text" value="" />
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
              <div class="col-md-3 col-sm-3 mg-bot15">
                <label>Người >12 tuổi</label>
                <div>
                  <input class="form-control" name="lv1" id="lv1" onblur="updateQuantity()"  type="text" value="1" />
                </div>
              </div>
              <div class="col-md-3 col-sm-3 mg-bot15">
                <label>Trẻ 5-12 tuổi</label>
                <div>
                  <input class="form-control" name="lv2" id="lv2"  onblur="updateQuantity()" type="text" value="0" />
                </div>
              </div>
              <div class="col-md-3 col-sm-3 mg-bot15">
                <label>Trẻ 2-5 tuổi</label>
                <div>
                  <input class="form-control" name="lv3" id="lv3"  type="text" value="0" />
                </div>
              </div>
              <div class="col-md-3 col-sm-3 mg-bot15">
                <label>Trẻ < 2 tuôi</label>
                <div>
                  <input class="form-control" name="lv4" id="lv4"  type="text" value="0" />
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
        @include('user.pages.checkout.getInformationCustomer')
    </div>
    

  </div>
</div>

<!-- chọn hình thức thanh toán -->    
<div class="col-xs-12 text-center" style="margin: 40px 0 40px 0">
  <span class="title" style="text-transform: uppercase;">Xin quý; khách vui lòng chọn hình thức thanh toán</span>
</div>
<div class="col-xs-12" style="margin-bottom: 30px">
  <div style="border:1px solid #ccc;padding: 20px 30px 20px 30px">
    <div class="radio">
      <label style="display:none;"><input type="radio" class="chkPayment" name="paymentID" value="1"  /><label class="lb_r">Tiền mặt</label></label>
    </div>
    <div class="radio">
      <label style="display:none;"><input type="radio" class="chkPayment" name="paymentID" value="2" /><label class="lb_r">Chuyển khoản</label></label>
    </div>
    <div class="radio">
      <label><input type="radio" class="chkPayment" name="paymentID" value="9" checked=checked /><label class="lb_r">ATM / Internet Banking</label></label>
    </div>
    <div class="radio">
      <label><input type="radio" class="chkPayment" name="paymentID" value="15" /><label class="lb_r">Thẻ tín dụng </label> </label>
    </div>
    <div class="row " style="padding-bottom:10px;display:none;" id="divCard">
      <div style="margin-top: 5px; margin-left: 35px; font-weight: bold; color: #d57575;">
        Quý khách vui lòng chọn loại thẻ

      </div>
      <div style="padding:15px; margin:0px 15px;">
        <input id="cardType" name="cardType" type="hidden" value="visa">
        <div card="visa" onclick="ChonLoaiThe('visa')" class="card_type f-left" style="margin-left:5px; cursor:pointer;height: 32px;">
          <img src="/Content/themeOrange/img/thevisa.png" alt="visa">
        </div>
        <div card="mastercard" onclick="ChonLoaiThe('mastercard')" class="card_type f-left mg-left" style="margin-left:5px; cursor:pointer;height: 32px;">
          <img src="/Content/themeOrange/img/master.png" alt="master">
        </div>
        <div card="jcb" onclick="ChonLoaiThe('jcb')" class="card_type f-left mg-left" style="margin-left:5px; cursor:pointer;height: 32px;">
          <img src="/Content/themeOrange/img/jcb.png" alt="jcb">
        </div>
        <div card="amex" onclick="ChonLoaiThe('amex')" class="card_type f-left mg-left" style="margin-left:5px; cursor:pointer;height: 32px;">
          <img src="/Content/themeOrange/img/amex.png" alt="amex">
        </div>
      </div>
    </div>
    <div class="radio">
      <label><input type="radio" class="chkPayment" name="paymentID" value="16"/><label class="lb_r">Thanh toán bằng quét QRCode</label></label>
    </div>
    <div class="row " style="padding-bottom:10px;display:none;" id="divVNPay">
      <div style="margin-top: 5px; margin-left: 35px; font-weight: bold; color: #d57575;">
        Thẻ tín dụng (VISA/MASTER/JCB) / Thẻ ATM - Dịch vụ của VNPay
      </div>
    </div>

    <div style="border:1px solid #ccc;padding: 20px 30px 20px 30px;text-align: justify;word-wrap: break-word;height: 150px;overflow-y: scroll;line-height: 22px">
      <div id="conditionPayment"></div>
    </div>
  </div>
</div>
<!-- end chọn hình thức thanh toán -->  



<button style="margin: 20px;" type="submit" class="btn btn-primary">Submit</button>
</form>
</div>









@endsection

@section('slideAboutUs')
@include('user.blocks.slideAboutUs')

@endsection

