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
					<legend>Thêm tour</legend>
					<div class="row">
						<div class="panel panel-default" >
								<div class="panel-body" style="text-align: center;">
									<span class="glyphicon glyphicon-upload" style="font-size: 80px;margin-top:30px "></span>
									<div style="margin-bottom: 50px">Upload image</div>
									<input id="filebutton" name="filebutton" class="input-file" type="file" style="margin-left: 480px;">
								</div>

						</div>
					</div>
					<div class="row">
						<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
							<div class="form-group">
						      <label class="control-label col-sm-3" for="name">Tên :</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" id="name" placeholder="Điền tên danh mục" name="name">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="name">Nơi khởi hành:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" id="name" placeholder="Điền nơi khởi hành" name="name">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="name">Nơi kết thúc:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" id="name" placeholder="Điền nơi kết thúc" name="name">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="name">Nơi tập trung:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" id="name" placeholder="Điền nơi tập trung" name="name">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="name">Mô tả:</label>
						      <div class="col-sm-9">
						        <textarea rows="7" cols="70" name="description"  placeholder="Mô tả tour"></textarea>
						      </div>
						    </div>
							
						</div>
						

						<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
							<div class="form-group">
						      <label class="control-label col-sm-3" for="name">Số ngày :</label>
						      <div class="col-sm-9">
						        <input type="number" class="form-control" id="name" placeholder="Điền tên danh mục" name="name">
						      </div>
						    </div>
							<div class="form-group">
						      <label class="control-label col-sm-3" for="name">Số lượng khách:</label>
						      <div class="col-sm-9">
						        <input type="number" class="form-control" id="name" placeholder="Điền tên danh mục" name="name">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="name">Mã chuyến bay:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" id="name" placeholder="Điền tmã chuyến bay" name="name">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="name">Mã giá:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" id="name" placeholder="Điền mã giá" name="name">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-3" for="name">Mã loại tour:</label>
						      <div class="col-sm-9">
						        <input type="text" class="form-control" id="name" placeholder="Điền mã tour" name="name">
						      </div>
						    </div>
						    <div class="form-group">
						    	<label class="control-label col-sm-5" for="name"></label>
						      <div class="col-sm-7">
						        <!-- <button type="submit" onclick="add()" class="btn btn-primary" style="margin-right: 10px">Thêm</button>
								<button type="submit" onclick="cancel()" class="btn btn-danger">Hủy</button> -->
								<input type="button" value="Thêm" onclick="add()" 
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
		function add() {
		  alert("Thêm thành công!");
		}
		function cancel() {
		   window.history.back();
		}
	</script>

@endsection
