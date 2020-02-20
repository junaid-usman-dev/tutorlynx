<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h3>Admin Home Page</h3>

    <a href="{{ url('/admin/index') }}">Admin</a>
    <a href="{{ url('admin/subject/list') }}">Subject</a>
    <a href="{{ url('admin/student/list') }}">Student</a>

</body>
</html>