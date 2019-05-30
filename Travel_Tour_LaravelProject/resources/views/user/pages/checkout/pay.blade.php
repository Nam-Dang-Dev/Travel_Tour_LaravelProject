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
			<p style="font-size: 16px; position: relative; left: 5px; padding-top: 5px;"><b>2. VIETRAVEL XÁC NHẬN</b></p>
			<p style="font-size: 35px; color: #d1d2e4; margin-top: 12px"><i style="background: #fff; border-radius: 25px;" class="fa fa-circle-thin"></i></p>
		</div>
		<div class="col-md-4 col-sm-3" style="text-align: center;">
			<p style="font-size: 16px; position: relative; left: 5px; padding-top: 5px;color: red;">3. THANH TOÁN</p>
			<p style="font-size: 35px; color: #d1d2e4; margin-top: 12px"><i style="background: #fff; border-radius: 25px;" class="fa fa-circle-thin"></i></p>
		</div>

	</div><!-- end Các bước book tour -->

	<div class="row">
		<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
			<div class="card"style="margin: 20px;">
				 <div class="card-headercard bg-primary text-white" style="height: 40px; text-align: center;">Thông tin thanh toán</div>
				<div class="card-body " style="height: 550px;">
					<table class="table">
						
						<tbody>
							<tr>
								<td>Mã tour</td>
								<td>{{$tours->id}}</td>
							</tr>
							<tr>
								<td>Tên Tour</td>
								<td>{{$tours->name}}</td>
							</tr>
							<tr>
								<td>Mã tour</td>
								<td><img  src="{!! asset('public/user/images/'.$tours->image) !!} " alt="Image" class="img-fluid" style="width: 300px; height: 200px;"></td>
							</tr>

							<tr>
								<td>Địa điểm thanh toán</td>
								<td>Ngân hàng Á Châu | STK: 123456gh879</td>
							</tr>
							<tr>
								<td></td>
								<td>Ngân hàng Đông Á | STK: 1234546879</td>
							</tr>
							<tr>
								<td></td>
								<td>Ngân hàng Vietcombank | STK: 18578456879</td>
							</tr>
						</tbody>
					</table>
					
					

				</div> 

			</div>
		</div>

		<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
			<div class="card"style="margin: 20px;">
				 <div class="card-headercard bg-primary text-white" style="height: 40px; text-align: center;">Thông tin liên lạc</div>
				<div class="card-body" style=" height: 550px;">
					
				</style>>
					<table class="table">
						
						<tbody>
							<tr>
								<td>Giám đốc </td>
								<td>Lê Thị Thúy Vân</td>
							</tr>
							<tr>
								<td>Người chịu trách nhiệm</td>
								<td>Trần Thị Thảo</td>
							</tr>
							<tr>
								<td>Địa chỉ</td>
								<td>101B Lê Hữu Trác</td>
							</tr>
							

							<tr>
								<td>Số điện thoại liên hệ</td>
								<td>0185245896</td>
							</tr>
							<tr>
								<td></td>
								<td>0185458948</td>
							</tr>
							<tr>
								<td></td>
								<td>01235687456</td>
							</tr>
						</tbody>
					</table>
					
					

				</div> 

			</div>
		</div>
	</div>

	


</div>









@endsection

@section('slideAboutUs')
@include('user.blocks.slideAboutUs')

@endsection

