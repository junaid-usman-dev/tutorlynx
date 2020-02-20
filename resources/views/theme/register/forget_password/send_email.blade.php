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
                <h3 class="login-box-msg">Verify Email to Reset Password</h3>
                <form method="POST" accept-charset="UTF-8" >
                    @csrf

                    <div class="input-group mb-2 alert alert-danger" role="alert">
                        Dislay error message here.
                    </div>
                    <div class="input-group mb-2 alert alert-success" role="alert">
                        disllay success message here.
                    </div>
                    <div class="input-group mb-2">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
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
                            <button id="submit" class="btn btn-primary btn-block">Verify Email</button>
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
    jQuery(document).ready(function(){
        
        $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} });
        
        jQuery("#submit").click(function(event){
            event.preventDefault();
            // alert("hello world");
			console.log("Button Pressed.");
            var user = jQuery("#email").val();
    
            if(user != '')
            {
                console.log ("Ajax Calling !!!! Email Verification !!!! ");
                jQuery.ajax({
                    url: "/forgetpassword/verification",
                    type: "POST",
                    data: {'user':user },
                    success: function(response)
                    {
						if (response.success == undefined )
						{
							// erorr message
							console.log("Error Message");
							jQuery('div.alert-success').css({"display":"none"});
							jQuery('div.alert-danger').css({"display":"block"});
							// jQuery('#error_creditional').html(response.success);
                            jQuery('div.alert-danger').html(response.error);
						}
						else
						{
							// success message
							console.log("Success Message");
							jQuery('div.alert-danger').css({"display":"none"});
							jQuery('div.alert-success').css({"display":"block"});
                            jQuery('div.alert-success').html(response.success);
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