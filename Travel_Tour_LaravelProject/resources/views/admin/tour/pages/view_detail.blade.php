@extends('admin.master')

@section('headerPage')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Danh mục
		<small>Đã có 2 tour</small>
	</h1>
</section>
@endsection
 
<!-- content -->
@section('content')

	<section class="content">
		<div class="panel panel-default">
			<div class="panel-body">
				<form class="form-horizontal" action="" method="GET" role="form">
					<legend>Xem chi tiết tour</legend>
					<div class="row">
						<div class="panel panel-default" >
								<div class="panel-body" style="text-align: center;">
									<img src="{{asset('admin/dist/img/dulichtrongnuoc.jpg')}}" style="width: 500px; height: 200px">
								</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
							<div class="form-group">
							<table class="table table-hover">
								<tbody>
									<tr>
										<th>Tên: </th>
										<td>Đà Nẵng - Bà Nà - Cầu Vàng - Sơn Trà - KDL Thần Tài - Hội An - Đà Nẵng</td>
									</tr>
									<tr>
										<th style="width: 130px">Nơi khởi hành:</th>
										<td>Hồ Chí Minh</td>
									</tr>
									<tr>
										<th>Nơi kết thúc:</th>
										<td>Đà Nẵng</td>
									</tr>
									<tr>
										<th>Nơi tập trung:</th>
										<td>Cột số 5 Ga đi trong nước,sân bay Tân Sơn Nhất, TP.Hồ Chí Minh</td>
									</tr>
								</tbody>
							</table>
						</div>
						</div>
						<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
							<div class="form-group">
								<table class="table table-hover">
									<tbody>
										<tr>
											<th>Số ngày :</th>
											<td>3</td>
										</tr>
										<tr>
											<th>Số lượng khách:</th>
											<td>12</td>
										</tr>
										<tr>
											<th>Mã chuyến bay:</th>
											<td>HCM-DN</td>
										</tr>
										<tr>
											<th>Mã giá:</th>
											<td>NL</td>
										</tr>
										<tr>
											<th>Mã loại tour:</th>
											<td>TN</td>
										</tr>
									</tbody>
								</table>
						    </div>
						</div>
					</div>
					<div class="row">
						<table class="table table-hover">
							<tbody>
								<tr>
									<th style="width: 130px">Mô tả:</th>
									<td>
											Quý khách tập trung tại cột số 5 Ga đi trong nước, sân bay Tân Sơn Nhất. Hướng dẫn viên hỗ trợ làm thủ tục cho đoàn đáp chuyến bay đi Đà Nẵng. Tại sân bay Đà Nẵng xe và HDV Vietravel đón đoàn đi tham quan: 
											- Bán đảo Sơn Trà, viếng Chùa Linh Ứng - Nơi đây có tượng Phật Quan Thế Âm cao nhất Việt Nam, đứng nơi đây, Quý khách sẽ được chiêm ngưỡng toàn cảnh thành phố, núi rừng và biển đảo Sơn Trà một cách hoàn hảo nhất. 
											- Phố Cổ Hội An - Chùa Cầu, Nhà Cổ Phùng Hưng, Hội Quán Phước Kiến, Cơ sở Thủ Công Mỹ Nghệ,…
											- Tặng Show Ký Ức Hội An - Vở diễn thực cảnh ngoài trời với số lượng diễn viên đạt kỷ lục Việt Nam, tái hiện nhịp nhàng sinh động miền ký ức đa văn hóa: Champa, Bồ Đào Nha, Nhật, Trung… chứng kiến cuộc sống thôn quê bình dị bên dòng sông Hoài, khoảnh khắc hùng tráng trong lịch sử, nét hoàng kim của cảng thị một thời... và Công Viên Ấn tượng Hội An - Tái hiện Hội An của quá khứ, một cảng thị quốc tế sầm uất với sự hiện diện của các nền văn hóa Á, Âu, tìm hiểu nghề nuôi tằm ươm tơ, quay tơ dệt lụa bằng khung cửi, làm bánh đậu xanh Hội An, thưởng thức trà đạo phong cách Nhật Bản … Đoàn quay về lại Đà Nẵng, tự do nghỉ ngơi. Nghỉ đêm tại Đà Nẵng
									</td>
								</tr>
							</tbody>
						</table>
						<div class="form-group">
						    <label class="control-label col-sm-5"></label>
						      <div class="col-sm-7">
						        <!-- <button type="submit" onclick="add()" class="btn btn-primary" style="margin-right: 10px">Thêm</button>
								<button type="submit" onclick="cancel()" class="btn btn-danger">Hủy</button> -->
								<input type="button" value="Thoát" onclick="cancel()" 
						        	style="background-color: #FF3300;
									  border: none;
									  color: white;
									  padding: 8px 16px;
									  text-decoration: none;
									  margin: 4px 2px;
									  cursor: pointer;"
									  >
						      </div>
						    </div>
					</div>
					</div>
				</form>
			</div>
		</div>
		

	</section>

	<script>
		function cancel() {
		   window.history.back();
		}
	</script>

@endsection
