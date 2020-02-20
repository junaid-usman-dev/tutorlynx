<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TutorLynx</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('theme_asset/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('theme_asset/dist/css/adminlte.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body>
    <?php 
        // $username = $customer->username;
    ?>

    <h1>Email Received. </h1>
    {{-- <p>To update password, click <a href="{{url('/forgetpassword/reset')}}/{{$customer->username}}/{{ $customer->verification_key}}">here</a></p>
    <p>{{ $verification_key }}</p> --}}
  
        {{-- @foreach ($customer-all() as $customer)
            <p>This is Status {{ $customer->status }}</p>
            <p>This is Address {{ $customer->email_address }}</p>
            <p>This is Username {{ $customer->username }}</p>
        {{-- @endforeach
    @endif --}}

   

 <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('theme_asset/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('theme_asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('theme_asset/dist/js/adminlte.min.js') }}"></script>

</body>
</html>