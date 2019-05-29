@extends('user.master')
@section('Content')
@include('user.blocks.menu')
<div class="site-section bg-light">
      <div class="container">
        @if(isset($details))
            

        <div class="row">
          <div class="col-12">
            <h2 class="h5 mb-4 text-black" style="font-weight: bold">Kết quả tìm kiếm: {{$query}}</h2></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12  block-13">
            <div class="owl-carousel nonloop-block-13">
              @foreach($details as $tour) 
              @foreach($price as $prices)
              <div class="d-block d-md-flex listing vertical">
                <a href="{{route('detail')}}" class="img d-block" style="background-image: url('public/image/{{$tour->image}}')"></a>
                <div class="lh-content">
                  <span class="category">{{$tour->departure_location}} - {{$tour->end_location}}</span>
                  <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                  <div class="row">
                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                      <a href="listings-single.html">{{$prices->more12}}</a>
                    </div>
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                      <h3>{{$tour->quantity_tourist}} chỗ</h3>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                      <a href="listings-single.html">{{$tour->departure_day}}</a>
                    </div>
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                      <h3>{{$tour->time}}</h3> 
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
              @endforeach
              @endforeach
             

              

            </div>
          </div>
        </div>
        @elseif(isset($message))
        <p>{{$message}}</p>
        @endif
      </div>

</div>





@endsection

@section('slideAboutUs')
  @include('user.blocks.slideAboutUs')

@endsection

