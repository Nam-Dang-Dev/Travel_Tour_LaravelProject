<div class="site-mobile-menu">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>

  <div class="site-mobile-menu-body"></div>
</div>
<header class="site-navbar container py-0 bg-white" role="banner">

  <!-- <div class="container"> -->
    <div class="row align-items-center">

      <div class="col-6 col-xl-2">
        <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0">
         <img height="100px;" src="http://barkada.ph/wp-content/uploads/2017/01/barkada.png" class="img-responsive" alt="Image"> </a></h1>
       </div>
       <div class="col-12 col-md-10 d-none d-xl-block">
        <nav class="site-navigation position-relative text-right" role="navigation">

          <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
            <li class="active"><a href="{{route('indexUser')}}">Trang Chủ</a></li>
            <li class="has-children active">
              <a href="#">Du lịch</a>
              <ul class="dropdown">
                @foreach($category as $cate)
                <li><a href="#">{{$cate['name']}}</a></li>

                @endforeach
              </ul>
            </li>
            <li><a href="contact.html">Về chúng tôi</a></li>
            <li><a href="contact.html">Liên Hệ</a></li>

            <a href="#"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal""> Đăng nhập</button></a>
          </ul>
        </nav>
      </div>


      <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
        <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
      </div>

    </div>
    <!-- </div> -->

  </header>

 

  @foreach($backgroundImages as $img)
  <div class="site-blocks-cover " style="background-image: url({!! asset('public/image/'.$img->image) !!} );" data-aos="fade" data-stellar-background-ratio="0.5">

    <div class="container">
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-12">


          <div class="row justify-content-center mb-4">
            <div class="col-md-8 text-center">
              <h1 class="" data-aos="fade-up" style="color: red">{{$img->caption1}}</h1>
              <p data-aos="fade-up" data-aos-delay="100" style="color: red"> {{$img->caption2}}</p>
            </div>
          </div>

          <div class="form-search-wrap" data-aos="fade-up" data-aos-delay="300">
            <form action="{{route('search')}}" method="POST" role="search" >
              {{ csrf_field() }}
              <div class="row align-items-center">
                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                  <div style="width: 250px; height: 40px; padding-left: 20px" >
                    <select class="chosen_di" style="width: 250px; height: 50px" placeholder="Điểm đi">
                    @foreach($tours_place as $value_di)
                    <option>{{$value_di->departure_location}}</option>
                    @endforeach
                    </select>
                  </div>
                  <script type="text/javascript">
                        $(".chosen_di").chosen();
                  </script>
                </div>
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                  <div style="width: 250px; height: 40px; padding-left: 20px" >
                    <select class="chosen_den" style="width: 250px; height: 50px" placeholder="Điểm đến">
                    @foreach($tours_place as $value_den)
                    <option>{{$value_den->end_location}}</option>
                    @endforeach
                    </select>
                  </div>
                  <script type="text/javascript">
                        $(".chosen_den").chosen();
                  </script>
                </div>
                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                  <div style="width: 250px; height: 40px; padding-left: 20px" >
                    <input type="date" id="start" name="date" style="width: 250px; height: 50px"> 
                  </div>        
                </div>
              <div class="col-lg-12 col-xl-2 ml-auto text-right">
                <input type="submit" class="btn btn-primary btn-block rounded" value="Search">
              </div>

            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>

</div> 
@endforeach

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="#" class="p-5 bg-white" style="background-color:pink ">

          <div class="row form-group">

            <div class="col-md-12">
              <label class="text-black" for="email">Email</label> 
              <input type="email" id="email" class="form-control">
            </div>
          </div>

          <div class="row form-group">

            <div class="col-md-12">
              <label class="text-black" for="subject">Password</label> 
              <input type="password" id="subject" class="form-control">
            </div>
          </div>

          <div class="row form-group">
            <div class="col-12">
              <p>No account yet? <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2"> Register</button></p>
            </div>
          </div>


          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" value="Sign In" class="btn btn-primary py-2 px-4 text-white">
            </div>
          </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>

  </div>
</div>


<!-- Dăng ký  -->
<!-- The Modal -->
<div class="modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form action="#" class="p-5 bg-white" style="background-color:pink ">

        <div class="row form-group">

          <div class="col-md-12">
            <label class="text-black" for="name">Name</label> 
            <input type="name" id="name" class="form-control">
          </div>
        </div>
        <div class="row form-group">

          <div class="col-md-12">
            <label class="text-black" for="email">Email</label> 
            <input type="email" id="email" class="form-control">
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-12">
            <label class="text-black" for="subject">Password</label> 
            <input type="password" id="subject" class="form-control">
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-12">
            <label class="text-black" for="subject">Re-type Password</label> 
            <input type="password" id="subject" class="form-control">
          </div>
        </div>

        <div class="row form-group">
          <div class="col-12">
            <p>Have an account? <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Log in</button></p>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-12">
            <input type="submit" value="Sign In" class="btn btn-primary py-2 px-4 text-white">
          </div>
        </div>


      </form>
    </div>

    <!-- Modal footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>

  </div>
</div>
</div>



