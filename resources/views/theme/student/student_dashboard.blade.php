
<?php
    if ( !empty(session()->get('session_student_id')) )
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
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
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
                <li class="nav-item dropdown"><a class="nav-link" data-toggle="dropdown" href="#"> <em
                            class="far fa-comments"></em> <span class="badge badge-danger navbar-badge">3</span> </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{{ asset('theme_asset/dist/img/user1-128x128.jpg') }}" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
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
                                <img src="{{ asset('theme_asset/dist/img/user8-128x128.jpg') }}" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
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
                                <img src="{{ asset('theme_asset/dist/img/user3-128x128.jpg') }}" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
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
                <img src="{{ asset('theme_asset/dist/img/TLLogo.png') }}" alt="TutorLynx Logo"
                    class="brand-image img-circle" style="opacity: 1">
                <span class="brand-text font-weight-light"><img
                        src="{{ asset('theme_asset/dist/img/TL_txt_img.png') }}"></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/{{ $user->images->path }}/{{ $user->images->name }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ $user->first_name }} {{ $user->last_name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-child-indent" data-widget="treeview"
                        role="menu" data-accordion="false">
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
                        {{-- <li class="nav-item has-treeview">
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
                        </li> --}}


                        <li class="nav-item">
                            <a href="#" class="nav-link"><em class="nav-icon fas fa-users"></em>
                                <p>
                                    Find Tutors
                                    <!--  <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link"><em class="nav-icon fas fa-heart"></em>
                                <p>
                                    Favorite Tutors
                                    <!--  <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>

                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Admin Manager
                                    <!--  <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li> --}}

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
                                <li class="nav-item">
                                    <a href="{{ route('logout') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Logout</p>
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
                            <h1 class="m-0 text-dark">Student Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Student Dashboard</li>
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

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="/{{ $user->images->path }}/{{ $user->images->name }}"
                                            alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">{{ $user->first_name }}
                                        {{ $user->last_name }}</h3>

                                    <p class="text-muted text-center">Student</p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item"> <strong>Booked Tutors</strong> <a
                                                class="float-right">05</a> </li>
                                        <li class="list-group-item">
                                            <b>My Favourites</b> <a class="float-right">50</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Total Subjects</b> <a class="float-right">07</a>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-primary btn-block"><strong>Edit Profile</strong></a>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- About Me Box -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">About Me</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-book mr-1"></i> Education</strong>

                                    <p class="text-muted">
                                        Doing B.S. in History from the University of Tennessee at Knoxville
                                    </p>

                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                                    <p class="text-muted">{{ $user->city }}, {{ $user->state }}, {{ $user->country }}
                                    </p>

                                    <hr>
                                    <strong><em class="fas fa-mobile-alt mr-1"></em> Cell No.</strong>
                                    <p class="text-muted">
                                        {{ $user->phone }}
                                    </p>

                                    <hr>
                                    <strong><em class="fas fa-birthday-cake mr-1"></em> Birthday</strong>
                                    <p class="text-muted">
                                        12 Aug, 2005
                                    </p>

                                    <hr>


                                    <strong><i class="fas fa-envelope mr-1"></i> E-mail</strong>

                                    <p class="text-muted">{{ $user->email_address }}</p>



                                    <hr>

                                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                        fermentum enim neque.</p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">

                            <div class="row">
                                <div class="col-md-6">

                                    <!-- Tutors LIST -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Favorite Tutors <span
                                                    class="badge badge-danger">8</span></h3>

                                            <div class="card-tools">

                                                <button type="button" class="btn btn-tool"
                                                    data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                </button>

                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body p-0">
                                            <ul class="users-list clearfix">
                                                <li>
                                                    <img src="{{ asset('theme_asset/dist/img/user1-128x128.jpg') }}"
                                                        alt="User Image">
                                                    <a class="users-list-name" href="#">Alexander Pierce</a>
                                                    <span class="users-list-date">Today</span>
                                                </li>
                                                <li>
                                                    <img src="{{ asset('theme_asset/dist/img/user8-128x128.jpg') }}"
                                                        alt="User Image">
                                                    <a class="users-list-name" href="#">Norman</a>
                                                    <span class="users-list-date">Yesterday</span>
                                                </li>
                                                <li>
                                                    <img src="{{ asset('theme_asset/dist/img/user7-128x128.jpg') }}"
                                                        alt="User Image">
                                                    <a class="users-list-name" href="#">Jane</a>
                                                    <span class="users-list-date">12 Jan</span>
                                                </li>
                                                <li>
                                                    <img src="{{ asset('theme_asset/dist/img/user6-128x128.jpg') }}"
                                                        alt="User Image">
                                                    <a class="users-list-name" href="#">John</a>
                                                    <span class="users-list-date">12 Jan</span>
                                                </li>
                                                <li>
                                                    <img src="{{ asset('theme_asset/dist/img/user2-160x160.jpg') }}"
                                                        alt="User Image">
                                                    <a class="users-list-name" href="#">Alexander</a>
                                                    <span class="users-list-date">13 Jan</span>
                                                </li>
                                                <li>
                                                    <img src="{{ asset('theme_asset/dist/img/user5-128x128.jpg') }}"
                                                        alt="User Image">
                                                    <a class="users-list-name" href="#">Sarah</a>
                                                    <span class="users-list-date">14 Jan</span>
                                                </li>
                                                <li>
                                                    <img src="{{ asset('theme_asset/dist/img/user4-128x128.jpg') }}"
                                                        alt="User Image">
                                                    <a class="users-list-name" href="#">Nora</a>
                                                    <span class="users-list-date">15 Jan</span>
                                                </li>
                                                <li>
                                                    <img src="{{ asset('theme_asset/dist/img/user3-128x128.jpg') }}"
                                                        alt="User Image">
                                                    <a class="users-list-name" href="#">Nadia</a>
                                                    <span class="users-list-date">15 Jan</span>
                                                </li>

                                            </ul>
                                            <!-- /.users-list -->
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer text-center"><a href="javascript::">View All Tutors</a>
                                        </div>
                                        <!-- /.card-footer -->
                                    </div>
                                    <!--/.card -->
                                </div>

                                <div class="col-md-6">


                                    <!-- DIRECT CHAT -->
                                    <div class="card direct-chat direct-chat-warning">
                                        <div class="card-header">
                                            <h3 class="card-title">Recent Chat</h3>

                                            <div class="card-tools">
                                                <span data-toggle="tooltip" title="3 New Messages"
                                                    class="badge badge-primary">3</span>
                                                <button type="button" class="btn btn-tool"
                                                    data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-toggle="tooltip"
                                                    title="Contacts" data-widget="chat-pane-toggle">
                                                    <i class="fas fa-comments"></i></button>

                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <!-- Conversations are loaded here -->
                                            <div class="direct-chat-messages">
                                                <!-- Message. Default to the left -->
                                                <div class="direct-chat-msg">
                                                    <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-left">Alexander
                                                            Pierce</span>
                                                        <span class="direct-chat-timestamp float-right">23 Jan 2:00
                                                            pm</span>
                                                    </div>
                                                    <!-- /.direct-chat-infos -->
                                                    <img class="direct-chat-img"
                                                        src="{{ asset('theme_asset/dist/img/user1-128x128.jpg') }}"
                                                        alt="message user image">
                                                    <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                                        Is this template really for free? That's unbelievable!
                                                    </div>
                                                    <!-- /.direct-chat-text -->
                                                </div>
                                                <!-- /.direct-chat-msg -->

                                                <!-- Message to the right -->
                                                <div class="direct-chat-msg right">
                                                    <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-right">Sarah Bullock</span>
                                                        <span class="direct-chat-timestamp float-left">23 Jan 2:05
                                                            pm</span>
                                                    </div>
                                                    <!-- /.direct-chat-infos -->
                                                    <img class="direct-chat-img"
                                                        src="{{ asset('theme_asset/dist/img/user3-128x128.jpg') }}"
                                                        alt="message user image">
                                                    <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                                        You better believe it!
                                                    </div>
                                                    <!-- /.direct-chat-text -->
                                                </div>
                                                <!-- /.direct-chat-msg -->

                                                <!-- Message. Default to the left -->
                                                <div class="direct-chat-msg">
                                                    <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-left">Alexander
                                                            Pierce</span>
                                                        <span class="direct-chat-timestamp float-right">23 Jan 5:37
                                                            pm</span>
                                                    </div>
                                                    <!-- /.direct-chat-infos -->
                                                    <img class="direct-chat-img"
                                                        src="{{ asset('theme_asset/dist/img/user1-128x128.jpg') }}"
                                                        alt="message user image">
                                                    <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                                        Working with StudentLynx on a great new app! Wanna join?
                                                    </div>
                                                    <!-- /.direct-chat-text -->
                                                </div>
                                                <!-- /.direct-chat-msg -->

                                                <!-- Message to the right -->
                                                <div class="direct-chat-msg right">
                                                    <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-right">Sarah Bullock</span>
                                                        <span class="direct-chat-timestamp float-left">23 Jan 6:10
                                                            pm</span>
                                                    </div>
                                                    <!-- /.direct-chat-infos -->
                                                    <img class="direct-chat-img"
                                                        src="{{ asset('theme_asset/dist/img/user3-128x128.jpg') }}"
                                                        alt="message user image">
                                                    <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                                        I would love to.
                                                    </div>
                                                    <!-- /.direct-chat-text -->
                                                </div>
                                                <!-- /.direct-chat-msg -->

                                            </div>
                                            <!--/.direct-chat-messages-->

                                            <!-- Contacts are loaded here -->
                                            <div class="direct-chat-contacts">
                                                <ul class="contacts-list">
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img"
                                                                src="{{ asset('theme_asset/dist/img/user1-128x128.jpg') }}">

                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    Count Dracula
                                                                    <small
                                                                        class="contacts-list-date float-right">2/28/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">How have you been? I
                                                                    was...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                        </a>
                                                    </li>
                                                    <!-- End Contact Item -->
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img"
                                                                src="{{ asset('theme_asset/dist/img/user7-128x128.jpg') }}">

                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    Sarah Doe
                                                                    <small
                                                                        class="contacts-list-date float-right">2/23/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">I will be waiting
                                                                    for...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                        </a>
                                                    </li>
                                                    <!-- End Contact Item -->
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img"
                                                                src="{{ asset('theme_asset/dist/img/user3-128x128.jpg') }}">

                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    Nadia Jolie
                                                                    <small
                                                                        class="contacts-list-date float-right">2/20/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">I'll call you back
                                                                    at...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                        </a>
                                                    </li>
                                                    <!-- End Contact Item -->
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img"
                                                                src="{{ asset('theme_asset/dist/img/user5-128x128.jpg') }}">

                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    Nora S. Vans
                                                                    <small
                                                                        class="contacts-list-date float-right">2/10/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">Where is your
                                                                    new...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                        </a>
                                                    </li>
                                                    <!-- End Contact Item -->
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img"
                                                                src="{{ asset('theme_asset/dist/img/user6-128x128.jpg') }}">

                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    John K.
                                                                    <small
                                                                        class="contacts-list-date float-right">1/27/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">Can I take a look
                                                                    at...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                        </a>
                                                    </li>
                                                    <!-- End Contact Item -->
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img"
                                                                src="{{ asset('theme_asset/dist/img/user8-128x128.jpg') }}">

                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    Kenneth M.
                                                                    <small
                                                                        class="contacts-list-date float-right">1/4/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">Never mind I
                                                                    found...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                        </a>
                                                    </li>
                                                    <!-- End Contact Item -->
                                                </ul>
                                                <!-- /.contacts-list -->
                                            </div>
                                            <!-- /.direct-chat-pane -->
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <form action="#" method="post">
                                                <div class="input-group">
                                                    <input type="text" name="message" placeholder="Type Message ..."
                                                        class="form-control">
                                                    <span class="input-group-append">
                                                        <button type="button" class="btn btn-primary">Send</button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.card-footer-->
                                    </div>
                                    <!--/.direct-chat -->

                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- TABLE: LATEST ORDERS -->
                                            <div class="card">
                                                <div class="card-header border-transparent">
                                                    <h3 class="card-title">Class Schedules</h3>

                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool"
                                                            data-card-widget="collapse">
                                                            <i class="fas fa-minus"></i>
                                                        </button>

                                                    </div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body p-0">
                                                    <div class="table-responsive">
                                                        <table class="table m-0">
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr. #</th>
                                                                    <th>Student</th>
                                                                    <th>Tutor</th>
                                                                    <th>Subject</th>
                                                                    <th>Start Time</th>
                                                                    <th>End Time</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>01</td>
                                                                    <td><a href="#">Jackson</a></td>
                                                                    <td><a href="#">John Smith</a></td>
                                                                    <td>
                                                                        <div class="sparkbar" data-color="#00a65a"
                                                                            data-height="20">English</div>
                                                                    </td>
                                                                    <td>8:00 AM</td>
                                                                    <td>10:00 AM</td>


                                                                </tr>
                                                                <tr>
                                                                    <td>02</td>
                                                                    <td><a href="#">Jackson</a></td>
                                                                    <td><a href="#">John Smith</a></td>
                                                                    <td>
                                                                        <div class="sparkbar" data-color="#00a65a"
                                                                            data-height="20">English</div>
                                                                    </td>
                                                                    <td>8:00 AM</td>
                                                                    <td>10:00 AM</td>


                                                                </tr>
                                                                <tr>
                                                                    <td>03</td>
                                                                    <td><a href="#">Jackson</a></td>
                                                                    <td><a href="#">John Smith</a></td>
                                                                    <td>
                                                                        <div class="sparkbar" data-color="#00a65a"
                                                                            data-height="20">English</div>
                                                                    </td>
                                                                    <td>8:00 AM</td>
                                                                    <td>10:00 AM</td>


                                                                </tr>
                                                                <tr>
                                                                    <td>04</td>
                                                                    <td><a href="#">Jackson</a></td>
                                                                    <td><a href="#">John Smith</a></td>
                                                                    <td>
                                                                        <div class="sparkbar" data-color="#00a65a"
                                                                            data-height="20">English</div>
                                                                    </td>
                                                                    <td>8:00 AM</td>
                                                                    <td>10:00 AM</td>


                                                                </tr>
                                                                <tr>
                                                                    <td>05</td>
                                                                    <td><a href="#">Jackson</a></td>
                                                                    <td><a href="#">John Smith</a></td>
                                                                    <td>
                                                                        <div class="sparkbar" data-color="#00a65a"
                                                                            data-height="20">English</div>
                                                                    </td>
                                                                    <td>8:00 AM</td>
                                                                    <td>10:00 AM</td>


                                                                </tr>






                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- /.table-responsive -->
                                                </div>
                                                <!-- /.card-body -->
                                                <div class="card-footer clearfix">
                                                    <a href="javascript:void(0)"
                                                        class="btn btn-sm btn-primary float-left">Book New Class</a>
                                                    <a href="javascript:void(0)"
                                                        class="btn btn-sm btn-secondary float-right">View All
                                                        Classes</a>
                                                </div>
                                                <!-- /.card-footer -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
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
                <img src="{{ asset('theme_asset/dist/img/TLLogo.png') }}"
                    style="width: 30px; height: 30px; margin-top: -3px;">
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
</body>

</html>


<?php 
    }
    else
    {
		// Go to welcome page
        header("Location: ".route('signin') );exit;
    }
?>