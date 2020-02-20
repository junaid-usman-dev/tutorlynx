
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
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
                <tr>
                    <th scope="row">{{ $admin->id }}</th>
                    <td>{{ $admin->first_name }} {{ $admin->last_name }}</td>
                    <td>{{ $admin->email_address }}</td>
                    <td>
                        <a href="{{ url('/admin/edit') }}/{{ $admin->id }}">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('/admin/destroy') }}/{{ $admin->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

