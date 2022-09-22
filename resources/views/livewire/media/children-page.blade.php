<div class="card">
    <div class="card-body">
        @include('layouts.children-search')
        <table class="table table-hover">
            <thead>
                <tr>

                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Member ID</th>
                    <th>Class</th>
                    <th>Birth Date</th>
                    <th>Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($children as $data)
                    <tr>
                        <td>{{ $data->first_name }}</td>
                        <td>{{ $data->last_name }}</td>
                        <td>{{ $data->hog_member_id }}</td>
                        <td>{{ $data->class ?? 'Loading' }}</td>
                        <td>{{ $data->birth_date }}</td>
                        <td>{{ \Carbon\Carbon::parse($data->created_at)->format('d D, M Y') }}</td>
                        <td>
                            <a href="{{ route('media.childrenDetails', $data->id) }}"
                                class="btn btn-danger btn-sm">Details</a>
                            {{-- <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button> --}}
                        </td>
                    </tr>
                @empty
                    <div>No Data Available</div>
                @endforelse ($children as $data)


            </tbody>
        </table>
    </div>
    <span class="float-right px-3 py-3"><b>{{ $children->links() }}</b></span>
</div>
