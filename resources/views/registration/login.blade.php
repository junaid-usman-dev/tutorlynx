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
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/vendor/select2/select2.min.css') }}">
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
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-25">
						LOGO
					</span>

					{{-- junaid code --}}
					<p id="error_creditional" class="text-danger"></p>
					<p id="login_success" class="text-success"></p>
					{{-- end junaid code --}}
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" id="user" name="user" placeholder="Email">
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" id="password" name="pass" placeholder="Password">
					</div>

					{{-- <select class="wrap-input100 validate-input m-b-16" id="type" name="type">
						<option value="student">I'm student.</option>
						<option value="tutor">I'm tutor.</option>
					</select> --}}
					

					<div class="contact100-form-checkbox m-l-4 forgot_pass">
						<a href="{{ url('confirm-email-address') }}">Forgot Password?</a>
					</div>
					
					<div class="container-login100-form-btn p-t-15">
						<button class="login100-form-btn" id="login" name="login" >
							Login
						</button>
					</div>

					<div class="text-center w-full p-t-28 p-b-18">
						<span class="txt1">
							Or login with
						</span>
					</div>

					<a href="#" class="btn-face m-b-10">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>

					<a href="#" class="btn-google m-b-10">
						<img src="{{ asset ('assets/images/icons/icon-google.png') }}" alt="GOOGLE">
						Google
					</a>

					<a href="{{ url ('signup') }}" class="btn-notamember m-b-10">
						Not a member? Sign up now!
					</a>

					
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
	<script src="{{ asset ('assets/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset ('assets/js/main.js') }}"></script>

</body>
</html>



<script>
    jQuery(document).ready(function(){
        
        $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} });
        
        jQuery("#login").click(function(event){
            event.preventDefault();
            
			console.log("Button Pressed.");
            var user = jQuery("#user").val();
            var pass = jQuery("#password").val();
            // var type = jQuery("#type").val();

            
            var error = false;
    
            if(user != '' && pass != '')
            {
                error = false;
                console.log ("Ajax Calling !!!!");
                jQuery.ajax({
                    url: "{{ url('home') }}",
                    type: "POST",
                    data: {'username':user, 'password':pass },
                    success: function(response)
                    {
                        console.log(response.success);
						// jQuery('#error_creditional').html(response.success);
						if ( (response.success == null || response.success == undefined) )
						{
							// console.log("Display Error Message.");
							jQuery("#login_success").empty();
							jQuery('#error_creditional').html(response.error);
						}
						else  
						{
							// console.log("Display Success Message");
							jQuery("#error_creditional").empty();
							jQuery('#login_success').html(response.success);
							console.log(response.success);						

							// console.log("Flag : "+response.flag);
							// location.href = '/'						
						}
                    }
                });
            }
            else
            {
                console.log('some field data are empty');
                jQuery("#error_creditional").text('Error: some field data are empty.');
                error = true;
            }

        });
    });
</script>