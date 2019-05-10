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
           <img height="100px;" src="{{ asset('public/user/images/logo.png') }}" class="img-responsive" alt="Image"> </a></h1>
         </div>
         <div class="col-12 col-md-10 d-none d-xl-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="active"><a href="{{route('index')}}">Trang Chủ</a></li>
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

              <a href="login.html"><button type="button" class="btn btn-info"> Đăng nhập</button></a>
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