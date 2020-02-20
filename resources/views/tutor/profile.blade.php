
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Tutor Profile Page</h1>

    <img src="http://127.0.0.1:8000/images/835846562.jpg" width="100" height="100" />

    <p>Name : {{ $tutor->first_name }} {{ $tutor->last_name }}</p>
  
    <p>Price Per Hour : ${{ $tutor->price_per_hour }}/hr</p>
    <p>Summary: {{ $tutor->summary }}</p>
    <p>General Availability: 12:00PM - 5:00PM</p>
    <p>Subject Offered: 
        @foreach ($tutor->subjects as $subject)
            {{ $subject->name }},  
        @endforeach
    </p>
    <h3>Review</h3>
    <form action="{{ Route('tutor.review') }}" method="GET" id="form_review" >
        
        Student ID:<br>
        <input type="text" name="student_id" id="student_id" placeholder="Student">
        <br>
        Tutor ID:<br>
        <input type="text" name="tutor_id" id="tutor_id" value="{{ $tutor->id }}">
        <br>
        Title:<br>
        <input type="text" name="title" id="title" placeholder="Title">
        <br>
        Description:<br>
        <input type="text" name="desrciption" id="desrciption" placeholder="Desrciption">
        <br>
        Star Rating:<br>
        <input type="text" name="star" id="star" placeholder="Star">
        <br>
        <br><br>
        <input type="submit" value="Submit" >

    </form> 
    <br>

    <a href="{{ url('student/add/favorit/tutor/2') }}/{{ $tutor->id }}">Add To Favorite</a>
   
</body>
</html>

