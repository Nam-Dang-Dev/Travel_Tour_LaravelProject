@extends('user.master')
@section('Content')
@include('user.blocks.menu')
<div class="site-section bg-light">
  <div class="container">

    <div class="row">
      <div class="col-12">
        <h2 class="h5 mb-4 text-black" style="font-weight: bold">TOUR KHUYẾN MÃI</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12  block-13">
        <div class="owl-carousel nonloop-block-13">

               <?php  $count = 0; ?>
              @foreach($tours as $value)

               @if($value->promotion != 0)
               <?php $count++; ?>
                 @if($count >8)
                      @break
                  @else



          <div class="d-block d-md-flex listing vertical">
            <a href="{{route('Tourdetail',$value->id)}}" class="img d-block"><img src="{!! asset('public/user/images/'.$value->image) !!} " class="img-responsive" width="270px" height="150px"></a>
            <div class="lh-content">
              <span class="category">{{$value->name}}</span>
              <a href="#" class="bookmark"><span class="icon-heart"></span></a>
              <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                  <h3><a href="listings-single.html">
                    @if ( $value->promotion==0)
                      <span>{!! number_format($value->more12) !!} đ </span>
                      @else
                      <?php $promotion = ($value->more12 * (100 - $value->promotion))/100  ?>
                      <span style="color: red;"> {!! number_format($promotion) !!} đ </span>
                      <strike>{!!number_format($value->more12)!!} đ</strike>
                    @endif


                  </a></h3>
                </div>
                <div class="">
                  <h3>{{$value->quantity_tourist}} chỗ</h3>
                </div>
              </div>

              <div class="row">
                <div class="">
                  <a href="listings-single.html" style="padding-left: 15px;"> Ngày: {{$value->departure_day}}</a>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                  <h3>{{$value->time}}</h3> 
                </div>
              </div>
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

         
               @endif
                  @endif
            @endforeach




        </div>
      </div>


    </div>
  </div>
</div>
<div class="site-section" data-aos="fade">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-7 text-center border-primary">
				<h2 class="font-weight-light text-primary">TOUR TRONG NƯỚC</h2>
				<p class="color-black-opacity-5">Nhanh tay book tour nào!!!</p>
			</div>
		</div>

		<div class="row">

        <?php  $count = 0; ?>
      @foreach($tours as $value)

       @if($value->category_id == 1)
       <?php $count++; ?>
         @if($count <= 3)
              

    			<div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
    				
    				<div class="listing-item">
    					<div class="listing-image">
    						<a href="#" class="img d-block"><img src="{!! asset('public/user/images/'.$value->image) !!} " class="img-responsive" width="270px" height="150px"></a>
    					</div>
    					<div class="listing-item-content">
    						<a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Bookmark"><span class="icon-heart"></span></a>
    						<a class="px-3 mb-3 category" href="#">{{$value->name}}</a>
    						<div class="row">
    							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    								<h5 style="color: white">
                         @if ( $value->promotion==0)
                      <span>{!! number_format($value->more12) !!} đ </span>
                      @else
                      <?php $promotion = ($value->more12 * (100 - $value->promotion))/100  ?>
                      <span style="color: red;"> {!! number_format($promotion) !!} đ </span>
                      <strike>{!! number_format($value->more12) !!} đ</strike>
                      @endif


                    </a></h5>
    							</div>
    							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    								<h4 style="color: white">{{$value->quantity_tourist}} Chổ</h4>
    							</div>
    						</div>

    						<div class="row">
    							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    								<a href="listings-single.html" style="color: white">Ngày: {{$value->departure_day}}</a>
    							</div>
    							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    								<h4 style="color: white">{{$value->time}}</h4> 
    							</div>
    						</div>
    					</div>
    				</div>

    			</div>
    			
          @elseif($count >3 && $count <=5)

    			<div class="col-md-6 mb-4 mb-lg-4 col-lg-6">
    				
    				<div class="listing-item">
    					<div class="listing-image">
    						  <a href="#" class="img d-block"><img src="{!! asset('public/user/images/'.$value->image) !!} " class="img-responsive" width="270px" height="250px" style="height:350px; "></a>
    					</div>
    					<div class="listing-item-content">
    						<a href="#" class="bookmark" data-toggle="tooltip" data-placement="left" title="Bookmark"><span class="icon-heart"></span></a>
    						<a class="px-3 mb-3 category" href="#">{{$value->name}}</a>
    						<div class="row">
    							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    								<h3 style="color: white">
                         @if ( $value->promotion==0)
                      <span>{!! number_format($value->more12) !!} đ </span>
                      @else
                      <?php $promotion = ($value->more12 * (100 - $value->promotion))/100  ?>
                      <span style="color: red;"> {!! number_format($promotion) !!} đ </span>
                      <strike>{!!number_format($value->more12)!!} đ</strike>
                      @endif


                    </a></h3>
    							</div>
    							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    								<h4 style="color: white">{{$value->quantity_tourist}} chỗ</h4>
    							</div>
    						</div>

    						<div class="row">
    							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    								<a href="listings-single.html" style="color: white">Ngày: {{$value->departure_day}}</a>
    							</div>
    							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    								<h4 style="color: white">{{$value->time}}</h4> 
    							</div>
    						</div>
    					</div>
    				</div>

    			</div>
    			
			@endif
            @endif
      @endforeach

		</div>
	</div>
</div>


<div class="site-section bg-light" style="margin-top: -100px;">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-7 text-left border-primary">
				<h2 class="font-weight-light text-primary">TOUR NGOÀI NƯỚC</h2>
			</div>
		</div>
		<div class="row mt-5">
        <?php  $count = 0; ?>
      @foreach($tours as $value)

       @if($value->category_id == 2)
       <?php $count++; ?>
         @if($count >6)
              @break
          @else
      			<div class="col-lg-6">
             
      				<div class="d-block d-md-flex listing" >
      					<a href="#" class="img d-block"><img src="{!! asset('public/user/images/'.$value->image) !!} " class="img-responsive" width="270px" height="150px"></a>
      					<div class="lh-content">
      						<span class="category">{{$value->name}}</span>
      						<a href="#" class="bookmark"><span class="icon-heart"></span></a>
      						<div class="row">
      							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      								<h3><a href="listings-single.html">Giá: 
                           @if ( $value->promotion==0)
                      <span>{!! number_format($value->more12) !!} đ </span>
                      @else
                      <?php $promotion = ($value->more12 * (100 - $value->promotion))/100  ?>
                      <span style="color: red;"> {!! number_format($promotion) !!} đ </span>
                      <strike style="padding-left: 33px;">{!!number_format($value->more12)!!} đ</strike>
                      @endif


                      </a></h3>
      							</div>
      							<div>
      								<h3>{{$value->quantity_tourist}} Chổ</h3>
      							</div>
      						</div>

      						<div class="row">
      							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      								<a href="listings-single.html">Ngày: {{$value->departure_day}}</a>
      							</div>
      							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      								<h3>{{$value->time}}</h3> 
      							</div>
      						</div>
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

           @endif
            @endif
      @endforeach
			
		</div>
	</div>
</div>

@endsection

@section('slideAboutUs')
@include('user.blocks.slideAboutUs')

@endsection

