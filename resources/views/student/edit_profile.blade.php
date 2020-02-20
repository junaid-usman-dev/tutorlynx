

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

				<form class="login100-form validate-form" method="POST" action="{{ Route('student.update.profile') }}" accept-charset="UTF-8">
					@csrf
					<span class="login100-form-title p-b-25">
						Edit Student Profile
					</span>

                    <div class="wrap-input100 validate-input m-b-16" >
						<input class="input100 @error('id') is-invalid @enderror" type="hidden" id="id" name="id" value="{{ $student->id }}" >
                    </div>
                    @error('id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

					<div class="wrap-input50 validate-input m-b-16" data-validate = "First name required">
						<input class="input100 @error('fname') is-invalid @enderror" type="text" id="fname" name="fname" value="{{ $student->first_name }}" >
					</div>
					@error('fname')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					
					<div class="wrap-input50 validate-input m-b-16" data-validate = "Last name required">
						<input class="input100 @error('lname') is-invalid @enderror" type="text" id="lname" name="lname" value="{{ $student->last_name }}" >
					</div>
					@error('lname')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 @error('email_addr') is-invalid @enderror" type="text" id="email_addr" name="email_addr" value="{{ $student->email_address }}" >
					</div>
					@error('email_addr')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 only-numeric @error('phone') is-invalid @enderror" type="text" id="phone" name="phone" value="{{ $student->phone }}" >
						<span class="error" >A valid phone number is required. (0 - 9)</span>
					</div>
					@error('phone')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 @error('birthday') is-invalid @enderror" type="date" id="birthday" name="birthday" value="{{ $student->birthday }}">
						{{-- <span class="error">A valid birthday is required.</span> --}}
					</div>
					@error('birthday')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror

					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100 @error('country') is-invalid @enderror" type="text" id="country" name="country" value="{{ $student->country }}" >
						{{-- <span class="error">A valid country is required.</span> --}}
					</div>
					@error('country')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror

					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100 @error('state') is-invalid @enderror" type="text" id="state" name="state" value="{{ $student->state }}" >
						{{-- <span class="error">A valid state is required.</span> --}}
					</div>
					@error('state')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 @error('city') is-invalid @enderror" type="text" id="city" name="city" value="{{ $student->city }}" >
						<span class="error">A valid city is required.</span>
					</div>
					@error('city')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 @error('zipcode') is-invalid @enderror" type="text" id="zipcode" name="zipcode" value="{{ $student->zipcode }}" >
						{{-- <span class="error">A valid zipcode is required.</span> --}}
					</div>
					@error('zipcode')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100 @error('password') is-invalid @enderror" type="password" id="password" name="password" value="{{ $student->password }}" disabled >
						<a href="{{ url('/reset-password') }}">Edit Password</a>
					</div>
					@error('password')
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


