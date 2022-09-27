<table>
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Middle Name</th>
            <th>Email</th>
            <th>Primary Phone</th>
            <th>Secondary Phone</th>
            <th>Gender</th>
            <th>Birth Date</th>
            <th>Member ID</th>
            <th>Image ID</th>
            <th>Leader Status</th>
            <th>Wedding Date</th>
            <th>Marital Status</th>
            <th>Occupation</th>
            <th>Fellowship Group</th>
            <th>Functional Group</th>
            <th>Friendship Centre</th>
            <th>Church</th>
            {{-- Address Section --}}
            <th>House Number</th>
            <th>Street</th>
            <th>City</th>
            <th>Zip Code</th>
            <th>LGA</th>
            <th>State</th>
            <th>Country</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($members as $member)
            <tr>
                <td>{{ $member->first_name }}</td>
                <td>{{ $member->last_name }}</td>
                <td>{{ $member->middle_name }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->primary_phone }}</td>
                <td>{{ $member->secondary_phone }}</td>
                <td>{{ $member->gender }}</td>
                <td>{{ $member->day }}/{{ $member->month }}/{{ $member->year }}</td>
                <td>{{ $member->hog_member_id }}</td>
                <td>{{ $member->image_id }}</td>
                <td>
                    @if ($member->is_leader == 1)
                        true
                    @else
                        false
                    @endif
                </td>
                <td>
                    @if ($member->marital_status == 'Married')
                        {{ $member->wedding_date }}
                    @else
                        Null
                    @endif
                </td>
                <td>{{ $member->marital_status }}</td>
                <td>{{ $member->occupation }}</td>
                <td>{{ $member->fgroup->title }}</td>
                <td>{{ $member->fngroup->title }}</td>
                <td>{{ $member->church->title }}</td>
                  {{-- Address Section --}}
                  <td>{{ $member->address->house_number }}</td>
                  <td>{{ $member->address->street }}</td>
                  <td>{{ $member->address->city }}</td>
                  <td>{{ $member->address->zip_code }}</td>
                  <td>{{ $member->address->lga->name}}</td>
                  <td>{{ $member->address->state->name }}</td>
                  <td>{{ $member->address->country }}</td>
                  <td>{{ $member->address->status }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
