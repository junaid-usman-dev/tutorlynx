<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="container" style="width: 8000px; height: 1000px; color:gray">
        <h1>Tutor Homge Page</h1>
        <img src="http://127.0.0.1:8000/images/913035555.jpg" with="200" height="200" alt="profile_image"/>
        <h1>I am Tutor</h1>
        <h1>{{ $tutor->first_name }} {{ $tutor->last_name }}</h1>
        <p>Address: {{ $tutor->city }}, {{ $tutor->state }}, {{ $tutor->country }}, {{ $tutor->zipcode }}</p>
        <p>email: {{ $tutor->email_address }}</p>
        <p>Phone: {{ $tutor->phone }}</p>
        <p>Birthday: {{ $tutor->birthday }}</p>
        
        <br><br><br><br>
        <a href="{{ url('/tutor/edit') }}/{{ $tutor->id }}">Edit Profile</a> | 
        <a href="{{ url('tutor/general-availability') }}/{{ $tutor->id }}">Set General Availability </a> | 
        <a href="{{ route('tutor.test.list') }}">Test</a> | 
        <a href="{{ url('tutor/test-results') }}">Result</a> | 
        <a href="#">Contacts</a> |


        
    </div>

</body>
</html>