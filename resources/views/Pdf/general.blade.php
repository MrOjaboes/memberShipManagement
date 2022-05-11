<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Lists</title>
    <style>
        #attendants {
            border-collapse: collapse;
            width: 100%;
        }

        #attendants td,
        #attendants th {
            border: 1px solid #ddd;
            padding: 15px;
        }

        #attendants tr:nth-child(even) {
            background-color: #F8F9F9;

        }

        #attendants th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #DB261D;
            color: #fff;
            border: 1px solid #ddd;
        }

        h2 {
            text-align: center;
            color: #2f5479;
        }

    </style>
</head>

<body>
    <h2>Attendants List</h2>
    <table id="attendants">
        <thead>
            <tr>
                <th>
                    <b> S/N</b>
                </th>

                <th>
                    <b> Name</b>
                </th>
                <th>
                    <b> Contact</b>
                </th>
                <th>
                    <b> Email</b>
                </th>



            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($members as $record)
                <tr>
                    <td><a>{{ $i }}</a></td>
                    <td><a> {{ App\Http\Controllers\HomeController::GetUserById($record->user_id) }}</a></td>
                    <td><a>{{ $record->contact }}</a></td>
                    <td><a>{{ $record->email }}</a></td>


                </tr>
                @php
                    $i++;
                @endphp
            @endforeach
        </tbody>


    </table>
</body>

</html>
