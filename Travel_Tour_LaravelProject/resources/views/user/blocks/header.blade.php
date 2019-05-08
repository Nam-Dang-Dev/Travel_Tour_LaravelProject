  <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header style="position: fixed;" class="site-navbar container py-0 bg-white" role="banner">

      <!-- <div class="container"> -->
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0">
             <img height="100px;" src=" {{ asset('user/images/logo.png')}}" class="img-responsive" alt="Image"> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.html">Trang Chủ</a></li>
                <li >
                  <a href="about.html">Về Chúng Tôi</a>
                </li>
                <li><a href="contact.html">Liên Hệ</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Phương Thức Trao Đổi <b class="caret"></b></a>
                <ul class="dropdown-menu" style="text-align: center; color: black;">
                  <li><a href="#">Đổi</a></li>
                  <li><a href="#">Mua</a></li>
                 
                </ul>
               </li>
                <li class="ml-xl-3 login"><a href="login.html"><span class="border-left pl-xl-4"></span>Đăng Nhập</a></li>
                <li><a href="register.html">Đăng Kí</a></li>

                <li><a href="#" class="cta"><span class="bg-primary text-white rounded">+ Đăng Bài</span></a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
          </div>

        </div>
      <!-- </div> -->
      
    </header>

  

    <div class="site-blocks-cover overlay" style="background-image: url('{!! asset('user/images/hero_2.jpg') !!}');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12">
            
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1 class="" data-aos="fade-up">Nhanh, tiện lợi, cho bạn và cho mọi người</h1>
                <p data-aos="fade-up" data-aos-delay="100">Trao đổi, mua bán đồ củ tất cả những gì bạn muốn.</p>
              </div>
            </div>

            <div class="form-search-wrap" data-aos="fade-up" data-aos-delay="200">
              <form method="post">
                <div class="row align-items-center">
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-4">
                    <input type="text" class="form-control rounded" placeholder="Bạn muốn tìm thứ gì?">
                  </div>
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                    <div class="wrap-icon">
                      <span class="icon icon-room"></span>
                      <input type="text" class="form-control rounded" placeholder="Vị trí">
                    </div>
                    
                  </div>
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                    <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="form-control rounded" name="" id="">
                        <option value="">Danh mục</option>
                        <option value="">Đồ điện tử</option>
                        <option value="">Sách &amp;  Báo Chí</option>
                        <option value="">Đồ nội trợ</option>
                        <option value="">Thời trang</option>
                        <option value="">Đồ nội thất</option>
                        <option value="">Khác</option>
                      </select>
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
