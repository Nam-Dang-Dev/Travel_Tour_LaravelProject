@extends('admin.master')

@section('headerPage')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Danh sách tour
		<small>Đã có 2 tour</small>
	</h1>
</section>
@endsection
 
<!-- content -->
@section('content')

	<section class="content">

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<!-- Display message -->
		        <!-- //Display message -->

				<div class="bang">
					<div class="hoc">
						<marquee direction="left">&hearts; Xin Chào! &hearts;</marquee>
					</div>
					
					<table class="table table-striped table-bordered table-hover">
	                    <thead style="text-align: center;">
	                      	<tr>
	                        	<th width="80px">Tên tour</th>
	                        	<th width="100px">Hình ảnh</th>
	                        	<th >Nơi khởi hành</th>
	                        	<th >Nơi kết thúc</th>
	                        	<th >Nơi tập trung</th>
	                        	<th width="100px">Số ngày</th>
	                        	<th >Số lượng khách</th>
	                        	<th >Miêu tả</th>
	                        	<th >Mã chuyến bay</th>
	                        	<th >Mã giá</th>
	                        	<th >Mã loại tour</th>
	                      	</tr>
	                    </thead>
	                    <tbody>
	                      	<tr>
		                        <td width="80px"> 
		                        	Đà Nẵng-Bà Nà...
		                        </td>
		                        <td> <img style="width: 100px;height: 80px" src="{{asset('admin/dist/img/dulichtrongnuoc.jpg')}}"></td>
		                        <td > Hồ Chí Minh</td>
		                        <td > Đà Nẵng</td>
		                        <td > Cột số 5 Ga đi trong nước,sân bay Tân Sơn Nhất, TP.Hồ Chí Minh</td>
		                        <td >3</td>
		                        <td >12</td>
		                        <td>Quý khách tập trung tại cột số 5 Ga đi trong nước, sân bay Tân Sơn Nhất. Hướng dẫn viên hỗ trợ làm thủ tục cho đoàn đáp chuyến bay đi Đà Nẵng. Tại sân bay Đà Nẵng xe và HDV Vietravel đón đoàn đi tham quan: ...</td>
								<td >HCM-DN</td>
		                        <td >NL</td>
		                        <td >TN</td>
		                        <td>
		                        	<a href="{!! route('admin/tour/view_detail')!!}">
		                        		<i class="fa fa-plus-circle"></i>&nbsp;Xem
		                        	</a>&nbsp;&nbsp;
		                        	<a href="{!! route('admin/tour/update')!!}">
		                        		<i class="fa fa-pencil"></i>&nbsp;Sửa
		                        	</a>&nbsp;&nbsp;
		                          	<a href="#" onclick="javascript:Delete()"><i class="fa fa-trash"></i>&nbsp;Xóa</a>
		                        </td>
	                      	</tr> 
	                      	<tr>
		                        <td width="80px"> 
		                        	Đà Nẵng-Bắc Kinh...
		                        </td>
		                        <td> <img style="width: 100px;height: 80px" src="{{asset('admin/dist/img/dulichnuocngoai.jpg')}}"></td>
		                        <td > Đà Nẵng</td>
		                        <td > New York</td>
		                        <td > Cột số 5 Ga đi trong nước,sân bay Đà Nẵng, TP.Đà Nẵng</td>
		                        <td >3</td>
		                        <td >12</td>
		                        <td>Quý khách tập trung tại cột số 5 Ga đi trong nước, sân bay Đà Nẵng. Hướng dẫn viên hỗ trợ làm thủ tục cho đoàn đáp chuyến bay đi Đà Nẵng. Tại sân bay Đà Nẵng xe và HDV Vietravel đón đoàn đi tham quan: ...</td>
								<td >DN-NY</td>
		                        <td >NL</td>
		                        <td >TN</td>
		                        <td>
		                        	<a href="{!! route('admin/tour/view_detail')!!}">
		                        		<i class="fa fa-plus-circle"></i>&nbsp;Xem
		                        	</a>&nbsp;&nbsp;
		                        	<a href="{!! route('admin/tour/update')!!}">
		                        		<i class="fa fa-pencil"></i>&nbsp;Sửa
		                        	</a>&nbsp;&nbsp;
		                          	<a href="#" onclick="javascript:Delete()"><i class="fa fa-trash"></i>&nbsp;Xóa</a>
		                        </td>
	                      	</tr>
	                    </tbody>
                      	
						
                  	</table>
				</div><!-- /.bang -->
			</div><!-- /.col -->
		</div><!-- /.row -->

	</section>
<script type="text/javascript">
		function Delete() {
			  alert("Xóa thành công!");
			}
</script>
@endsection
