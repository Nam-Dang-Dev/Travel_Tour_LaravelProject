@if(isset($qty))
   <?php echo $qty; ?>
@else
    <?php echo 'no'; ?>
@endif


<div class="col-xs-12">
      <input type="radio" class="chkListCustomer" name="ListCustomer" value="1" checked="checked" />
      <span style="font-weight:bold;">Nhập danh sách khách hàng đi tour</span>
      <div>
        <div class="text-center" style="margin: 40px 0 40px">
          <span class="title" style="text-transform: uppercase;">DANH SÁCH KHÁCH HÀNG ĐI TOUR</span>
        </div>

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 mg-bot10">
            <div>
              <div style="padding: 12px 15px 12px 15px; background: #c50000; color: #FFF">Khách hàng 1</div>
            </div>
            <div style="border: 1px solid #ccc; padding: 15px">
              <div class="form-horizontal">
                <div class="row mg-bot10">
                  <div class="col-sm-3 col-xs-12 mg-bot10">
                    <label class="mg-bot5">Họ tên (<span class="price">*</span>)</label>
                    <div>
                      <input class="form-control" name="[0].fullname" type="text" value="" />
                    </div>
                  </div>
                  <div class="col-sm-2 col-xs-12 mg-bot10">
                    <label class="mg-bot5">Giới tính</label>
                    <div>
                      <select class="form-control" name="[0].gender"><option value="0">Nữ</option>
                        <option value="1">Nam</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3 col-xs-12 mg-bot10">
                  
                    <label class="mg-bot5">Ngày sinh (<span class="price">*</span>)</label>
                    <div>
                      <input type="date" name="ngáyinh" value="" />

                    </div>
                  </div>
                  <div class="col-sm-2 col-xs-12 mg-bot10">
                    <label class="mg-bot5">Loại khách</label>
                    <div>
                      <select class="form-control" name="loaikhach" >
                        <option value="0">Người lớn</option>
                      </select>

                    </div>
                  </div>
                  <div class="col-sm-2 col-xs-12 mg-bot10">
                    <label class="mg-bot5">Phòng đơn</label>
                    <div>
                      <select class="form-control" name="phongdon" ><option selected="selected" value="0">Không</option>
                        <option value="1">Có</option>
                      </select>                            </div>

                    </div>
                  </div>
                  <div class="row mg-bot10">

                    <div class="col-sm-3 col-xs-12 mg-bot10">
                      <label class="mg-bot5">Quốc tịch:</label>
                      <div>
                        <select class="form-control" id="nationality0" name="quoctich" ><option value="VN">Việt Nam</option>
                          <option value="AF">Afghanistan</option>
                          <option value="EG">Ai Cập</option>
                          <option value="AL">Albania</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-2 col-xs-12 mg-bot10">
                      <label class="mg-bot5">Số Passport (<span class="price">*</span>)</label>
                      <div>
                        <input class="form-control" name="passport" type="text" value="" />
                      </div>
                    </div>
                    <div class="col-sm-3 col-xs-12 mg-bot10">
                      <label class="mg-bot5">Ngày hết hạn (<span class="price">*</span>)</label>
                      <div>

                        <input type="date" name="ngayhethan" value="" />


                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin-top: 30px">
        <div class="col-xs-12">
          <div style="text-align: left; padding: 10px 15px 10px 15px; background: #ddd">
            <span style="font-weight: bold; font-size: 14px; margin-right: 10px; text-transform: uppercase">Tổng cộng:</span>
            <span style="color: #cd2c24; font-weight: bold; font-size: 20px;float:right"></span>
            <input type="text" class="form-control" />
          </div>
        </div>
      </div> <!-- end nhập thông tin liên lạc của khách hàng -->