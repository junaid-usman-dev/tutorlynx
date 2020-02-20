
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
                <th scope="col">#</th>
                <th scope="col">Picture</th>
                <th scope="col">Name</th>
                <th scope="col">Price Per Hour</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($items as $item)   
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>
                        <img src="http://127.0.0.1:8000/images/835846562.jpg" width="50" height="50" />
                    </td>
                    <td>
                        <p>{{ $item->first_name }} {{ $item->last_name }}</p>
                    </td>
                    <td>
                        <p>${{ $item->price_per_hour }}/hr</p>
                    </td>
                    <td>
                        <a href="{{ url('tutor/profile/') }}/{{ $item->id }}">View Profile</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>

