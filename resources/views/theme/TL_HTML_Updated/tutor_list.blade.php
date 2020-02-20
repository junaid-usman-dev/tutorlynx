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
  <link rel="stylesheet" href="{{ asset('theme_asset/dist/css/adminlte.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
    <!--  <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown"><a class="nav-link" data-toggle="dropdown" href="#"> <em class="far fa-comments"></em> <span class="badge badge-danger navbar-badge">3</span> </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('theme_asset/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('theme_asset/dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('theme_asset/dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
     
      <!--  <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link navbar-white">
      <img src="{{ asset('theme_asset/dist/img/TLLogo.png') }}" alt="TutorLynx Logo" class="brand-image img-circle"
           style="opacity: 1">
      <span class="brand-text font-weight-light"><img src="{{ asset('theme_asset/dist/img/TL_txt_img.png') }}"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('theme_asset/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <!-- <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li> -->
			<li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Test
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Take a Test</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Result</p>
                </a>
              </li>
              
            </ul>
          </li>
			
          
			<li class="nav-item">
            <a href="#" class="nav-link"><em class="nav-icon fas fa-calendar-check"></em>
            <p>
                Availability Calendar
               <!--  <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
			
			
			<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Admin Manager
               <!--  <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
			
			<li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile Manager
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Mode</p>
                </a>
              </li>
				<li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment</p>
                </a>
              </li>
              
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tutor List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tutor List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

           

            <!-- Filter Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Filter Search</h3>
				  <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            
          </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
				  <p class="text-muted mb-1">
                  <strong>Hourly Rate:</strong> $10 - $200+
                </p>
                <div class="slider-light">
                      <input type="text" value="" class="slider form-control" data-slider-min="1" data-slider-max="500"
                           data-slider-step="1" data-slider-value="[1,500]" data-slider-orientation="horizontal"
                           data-slider-selection="before" data-slider-tooltip="show">
                    </div>

                

                <hr>
                
                <p class="mb-1 text-muted"><strong>Availability:</strong>
				  
				  <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" disabled>
                          <label class="form-check-label">Sunday</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" checked>
                          <label class="form-check-label">Monday</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">Tuesday</label>
                        </div>
					  <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">Wednesday</label>
                        </div>
					  <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">Thursday</label>
                        </div>
					  <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">Friday</label>
                        </div>
					  <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">Saturday</label>
                        </div>
                      </div>
				  </p>

                <hr>
                
                <p class="text-muted mb-1">
                 <strong> Lesson Type:</strong>
                </p>
				                
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-primary active">
                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Online
                  </label>
                  <label class="btn btn-primary">
                    <input type="radio" name="options" id="option2" autocomplete="off"> In Person
                  </label>
                  
                </div>

                <hr>
				  
<p class="text-muted mb-1">
                  <strong>Tutor Age:</strong> 18 and up
                </p>
                <div class="slider-light">
                      <input type="text" value="" class="slider form-control" data-slider-min="18" data-slider-max="65"
                           data-slider-step="1" data-slider-value="[18,65]" data-slider-orientation="horizontal"
                           data-slider-selection="before" data-slider-tooltip="show">
                    </div>
				<hr>
				<p class="text-muted mb-1">
                 <strong> Gender:</strong>
                </p>
                <div class="form-group">
                        
                        <select class="form-control">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>
<div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label"><strong>Backgound check on file</strong></label>
                        </div>
               

                <hr>

                <p class="text-muted mb-1">
                 <strong> Student's Level:</strong>
                </p>
                <div class="form-group">
                        
                        <select class="form-control">
                          <option>Adult</option>
                          <option>Child</option>
                        </select>
                      </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
			  
			  <div class="row">
				  <div class="col-md-12">
				  <div class="card">
        <div class="card-header">
          <h3 class="card-title"><strong>3,339 English tutors</strong> fit your choice</h3>

          
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
              
              <div class="row">
                <div class="col-12">
                  
                    <div class="post">
                      <div class="user-block"><span class="badge text-md badge-primary float-right">$50/hr</span>
                        <img class="img-circle img-bordered-sm" src="{{ asset('theme_asset/dist/img/user1-128x128.jpg') }}" alt="user image">
                        <span class="username">
                          <a href="#">English Writing Teacher with Patience</a>
                        </span>
                        <span class="description">Jonathan Burke Jr.</span>
						  
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore.
                      </p>
						<span class="text-sm"><i class="fas fa-star  text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i> 5.0 (320)</span>
                      <p class="text-sm"> <em class="fas fa-clock  mr-1"></em> <strong>15 hours tutoring english</strong> out of 563 hours. </p>
                    </div>

                    <div class="post">
                      <div class="user-block"><span class="badge text-md badge-primary float-right">$48/hr</span>
                        <img class="img-circle img-bordered-sm" src="{{ asset('theme_asset/dist/img/user7-128x128.jpg') }}" alt="user image">
                        <span class="username">
                          <a href="#">English Writing Teacher with Patience</a>
                        </span>
                        <span class="description">Sarah Ross</span>
						  
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore.
                      </p>
						<span class="text-sm"><i class="fas fa-star  text-warning"></i><i class="fas  fa-star  text-warning"></i><i class="fas fa-star  text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star ligther_txt"></i> 4.0 (300)</span>
                      <p class="text-sm"> <em class="fas fa-clock  mr-1"></em> <strong>15 hours tutoring english</strong> out of 563 hours. </p>
                    </div>

                    <div class="post">
                      <div class="user-block"><span class="badge text-md badge-primary float-right">$37/hr</span>
                        <img class="img-circle img-bordered-sm" src="{{ asset('theme_asset/dist/img/user1-128x128.jpg') }}" alt="user image">
                        <span class="username">
                          <a href="#">English Writing Teacher with Patience</a>
                        </span>
                        <span class="description">Jonathan Burke Jr.</span>
						  
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore.
                      </p>
						<span class="text-sm"><i class="fas fa-star  text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star ligther_txt"></i> 4.0 (300)</span>
                      <p class="text-sm"> <em class="fas fa-clock  mr-1"></em> 375 hours tutoring </p>
                    </div>
					
					<div class="post">
                      <div class="user-block"><span class="badge text-md badge-primary float-right">$35/hr</span>
                        <img class="img-circle img-bordered-sm" src="{{ asset('theme_asset/dist/img/user7-128x128.jpg') }}" alt="user image">
                        <span class="username">
                          <a href="#">English Writing Teacher with Patience</a>
                        </span>
                        <span class="description">Sarah Ross</span>
						  
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore.
                      </p>
						<span class="text-sm"><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star ligther_txt"></i> 4.0 (300)</span>
                      <p class="text-sm"> <em class="fas fa-clock  mr-1"></em> <strong>15 hours tutoring english</strong> out of 563 hours. </p>
                    </div>
					
					
					<div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                  </ul>
                </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <!-- /.card-body -->
      </div>
				  
				  
				  </div>            
			  
				  
				  
			  
			  </div>
			  
			  
			  
			  
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
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

  <!-- Main Footer -->
  <footer class="main-footer text-sm">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      <img src="{{ asset('theme_asset/dist/img/TLLogo.png') }}" style="width: 30px; height: 30px; margin-top: -3px;">
    </div>
    <!-- Default to the left -->
    Copyright &copy; 2020 <a href="#">TutorLynx</a>. All rights reserved.
  </footer>
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
<script>
  $(function () {
    /* BOOTSTRAP SLIDER */
    $('.slider').bootstrapSlider()

    /* ION SLIDER */
    $('#range_1').ionRangeSlider({
      min     : 0,
      max     : 5000,
      from    : 1000,
      to      : 4000,
      type    : 'double',
      step    : 1,
      prefix  : '$',
      prettify: false,
      hasGrid : true
    })
    $('#range_2').ionRangeSlider()

    $('#range_5').ionRangeSlider({
      min     : 0,
      max     : 10,
      type    : 'single',
      step    : 0.1,
      postfix : ' mm',
      prettify: false,
      hasGrid : true
    })
    $('#range_6').ionRangeSlider({
      min     : -50,
      max     : 50,
      from    : 0,
      type    : 'single',
      step    : 1,
      postfix : '°',
      prettify: false,
      hasGrid : true
    })

    $('#range_4').ionRangeSlider({
      type      : 'single',
      step      : 100,
      postfix   : ' light years',
      from      : 55000,
      hideMinMax: true,
      hideFromTo: false
    })
    $('#range_3').ionRangeSlider({
      type    : 'double',
      postfix : ' miles',
      step    : 10000,
      from    : 25000000,
      to      : 35000000,
      onChange: function (obj) {
        var t = ''
        for (var prop in obj) {
          t += prop + ': ' + obj[prop] + '\r\n'
        }
        $('#result').html(t)
      },
      onLoad  : function (obj) {
        //
      }
    })
  })
</script>
</body>
</html>
