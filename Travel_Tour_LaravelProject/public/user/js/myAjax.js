  $(document).ready(function($) {  
  	alert("message?: DOMString");  


  });
  function succes($title) {
			Swal.fire({
				
				type: 'success',
				title: $title,
				showConfirmButton: false,
				timer: 1500
			})
		}

		function error($title) {
			Swal.fire({
				
				type: 'error',
				title: $title,
				showConfirmButton: false,
				timer: 2000
			})
		}
  
  function updateQuantity() {
  		
  		var lv1 = parseInt(document.getElementById("lv1").value);
  		var lv2 = parseInt(document.getElementById("lv2").value);
  		var lv3 = parseInt(document.getElementById("lv3").value);
  		var lv4 = parseInt(document.getElementById("lv4").value);
  		var quantity = lv1+lv2+lv3+lv4;
  		alert(quantity);
  		if(quantity <=0){ error("Số lượng phải lớn hơn 0!") }
  			else {

  				$.ajax({
  					type: "GET",
  					url:"{{route('user/updateQuantity')}}",  
  					data: "qty=" + quantity,
  					success: function (data) {
  						alert("sdfsdf");
  						$('#EnterInformation').html(data);
  					},
  					error: function (data) {
  						console.log('Error:', data);
  					}
  				});
  			}


  	};
