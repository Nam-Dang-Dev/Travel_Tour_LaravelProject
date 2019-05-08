@extends('admin.master')

@section('headerPage')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Danh sách danh mục 
		<small>Đã có 2 danh mục</small>
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
	                        	<th width="130px">Tên Danh mục</th>
	                        	<th width="150px" >Hình ảnh</th>
	                        	<th width="600px">Miêu tả</th>
	                        	<th width="150px">Thao tác</th>
	                      	</tr>
	                    </thead>
	                    <tbody>
	                      	<tr>
		                        <td width="130px"> Du lịch trong nước</td>
		                        <td> <img style="width: 150px;height: 80px" src="{{asset('admin/dist/img/dulichtrongnuoc.jpg')}}"></td>
		                        <td > Du lịch trong nước luôn là lựa chọn tuyệt vời. Đường bờ biển dài hơn 3260km, những khu bảo tồn thiên nhiên tuyệt vời, những thành phố nhộn nhịp, những di tích lịch sử hào hùng, nền văn hóa độc đáo và hấp dẫn, cùng một danh sách dài những món ăn ngon nhất thế giới, Việt Nam có tất cả những điều đó. Với lịch trình dày, khởi hành đúng thời gian cam kết, Vietravel là công ty lữ hành uy tín nhất hiện nay tại Việt Nam, luôn sẵn sàng phục vụ du khách mọi lúc, mọi nơi, đảm bảo tính chuyên nghiệp và chất lượng dịch vụ tốt nhất thị trường
								</td>

		                        <td>
		                        	<a href="{!! route('admin/category/view_detail')!!}">
		                        		<i class="fa fa-plus-circle"></i>&nbsp;Xem
		                        	</a>&nbsp;&nbsp;
		                        	<a href="{!! route('admin/category/update')!!}">
		                        		<i class="fa fa-pencil"></i>&nbsp;Sửa
		                        	</a>&nbsp;&nbsp;
		                          	<a href="#" onclick="javascript:Delete()"><i class="fa fa-trash"></i>&nbsp;Xóa</a>
		                        </td>
	                      	</tr> 
	                      	<tr>
		                        <td width="130px"> Tour nước ngoài </td>
		                        <td> <img style="width: 150px;height: 80px" src="{{asset('admin/dist/img/dulichnuocngoai.jpg')}}"></td>
		                        <td > Bạn sẽ có dịp khám phá những miền đất mới tại các nước Đông Nam Á, Châu Á, châu Âu, Úc, Mỹ, hay khám phá những vùng đất Châu Phi xa xôi... Với lịch trình dày, khởi hành đúng thời gian cam kết, Vietravel là công ty lữ hành uy tín nhất hiện nay tại Việt Nam, luôn sẵn sàng phục vụ du khách mọi lúc, mọi nơi, đảm bảo tính chuyên nghiệp và chất lượng dịch vụ tốt nhất thị trường
								</td>
		                        <td>
		                        	<a href="{!! route('admin/category/view_detail')!!}">
		                        		<i class="fa fa-plus-circle"></i>&nbsp;Xem
		                        	</a>&nbsp;&nbsp;
		                        	<a href="{!! route('admin/category/update')!!}">
		                        		<i class="fa fa-pencil"></i>&nbsp;Sửa
		                        	</a>&nbsp;&nbsp;
		                          	<a href="javascript:Delete()" ><i class="fa fa-trash"></i>&nbsp;Xóa</a>
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
