<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TutorLynx | Payment</title>
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



<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><img src="{{ asset('theme_asset/dist/img/TLLogo.png') }}" style="width: 60px">
                <img src="{{ asset('theme_asset/dist/img/TL_txt_img.png') }}"></a>
        </div>

        <div class="card card-primary card-outline">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Payment for TutorLynx</p>
                <form action="{{ Route('tutor.fee.submission') }}" method="POST" accept-charset="UTF-8" >
                    @csrf

                    <div class="input-group mb-2">
                        <input type="hidden" name="id" class="form-control" autocomplete="disabled" value="{{ $id }}" >
                        {{-- <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div> --}}
                    </div>

                    <div class="input-group mb-2">
                        <input type="text" name="card_number" class="form-control only-numeric" autocomplete="disabled" placeholder="Card Number" value={{ old('email') }} >
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('card_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="row">
                        <div class="col-6 mb-0 ml-0">
                            <div class="input-group mb-2">
                                <input type="text" name="month" class="form-control only-numeric" autocomplete="disabled" placeholder="Month" value={{ old('month') }} >
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-0 ml-0">
                            <div class="input-group mb-2">
                                <input type="text" name="year" class="form-control only-numeric" autocomplete="disabled" placeholder="Year" value={{ old('year') }} >
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @error('month')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="input-group mb-2">
                        <input type="text" name="cvv_number" class="form-control only-numeric" autocomplete="disabled" placeholder="CVV Number" value={{ old('cvv') }} >
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('cvv')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="social-auth-links text-center">
                        <button class="btn btn-block btn-primary" name="signup" id="signup" >
                            <em class="fas fa-check-circle mr-2"></em>
                            Sign up
                        </button>
                    </div>

                </form>

                <a href="login.html" class="text-center">I already have an account. Sign In</a>

            </div>
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



<script type="text/javascript">

// Only Number
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


</script>