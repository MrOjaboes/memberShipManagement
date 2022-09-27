
    <table>
        <thead>
            <tr>
                <th>Lga ID</th>
                <th>Name</th>
                <th>State ID</th>
            </tr>
        </thead>
       <tbody>
        @foreach ($lga as $data)
        <tr>
            <td>{{ $data->id}}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->state_id }}</td>
        </tr>
    @endforeach
       </tbody>
    </table>
