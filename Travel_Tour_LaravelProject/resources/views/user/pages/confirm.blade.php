@extends('user.master')
@section('Content')
<div class="container">

	<!-- Các bước book tour -->
	<div class="row" style="margin-bottom: 30px;">
		<div class="col-md-4 col-sm-3" style="text-align: center;">
			<p style="font-size: 16px; position: relative; left: 5px; padding-top: 5px;"><b>1. NHẬP THÔNG TIN</b></p>
			<p style="font-size: 35px; color: #fc6600; margin-top: 12px"><i style="background: #fff; border-radius: 25px;" class="fa fa-check-circle"></i></p>
		</div>
		<div class="col-md-4 col-sm-3" style="text-align: center;">
			<p style="font-size: 16px; position: relative; left: 5px; padding-top: 5px;color: red;"><b>2. VIETRAVEL XÁC NHẬN</b></p>
			<p style="font-size: 35px; color: #d1d2e4; margin-top: 12px"><i style="background: #fff; border-radius: 25px;" class="fa fa-circle-thin"></i></p>
		</div>
		<div class="col-md-4 col-sm-3" style="text-align: center;">
			<p style="font-size: 16px; position: relative; left: 5px; padding-top: 5px">3. THANH TOÁN</p>
			<p style="font-size: 35px; color: #d1d2e4; margin-top: 12px"><i style="background: #fff; border-radius: 25px;" class="fa fa-circle-thin"></i></p>
		</div>

	</div><!-- end Các bước book tour -->

	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<h3 style="color: red;" >PHIẾU XÁC NHẬN BOOKING</h3>
			<div class="card"  style="margin-top: 20px;">
				<div class="card-body">
					<div id="formVerify" style="display: block;">
						<form action="" method="POST" role="form">
							@csrf
							<div class="form-group">
								<label for="">Nhập mã xác nhận từ mail</label>
								<input type="text" class="form-control" id="verify" name="verify">
							</div>
							<p style="text-align: center;"><button type="button"  class="btn btn-primary" id="" data-role="confirm">Xác nhận</button></p>
							
						</form>
					</div>
					<div>
						<table class="table" style="margin-top: 20px;">
							
							<tbody>
								<tr>
									<td>Mã tour</td>
									<td>{{$tour_confirm->id}}</td>
								</tr>
								<tr>
									<td>Tên Tour</td>
									<td>{{$tour_confirm->name}}</td>
								</tr>
								<tr>
									<td>Ngày đi</td>
									<td>{{$tour_confirm->departure_day}}</td>
								</tr>
								<tr>
									<td>Thời gian</td>
									<td>{{$tour_confirm->time}}</td>
								</tr>
							</tbody>
						</table>
						
					</div>
					



				</div> 
				
			</div>
		</div>

		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<h3 style="color: red;">THÔNG TIN LIÊN LẠC</h3>
			<div class="card"style="margin-top: 20px;">
				
				<div class="card-body ">
					
					<?php foreach(Cart::content() as $row) :?>
						
						<div>
							<table class="table" style="margin-top: 20px;">

								<tbody>
									<tr>
										
										<td>Họ Tên</td>
										<td>{{ $row->options->contactLastName}} {{ $row->options->contactFirstName}}</td>
									</tr>
									<tr>
										<td>Địa chỉ</td>
										<td>{{ $row->options->contactAddress}}</td>
									</tr>
									<tr>
										<td>Di động</td>
										<td>{{ $row->options->contactPhone}}</td>
									</tr>
									<tr>
										<td>Email</td>
										<td>{{ $row->options->contactEmail}}</td>

									</tr>
								</tbody>
							</table>

						</div>
						<?php break; ?>

					<?php endforeach;?>


				</div> 

			</div>
		</div>
	</div>

	<div class="row">
		<div class="card-body">
			<h3 style="color: red; text-align: center; margin-top: 20px;" >CHI TIẾT BOOKING</h3>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

				<table class="table" style="margin-top: 20px;">
					
						<tbody>
							<tr>
								<td>Số khách</td>
								<td>{{$row->qty}}</td>
							</tr>
							<tr>
								<td>Trị giá booking</td>
								<td id="totalValue"></td>
							</tr>
							
							<tr>
								<td>Hình thức thanh toán</td>

								<td>
									Thanh toán tiền mặt
								</td>
							</tr>
							<tr>
								<td>Thời hạn thanh toán</td>
								<td style="color: red;">2 ngày sau khi đặt tour nếu không hệ thống sẽ tự hủy tour</td>
							</tr>
						</tbody>
					</table>
				
			</div>
			
		</div>
	</div>
	<p style="text-align: center;">
	<div class="row">
		<a href="{{route('payment',[$tour_confirm->id,$row->options->contactEmail])}}" title="" style="margin-left: 500px;"><button type="button" class="btn btn-danger">Thanh Toán</button></a>

		
	</div>
</p>

</div>









@endsection

@section('slideAboutUs')
@include('user.blocks.slideAboutUs')

@endsection

