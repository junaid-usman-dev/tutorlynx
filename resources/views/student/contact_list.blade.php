
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

   
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Logged User ID</th>
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
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user_id }}</th>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                    <td>{{ $user->email_address }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->birthday }}</td>
                    <td>{{ $user->country }}</td>
                    <td>{{ $user->state }}</td>
                    <td>{{ $user->city }}</td>
                    <td>
                        <a href="{{ url('student/message/view-all') }}/{{ $user_id }}/{{ $user->id }}">Conversation</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

