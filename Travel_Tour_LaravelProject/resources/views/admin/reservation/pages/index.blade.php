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

	<section class="content">

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<!-- Display message -->
		        <!-- //Display message -->

				<div class="bang">
					<div class="hoc">
						<marquee direction="left">&hearts; Xin Chào! &hearts;</marquee>
					</div>
					
					<table class="table table-striped table-bordered table-hover">
	                    <thead>
	                      	<tr>
	                        	<th width="80px">Mã Tour</th>
	                        	<th width="150px" >Mã khách hàng</th>
	                        	<th width="150px">Ngày đặt</th>
	                        	<th width="150px">Ghi chú</th>
	                        	<th width="150px">Thao tác</th>
	                      	</tr>
	                    </thead>
	                    <tbody>
	                      	<tr>
		                        <td width="130px"> TN_1</td>
		                       	<td width="130px"> Cus_1</td>
		                       	<td width="130px"> 5/8/2018</td>
		                        <td >1</td>

		                        <td>
		                        	<a href="{!! route('admin/reservation/view_detail')!!}">
		                        		<i class="fa fa-plus-circle"></i>&nbsp;Xem
		                        	</a>&nbsp;&nbsp;
		                          	<a href="#" onclick="javascript:Delete()"><i class="fa fa-trash"></i>&nbsp;Xóa</a>
		                        </td>
	                      	</tr> 
	                      	<tr>
		                        <td width="130px"> TN_2</td>
		                       	<td width="130px"> Cus_2</td>
		                       	<td width="130px"> 12/8/2018</td>
		                        <td >1</td>

		                        <td>
		                        	<a href="{!! route('admin/reservation/view_detail')!!}">
		                        		<i class="fa fa-plus-circle"></i>&nbsp;Xem
		                        	</a>&nbsp;&nbsp;
		                          	<a href="#" onclick="javascript:Delete()"><i class="fa fa-trash"></i>&nbsp;Xóa</a>
		                        </td>
	                      	</tr> 
	                    </tbody>
                      	
						
                  	</table>
				</div><!-- /.bang -->
			</div><!-- /.col -->
		</div><!-- /.row -->

	</section>
<script type="text/javascript">
		function Delete() {
			  alert("Xóa thành công!");
			}
</script>
@endsection
