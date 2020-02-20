<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TutorLynx | Sign up</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('theme_asset/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('theme_asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('theme_asset/dist/css/adminlte.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>


<style>

/* Inline Design */
.alert-success
{
    display: none;
}
.alert-danger
{
    display: none;
}

</style>


<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><img src="{{ asset('theme_asset/dist/img/TLLogo.png') }}" style="width: 60px">
                <img src="{{ asset('theme_asset/dist/img/TL_txt_img.png') }}"></a>
        </div>

        <div class="card card-primary card-outline">
            <div class="card-body register-card-body">
                <h3 class="login-box-msg">Reset Password</h3>
                {{-- action="{{ route('user.password.update') }}" method="POST" --}}
                <form  accept-charset="UTF-8" >
                    @csrf

                    <div class="input-group mb-2 alert alert-danger" role="alert">
                        Display error message here.
                    </div>
                    <div class="input-group mb-2 alert alert-success" role="alert">
                        display success message here.
                    </div>

                    <div class="input-group mb-2">
                        <input type="hidden" name="key" id="key" class="form-control" value="{{ $key }}">
                    </div>
                    <div class="input-group mb-2">
                        <input type="hidden" name="email" id="email" class="form-control" value="{{ $email }}">
                    </div>

                    <div class="input-group mb-2">
                        <input type="password" name="password" id="password" class="form-control" placeholder="New Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-2">
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    </div>

                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button id="submit" class="btn btn-primary btn-block">Reset Password</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mb-0">
                    <a href="{{ url('signup') }}" class="text-center">Register a new membership</a>
                </p>

                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
        <!-- /.register-box -->

        <!-- jQuery -->
        <script src="{{ asset('theme_asset/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('theme_asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('theme_asset/dist/js/adminlte.min.js') }}"></script>
</body>

</html>


<script>
    // Custom Java Script

    jQuery(document).ready(function(){
        
        $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} });
        
        jQuery("#submit").click(function(event){
            event.preventDefault();
            // alert("hello world");
			console.log("Button Pressed.");

            var pass = jQuery("#password").val();
            var re_pass = jQuery("#confirm_password").val();
            var email = jQuery("#email").val();
            var key = jQuery("#key").val();
			

            if(pass != '' && re_pass != '')
            {
				if (pass == re_pass)
				{
					var URL = "/password/updated";
					console.log(URL);
					console.log ("Ajax Calling !!!!");
                	jQuery.ajax({
                    url: "{{ url('/password/updated') }}",
                    type: "POST",
                    data: {'email':email, 'key':key, 'password':pass},
                    success: function(response)
                    {
                        if ( (response.success == null || response.success == undefined) )
                        {
                            console.log("Error Message.");
                            jQuery(".alert-danger").css("display", "block");
                            jQuery(".alert-success").css("display", "none");
                            jQuery(".alert-sucess").empty();
                            jQuery('.alert-danger').html(response.error);
                        }
                        else  
                        {
                            console.log("Success Message");
                            jQuery(".alert-danger").css("display", "none");
                            jQuery(".alert-success").css("display", "block");
                            jQuery(".alert-danger").empty();
                            jQuery('.alert-success').html(response.success);
                            console.log(response.success);						

                            // console.log("Flag : "+response.flag);
                            location.href = '/signin'						
                        }
                    }
                });
				}
				else
				{
					console.log('Password does not match.');
                    jQuery(".alert-danger").css("display", "block");
                	jQuery(".alert-danger").text('Error: Password does not match.');
				}
            }
            else
            {
                console.log('some field data are empty');
                jQuery(".alert-danger").css("display", "block");
                jQuery(".alert-danger").text('Error: These are required field.');
            }

        });
    });


</script>