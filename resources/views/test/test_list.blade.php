
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <a href="{{ url('admin/test/create') }}">Create</a>

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

            @foreach ($tests as $test)   
                <tr>
                    <th scope="row">{{ $test->id }}</th>
                    <td>
                        <p>{{ $test->name }}</p>
                    </td>
                    <td>
                        <p>{{ $test->description }}</p>
                    </td>
                    <td>
                        <a href="{{ url('admin/test/edit') }}/{{$test->id}}">Edit</a>
                        <a href="{{ url('admin/test/delete') }}/{{$test->id}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>

