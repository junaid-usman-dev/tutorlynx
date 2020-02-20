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
        <img src="http://127.0.0.1:8000/images/1792760661.png" with="200" height="200" alt="profile_image"/>
        <h1>I am Student</h1>
        <h1>{{ $student->first_name }} {{ $student->last_name }}</h1>
        <p>Address: {{ $student->city }}, {{ $student->state }}, {{ $student->country }}, {{ $student->zipcode }}</p>
        <p>email: {{ $student->email_address }}</p>
        <p>Phone: {{ $student->phone }}</p>
        <p>Birthday: {{ $student->birthday }}</p>
        
        <a href="{{ url ('student/edit/') }}/{{ $student->id }}"> Edit Profile</a> | 
        <a href="{{ url('tutor/list') }}"> Find Tutor</a> | 
        <a href="{{ url('student/favorite/tutors') }}/{{ $student->id }}"> Favorite Tutor</a> | 
        <a href="{{ url('student/message/contact-list') }}/{{ $student->id }}"> Contacts</a> | 


    </div>

</body>
</html>