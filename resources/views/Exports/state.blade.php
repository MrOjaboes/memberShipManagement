<table>
    <thead>
        <tr>
            <th>State ID</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($states as $state)
            <tr>
                <td>{{ $state->id }}</td>
                <td>{{ $state->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
