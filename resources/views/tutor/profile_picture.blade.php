<?php
    // if (empty(session()->get('user_id')))
    // {
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V11</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/registration/style/style.css') }}" >
<!--===============================================================================================-->	

<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset ('assets/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset ('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}"> --}}
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/main.css') }}">
<!--===============================================================================================-->
{{-- <script src="{{ asset ('assets/registration/registration.js') }}" async defer></script> <!-- Custom CSS --> --}}

</head>

<style>
	button.btn-google.m-b-10.g-signin2 .abcRioButton.abcRioButtonLightBlue {
    	width: 100% !important;
	}
	.valid {
		color: green;
	}
	.invalid {
		color: red;
	}
	.signup{
		display: show;
	}
	.signin{
		display: none;
	}
	.error
	{
		color: red;
		display: none;
	}
	
	

</style>
	
<body>

	<div class="limiter">
		<div class="container-login100">
			{{-- --------------------------------------------------------------------- --}}
			{{-- Signup Form                                                           --}}
			{{-- --------------------------------------------------------------------- --}}
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30 signup">
				{{-- action('Users\Tutor\TutorController@UploadPicture') --}}
				<form class="login100-form validate-form" method="POST" action="{{ Route('tutor.upload.tutor.image') }}" enctype="multipart/form-data"  accept-charset="UTF-8">
					@csrf
					<span class="login100-form-title p-b-25">
						upload profile image
					</span>

					<div class="wrap-input50 validate-input m-b-16" >
						<input class="input100" type="hidden" id="id" name="id" value="{{ $id }}" >
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="file" id="selected_file" name="selected_file" >
					</div>
			
					<div class="contact100-form-checkbox m-l-4 signup_text">
						By signing up, you agree to our <a href="#">Terms</a> , <a href="#">Data Policy</a> and <a href="#">Cookies Policy</a>.
					</div>
					
					<div class="container-login100-form-btn p-t-15">
						<button class="login100-form-btn" id="signupBtn111" name="signupBtn111">
							UPLOAD PROFILE PICTURE
						</button>
					</div>

					<div class="text-center w-full p-t-28 p-b-18">
						<span class="txt1">
							Or signup with
						</span>
					</div>

					<button type="button" class="btn-notamember m-b-10" id="sign_in_now" class="sign_in_now" >
						Already have an account? Login!
					</button>

				</form>
			</div>
			{{-- --------------------------------------------------------------------- --}}
			{{-- end Signup Form --}}
			{{-- --------------------------------------------------------------------- --}}

		</div>
	</div>


	
<!--===============================================================================================-->	
	<script src="{{ asset ('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->




</body>
</html>


<?php 
    // }
    // else
    // {
	// 	// Go to welcome page
    //     // header("Location: http://127.0.0.1:8000");exit;
    //     header("Location: ".url('/'));exit;

    // }
?>





<script type="text/javascript">
    
    $(document).ready(function() {
      $(".only-numeric").bind("keypress", function (e) {
          var keyCode = e.which ? e.which : e.keyCode
               
          if (!(keyCode >= 48 && keyCode <= 57)) {
			// Show Error
			$(".error").css("display", "inline");
            return false;
          }else{
			  // Right
			$(".error").css("display", "none");
          }
      });
    });
     
</script>