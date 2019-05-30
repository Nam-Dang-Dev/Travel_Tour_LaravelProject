@extends('admin.master')

@section('headerPage')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Đơn đặt tour
		<small>Đã có 2 đơn đặt tour</small>
	</h1>
</section>
@endsection  

<!-- content -->
@section('content')

<section class="content" >
	<div class="row">
		<div class="panel panel-default">

		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<h3 style="text-align: center;"><legend>Xem chi tiết tour</legend></h3>
			<div class="card"  style="margin-top: 20px;">
				<div class="card-body">
					<div class="panel-body" >
						<form class="form-horizontal" action="" method="GET" role="form">

							<div class="row">
								<div class="form-group" >
									<table class="table table-hover">
										<tbody>
											<tr>
												<img  src="{!! asset('public/user/images/'.$book->image) !!} " alt="Image" class="img-fluid" style="width: 400px; height: 200px;">
											</tr>
											<tr>
												<th style="padding-left: 25px;">Mã Tour:</th>
												<td>{{$book->tour_id}}</td>
											</tr>
											<tr>
												<th style="padding-left: 25px;">Tên Tour:</th>
												<td>{{$book->name}} </td>
											</tr>
											<tr>
												<th style="padding-left: 25px;">Ngày bắt đầu:</th>
												<td>{{$book->departure_day}}</td>
											</tr>
											<tr>
												<th style="padding-left: 25px;">Số lượng khách:</th>
												<td>{{$book->quantity_tourist}}</td>
											</tr>

											<tr>
												<th style="padding-left: 25px;">Tình trạng:</th>
												<td>


													@if($book->status == 0)
													<span>Chưa thanh toán</span>
													@elseif($book->status == 1)
													<span>Đã thanh toán</span>
													@endif
												</td>
											</tr>
											<tr>
												<th style="padding-left: 25px;">Tổng tiền:</th>
												<td>{{$book->total}}</td>
											</tr>
											
										</tbody>
									</table>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-5" for="name"></label>
									
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>


		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<h3 style="text-align: center;"><legend>Thông tin khách hàng</legend></h3>
			<div class="card"  style="margin-top: 20px;">
				<div class="card-body">
					<div class="panel-body" >
						<form class="form-horizontal" action="" method="GET" role="form">

							<div class="row">
								<div class="form-group" >
									<table class="table table-hover">
										<tbody>
											
											<tr>
												<th style="padding-left: 25px;">Tên khách hàng:</th>
												<td>{{$book->last_name}} {{$book->first_name}}</td>
											</tr>
											<tr>
												<th style="padding-left: 25px;">Địa chỉ:</th>
												<td>{{$book->address}} </td>
											</tr>
											<tr>
												<th style="padding-left: 25px;">Email:</th>
												<td>{{$book->phone_number}}</td>
											</tr>
											<tr>
												<th style="padding-left: 25px;">Ngày đặt:</th>
												<td>{{$book->date}}</td>
											</tr>
											
										</tbody>
									</table>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-5" for="name"></label>
									
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
	</div>
	
	<div class="row">
	
			<div class="pull-right" style="margin-right: 15px;">
				<input type="button" value="Thoát" onclick="back()" 
				style="background-color: #FF3300;
				border: none;
				color: white;
				padding: 8px 16px;
				text-decoration: none;
				margin-right: 0px;
				cursor: pointer;"
				>
			</div>
		
</div>
	
</section>
<script>
	function back() {
		location.replace("{{route('admin/reservation/index')}}");
	}
</script>

@endsection
