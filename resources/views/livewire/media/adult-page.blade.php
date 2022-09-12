<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Member ID</th>
                    <th>Gender</th>
                    <th>Marital Status</th>
                    <th>Birth Date</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($members as $member)
                    <tr>
                        <td>{{ $member->first_name }}</td>
                        <td>{{ $member->last_name }}</td>
                        <td>{{ $member->hog_member_id }}</td>
                        <td>{{ $member->gender }}</td>
                        <td>{{ $member->marital_status }}</td>
                        <td>{{ $member->birth_date }}</td>
                        <td>{{ \Carbon\Carbon::parse($member->created_at)->format('d D, M Y') }}</td>
                    </tr>
                @empty
                    <div>No Data Available</div>
                @endforelse ($children as $data)
            </tbody>
        </table>
    </div>

    <span class="float-right px-3 py-3"><b>{{ $members->links() }}</b></span>
</div>
