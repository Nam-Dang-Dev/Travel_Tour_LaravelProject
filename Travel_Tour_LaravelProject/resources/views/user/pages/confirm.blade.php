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
					<div>
						<form action="" method="POST" role="form">
							<div class="form-group">
								<label for="">Nhập mã xác nhận từ mail</label>
								<input type="text" class="form-control" id="confirm" name="confirm">
							</div>
							<button type="button" class="btn btn-primary">Xác nhận</button>
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
			<h3 style="color: red; text-align: center;" >PHIẾU XÁC NHẬN BOOKING</h3>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

				<table class="table" style="margin-top: 20px;">

					<tbody>
						<tr>
							<td>Trị giá booking</td>
							<td>{{$tour_confirm->id}}</td>
						</tr>
						<tr>
							<td>Ngày đăng kí</td>
							<td>{{$tour_confirm->created_at}}</td>
						</tr>
						<tr>
							<td>Hình thức thanh toán</td>
							<td>
								@if($tour_confirm->pay==1)
									Thanh toán tiền mặt
								@else
									Thanh toán online paypal
								@endif
							</td>
						</tr>
						<tr>
							<td>Thời hạn thanh toán</td>
							<td>{{$tour_confirm->time}}</td>
						</tr>
					</tbody>
				</table>
			</div>
			
		</div>
	</div>


</div>









@endsection

@section('slideAboutUs')
@include('user.blocks.slideAboutUs')

@endsection

