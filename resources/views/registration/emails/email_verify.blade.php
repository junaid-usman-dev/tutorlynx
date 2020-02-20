<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifiy</title>
</head>
<body>
    <p>Your email is verified, you can login now.</p>
    {{-- <p>{{ $key }}</p> --}}
    {{-- <p>{{ $username }}</p> --}}

    {{-- @if (count($customers) > 0)
        @foreach ( $customers as $customer )
            <p>{{ $customer->username }}</p>
            <p>{{ $customer->verification_key }}</p>
        @endforeach
    @endif --}}

    {{-- @if ($customers->username ==  "junaid"}} )
        <p>Change status to 1</p>
    @else
        <p>Not valide key</p>
    @endif --}}


    
    
</body>
</html>