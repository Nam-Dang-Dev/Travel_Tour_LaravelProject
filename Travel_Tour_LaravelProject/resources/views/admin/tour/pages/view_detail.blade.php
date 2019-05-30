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
									<img src="{!! asset('public/user/images/'.$detail_tour->image) !!}" style="width: 500px; height: 200px">
								</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
							<div class="form-group">
							
							<table class="table table-hover">
								<tbody>
								
									<tr>
										<th>Tên: </th>
										<td>{!! $detail_tour["name"] !!}</td>
									</tr>
									<tr>
										<th style="width: 130px">Nơi khởi hành:</th>
										<td>{!! $detail_tour["departure_location"] !!}</td>
									</tr>
									<tr>
										<th>Nơi kết thúc:</th>
										<td>{!! $detail_tour["end_location"] !!}</td>
									</tr>
									<tr>
										<th>Nơi tập trung:</th>
										<td>{!! $detail_tour["end_location"] !!}</td>
									</tr>
									<tr>
										<th>Ngày khởi hành:</th>
										<td>{!! $detail_tour["departure_day"] !!}</td>
									</tr>
									<tr>
										<th>Số ngày :</th>
										<td>{!! $detail_tour["time"] !!}</td>
									</tr>
									<tr>
										<th>Số lượng khách:</th>
										<td>{!! $detail_tour["quantity_tourist"] !!}</td>
									</tr>
									<tr>
										<th>Loại tour:</th>
										<td>{!! $category_tour["name"] !!}</td>
									</tr>
								</tbody>
							</table>
						</div>
						</div>
						<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
							<div class="form-group">
								<table class="table table-hover">
									<tbody>
										
									<tr>
											<th rowspan="4" width="150px">Chuyến bay:</th>	
										</tr>
										<tr>
											<th width="150px">Hãng bay</th>
											<td>{{$flight['name']}}</td>
										</tr>
										<tr>
											<th width="150px">Ngày bay đi</th>
											<td>{{$flight['departure_day']}}</td>
											
										</tr>
										<tr>
											<th width="150px">Ngày bay về</th>
											<td>{{$flight['day_back']}}</td>
										</tr>										
										<tr>
											<th width="150px" rowspan="7">Giá-theo độ tuổi:</th>	
										</tr>
										<tr>
											<th width="150px">>12</th>
											<td>{{$price['more12']}}</td>
										</tr>
										<tr>
											<th width="150px">từ 5-12</th>
											<td>{{$price['from5_to_12']}}</td>
											
										</tr>
										<tr>
											<th width="150px">từ 2-5</th>
											<td>{{$price['from2_to_5']}}</td>
										</tr>
										<tr>
											<th width="150px"><12</th>
											<td>{!! $price["less2"] !!}</td>
										</tr>
										<tr>
											<th width="150px">khuyến mãi</th>
											<td>{!! $price["promotion"] !!}%</td>
										</tr>
										<tr>
											<th width="150px">Mô tả</th>
											<td>{!! $price["description"] !!}</td>
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
									<td>{!! $detail_tour["description"] !!}	</td>
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
