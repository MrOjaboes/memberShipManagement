<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        #attendants {
            border-collapse: collapse;
            width: 100%;
        }


        #attendants th {
            border: 1px solid #ddd;
            padding: 2px 5px;
        }
        #attendants td{
            border: 1px solid #ddd;
            padding: 15px;
        }

        #attendants tr:nth-child(even) {
            background-color: #F8F9F9;

        }

        #attendants th {
            padding-top: 2px;
            padding-bottom: 2px;
            text-align: left;
            background-color: #DB261D;
            color: #fff;
            border: 1px solid #ddd;
        }

        h2 {
            text-align: center;
            color: #DB261D;
        }

    </style>
</head>

<body>
    <h2>Members Register</h2>
    <table id="attendants">
        <thead>
            <tr>
                <th style="width: 2%"><b> S/N</b></th>
                <th><b> Name</b></th>
                <th><b> Contact</b></th>
                <th><b> Email</b></th>
                <th><b> Member ID</b></th>
                <th><b> Gender</b></th>
                <th><b> Marital Status</b></th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($members as $record)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $record->fullname }}</td>
                    <td>{{ $record->contact_one ?? $record->contact_two  }}</td>
                    <td>{{ $record->email }}</td>
                    <td>{{ $record->memberId }}</td>
                    <td>{{ $record->gender }}</td>
                    <td>{{ $record->marital_status }}</td>

                </tr>
                @php
                    $i++;
                @endphp
            @endforeach
        </tbody>


    </table>
</body>

</html>
