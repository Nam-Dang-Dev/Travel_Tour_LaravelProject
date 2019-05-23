@extends('admin.master')

@section('headerPage')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Danh sách tour
		<small>Đã có {{count($tour)}} tour</small>
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
					
					<table  id="bootstrap-data-table" class="table table-striped table-bordered">
	                    <thead style="text-align: center;">
	                      	<tr>
	                        	<th width="150px">Tên tour</th>
	                        	<th width="100px">Hình ảnh</th>
	                        	<th >Nơi khởi hành</th>
	                        	<th >Nơi kết thúc</th>
	                        	<th >Ngày khởi hành</th>
	                        	<th width="100px">Số ngày</th>
	                        	<th >Số khách</th>
	                        	<th >...</th>
	                        	<th >Thao tác</th>
	                      	</tr>
	                    </thead>
	                    <tbody>	
	                    	@foreach($tour as $value)

	                      	<tr>
		                        <td width="150px">{!! $value["name"] !!}</td>
		                        <td> <img style="width: 100px;height: 80px" src="{!! asset('public/user/images/'.$value->image) !!}"></td>
		                        <td > {!! $value["departure_location"] !!}</td>
		                        <td > {!! $value["end_location"] !!}</td>
		                        <td > {!! $value["departure_day"] !!}</td>
		                        <td >{!! $value["time"] !!}</td>
		                        <td>{!! $value["quantity_tourist"] !!}</td>
		                        <td></td>
		                        <td>
		                        	<a href="{!! url('admin/tour/view_detail',$value["id"])!!}">
		                        		<i class="fa fa-plus-circle"></i>&nbsp;Xem
		                        	</a>&nbsp;&nbsp;
		                        	<a href="{!! route('admin/tour/get_update',$value["id"])!!}">
		                        		<i class="fa fa-pencil"></i>&nbsp;Sửa
		                        	</a>&nbsp;&nbsp;
		                          	<a href="{!! route('admin/tour/delete',$value["id"])!!}"><i class="fa fa-trash"></i>&nbsp;Xóa</a>
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
       $(document).ready(function() {
         $('#bootstrap-data-table-export').DataTable();
     } );
 </script>
@endsection
