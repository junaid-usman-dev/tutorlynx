
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <a href="#">Create</a>
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
                        <a href="{{ url('admin\tutor\edit') }}\{{ $tutor->id }}">Edit</a>
                        <a href="{{ url('admin\tutor\delete') }}\{{ $tutor->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>

