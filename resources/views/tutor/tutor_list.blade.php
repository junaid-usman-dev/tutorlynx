
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div style="display: inline-block" >
        <p>Filter By Subject</p>
        <select id="subject" name="subject">
            <option value="all">All Subject</option>
            <option value="english">English</option>
            <option value="math">Math</option>
            <option value="chemistry">Chemistry</option>
            <option value="physics">Pysics</option>
        </select>
    </div>

    <div style="display: inline-block; margin-left: 10px;">
        <p>Filter By Star Rating</p>
        <select>
            <option value="all">All Stars</option>
            <option value="5">5 Stars</option>
            <option value="4">4 Starts</option>
            <option value="3">3 Stars</option>
            <option value="2">2 Stars</option>
            <option value="1">1 Star</option>
        </select>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Picture</th>
                <th scope="col">Name</th>
                <th scope="col">Price Per Hour</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($tutors as $tutor)   
                <tr>
                    <th scope="row">{{ $tutor->id }}</th>
                    <td>
                        <img src="http://127.0.0.1:8000/images/835846562.jpg" width="50" height="50" />
                    </td>
                    <td>
                        <p>{{ $tutor->first_name }} {{ $tutor->last_name }}</p>
                    </td>
                    <td>
                        <p>${{ $tutor->price_per_hour }}/hr</p>
                    </td>
                    <td>
                        <a href="{{ url('tutor/profile/') }}/{{ $tutor->id }}">View Profile</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>

