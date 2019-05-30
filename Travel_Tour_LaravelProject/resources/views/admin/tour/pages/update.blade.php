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
				<form class="form-horizontal" action="{{route('admin/tour/post_update',$tour_update->id)}}" method="POST" role="form" enctype="multipart/form-data">
					{{ csrf_field() }}
					<legend>Chỉnh sửa tour</legend>
					<div class="row">
						
						<div class="panel panel-default" >
							<div class="panel-body" style="text-align: center;">
								<div >
									<img class="profile-pic" style="margin:auto;"src="{!! asset('public/user/images/'.$tour_update->image) !!}">
								</div>
								<div class="row">
									<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
									</div>
									<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
								       <i class="fa fa-camera upload-button"></i>
								       <input class="file-upload" type="file" name="image" accept="image/*"
								        value="{!! old ('image',isset($tour_update)?$tour_update['image']:NULL) !!}"/>
									</div>
								</div>    
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
							<div class="form-group">
						      <label class="control-label col-sm-3" for="name">Tên :</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" required="required" id="name" placeholder="Điền tên danh mục" name="name" value="{!! old ('name',isset($tour_update)?$tour_update['name']:NULL) !!}">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="departure_location">Nơi khởi hành:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" required="required" id="departure_location" placeholder="Điền nơi khởi hành" name="departure_location" value="{!! old ('departure_location',isset($tour_update)?$tour_update['departure_location']:NULL) !!}">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="end_location">Nơi kết thúc:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" required="required" id="end_location" placeholder="Điền nơi kết thúc" name="end_location" value="{!! old ('end_location',isset($tour_update)?$tour_update['end_location']:NULL) !!}">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="concentrate_place">Nơi tập trung:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" required="required" id="concentrate_place" placeholder="Điền nơi tập trung" name="concentrate_place" value="{!! old ('concentrate_place',isset($tour_update)?$tour_update['concentrate_place']:NULL) !!}">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="description">Mô tả:</label>
						      <div class="col-sm-9">
						        <textarea rows="7" cols="70" required="required" name="description"  placeholder="Mô tả tour" style="width: 100%">{!! old ('description',isset($tour_update)?$tour_update['description']:NULL) !!}</textarea>
						      </div>
						    </div>
							
						</div>
						

						<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
							<div class="form-group">
						      <label class="control-label col-sm-3" for="departure_location">Ngày khởi hành :</label>
						      <div class="col-sm-9">
						        <input type="date" class="form-control" required="required" id="departure_day" placeholder="" name="departure_day" value="{!! old ('departure_day',isset($tour_update)?$tour_update['departure_day']:NULL) !!}">
						      </div>
						    </div>
							<div class="form-group">
						      <label class="control-label col-sm-3" for="time">Số ngày :</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" required="required" id="time" placeholder="Điền tên danh mục" name="time" value="{!! old ('time',isset($tour_update)?$tour_update['time']:NULL) !!}">
						      </div>
						    </div>
							<div class="form-group">
						      <label class="control-label col-sm-3" for="quantity_tourist">Số lượng khách:</label>
						      <div class="col-sm-9">
						        <input type="number" class="form-control" required="required" id="quantity_tourist" placeholder="Điền tên danh mục" name="quantity_tourist" value="{!! old ('quantity_tourist',isset($tour_update)?$tour_update['quantity_tourist']:NULL) !!}">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="flight_id">Mã chuyến bay:</label>
						      <div class="col-sm-9">
						        <input type="number" class="form-control" required="required" id="flight_id" placeholder="Điền tmã chuyến bay" name="flight_id" value="{!! old ('flight_id',isset($tour_update)?$tour_update['flight_id']:NULL) !!}">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="price_id">Mã giá:</label>
						      <div class="col-sm-9">
						        <input type="number" class="form-control" required="required" id="price_id" placeholder="Điền mã giá" name="price_id" value="{!! old ('price_id',isset($tour_update)?$tour_update['price_id']:NULL) !!}">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="category_id">Mã loại tour:</label>
						      <div class="col-sm-9">
						        <select name="category_id" style="width: 100%">
						        	<option value="{{$category_tour['id']}}" >{{$category_tour['name']}}</option>
						        	@foreach($category as $cate)
						        	<option value="{{$cate['id']}}">{{$cate['name']}}</option>
						        	@endforeach
						        </select>
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
									  cursor: pointer">Sửa</button>

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
