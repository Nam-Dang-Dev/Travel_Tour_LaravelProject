@extends('admin.master')

@section('headerPage')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Danh mục
		<small>Đã có 2 danh mục</small>
	</h1>
</section>
@endsection
 
<!-- content -->
@section('content')

	<section class="content">
		<div class="panel panel-default">
			<div class="panel-body">
				<form class="form-horizontal" action="" method="GET" role="form">
					<legend>Xem chi tiết danh mục</legend>
					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<div class="panel panel-default" >
								<div class="panel-body" style="text-align: center;">
									<img src="{{asset('admin/dist/img/dulichtrongnuoc.jpg')}}" style="width: 250px; height: 200px">
								</div>
							</div>
						</div>

						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						    <div class="form-group">
						      <table class="table table-hover">
						      	<tbody>
						      		<tr>
						      			<th style="width: 120px">Tên Danh mục</th>
						      			<td>Du lịch trong nước</td>
						      		</tr>
						      		<tr>
						      			<th>Mô tả:</th>
						      			<td>Du lịch trong nước luôn là lựa chọn tuyệt vời. Đường bờ biển dài hơn 3260km, những khu bảo tồn thiên nhiên tuyệt vời, những thành phố nhộn nhịp, những di tích lịch sử hào hùng, nền văn hóa độc đáo và hấp dẫn, cùng một danh sách dài những món ăn ngon nhất thế giới, Việt Nam có tất cả những điều đó. Với lịch trình dày, khởi hành đúng thời gian cam kết, Vietravel là công ty lữ hành uy tín nhất hiện nay tại Việt Nam, luôn sẵn sàng phục vụ du khách mọi lúc, mọi nơi, đảm bảo tính chuyên nghiệp và chất lượng dịch vụ tốt nhất thị trường</td>
						      		</tr>
						      	</tbody>
						      </table>
						    </div>
						    <div class="form-group">
						    	<label class="control-label col-sm-5" for="name"></label>
						      <div class="col-sm-7">
						        <input type="button" value="Thoát" onclick="back()" 
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
		function back() {
		  location.replace("{{route('admin/category/index')}}");
		}
	</script>

@endsection
