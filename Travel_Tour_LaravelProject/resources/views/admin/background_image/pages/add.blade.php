@extends('admin.master')

@section('headerPage')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Hình ảnh Background
		<small>Đã có 3 hình ảnh</small>
	</h1>
</section>
@endsection
 
<!-- content -->
@section('content')

	<section class="content">
		<div class="panel panel-default">
			<div class="panel-body">
				<form class="form-horizontal" action="" method="GET" role="form" enctype="multipart/form-data">
					<legend>Thêm hình ảnh</legend>
					<div class="row">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<div class="panel panel-default" style="width: 200px; height: 200px">
								<div class="panel-body" style="text-align: center;">
									
									<span class="glyphicon glyphicon-upload" style="font-size: 80px;margin-top:30px "></span>
									<div>Upload image</div>
								</div>
							</div>
							<input id="image" name="image" class="input-file" type="file">
						</div>

						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<div class="form-group">
						      <label class="control-label col-sm-3" for="name">Caption 1:</label>
						      <div class="col-sm-9">
						        <textarea rows="4" cols="82" name="caption1"  placeholder="Mô tả 1"></textarea>
						      </div>
						    </div>
							<div class="form-group">
						      <label class="control-label col-sm-3" for="name">Caption 2:</label>
						      <div class="col-sm-9">
						        <textarea rows="4" cols="82" name="caption1"  placeholder="Mô tả 2"></textarea>
						      </div>
						    </div>
						    <div class="form-group">
						    	<label class="control-label col-sm-5" for="name"></label>
						      <div class="col-sm-7">
						        
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
