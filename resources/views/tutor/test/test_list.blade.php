
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
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($tests as $test)   
                <tr>
                    <th scope="row">{{ $test->id}}</th>
                    <td>
                        <p>{{ $test->name }}</p>
                    </td>
                    <td>
                        <p>${{ $test->description }}/hr</p>
                    </td>
                    <td>
                        <a href="{{ url('/tutor/test-attempt') }}/{{ $test->id }}">Attempt</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>

