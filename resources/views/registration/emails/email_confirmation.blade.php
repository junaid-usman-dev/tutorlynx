<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
            $username = $customer->username;
    ?>
    <p>To Confirm your email address, click <a href="{{ url('verify') }}/{{$username}}/{{$verification_key}}">here</a></p>
    <p>{{ $verification_key }}</p>
    {{-- <p>{{ $status }}</p> --}}
    {{-- @if (count($customer) > 0)
        @foreach ($customer-all() as $customer) --}}
            <p>This is Status {{ $customer->status }}</p>
            <p>This is Address {{ $customer->email_address }}</p>
            <p>This is Username {{ $customer->username }}</p>
        {{-- @endforeach
    @endif --}}



</body>
</html>