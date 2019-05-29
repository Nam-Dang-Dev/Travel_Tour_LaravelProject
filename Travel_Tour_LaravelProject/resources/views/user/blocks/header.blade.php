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
        @if(Session::has('signup_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>   
                <p>{{ Session::get('signup_success') }}</p>
            </div>
        @endif
        <div class="col-6 col-xl-2">
          <h1 class="mb-0 site-logo"><a href="{{route('indexUser')}}" class="text-black mb-0">
           <img height="100px;" src="{{ asset('public/user/images/logo.png') }}" class="img-responsive" alt="Image"> </a></h1>
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
              <li>
                @if(isset(Auth::user()->email))
                {{Auth::user()->name}}
                </li>
                <a style="cursor: pointer;" href="{{route('logout')}}"><li>Đăng xuất</li></a>
                @endif
                @if(!isset(Auth::user()->email))
                <li>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Đăng nhập</button>
              </li>
              @endif
            </ul>
          </nav>
        </div>


        <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
          <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
        </div>

      </div>
      <!-- </div> -->
      
    </header>



    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12">


            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1 class="" data-aos="fade-up">Nhanh, tiện lợi, cho bạn và cho mọi người</h1>
                <p data-aos="fade-up" data-aos-delay="100"> Hãy đi những nơi bạn muốn</p>
              </div>
            </div>

            <div class="form-search-wrap" data-aos="fade-up" data-aos-delay="200">
              <form method="post">
                <div class="row align-items-center">
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">

                    <input type="text" name="diemdi" placeholder="Điểm đi" style="width: 250px; height: 40px; padding-left: 20px" >
                    
                  </div>
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                    <div class="select-wrap">
                      <input type="text" name="diemden" placeholder="Điểm đến" style="width: 250px; height: 40px; padding-left: 20px" >
                      
                    </select>
                  </div>

                </div>
                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                  <div class="select-wrap">
                    <input type="date" id="start" name="trip-start" value="2018-07-22" min="2019-06-01" max="2019-12-31" style="width: 250px; height: 40px; padding-left: 20px">
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
  
    <!-- The Modal -->
  <div class="modal" id="myModal" >
    <div class="modal-dialog">
      <div class="modal-content" >
      
        <!-- Modal Header -->
        <div class="modal-header" ">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" >
          <form action="{{route('login/handle')}}" class="p-5 bg-white" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}"> 
            @if($errors->has('errorlogin'))
                <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {{$errors->first('errorlogin')}}
                </div>
            @endif
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{old('email')}}">
                  @if($errors->has('email'))
                    <p style="color:red">{{$errors->first('email')}}</p>
                  @endif
                </div>
              </div>
              <div class="row form-group" >
                
                <div class="col-md-12">
                  <label class="text-black" for="password">Password</label> 
                  <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                  @if($errors->has('password'))
                    <p style="color:red">{{$errors->first('password')}}</p>
                  @endif
                </div>
              </div>
              <div class="row form-group">
                <div class="col-12">
                  <p>No account yet? <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2"> Register</button></p>
                </div>
              </div>
            
              <div class="row form-group">
                <div class="col-md-12">
                  <!-- @if(Auth::check())
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">ahihi</button>
              @else
                <a href="{{route('user/login')}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal""> Đăng nhập</button></a>
              @endif -->
              
                  <a href="#"><input type="submit" value="login" class="btn btn-primary py-2 px-4 text-white"></a>
              <!--     {!! csrf_field() !!} -->
            
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
    <div class="modal-dialog" >
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"> </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
           <form action="{{route('signup/handle')}}" class="p-5 bg-white" method="POST">
              <input type="hidden" name="_token" value="{{csrf_token()}}"> 
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="name">Name</label> 
                  <input type="name" id="name" name="name" class="form-control">
                </div>
              </div>
              <div class="row form-group" >
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" name="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group" >
                <div class="col-md-12">
                  <label class="text-black" for="password">Password</label> 
                  <input type="password" name="password" id="password" class="form-control">
                </div>
              </div>

              <div class="row form-group" >
                <div class="col-md-12">
                  <label class="text-black" for="ra_password">Re-type Password</label> 
                  <input type="password"  name="ra_password" id="ra_password" class="form-control">
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