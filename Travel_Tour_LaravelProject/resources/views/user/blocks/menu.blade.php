<div class="site-section bg-light">
  <div class="overlap-category mb-5">

    <div class="row align-items-stretch no-gutters justify-content-center">

      @foreach($category as $cate)

      <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
        <a href="#" class="popular-category h-100">
          <span class="icon"><span class="{{$cate['icon']}}"></span> </span>
          <span class="caption mb-2 d-block">{{$cate['name']}}</span>
          
          <span class="number"> </span>

       </a>
     </div>
     
     @endforeach

   </div>

 </div>  