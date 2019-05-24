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
  
 
