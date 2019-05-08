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

	<section class="content" style="width: 600px">
		<div class="panel panel-default">
			<div class="panel-body" >
				<form class="form-horizontal" action="" method="GET" role="form">
					<legend>Xem chi tiết đơn đặt tour</legend>
					<div class="row">
							<div class="form-group" >
						      <table class="table table-hover">
						      	<tbody>
						      		<tr>
						      			<th style="padding-left: 25px;">Mã Tour:</th>
						      			<td>TN_1</td>
						      		</tr>
						      		<tr>
						      			<th style="padding-left: 25px;">Mã khách hàng:</th>
						      			<td>Cus_1</td>
						      		</tr>
						      		<tr>
						      			<th style="padding-left: 25px;">Ngày đặt:</th>
						      			<td>5/8/2018</td>
						      		</tr>
						      		<tr>
						      			<th style="padding-left: 25px;">Ghi chú:</th>
						      			<td>1</td>
						      		</tr>
						      		<tr>
						      			<th style="padding-left: 25px;">Ngày đặt:</th>
						      			<td >5/8/2018</td>
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
				</form>
			</div>
		</div>
	</section>
	<script>
		function back() {
		  location.replace("{{route('admin/reservation/index')}}");
		}
	</script>

@endsection
