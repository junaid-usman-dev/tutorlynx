
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    </p><?php echo session()->get('key'); ?></p>
    <a href="{{ url('/admin/create') }}">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">email Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Birthday</th>
                <th scope="col">Country</th>
                <th scope="col">State</th>
                <th scope="col">City</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                    <td>{{ $student->email_address }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->birthday }}</td>
                    <td>{{ $student->country }}</td>
                    <td>{{ $student->state }}</td>
                    <td>{{ $student->city }}</td>

                    <td>
                        <a href="{{ url('/student/edit') }}/{{ $student->id }}">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('admin/student/delete') }}/{{ $student->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

