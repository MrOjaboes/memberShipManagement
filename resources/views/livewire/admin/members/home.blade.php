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
            <div class="col-md-12">
                <x-member-search />
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-stripped table-hover">
            <thead class="bg-danger text-white">
                <tr>
                    <th>User Name</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>Member ID</th>
                    <th>Date</th>
                </tr>
            </thead>


            <tbody>
                @foreach ($users as $user)

                        <tr class="text-bold">
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->profile->fullname ?? 'Loading...' }}</td>
                            <td>{{ $user->profile->email ?? 'Loading...' }}</td>
                            <td>{{ $user->profile->contact_one ?? 'Loading...' }}</td>
                            <td>{{ $user->profile->gender ?? 'Loading...' }}</td>
                            <td>{{ $user->profile->memberId ?? 'Loading...' }}</td>
                            <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d D, M Y') ?? 'Loading...' }}
                            </td>

                        </tr>
                    
                @endforeach
            </tbody>

        </table>

    </div>

    <!-- /.card-body -->

    <!-- /.card-footer -->

    <span class="float-right px-3 py-3"><b>{{ $users->links() }}</b></span>
</div>
