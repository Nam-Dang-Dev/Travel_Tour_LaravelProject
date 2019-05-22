<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TTNV &mdash; Old Stuffs</title>
    <link rel="icon" type="image/ico" href="{{asset('user/images/logo.png')}}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('user/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href=" {{ asset('user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('user/css/magnific-popup.css') }}">
    <link rel="stylesheet" href=" {{ asset('user/css/jquery-ui.css') }}">
    <link rel="stylesheet" href=" {{ asset('user/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('user/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href=" {{ asset('user/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href=" {{ asset('user/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href=" {{ asset('user/css/aos.css') }}">
    <link rel="stylesheet" href=" {{ asset('user/css/rangeslider.css') }}">

    <link rel="stylesheet" href=" {{ asset('user/css/style.css') }}">
    
  </head>
  <body>
  
  <div class="site-wrap">

    @include('user.blocks.header')
    
    
    
    @yield('Content')
    
    <!-- @yield('slideAboutUs') -->


    @include('user.blocks.footer')
    

    
   
  </div>

  <script src="{{ asset('user/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('user/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('user/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('user/js/popper.min.js') }}"></script>
  <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('user/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('user/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('user/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('user/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('user/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('user/js/aos.js') }}"></script>
  <script src="{{ asset('user/js/rangeslider.min.js') }}"></script>

  <script src="{{ asset('user/js/main.js') }}"></script>
    
  </body>
</html>