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
				<form class="form-horizontal" action="{{route('admin/tour/post_add')}}" method="POST" role="form"
					  enctype="multipart/form-data">
					{{csrf_field()}}
					<legend>Thêm tour</legend>
					<div class="row">
						<div class="panel panel-default" >
								<div class="panel-body" style="text-align: center;">
									<span class="glyphicon glyphicon-upload" style="font-size: 80px;margin-top:30px "></span>
									<div style="margin-bottom: 50px">Upload image</div>
									<input id="filebutton" name="image" class="input-file" type="file" style="margin-left: 480px;">
								</div>

						</div>
					</div>
					<div class="row">
						<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
							<div class="form-group">
						      <label class="control-label col-sm-3" for="name">Tên :</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" required="required" id="name" placeholder="Điền tên danh mục" name="name">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="departure_location">Nơi khởi hành:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" required="required" id="departure_location" placeholder="Điền nơi khởi hành" name="departure_location">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="end_location">Nơi kết thúc:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" required="required" id="end_location" placeholder="Điền nơi kết thúc" name="end_location">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="concentrate_place">Nơi tập trung:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" required="required" id="concentrate_place" placeholder="Điền nơi tập trung" name="concentrate_place">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="description">Mô tả:</label>
						      <div class="col-sm-9">
						        <textarea rows="7" cols="70" required="required" name="description"  placeholder="Mô tả tour"></textarea>
						      </div>
						    </div>
							
						</div>
						

						<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
							<div class="form-group">
						      <label class="control-label col-sm-3" for="departure_location">Ngày khởi hành :</label>
						      <div class="col-sm-9">
						        <input type="date" class="form-control" required="required" id="departure_day" placeholder="" name="departure_day">
						      </div>
						    </div>
							<div class="form-group">
						      <label class="control-label col-sm-3" for="time">Số ngày :</label>
						      <div class="col-sm-9">
						        <input type="number" class="form-control" required="required" id="time" placeholder="Điền tên danh mục" name="time">
						      </div>
						    </div>
							<div class="form-group">
						      <label class="control-label col-sm-3" for="quantity_tourist">Số lượng khách:</label>
						      <div class="col-sm-9">
						        <input type="number" class="form-control" required="required" id="quantity_tourist" placeholder="Điền tên danh mục" name="quantity_tourist">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="flight_id">Mã chuyến bay:</label>
						      <div class="col-sm-9">
						        <input type="number" class="form-control" required="required" id="flight_id" placeholder="Điền tmã chuyến bay" name="flight_id">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="price_id">Mã giá:</label>
						      <div class="col-sm-9">
						        <input type="number" class="form-control" required="required" id="price_id" placeholder="Điền mã giá" name="price_id">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="category_id">Mã loại tour:</label>
						      <div class="col-sm-9">
						        <input type="number" class="form-control" required="required" id="category_id" placeholder="Điền mã tour" name="category_id">
						      </div>
						    </div>
						    <div class="form-group">
						    	<label class="control-label col-sm-5" for="name"></label>
						      <div class="col-sm-7">
						        <button type="submit" class="btn btn-primary" 
						        style="margin-right: 10px; 
						        	  background-color: #0099FF;
									  border: none;
									  color: white;
									  padding: 8px 16px;
									  text-decoration: none;
									  margin: 4px 2px;
									  cursor: pointer">Thêm</button>

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
		   window.location.href ="{{route('admin/tour/index')}}"
		}
	</script>

@endsection
