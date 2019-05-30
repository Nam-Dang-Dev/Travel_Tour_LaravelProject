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
	                    	@foreach($orders as $value)
	                      	<tr>
		                        <td width="130px"> {{$value->id}}</td>
		                       	<td width="130px">  {{$value->contact_id}}</td>
		                       	<td width="130px">{{$value->created_at}}</td>
		                        <td >
		                        	@if($value->status == 0)
		                        		<span style="color: red;">Chờ xác nhận</span>
		                        	@endif
		                        </td>

		                        <td>
		                        	<a href="{!! route('admin/reservation/view_detail',$value->id)!!}">
		                        		<i class="fa fa-plus-circle"></i>&nbsp;Xem
		                        	</a>&nbsp;&nbsp;
		                          	
		                        </td>
	                      	</tr> 
	                      	

	                      		@endforeach
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
