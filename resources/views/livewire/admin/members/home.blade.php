<div class="card">
    <div class="card-header">

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="row px-5 pt-2">
            <div class="col-md-8">
                <x-member-search />
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-2">
                <div class="text-center"><a href="{{ route('members.pdf') }}" class="btn btn-danger btn-md">Export Pdf</a></div>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-stripped table-hover table-responsive">
            <thead class="bg-danger text-white">
                <tr>

                    <th>S/N</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Occupation</th>
                    <th>Fellowship Group</th>
                    <th>Friendship centre</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>Member ID</th>
                    <th>Details </th>
                </tr>
            </thead>


            <tbody>
                @php
                    $n = 1;
                @endphp
                @foreach ($members as $member)
                    <tr class="text-bold">
                        <td>{{ $n }}</td>
                        <td>{{ $member->fullname ?? 'Loading...' }}</td>
                        <td>{{ $member->email ?? 'Loading...' }}</td>
                        <td>{{ $member->occupation ?? 'Loading...' }}</td>
                        <td>{{ $member->fellowship_group ?? 'Loading...' }}</td>
                        <td>{{ $member->friendship_centre ?? 'Loading...' }}</td>
                        <td>{{ $member->contact_one ?? 'Loading...' }}</td>
                        <td>{{ $member->gender ?? 'Loading...' }}</td>
                        <td>{{ $member->memberId ?? 'Loading...' }}</td>

                        <td><a href="{{ route('admin.memberDetails', $member->id) }}"
                                class="btn btn-sm btn-danger">Details</a></td>
                    </tr>
                    @php
                        $n++;
                    @endphp
                @endforeach
            </tbody>

        </table>

    </div>

    <!-- /.card-body -->

    <!-- /.card-footer -->

    <span class="float-right px-3 py-3"><b>{{ $members->links() }}</b></span>
</div>
