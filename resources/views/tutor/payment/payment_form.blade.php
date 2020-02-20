<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V11</title>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset ('assets/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset ('assets/vendor/animate/animate.css') }}"> --}}
<!--===============================================================================================-->	
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset ('assets/vendor/css-hamburgers/hamburgers.min.css') }}"> --}}
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/main.css') }}">
<!--===============================================================================================-->
	{{-- <script src="{{ asset ('assets/registration/registration.js') }}" async defer></script> <!-- Custom CSS --> --}}


</head>
<body>
	{{--  --}}
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				{{-- action('Users\Tutor\TutorController@Payment') --}}
				<form class="login100-form validate-form" method="GET" action="{{ Route('tutor.fee.submission') }}">
					<span class="login100-form-title p-b-25">
						ADD PAYMENT FORM
					</span>

					<div class="wrap-input100 validate-input m-b-16" >
						<input class="input100" type="hidden" id="id" name="id" value="{{ $id }}">
					</div>

					<div class="wrap-input100 validate-input m-b-16" >
						<input class="input100" type="text" id="card_number" name="card_number" placeholder="Card Number">
                    </div>
					
					<div class="wrap-input100 validate-input m-b-16" >
						<label>Card Expiry Date</label>
					</div>
                    <div class="wrap-input50 validate-input m-b-16" >
						<input class="input100" type="text" id="month" name="month" placeholder="Month">
                    </div>
                    <div class="wrap-input50 validate-input m-b-16" >
						<input class="input100" type="text" id="year" name="year" placeholder="Year">
					</div>

					<div class="wrap-input100 validate-input m-b-16" >
						<input class="input100" type="text" id="cvv_number" name="cvv_number" placeholder="CVV Number">
                    </div>
					
					<div class="contact100-form-checkbox m-l-4 forgot_pass">
						<a href="#">Forgot Password?</a>
					</div>
					
					<div class="container-login100-form-btn p-t-15">
						<button class="login100-form-btn" id="signupBtn111" name="signupBtn111">
							Submit Button
						</button>
					</div>

					<div class="text-center w-full p-t-28 p-b-18">
						<span class="txt1">
							Or login with
						</span>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{ asset ('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset ('assets/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset ('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	{{-- <script src="{{ asset ('assets/vendor/select2/select2.min.js') }}"></script> --}}
<!--===============================================================================================-->
	{{-- <script src="{{ asset ('assets/js/main.js') }}"></script> --}}

</body>
</html>


