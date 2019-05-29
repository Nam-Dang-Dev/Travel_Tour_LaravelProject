@extends('admin.master')

@section('headerPage')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Danh mục
		<small>Đã có ... tour</small>
	</h1>
</section>
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
								<div >
									<img class="profile-pic" style="margin:auto;"src="{{asset('admin/dist/img/Top_Tours_and_Travel.png')}}">
								</div>
								<div class="row">
									<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
										
									</div>
									<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
										
								       <i class="fa fa-camera upload-button"></i>
								        <input class="file-upload" type="file" name="image" accept="image/*"/>
								     
									</div>
								</div>
								     
								</div>
						</div>
					</div>
					<div class="row" >
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
						      <label class="control-label col-sm-3" style="text-align: left;" for="category_id">Mã loại tour:</label>
						      <div class="col-sm-9">
						        <select name="category_id" style="width: 100%"> 
						        	@foreach($category as $cate)
						        	<option value="{{$cate['id']}}">{{$cate['name']}}</option>
						        	@endforeach
						        </select>
						      </div>
						    </div>
							<div class="form-group">
						      <label class="control-label col-sm-3" style="text-align: left;" for="name">Tên</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" required="required" id="name" placeholder="Điền tên danh mục" name="name">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" style="text-align: left;" for="departure_location">Nơi khởi hành</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" required="required" id="departure_location" placeholder="Điền nơi khởi hành" name="departure_location">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" style="text-align: left;" for="end_location">Nơi kết thúc</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" required="required" id="end_location" placeholder="Điền nơi kết thúc" name="end_location">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" style="text-align: left;" for="concentrate_place">Nơi tập trung</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" required="required" id="concentrate_place" placeholder="Điền nơi tập trung" name="concentrate_place">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" style="text-align: left;" for="departure_location">Ngày khởi hành </label>
						      <div class="col-sm-9">
						        <input type="date" class="form-control" required="required" id="departure_day" placeholder="" name="departure_day">
						      </div>
						    </div>
							<div class="form-group">
						      <label class="control-label col-sm-3" style="text-align: left;" for="time">Số ngày </label>
						      <div class="col-sm-9">
						        <input type="number" class="form-control" required="required" id="time" placeholder="Điền tên danh mục" name="time">
						      </div>
						    </div>
							<div class="form-group">
						      <label class="control-label col-sm-3" style="text-align: left;" for="quantity_tourist">Số lượng khách</label>
						      <div class="col-sm-9">
						        <input type="number" class="form-control" required="required" id="quantity_tourist" placeholder="Điền tên danh mục" name="quantity_tourist">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" style="text-align: left;" for="description">Mô tả:</label>
						      <div class="col-sm-9">
						        <textarea rows="7" cols="70" required="required" name="description"  placeholder="Mô tả tour" style="width: 100%"></textarea>
						      </div>
						    </div>
							
						</div>
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
							
						</div>
						<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
						    <div class="form-group">
						    	<div class="panel panel-default">
						    		<legend>Thông tin chuyến bay:</legend>
						    		<div class="panel-body">
						    			<div class="row">
						    			<label class="control-label col-sm-3" style="text-align: left;" for="name_flight" style="text-align: left;">Hãng bay</label>
									    <div class="col-sm-9">
									        <input type="text" class="form-control" required="required" id="f_name" placeholder="Điền tên hãng bay" name="f_name">
									    </div>
										</div>
										<div class="row">
									    <label class="control-label col-sm-3" style="text-align: left;" for="fdeparture_day">Ngày bay đi</label>
									    <div class="col-sm-9">
									        <input type="date" class="form-control" required="required" id="f_departure_day" placeholder="Điền ngày bay đi" name="f_departure_day">
									    </div>
										</div>
										<div class="row">
									    <label class="control-label col-sm-3" style="text-align: left;" for="day_back">Ngày bay về</label>
									    <div class="col-sm-9">
									        <input type="date" class="form-control" required="required" id="day_back" placeholder="Điền bay về" name="day_back">
									    </div>
									</div>
						    		</div>
						    	</div>
						      
						    </div>
						    <div class="form-group">
						    	<div class="panel panel-default">
						    		<legend>Thông tin giá tour:</legend>
						    		<div class="panel-body">
										<p>*Giá vé tùy theo độ tuổi</p>
						    			<div class="row">
						    			<label class="control-label col-sm-3" style="text-align: left;" for="more12"><12</label>
									    <div class="col-sm-9">
									      <input type="number" class="form-control" required="required" id="more12" placeholder="Điền giá vé lớn hơn 12 tuổi" name="more12">
									    </div>
										</div>
										<div class="row">
									    <label class="control-label col-sm-3" style="text-align: left;" for="from5_to_12">5-12</label>
									    <div class="col-sm-9">
									        <input type="number" class="form-control" required="required" id="from5_to_12" placeholder="Điền giá vé từ 5-12 tuổi" name="from5_to_12">
									    </div>
										</div>
										<div class="row">
									    <label class="control-label col-sm-3" style="text-align: left;" for="from2_to_5">2-5</label>
									    <div class="col-sm-9">
									        <input type="number" class="form-control" required="required" id="from2_to_5" placeholder="Điền giá vé từ 2-5 tuổi" name="from2_to_5">
									    </div>
										</div>
										<div class="row">
									    <label class="control-label col-sm-3" style="text-align: left;" for="less2">>2</label>
									    <div class="col-sm-9">
									        <input type="number" class="form-control" required="required" id="less2" placeholder="Điền giá vé nhỏ hơn 2 tuổi" name="less2">
									    </div>
										</div>
										<div class="row">
									    <label class="control-label col-sm-3" style="text-align: left;" for="promotion">Khuyến mãi</label>
									    <div class="col-sm-9">
									        <input type="number" class="form-control" required="required" id="promotion" placeholder="Điền % khuyến mãi" name="promotion">
									    </div>
										</div>
										<div class="row">
									    <label class="control-label col-sm-3" style="text-align: left;" for="fdescription">Mô tả</label>
									    <div class="col-sm-9">
									        <input type="text" class="form-control" required="required" id="p_description" placeholder="Điền mô tả về giá" name="p_description">
									    </div>
										</div>
						    		</div>
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
									  padding: 8px 15px;
									  text-decoration: none;
									  margin: 4px 2px;
									  cursor: pointer">Thêm</button>

								<input type="button" value="Thoát" onclick="cancel()" 
						        	style="background-color: #FF3300;
									  border: none;
									  color: white;
									  padding: 8px 15px;
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
