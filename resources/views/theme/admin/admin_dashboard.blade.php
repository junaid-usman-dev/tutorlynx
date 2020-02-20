
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
    <!-- Theme style -->
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
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard <span class="text-md">(Admin)</span></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box"><span class="info-box-icon bg-info elevation-1"><em
                                        class="fas fa-users"></em></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Total Studens</span>
                                    <span class="info-box-number">
                                        <?php echo count( $students ) ;?>
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-star"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total Tutors</span>
                                    <span class="info-box-number"><?php echo count( $tutors ) ;?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix hidden-md-up"></div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-book"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total Subjects</span>
                                    <span class="info-box-number"><?php echo count( $subjects ) ;?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-primary elevation-1"><i
                                        class="fas fa-bookmark "></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total Courses</span>
                                    <span class="info-box-number">20</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->



                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <div class="col-md-12">

                            <div class="row">
                                <!-- /.col -->

                                <div class="col-md-6">
                                    <!-- Tutors LIST -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Latest Students <span
                                                    class="badge badge-info">8</span></h3>

                                            <div class="card-tools">

                                                <button type="button" class="btn btn-tool"
                                                    data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                </button>

                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body p-0">
                                            <ul class="users-list clearfix">

                                                <?php // $i=0; ?>
                                                {{-- @foreach ($students as $student) --}}
                                                    <?php // $i += 1; ?> 
                                                    {{-- @if ($i > 8) --}}
                                                        <?php // break; ?>
                                                    {{-- @else --}}
                                                        {{-- <li> --}}
                                                            {{-- <img src="/{{ $student->images->path }}/{{ $student->images->name }}" --}}
                                                                {{-- width="200" height="200" alt="User Image"> --}}
                                                            {{-- <a class="users-list-name" href="#">{{ $student->first_name }}</a> --}}
                                                            {{-- <span class="users-list-date">Today</span> --}}
                                                        {{-- </li> --}}
                                                    {{-- @endif --}}
                                                {{-- @endforeach --}}

                                                <li>
                                                    <img src="{{ asset('theme_asset/dist/img/user1-128x128.jpg') }}" alt="User Image">
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
                                        <div class="card-footer text-center"><a href="javascript::">View All
                                                Students</a></div>
                                        <!-- /.card-footer -->
                                    </div>
                                    <!--/.card -->
                                </div>

                                <div class="col-md-6">
                                    <!-- Tutors LIST -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Latest Tutors <span
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

                                                <?php // $tutor_count=0; ?>
                                                {{-- @foreach ($tutors as $tutor) --}}
                                                    <?php // $tutor_count += 1; ?>

                                                    {{-- @if ($tutor_count > 8) --}}
                                                        <?php // break; ?>
                                                    {{-- @else --}}
                                                        {{-- <li> --}}
                                                            {{-- <img src="/{{ $tutor->images->path }}/{{ $tutor->images->name }}" --}}
                                                                {{-- width="200" height="200" alt="User Image"> --}}
                                                            {{-- <a class="users-list-name" href="#">{{ $tutor->first_name }}</a> --}}
                                                            {{-- <span class="users-list-date">Today</span> --}}
                                                        {{-- </li> --}}
                                                    {{-- @endif --}}
                                                {{-- @endforeach --}}

                                                <li>
                                                <img src="{{ asset('theme_asset/dist/img/user1-128x128.jpg') }}" alt="User Image">
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
                                        <div class="card-footer text-center">
                                            <a href="javascript::">View All Tutors</a>
                                        </div>
                                        <!-- /.card-footer -->
                                    </div>
                                    <!--/.card -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->


                        </div>
                        <!-- /.col -->

                        {{-- <div class="col-md-4">


                            <!-- DIRECT CHAT -->
                            <div class="card direct-chat direct-chat-warning">
                                <div class="card-header">
                                    <h3 class="card-title">Recent Chat</h3>

                                    <div class="card-tools">
                                        <span data-toggle="tooltip" title="3 New Messages"
                                            class="badge badge-primary">3</span>
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                class="fas fa-minus"></i>
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
                                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
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
                                                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
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
                                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                                <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
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
                                                <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
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
                                                        <span class="contacts-list-msg">I will be waiting for...</span>
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
                                                        <span class="contacts-list-msg">I'll call you back at...</span>
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
                                                        <span class="contacts-list-msg">Where is your new...</span>
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
                                                        <span class="contacts-list-msg">Can I take a look at...</span>
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
                                                        <span class="contacts-list-msg">Never mind I found...</span>
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

                        </div> --}}
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->


                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- TABLE: LATEST ORDERS -->
                                    <div class="card">
                                        <div class="card-header border-transparent">
                                            <h3 class="card-title">Latest Tests</h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
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
                                                            <th>Title</th>
                                                            <th>Subject</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        {{-- @foreach ($tests as $test)
                                                        <tr>
                                                            <td>01</td>
                                                            <td><a href="#">{{ $test->name }}</a></td>
                                                            <td>{{ $test->description }}</td>
                                                        </tr>
                                                        @endforeach --}}

                                                        <tr>
                                                            <td>01</td>
                                                            <td><a href="#">English Test</a></td>
                                                            <td>description text description text </td>
                                                        </tr>
                                                        <tr>
                                                            <td>02</td>
                                                            <td><a href="#">Math Test</a></td>
                                                            <td>description text description text </td>
                                                        </tr>
                                                        <tr>
                                                            <td>03</td>
                                                            <td><a href="#">Computer Test</a></td>
                                                            <td>description text description text </td>
                                                        </tr>
                                                        <tr>
                                                            <td>04</td>
                                                            <td><a href="#">Computer Test</a></td>
                                                            <td>description text description text </td>
                                                        </tr>
                                                        <tr>
                                                            <td>05</td>
                                                            <td><a href="#">Computer Test</a></td>
                                                            <td>description text description text </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer clearfix">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-primary float-left">Book
                                                New Test</a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-secondary float-right">View All Tests</a>
                                        </div>
                                        <!-- /.card-footer -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- TABLE: LATEST ORDERS -->
                                    <div class="card">
                                        <div class="card-header border-transparent">
                                            <h3 class="card-title">Upcoming Classes</h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
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
                                            <a href="javascript:void(0)" class="btn btn-sm btn-primary float-left">Book
                                                New Class</a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-secondary float-right">View All Classes</a>
                                        </div>
                                        <!-- /.card-footer -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!--/. container-fluid -->
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
        @include('theme.admin.inc.footer')
        {{-- End Footer     --}}
    
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
        header("Location: ".url('/admin/signin'));exit;
    }
?>