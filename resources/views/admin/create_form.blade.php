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
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset ('assets/vendor/select2/select2.min.css') }}"> --}}
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/main.css') }}">
<!--===============================================================================================-->
	{{-- <script src="{{ asset ('assets/registration/registration.js') }}" async defer></script> <!-- Custom CSS --> --}}


</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
                {{-- {{ action('Users\Admin\AdminController@store') }} --}}
				<form class="login100-form validate-form" method="GET" action="{{ action('Users\Admin\AdminController@store') }}" >
					<span class="login100-form-title p-b-25">
						Create Admin
					</span>

                    <div class="wrap-input50 validate-input m-b-16" >
						<input class="input100" type="text" id="first_name" name="first_name" placeholder="First Name.">
                    </div>
                    <div class="wrap-input50 validate-input m-b-16" >
						<input class="input100" type="text" id="last_name" name="last_name" placeholder="Last Name.">
                    </div>
                    
					<div class="wrap-input100 validate-input m-b-16" >
						<input class="input100" type="text" id="email" name="email" placeholder="Enter email address">
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" id="password" name="password" placeholder="Enter password"
							title='<strong>Password must contain the following:</strong>' data-html="true" 
                            data-toggle="popover" data-trigger="focus" 
                            data-content='
                                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                <p id="number" class="invalid">A <b>number</b></p>
                                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                            '>
					</div>
				
					<div class="container-login100-form-btn p-t-15">
						<button class="login100-form-btn" id="createBtn" name="createBtn" >
							Create
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{ asset ('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	{{-- <script src="{{ asset ('assets/vendor/bootstrap/js/popper.js') }}"></script> --}}
	<script src="{{ asset ('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	{{-- <script src="{{ asset ('assets/vendor/select2/select2.min.js') }}"></script> --}}
<!--===============================================================================================-->
	{{-- <script src="{{ asset ('assets/js/main.js') }}"></script> --}}

</body>
</html>


<script>
	
$(document).ready(function(){
    // $('[data-toggle="popover"]').popover();
    
    $('.password-popover').popover({
        trigger: 'focus'
    })

}); 



jQuery(document).ready(function(){

// Start password format validation
//----------------------------------------------------------
var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

var myInput = document.getElementById("password")

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
    // document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    // document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

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
