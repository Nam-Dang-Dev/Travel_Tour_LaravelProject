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


  <script>
   var idCus;
   function updateQuantity() {

    var quantity = parseInt(document.getElementById("quantity").value);
    alert(quantity);
    if(quantity <=0)
    { 
      error("Số lượng phải lớn hơn 0!"); 
      document.getElementById("quantity").value = 1;

    }
    else {

      $.ajax({
        type: "GET",
        url:"{{route('user/updateQuantity')}}",  
        data: "qty=" + quantity,
        success: function (data) {

          $('#EnterInformation').html(data);
        }
      });
    }


  };

// Tính giá cho từn customer
function price($obj)  
{  
  var idTour = parseInt(document.getElementById("idTour").value);

  alert(idCus);
  var idOption = "loaikhach"+idCus;
  var idDisplayPrice = "price"+idCus;

  var tourist =  $('#'+idOption).val();
  
  $.ajax({ 
          type: "get",
          url:"{{route('cart/user/price')}}",  
          data:"id="+idCus +"& typeTourist="+ tourist+"& idTour="+idTour,
          success:function(data){  
            console.log('Error:', data);
           $('#'+idDisplayPrice).html(data);  
         },
         error: function (data) {
          console.log('Error:', data);
          }

  });   
}



$(document).on('click','[data-role=price]',function(){
  idCus  = $(this).data('id');

});



</script>



</body>

</html>