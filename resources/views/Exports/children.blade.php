
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Middle Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Member Id</th>
                <th>Image Id</th>
                <th>Class</th>
                <th>School</th>
                <th>Parent</th>
                <th>Date</th>
            </tr>
        </thead>
       <tbody>
        @foreach ($children as $data)
        <tr>
            <td>{{ $data->first_name}}</td>
            <td>{{ $data->last_name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->age_range->title }}</td>
            <td>{{ $data->gender }}</td>
            <td>{{ $data->hog_member_id }}</td>
            <td>{{ $data->image_id }}</td>
            <td>{{ $data->class->title }}</td>
            <td>{{ $data->school }}</td>
            <td>{{ $data->parent->first_name }} {{ $data->parent->last_name }}</td>
            <td>{{ \Carbon\Carbon::parse($data->created_at)->format('d/m/Y')}}</td>
        </tr>
    @endforeach
       </tbody>
    </table>
