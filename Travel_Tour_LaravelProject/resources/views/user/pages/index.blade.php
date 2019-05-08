@extends('user.master')
@section('Content')
	<div class="site-section" data-aos="fade">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 text-center border-primary">
					<h2 class="font-weight-light text-primary">Sản Phẩm Đổi</h2>
					<p class="color-black-opacity-5">Nhanh tay đổi hàng</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 mb-4 mb-lg-4 col-lg-4">

					<div class="listing-item">
						<div class="listing-image">
							<img src="{{ asset('user/images/img_1.jpg')}}" alt="Image" class="img-fluid">
						</div>
						<div class="listing-item-content">
							<a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Bookmark"><span class="icon-heart"></span></a>
							<a class="px-3 mb-3 category" href="#">Đồ nội thất</a>
							<h2 class="mb-1"><a href="#">Red Luxury Car</a></h2>
							<span class="address">West Orange, New York</span>
						</div>
					</div>

				</div>
				<div class="col-md-6 mb-4 mb-lg-4 col-lg-4">

					<div class="listing-item">
						<div class="listing-image">
							<img src="{{ asset('user/images/img_1.jpg')}}"alt="Image" class="img-fluid">
						</div>
						<div class="listing-item-content">
							<a href="#" class="bookmark"><span class="icon-heart"></span></a>
							<a class="px-3 mb-3 category" href="#">Đồ nội thất</a>
							<h2 class="mb-1"><a href="#">House with Swimming Pool</a></h2>
							<span class="address">West Orange, New York</span>
						</div>
					</div>

				</div>
				<div class="col-md-6 mb-4 mb-lg-4 col-lg-4">

					<div class="listing-item">
						<div class="listing-image">
							<img src="{{ asset('user/images/img_1.jpg')}}" alt="Image" class="img-fluid">
						</div>
						<div class="listing-item-content">
							<a href="#" class="bookmark"><span class="icon-heart"></span></a>
							<a class="px-3 mb-3 category" href="#">Đồ nội thất</a>
							<h2 class="mb-1"><a href="#">Wooden Chair &amp; Table</a></h2>
							<span class="address">West Orange, New York</span>
						</div>
					</div>

				</div>

				<div class="col-md-6 mb-4 mb-lg-4 col-lg-6">

					<div class="listing-item">
						<div class="listing-image">
							<img src="{{ asset('user/images/img_4.jpg')}}" alt="Image" class="img-fluid">
						</div>
						<div class="listing-item-content">
							<a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Bookmark"><span class="icon-heart"></span></a>
							<a class="px-3 mb-3 category" href="#">Đồ điện tử</a>
							<h2 class="mb-1"><a href="#">iPhone X gray</a></h2>
							<span class="address">West Orange, New York</span>
						</div>
					</div>

				</div>
				<div class="col-md-6 mb-4 mb-lg-4 col-lg-6">

					<div class="listing-item">
						<div class="listing-image">
							<img src="{{ asset('user/images/img_2.jpg')}}" alt="Image" class="img-fluid">
						</div>
						<div class="listing-item-content">
							<a href="#" class="bookmark"><span class="icon-heart"></span></a>
							<a class="px-3 mb-3 category" href="#">Đồ điện tử</a>
							<h2 class="mb-1"><a href="#">House with Swimming Pool</a></h2>
							<span class="address">West Orange, New York</span>
						</div>
					</div>

				</div>


			</div>
		</div>
	</div>


	<div class="site-section bg-light">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-7 text-left border-primary">
					<h2 class="font-weight-light text-primary">Sản Phẩm Bán</h2>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-lg-6">

					<div class="d-block d-md-flex listing">
						<a href="listings-single.html" class="img d-block" style="background-image: url('{!! asset('user/images/img_2.jpg') !!}');"></a>
						<div class="lh-content">
							<span class="category">Đồ điện tử</span>
							<a href="#" class="bookmark"><span class="icon-heart"></span></a>
							<h3><a href="listings-single.html">House with Swimming Pool</a></h3>
							<address>Don St, Brooklyn, New York</address>
							<p class="mb-0">
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-secondary"></span>
								<span class="review">(3 Reviews)</span>
							</p>
						</div>
					</div>
					<div class="d-block d-md-flex listing">
						<a href="listings-single.html" class="img d-block" style="background-image: url('{!! asset('user/images/img_2.jpg') !!}');"></a>
						<div class="lh-content">
							<span class="category">Đồ điện tử</span>
							<a href="#" class="bookmark"><span class="icon-heart"></span></a>
							<h3><a href="listings-single.html">Wooden Chair &amp; Table</a></h3>
							<address>Don St, Brooklyn, New York</address>
							<p class="mb-0">
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-secondary"></span>
								<span class="review">(3 Reviews)</span>
							</p>
						</div>
					</div>

					<div class="d-block d-md-flex listing">
						<a href="listings-single.html" class="img d-block" style="background-image:  url('{!! asset('user/images/img_2.jpg') !!}');"></a>
						<div class="lh-content">
							<span class="category">Đồ điện tử</span>
							<a href="#" class="bookmark"><span class="icon-heart"></span></a>
							<h3><a href="listings-single.html">iPhone X gray</a></h3>
							<address>Don St, Brooklyn, New York</address>
							<p class="mb-0">
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-secondary"></span>
								<span class="review">(3 Reviews)</span>
							</p>
						</div>
					</div>



				</div>
				<div class="col-lg-6">

					<div class="d-block d-md-flex listing">
						<a href="listings-single.html" class="img d-block" style="background-image: url('{!! asset('user/images/img_2.jpg') !!}');"></a>
						<div class="lh-content">
							<span class="category">Đồ nội trợ</span>
							<a href="#" class="bookmark"><span class="icon-heart"></span></a>
							<h3><a href="listings-single.html">Red Luxury Car</a></h3>
							<address>Don St, Brooklyn, New York</address>
							<p class="mb-0">
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-secondary"></span>
								<span class="review">(3 Reviews)</span>
							</p>
						</div>
					</div>

					<div class="d-block d-md-flex listing">
						<a href="listings-single.html" class="img d-block" style="background-image:  url('{!! asset('user/images/img_2.jpg') !!}');"></a>
						<div class="lh-content">
							<span class="category">Đồ nội trợ</span>
							<a href="#" class="bookmark"><span class="icon-heart"></span></a>
							<h3><a href="listings-single.html">House with Swimming Pool</a></h3>
							<address>Don St, Brooklyn, New York</address>
							<p class="mb-0">
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-secondary"></span>
								<span class="review">(3 Reviews)</span>
							</p>
						</div>
					</div>
					<div class="d-block d-md-flex listing">
						<a href="listings-single.html" class="img d-block" style="background-image: url('{!! asset('user/images/img_2.jpg') !!}');"></a>
						<div class="lh-content">
							<span class="category">Đồ nội trợ</span>
							<a href="#" class="bookmark"><span class="icon-heart"></span></a>
							<h3><a href="listings-single.html">Wooden Chair &amp; Table</a></h3>
							<address>Don St, Brooklyn, New York</address>
							<p class="mb-0">
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-secondary"></span>
								<span class="review">(3 Reviews)</span>
							</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

@endsection

@section('slideAboutUs')
	@include('user.blocks.slideAboutUs')

@endsection

