
<div class="col-xs-12">
  <h3 style="color: red;text-align: center; margin-top: 30px;"> DANH SÁCH KHÁCH HÀNG ĐI TOUR</h3>
  @if(isset($qty))
  @for($i=0; $i<$qty; $i++)
  <div style="margin-top: 20px;">
    <div class="card">
      <div class="card-header card bg-danger text-white">
        Khách hàng <?php echo $i +1; ?>
      </div>
      <div class="card-body">
        <div style="padding: 5px">
          <div class="form-horizontal">
            <div class="row mg-bot10">
              <div class="col-sm-3 col-xs-12 mg-bot10">
                <label class="mg-bot5">Họ tên (<span class="price">*</span>)</label>
                <div>
                  <input class="form-control" name="fullname<?php echo $i; ?>" type="text" value="" />
                </div>
              </div>
              <div class="col-sm-2 col-xs-12 mg-bot10">
                <label class="mg-bot5">Giới tính</label>
                <div>
                  <select class="form-control" name="gender<?php echo $i; ?>"><option value="0">Nữ</option>
                    <option value="1">Nam</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3 col-xs-12 mg-bot10">

                <label class="mg-bot5">Ngày sinh (<span class="price">*</span>)</label>
                <div>
                  <input type="date" name="birthday<?php echo $i; ?>" id="birthday<?php echo $i; ?>" class="form-control" value="" required="required" title="">
                </div>
              </div>
              <div class="col-sm-2 col-xs-12 mg-bot10">
                <label class="mg-bot5">Loại khách</label>
                <div>
                  <select class="form-control" id="loaikhach<?php echo $i; ?>"  name="loaikhach<?php echo $i; ?> "  data-id="<?php echo$i;?> " data-role="price"  onchange="price(this)">
                     <option value="">Chọn loại tuổi</option>
                    <option value="more12">Lớn hơn 12 tuổi</option>
                    <option value="from5_to_12">5 đến 12 tuổi</option>
                    <option value="from2_to_5">2 đến 5 tuổi</option>
                    <option value="less2">Nhỏ hơn 2 tuổi</option>

                  </select>

                </div>
              </div>
              <div class="col-sm-2 col-xs-12 mg-bot10">
                <label class="mg-bot5">Giá tiền</label>
                <div id="price<?php echo $i; ?>"  style="color: red;">
                  0 
                </div>
               
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">

      </div>
    </div>
  </div>
  @endfor
  <div class="row" style="margin-top: 30px;margin-left: 0px;">
    <div class="col-xs-3 offset-md-9">
      <div style="text-align: left; padding: 10px 15px 10px 15px; background: #ddd">
        <span style="font-weight: bold; font-size: 14px; margin-right: 10px; text-transform: uppercase">Tổng cộng:</span>
        <span style="color: #cd2c24; font-weight: bold; font-size: 20px;float:right"></span>
        <label id="totalPrice" style="color: red;"></label>
        input
      </div>
    </div>
  </div> <!-- end nhập thông tin liên lạc của khách hàng -->



</div> 
@endif



</div>