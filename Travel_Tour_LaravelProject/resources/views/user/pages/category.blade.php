@extends('user.master')
@section('Content')
@include('user.blocks.menu')
<section class="site-section bg-light" style="margin-top: -100px;">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-7 text-left border-primary">
        
        <h2 class="font-weight-light text-primary" style="text-transform:uppercase;">TOUR {{$cate->name}}</h2>
       
      </div>
    </div>
    <div class="row mt-5">
      
      @foreach($tours as $value)

     
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

          
      @endforeach
      
    </div>
  </div>
</section>




@endsection

@section('slideAboutUs')
@include('user.blocks.slideAboutUs')

@endsection