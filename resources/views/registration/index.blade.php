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
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset ('assets/vendor/css-hamburgers/hamburgers.min.css') }}"> --}}
<!--===============================================================================================-->
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset ('assets/vendor/select2/select2.min.css') }}"> --}}
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
			{{-- Signup Form --}}
			{{-- --------------------------------------------------------------------- --}}
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30 signup">

				<form class="login100-form validate-form" method="POST" action="{{ action('Registration\RegistrationController@store') }}" accept-charset="UTF-8">
					@csrf
					<span class="login100-form-title p-b-25">
						Sign up
					</span>

					{{-- @if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif --}}

					<div class="wrap-input50 validate-input m-b-16" data-validate = "First name required">
						<input class="input100 @error('fname') is-invalid @enderror" type="text" id="fname" name="fname" placeholder="First Name" value={{ old('fname') }} >
					</div>
					@error('fname')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					
					<div class="wrap-input50 validate-input m-b-16" data-validate = "Last name required">
						<input class="input100 @error('lname') is-invalid @enderror" type="text" id="lname" name="lname" placeholder="Last Name" value={{ old('lname') }} >
					</div>
					@error('lname')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 @error('email_addr') is-invalid @enderror" type="text" id="email_addr" name="email_addr" placeholder="Email" value={{ old('email_addr') }} >
						{{-- <span class="error" >{{ }}</span> --}}
					</div>
					@error('email_addr')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 only-numeric @error('phone') is-invalid @enderror" type="text" id="phone" name="phone" placeholder="Phone" value={{ old('phone') }} >
						<span class="error" >A valid phone number is required. (0 - 9)</span>
					</div>
					@error('phone')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 @error('birthday') is-invalid @enderror" type="date" id="birthday" name="birthday" placeholder="Birthday" value={{ old('birthday') }} >
						{{-- <span class="error">A valid birthday is required.</span> --}}
					</div>
					@error('birthday')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror

					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100 @error('country') is-invalid @enderror" type="text" id="country" name="country" placeholder="Country" value={{ old('country') }} >
						{{-- <span class="error">A valid country is required.</span> --}}
					</div>
					@error('country')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror

					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100 @error('state') is-invalid @enderror" type="text" id="state" name="state" placeholder="State" value={{ old('state') }} >
						{{-- <span class="error">A valid state is required.</span> --}}
					</div>
					@error('state')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 @error('city') is-invalid @enderror" type="text" id="city" name="city" placeholder="City" value={{ old('city') }} >
						<span class="error">A valid city is required.</span>
					</div>
					@error('city')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 @error('zipcode') is-invalid @enderror" type="text" id="zipcode" name="zipcode" placeholder="ZIP Code" value={{ old('zipcode') }} >
						{{-- <span class="error">A valid zipcode is required.</span> --}}
					</div>
					@error('zipcode')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror

					<select class="wrap-input100 validate-input m-b-16 @error('type') is-invalid @enderror" id="type" name="type">
						<option value="student">I'm student.</option>
						<option value="tutor">I'm tutor.</option>
					</select>
					@error('type')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100 @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="Password" >
					</div>
					@error('password')
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

					<div class="contact100-form-checkbox m-l-4 signup_text">
						By signing up, you agree to our <a href="#">Terms</a> , <a href="#">Data Policy</a> and <a href="#">Cookies Policy</a>.
					</div>
					
					<div class="container-login100-form-btn p-t-15">
						<button class="login100-form-btn" id="signupBtn111" name="signupBtn111">
							Submit Button
						</button>
					</div>

					<div class="text-center w-full p-t-28 p-b-18">
						<span class="txt1">
							Or signup with
						</span>
					</div>


					{{-- <a href="{{ url ('login/facebook') }}" class="btn-face m-b-10">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a> --}}
					{{-- end facebook integration --}}

					{{-- <a href="{{ url ('login/google') }}" class="btn-google m-b-10">
						<img src="{{ asset('assets/images/icons/icon-google.png') }}" alt="GOOGLE">
							Google
					</a> --}}
					{{-- end gmail login code --}}


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
	{{-- <script src="{{ asset ('assets/vendor/bootstrap/js/popper.js') }}"></script> --}}
	{{-- <script src="{{ asset ('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script> --}}
<!--===============================================================================================-->
	{{-- <script src="{{ asset ('assets/vendor/select2/select2.min.js') }}"></script> --}}
<!--===============================================================================================-->
	{{-- <script src="{{ asset ('assets/js/main.js') }}"></script> --}}
	{{-- Geo Location --}}

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
	 
	





jQuery(document).ready(function(){

	// Start password format validation
	//----------------------------------------------------------
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	var myInput = document.getElementById("password");
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