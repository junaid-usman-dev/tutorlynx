<?php
    if (!empty(session()->get('session_admin_id')) )
    {
    
?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>TutorLynx</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('theme_asset/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('theme_asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- bootstrap slider -->
    <link rel="stylesheet" href="{{ asset('theme_asset/plugins/bootstrap-slider/css/bootstrap-slider.min.css') }}">
    <!-- Theme style -->
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('theme_asset/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
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

</style>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        {{-- Header Section --}}
        @include('theme.admin.inc.header')
        {{-- End Header Section --}}

        {{-- Side Bar Menu --}}
        @include('theme.admin.inc.sidebar')
        {{-- End Side Bar Menu --}}

        <!-- Content Wrapper. Contains page content -->
        
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <div class="content-wrapper">
             <!-- Content Header (Page header) -->
             <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Manage Tutors</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Manage Tutors</li>
                                <li class="breadcrumb-item active">Create Admin</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <div class="card card-primary card-outline" style="width: 60%; margin: 0px auto; margin-top: 10%;">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Create New Admin</p>
                    <form action="{{ action('Users\Admin\AdminController@store') }}" method="POST" accept-charset="UTF-8" >
                          @csrf
    
                        <div class="row">
                            <div class="col-6 mb-0 ml-0">
                                <div class="input-group mb-2">
                                    <input type="text" name="fname" class="form-control" autocomplete="disabled" placeholder="First name" value={{ old('fname') }} >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-0 ml-0">
                                <div class="input-group mb-2">
                                    <input type="text" name="lname" class="form-control" autocomplete="disabled" placeholder="Last name" value={{ old('lname') }} >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @error('fname')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
    
                        <div class="input-group mb-2">
                            <input type="email" name="email" class="form-control" autocomplete="disabled" placeholder="Email" value={{ old('email') }} >
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
    
                        <div class="input-group mb-2">
                            <input type="password" name="password" id="password" class="form-control password-popover" placeholder="Password" 
                                title='<strong>Password must contain the following:</strong>' data-html="true" 
                                data-toggle="popover" data-trigger="focus" 
                                data-content='
                                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                    <p id="number" class="invalid">A <b>number</b></p>
                                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                                '>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        {{-- <div>
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
                        </div> --}}
    
                        <div class="social-auth-links text-center">
                            <button class="btn btn-block btn-primary" name="signup" id="signup" >
                                <em class="fas fa-check-circle mr-2"></em>
                                Sign up
                            </button>
                        </div>
    
                    </form>
    
                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->

            <!-- /.content-header -->
        </div>
        <!-- Main Footer -->
        @include('theme.admin.inc.footer')
        {{-- End Footer--}}


    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('theme_asset/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('theme_asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('theme_asset/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('theme_asset/plugins/bootstrap-slider/bootstrap-slider.min.js') }}"></script>

    <!-- DataTables -->
    <script src="{{ asset('theme_asset/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('theme_asset/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(function () {
            /* BOOTSTRAP SLIDER */
            $('.slider').bootstrapSlider()

            /* ION SLIDER */
            $('#range_1').ionRangeSlider({
                min: 0,
                max: 5000,
                from: 1000,
                to: 4000,
                type: 'double',
                step: 1,
                prefix: '$',
                prettify: false,
                hasGrid: true
            })
            $('#range_2').ionRangeSlider()

            $('#range_5').ionRangeSlider({
                min: 0,
                max: 10,
                type: 'single',
                step: 0.1,
                postfix: ' mm',
                prettify: false,
                hasGrid: true
            })
            $('#range_6').ionRangeSlider({
                min: -50,
                max: 50,
                from: 0,
                type: 'single',
                step: 1,
                postfix: '°',
                prettify: false,
                hasGrid: true
            })

            $('#range_4').ionRangeSlider({
                type: 'single',
                step: 100,
                postfix: ' light years',
                from: 55000,
                hideMinMax: true,
                hideFromTo: false
            })
            $('#range_3').ionRangeSlider({
                type: 'double',
                postfix: ' miles',
                step: 10000,
                from: 25000000,
                to: 35000000,
                onChange: function (obj) {
                    var t = ''
                    for (var prop in obj) {
                        t += prop + ': ' + obj[prop] + '\r\n'
                    }
                    $('#result').html(t)
                },
                onLoad: function (obj) {
                    //
                }
            })
        })

    </script>
    <script src="{{ asset('theme_asset/dist/js/demo.js') }}"></script>
    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
            });
        });

    </script>
</body>

</html>

<script>
$(document).ready(function(){
    // $('[data-toggle="popover"]').popover();
    
    $('.password-popover').popover({
        trigger: 'focus'
    });

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



<?php 
    }
    else
    {
		// Go to welcome page
        header("Location: ".url('/admin/signin'));exit;
    }
?>