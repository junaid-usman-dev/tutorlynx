
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
                <th scope="col">Test</th>
                <th scope="col">Score</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($results->tests as $result)   
                <tr>
                    <th scope="row">
                        <p>{{ $result->id }}</p>
                    </th>
                    <td>
                        <p>{{ $result->id }}</p>
                    </td>
                    <td>
                        <p>80%</p>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>

