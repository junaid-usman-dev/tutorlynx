
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
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($subjects as $subject)   
                <tr>
                    <th scope="row">{{ $subject->id }}</th>
                    <td>
                        <p>{{ $subject->name }}</p>
                    </td>
                    <td>
                        <p>${{ $subject->description }}/hr</p>
                    </td>
                    <td>
                        <a href="{{ url('admin/subject/edit') }}/{{$subject->id}}">Edit</a>
                        <a href="{{ url('admin/subject/delete') }}/{{$subject->id}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>

