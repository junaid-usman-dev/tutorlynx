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
    <!-- bootstrap slider -->
    <link rel="stylesheet" href="{{ asset('theme_asset/plugins/bootstrap-slider/css/bootstrap-slider.min.css') }}">
    <!-- Theme style -->
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('theme_asset/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('theme_asset/dist/css/adminlte.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

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
                                <li class="breadcrumb-item active">Edit Admin</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <div class="card card-primary card-outline" style="width: 60%; margin: 0px auto; margin-top: 10%;">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Create New Admin</p>
                    <form action="{{ action('Users\Admin\AdminController@update') }}" method="POST" accept-charset="UTF-8" >
                          @csrf
                        
                        <div class="input-group mb-2">
                            <input type="hidden" name="id" class="form-control" autocomplete="disabled" value="{{ $admin->id }}"/>
                        </div>

                        <div class="row">
                            <div class="col-6 mb-0 ml-0">
                                <div class="input-group mb-2">
                                    <input type="text" name="fname" class="form-control" autocomplete="disabled" value="{{ $admin->first_name }}" >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-0 ml-0">
                                <div class="input-group mb-2">
                                    <input type="text" name="lname" class="form-control" autocomplete="disabled" value="{{ $admin->last_name }}" >
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
                            <input type="email" name="email" class="form-control" autocomplete="disabled" value="{{ $admin->email_address }}" >
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
                            <input type="password" name="password" id="password" class="form-control" value="{{ $admin->password }}" >
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div>
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
                        </div>
    
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
    <script src="dist/js/demo.js"></script>
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


<?php 
    }
    else
    {
		// Go to welcome page
        header("Location: ".url('/admin/signin'));exit;
    }
?>