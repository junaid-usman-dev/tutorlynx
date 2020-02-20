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
					<p id="error_creditional" class="text-success">test</p>
					{{-- end junaid code --}}
                    
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input class="input100" type="password" id="password" name="password" placeholder="Password">
                    </div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" id="re_password" name="re_password" placeholder="Repeate Password">
					</div>

					<div class="wrap-input100 validate-input m-b-16" >
						<input class="input100" type="text" id="username" name="username" value="{{ $username }}">
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" >
						<input class="input100" type="text" id="key" name="key" value="{{ $key }}">
					</div>

					<div class="contact100-form-checkbox m-l-4 forgot_pass">
						<a href="{{ url ('forget') }}">Forgot Password?</a>
					</div>
					
					<div class="container-login100-form-btn p-t-15">
						<button class="login100-form-btn" id="submit" name="submit" >
                            Submit
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
        
        jQuery("#submit").click(function(event){
            event.preventDefault();
            // alert("hello world");
			console.log("Button Pressed.");

            var pass = jQuery("#password").val();
            var re_pass = jQuery("#re_password").val();
            var username = jQuery("#username").val();
            var key = jQuery("#key").val();
			

            if(pass != '' && re_pass != '')
            {
				if (pass == re_pass)
				{
					var URL = "password/updated"+"/"+username+"/"+key+"/"+pass;
					console.log(URL);
					console.log ("Ajax Calling !!!!");
                	jQuery.ajax({
                    url: URL,
                    type: "POST",
                    data: {'pass':pass,'re_pass':re_pass},
                    success: function(response)
                    {
                        console.log(response.success);
                        jQuery('#error_creditional').html(response.success);
                    }
                });
				}
				else
				{
					console.log('incorrect password');
                	jQuery("#error_creditional").text('Error: incorrect password');
				}
                
            }
            else
            {
                console.log('some field data are empty');
                jQuery("#error_creditional").text('Error: some field data are empty.');
            }

        });
    });
</script>