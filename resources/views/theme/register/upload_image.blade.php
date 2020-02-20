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
    /* Custom Design */

</style>


<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><img src="{{ asset('theme_asset/dist/img/TLLogo.png') }}" style="width: 60px">
                <img src="{{ asset('theme_asset/dist/img/TL_txt_img.png') }}"></a>
        </div>

        <div class="card card-primary card-outline" >
            <div class="card-body register-card-body">
                <p class="login-box-msg">Sign up for TutorLynx</p>
                <form action="{{ Route('upload.profile') }}" method="POST" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" >
                    @csrf
                    
                    <div class="input-group mb-2" >
                        <input type="hidden" name="id" class="form-control" value="{{ $id }}" >
                    </div>

                    <div class="input-group mb-2" >
                        <input type="file" name="image" id="image" onchange="PreviewImage();" class="form-control" value={{ old('email') }} >
                    </div>

                    <div class="input-group mb-2" >
                        <div class="profile_image" style="width:100%; height:100%; margin: auto;">
                            {{-- https://www.w3schools.com/w3css/img_lights.jpg --}}
                            <img src="http://127.0.0.1:8000/images/default-profile-image.jpg" id="uploadPreview" height="100%" width="100%"  alt="image" />
                        </div>
                    </div>
                    
                    <div class="social-auth-links text-center">
                        <button class="btn btn-block btn-primary" name="signup" id="signup" >
                            <em class="fas fa-check-circle mr-2"></em>
                            Sign Up
                        </button>
                    </div>

                </form>

                <a href="login.html" class="text-center">SKIP</a>

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

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>