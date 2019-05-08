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
					<legend>Chỉnh sửa tour</legend>
					<div class="row">
						<div class="panel panel-default" >
								<div class="panel-body" style="text-align: center;">
									<img src="{{asset('admin/dist/img/dulichtrongnuoc.jpg')}}" style="width: 500px; height: 200px">
								</div>
								<input id="filebutton" name="filebutton" class="input-file" type="file" style="margin-left: 480px;">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
							<div class="form-group">
						      <label class="control-label col-sm-3" for="name">Tên :</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" id="name" placeholder="Điền tên danh mục" name="name"
						        value="Đà Nẵng - Bà Nà - Cầu Vàng - Sơn Trà - KDL Thần Tài - Hội An - Đà Nẵng">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="departure_location">Nơi khởi hành:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" id="departure_location" placeholder="Điền nơi khởi hành" name="departure_location" value="Hồ Chí Minh">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="end_location">Nơi kết thúc:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" id="end_location" placeholder="Điền nơi kết thúc" name="end_location" value="Đà Nẵng">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="concentrate_place">Nơi tập trung:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" id="concentrate_place" placeholder="Điền nơi tập trung" name="concentrate_place" value="Cột số 5 Ga đi trong nước,sân bay Tân Sơn Nhất, TP.Hồ Chí Minh">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="description">Mô tả:</label>
						      <div class="col-sm-9">
						        <textarea rows="7" cols="70" name="description"  placeholder="Mô tả tour">Quý khách tập trung tại cột số 5 Ga đi trong nước, sân bay Tân Sơn Nhất. Hướng dẫn viên hỗ trợ làm thủ tục cho đoàn đáp chuyến bay đi Đà Nẵng. Tại sân bay Đà Nẵng xe và HDV Vietravel đón đoàn đi tham quan: 
								- Bán đảo Sơn Trà, viếng Chùa Linh Ứng - Nơi đây có tượng Phật Quan Thế Âm cao nhất Việt Nam, đứng nơi đây, Quý khách sẽ được chiêm ngưỡng toàn cảnh thành phố, núi rừng và biển đảo Sơn Trà một cách hoàn hảo nhất. 
								- Phố Cổ Hội An - Chùa Cầu, Nhà Cổ Phùng Hưng, Hội Quán Phước Kiến, Cơ sở Thủ Công Mỹ Nghệ,…
								- Tặng Show Ký Ức Hội An - Vở diễn thực cảnh ngoài trời với số lượng diễn viên đạt kỷ lục Việt Nam, tái hiện nhịp nhàng sinh động miền ký ức đa văn hóa: Champa, Bồ Đào Nha, Nhật, Trung… chứng kiến cuộc sống thôn quê bình dị bên dòng sông Hoài, khoảnh khắc hùng tráng trong lịch sử, nét hoàng kim của cảng thị một thời... và Công Viên Ấn tượng Hội An - Tái hiện Hội An của quá khứ, một cảng thị quốc tế sầm uất với sự hiện diện của các nền văn hóa Á, Âu, tìm hiểu nghề nuôi tằm ươm tơ, quay tơ dệt lụa bằng khung cửi, làm bánh đậu xanh Hội An, thưởng thức trà đạo phong cách Nhật Bản … Đoàn quay về lại Đà Nẵng, tự do nghỉ ngơi. Nghỉ đêm tại Đà Nẵng
						        </textarea>
						      </div>
						    </div>
							
						</div>
						

						<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
							<div class="form-group">
						      <label class="control-label col-sm-3" for="time">Số ngày :</label>
						      <div class="col-sm-9">
						        <input type="number" class="form-control" id="time" placeholder="Điền tên danh mục" name="time" value="3">
						      </div>
						    </div>
							<div class="form-group">
						      <label class="control-label col-sm-3" for="quantity_tourist">Số lượng khách:</label>
						      <div class="col-sm-9">
						        <input type="number" class="form-control" id="quantity_tourist" placeholder="Điền tên danh mục" name="quantity_tourist" value="12">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="flight_id">Mã chuyến bay:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" id="flight_id" placeholder="Điền mã chuyến bay" name="flight_id" value="HCM-DN">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="price_id">Mã giá:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" id="price_id" placeholder="Điền mã giá" name="price_id" value="NL">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="category_id">Mã loại tour:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" id="category_id" placeholder="Điền mã tour" name="category_id" value="TN">
						      </div>
						    </div>
						    <div class="form-group">
						    	<label class="control-label col-sm-5"></label>
						      <div class="col-sm-7">
						        <!-- <button type="submit" onclick="add()" class="btn btn-primary" style="margin-right: 10px">Thêm</button>
								<button type="submit" onclick="cancel()" class="btn btn-danger">Hủy</button> -->
								<input type="button" value="Cập nhật" onclick="edit()" 
						        	style="background-color: #0099FF;
									  border: none;
									  color: white;
									  padding: 8px 16px;
									  text-decoration: none;
									  margin: 4px 2px;
									  cursor: pointer;"
									  >
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
		function edit() {
		  alert("Cập nhật thành công!");
		}
		function cancel() {
		   window.history.back();
		}
	</script>

@endsection
