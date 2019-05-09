@extends('user.master')
@section('Content')
@include('user.blocks.menu')
<div>
 <!-- Nav tabs -->
 
 <ul class="nav nav-tabs justify-content-center" style="font-weight: 800; font-size: 23px;">
   <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">Trang cá nhân</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu1">Danh sách booking của tôi</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu2">Danh sách tour yêu thích</a>
  </li>
</ul>
<!-- Tab panes -->
<div class="tab-content pull-right" style="margin-bottom: 50px;">
  <div id="home" class="container tab-pane active" ><br>

      <div class="panel panel-danger">
        <div class="panel-heading">
          <h3 class="panel-title" style="font-weight: 800;">Cập nhật thông tin cá nhân</h3>
        </div>
        <div class="panel-body">

          <form action="" method="POST" role="form">
            {{ csrf_field()}}
            <div class="form-group">
              <label for="">Tên: </label>
              <input type="text" class="form-control" id=""  name="name">
              <label for="">Họ lót: </label>
              <input type="text" class="form-control" id="">
               <label for="">Địa chỉ: </label>
              <input type="text" class="form-control" id=""  name="name">
              <label for="">Gmail: </label>
              <input type="text" class="form-control" id="">
               <label for="">Ngày sinh: </label>
              <input type="text" class="form-control" id=""  name="name">
              <label for="">Số điện thoại: </label>
              <input type="text" class="form-control" id="">
              
            </div>
            <p style="text-align: center;"><button type="submit" class="btn btn-primary">Cập nhật</button></p>
            
          </form>

        </div>
      </div>
    

  </div>
  <div id="menu1" class="container tab-pane fade"><br>
   <br>
   <table class="table table-hover">
     <thead>
       <tr>
         <th>Mã booking</th>
         <th>Họ tên</th>
         <th>Di động</th>
         <th>Email</th>
         <th>Địa chỉ</th>
         <th>Giá</th>
         <th>Tùy chỉnh</th>
       </tr>
     </thead>
     <tbody>
       <tr>
         <td>45647</td>
         <td>Đặng Phương Nam</td>
         <td>0123456789</td>
         <td>nam.dang@gmail.com</td>
         <td>Quảng trị</td>
         <td>20.00000</td>

              <td>
                <a href=""><i class="fa fa-plus-circle"></i>Thêm</a>
                <a href=""><i class="fa fa-pencil"></i>Sửa</a>
                <a href=""><i class="fa fa-trash"></i>Xóa</a>




              </td>
       </tr>
     </tbody>
   </table>
  </div>
  <div id="menu2" class="container tab-pane fade"><br>
    <h3>Menu 2</h3>
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
  </div>
</div>

</div>
</div>

@endsection

@section('slideAboutUs')
@include('user.blocks.slideAboutUs')

@endsection

