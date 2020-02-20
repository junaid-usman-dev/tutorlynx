

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
	<link rel="icon" type="image/png" href="{{ asset ('assets/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/main.css') }}">
<!--===============================================================================================-->


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
			{{-- Signup Form --}}
			{{-- --------------------------------------------------------------------- --}}
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30 signup">

				<form class="login100-form validate-form" method="POST" action="{{ Route('user.reset.password') }}" accept-charset="UTF-8">
					@csrf
					<span class="login100-form-title p-b-25">
						Reset Password
					</span>
					
					<div class="wrap-input100 validate-input m-b-16" >
						<input class="input100" type="text" id="user_id" name="user_id" value="{{ $user_id }}" >
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100 @error('old_password') is-invalid @enderror" type="password" id="old_password" name="old_password" placeholder="Old Password" >
					</div>
					@error('old_password')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
                    
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100 @error('new_password') is-invalid @enderror" type="password" id="new_password" name="new_password" placeholder="New Password" >
					</div>
					@error('new_password')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					{{-- Error code --}}
					<div class="alert alert-danger wrap-input100 validate-input m-b-16" id="error_pwd" role="alert">
						<p id="error_password" class="text-danger"></p>
						<p id="error_letter" class="text-danger"></p>
						<p id="error_capital" class="text-danger"></p>
						<p id="error_number" class="text-danger"></p>
						<p id="error_length" class="text-danger"></p>
					</div>
					<div id="message" style="display:none;">
						<strong>Password must contain the following:</strong>
						<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
						<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
						<p id="number" class="invalid">A <b>number</b></p>
						<p id="length" class="invalid">Minimum <b>8 characters</b></p>
					</div>
					{{-- end junaid code --}}

                    
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100 @error('confirm_password') is-invalid @enderror" type="password" id="confirm_password" name="confirm_password" placeholder="Cofirm Password" >
					</div>
					@error('confirm_password')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror


					{{-- Error code --}}
					<div class="alert alert-danger wrap-input100 validate-input m-b-16" id="error_pwd" role="alert">
					</div>
					
					<div class="container-login100-form-btn p-t-15">
						<button class="login100-form-btn" id="submit" name="submit">
							UPDATE Button
						</button>
					</div>

				</form>
			</div>
			
		</div>
	</div>


	
<!--===============================================================================================-->	
	<script src="{{ asset ('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->



</body>
</html>


<script>

	jQuery(document).ready(function(){

		// Start password format validation
		//----------------------------------------------------------
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

		var myInput = document.getElementById("new_password");
		var letter = document.getElementById("letter");
		var capital = document.getElementById("capital");
		var number = document.getElementById("number");
		var length = document.getElementById("length");

		// Password Bool
		var uper = false;
		var lower = false;
		var num = false;
		var len = false;
		// Other Bool

		// var email_flag = false;
		var pass_flag = false;
		// var username_flag = false;

		// When the user clicks on the password field, show the message box
		myInput.onfocus = function() {
			document.getElementById("message").style.display = "block";
		}

		// When the user clicks outside of the password field, hide the message box
		myInput.onblur = function() {
			document.getElementById("message").style.display = "none";
		}

		// When the user starts to type something inside the password field
		myInput.onkeyup = function() {
			// Validate lowercase letters
			var lowerCaseLetters = /[a-z]/g;
			if(myInput.value.match(lowerCaseLetters)) {
				letter.classList.remove("invalid");
				letter.classList.add("valid");
				lower = true;
			} else {
				letter.classList.remove("valid");
				letter.classList.add("invalid");
				lower = false;
			}

			// Validate capital letters
			var upperCaseLetters = /[A-Z]/g;
			if(myInput.value.match(upperCaseLetters)) {
				capital.classList.remove("invalid");
				capital.classList.add("valid");
				uper = true;
			} else {
				capital.classList.remove("valid");
				capital.classList.add("invalid");
				uper = false
			}

			// Validate numbers
			var numbers = /[0-9]/g;
			if(myInput.value.match(numbers)) {
				number.classList.remove("invalid");
				number.classList.add("valid");
				num = true;
			} else {
				number.classList.remove("valid");
				number.classList.add("invalid");
				num = false;
			}

			// Validate length
			if(myInput.value.length >= 8) {
				length.classList.remove("invalid");
				length.classList.add("valid");
				len = true;
			} else {
				length.classList.remove("valid");
				length.classList.add("invalid");
				len = false;
			}
		}

		//----------------------------------------------------------
		// End password foramt validation
		//----------------------------------------------------------
	});

</script>