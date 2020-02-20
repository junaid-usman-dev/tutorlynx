<?php
    if (empty(session()->get('user_id')))
    {
        
?>

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
                    <p id="error" class="text-danger"></p>
					<p id="success" class="text-success"></p>                    
					{{-- end junaid code --}}
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" id="username" name="username" placeholder="User Name">
                    </div>

                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="hidden" id="facebook" name="facebook" value="{{ $facebook_id }}">
                    </div>
                
                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="hidden" id="google" name="google" value="{{ $gmail_id }}">
                    </div>

                    <div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="hidden" id="fname" name="fname" value="{{ $user_name }}">
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="hidden" id="email" name="email" value="{{ $user_email_addr }}">
					</div>

                    <div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="hidden" id="token" name="token" value="{{ $user_token }}">
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="hidden" id="expire" name="expire" value="{{ $user_expire }}">
                    </div>

					<div class="container-login100-form-btn p-t-15">
						<button class="login100-form-btn" id="submit" name="submit" >
							Submit
						</button>
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
	<script src="{{ asset ('assets/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset ('assets/js/main.js') }}"></script>

</body>
</html>


<?php 
    }
    else
    {
		// Go to welcome page
        // dd("NO");
        // echo "Empty";
        //  return redirect('/signin');
        // Redirect::route('signin');
        // redirect()->route('signin');
        // Redirect::to('/signin');
        header("Location: http://127.0.0.1:8000/signup");exit;

    }
?>



<script>
    jQuery(document).ready(function(){
        
        $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} });
        
        jQuery("#submit").click(function(event){
            event.preventDefault();
            // alert("hello world");
            console.log("Button Pressed for Username.")

	        var username_format = '^[a-z0-9_]{3,15}$'; // regex for uername
            var username = jQuery("#username").val();
            var user_facebook = jQuery("#facebook").val();
            var user_google = jQuery("#google").val();
            var user_fname = jQuery("#fname").val();
            var user_email = jQuery("#email").val();
            var user_token = jQuery("#token").val();
            var user_expire = jQuery("#expire").val();
    
            if(username != '')
            {
	            var nameee = document.getElementById("username");
                if ( nameee.value.match(username_format) )
                {
                    console.log ("Ajax Calling !!!!");
                    jQuery.ajax({
                        url: "/username",
                        type: "POST",
                        data: {'username':username,
                                'facebook':user_facebook,
                                'google':user_google,
                                'fname':user_fname,
                                'email':user_email,
                                'token':user_token,
                                'expire':user_expire,
                            },
                        success: function(response)
                        {
                            console.log(response.success);
        					if ( (response.success == null || response.success == undefined) )
                            {
                                jQuery("#success").empty();
						        jQuery('#error').html(response.error);                               
                            }
                            else
                            {
                                jQuery("#error").empty();
                                jQuery('#success').html(response.success);
                                location.href = '/'
                            }
                        }
                    });
                }
                else
                {
                    console.log ("Invalid username format.");
                    jQuery("#error").text('Error: Invalid username format (XXXX_23).');
                }
            }
            else
            {
                console.log('some field data are empty');
                jQuery("#error").text('Error: some field data are empty.');
            }

        });
    });
</script>