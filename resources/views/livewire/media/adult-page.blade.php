<div class="card">
    <div class="card-body">
        @include('layouts.member-search')
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Member ID</th>
                    <th>Gender</th>
                    <th>Marital Status</th>
                    <th>Birth Date</th>
                    <th>Contact</th>
                    <th></th>
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
                        <td>{{ $member->day }} - {{ $member->month }} - {{ $member->year }}</td>
                        <td>{{ $member->primary_phone }} </td>

                        <td>
                            <a href="{{ route('media.adultDetails',$member->id) }}" class="btn btn-danger btn-sm">Details</a>
                             {{-- <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button> --}}
                             </td>
                    </tr>
                @empty
                    <div>No Data Available</div>
                @endforelse ($children as $data)
            </tbody>
        </table>
    </div>

    <span class="float-right px-3 py-3"><b>{{ $members->links() }}</b></span>
</div>
