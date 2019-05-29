<!DOCTYPE html>
<html lang="en">
<head>
  <title>TTNV &mdash; Old Stuffs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('public/user/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href=" {{ asset('public/user/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('public/user/css/magnific-popup.css') }}">
  <link rel="stylesheet" href=" {{ asset('public/user/css/jquery-ui.css') }}">
  <link rel="stylesheet" href=" {{ asset('public/user/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('public/user/css/owl.theme.default.min.css') }}">

  <link rel="stylesheet" href=" {{ asset('public/user/css/bootstrap-datepicker.css') }}">

  <link rel="stylesheet" href=" {{ asset('public/user/fonts/flaticon/font/flaticon.css') }}">

  <link rel="stylesheet" href=" {{ asset('public/user/css/aos.css') }}">
  <link rel="stylesheet" href=" {{ asset('public/user/css/rangeslider.css') }}">

  <link rel="stylesheet" href=" {{ asset('public/user/css/style.css') }}">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>

  <div class="site-wrap">

    @include('user.blocks.header')
    
    
    
    @yield('Content')
    
    <!-- @yield('slideAboutUs') -->


    @include('user.blocks.footer')
    

    

  </div>

  <script src="{{ asset('public/user/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('public/user/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('public/user/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('public/user/js/popper.min.js') }}"></script>
  <script src="{{ asset('public/user/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('public/user/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('public/user/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('public/user/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('public/user/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('public/user/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('public/user/js/aos.js') }}"></script>
  <script src="{{ asset('public/user/js/rangeslider.min.js') }}"></script>

  <script src="{{ asset('public/user/js/main.js') }}"></script>
  <script src="{{ asset('public/user/js/myAjax.js') }}"></script>
  <script src='https://cdn.jsdelivr.net/npm/sweetalert2'></script>
  <script src="//code.jquery.com/jquery.js"></script>


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 

</body>
</html>