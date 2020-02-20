<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>General Availability</title>
</head>

<style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    th, td {
      padding: 5px;
      text-align: left;    
    }
</style>



<body>

    <h1>General Time Availability</h1>
    <form method="POST" action="#" id="time_availablity">
        {{-- <table class="">
            <thead>
                <tr>
                    <th scope="col">Time</th>
                    <th scope="col">Monday</th>
                    <th scope="col">Thuesday</th>
                    <th scope="col">Wednesday</th>
                    <th scope="col">Thursday</th>
                    <th scope="col">Friday</th>
                    <th scope="col">Saturday</th>
                    <th scope="col">Sunday</th>
                </tr>
            </thead>
            <tbody >
                <tr >
                    <th scope="row">
                        <p>Pre 12PM</p>
                    </th>
                    <td>
                        <input type="checkbox" name="vehicle" value="monday">
                    </td>
                    <td>
                        <input type="checkbox" name="vehicle" value="tuesday">
                    </td>
                    <td>
                        <input type="checkbox" name="vehicle" value="wednesday">
                    </td>
                    <td>
                        <input type="checkbox" name="vehicle" value="thursday">
                    </td>
                    <td>
                        <input type="checkbox" name="vehicle" value="friday">
                    </td>
                    <td>
                        <input type="checkbox" name="vehicle" value="saturday">
                    </td>
                    <td>
                        <input type="checkbox" name="vehicle" value="sunday">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <p>12PM-5:00PM</p>
                    </th>
                    <td>
                        <input type="checkbox" name="vehicle" value="monday">
                    </td>
                    <td>
                        <input type="checkbox" name="vehicle" value="tuesday">
                    </td>
                    <td>
                        <input type="checkbox" name="vehicle" value="wednesday">
                    </td>
                    <td>
                        <input type="checkbox" name="vehicle" value="thursday">
                    </td>
                    <td>
                        <input type="checkbox" name="vehicle" value="friday">
                    </td>
                    <td>
                        <input type="checkbox" name="vehicle" value="saturday">
                    </td>
                    <td>
                        <input type="checkbox" name="vehicle" value="sunday">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <p>After 5:00PM</p>
                    </th>
                    <td>
                        <input type="checkbox" name="vehicle" value="monday">
                    </td>
                    <td>
                        <input type="checkbox" name="vehicle" value="tuesday">
                    </td>
                    <td>
                        <input type="checkbox" name="vehicle" value="wednesday">
                    </td>
                    <td>
                        <input type="checkbox" name="vehicle" value="thursday">
                    </td>
                    <td>
                        <input type="checkbox" name="vehicle" value="friday">
                    </td>
                    <td>
                        <input type="checkbox" name="vehicle" value="saturday">
                    </td>
                    <td>
                        <input type="checkbox" name="vehicle" value="sunday">
                    </td>
                </tr>
            </tbody>
        </table> --}}

        start time <input type="date" id="start_time" name="start_time" placeholder="start time" />
        end time <input type="date" id="end_time" name="end_time" placeholder="end_time" />

        <br>
        <input type="submit" value="Submit">
        
    </form>
</body>
</html>

