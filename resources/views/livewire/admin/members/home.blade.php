<div class="card">
    <div class="card-header">
        <h3 class="card-title">Recently Added Registered Members</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>Member ID</th>
                    <th>Date</th>
                </tr>
            </thead>

            @forelse ($users as $user)
                <tbody>
                    <tr class="text-bold">
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->profile->email ?? 'Loading...' }}</td>
                        <td>{{ $user->profile->contact_one ?? 'Loading...' }}</td>
                        <td>{{ $user->profile->gender ?? 'Loading...' }}</td>
                        <td>{{ $user->profile->memberId ?? 'Loading...' }}</td>
                        <td>{{ $user->profile->created_at ?? 'Loading...' }}</td>

                    </tr>
                @empty
                    <span class="text-success">Loading.....</span>
                </tbody>
            @endforelse

        </table>

    </div>

    <!-- /.card-body -->

    <!-- /.card-footer -->

<span class="float-right px-3 py-3"><b>{{ $users->links() }}</b></span>
</div>
