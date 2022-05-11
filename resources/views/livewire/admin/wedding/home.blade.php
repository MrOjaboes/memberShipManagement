
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
                <x-birthdate-search />
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-stripped table-hover">
            <thead class="bg-danger text-white">
                <tr>
                    <th>Date Of Birth</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>Member ID</th>
                </tr>
            </thead>


            <tbody>
                @foreach ($users as $user)

                        <tr class="text-bold">
                            <td>{{ \Carbon\Carbon::parse($user->birth_date)->format('d D, M Y') ?? 'Loading...'}}</td>
                            <td>{{ $user->fullname ?? 'Loading...' }}</td>
                            <td>{{ $user->email ?? 'Loading...' }}</td>
                            <td>{{ $user->contact_one ?? 'Loading...' }}</td>
                            <td>{{ $user->gender ?? 'Loading...' }}</td>
                            <td>{{ $user->profile->memberId ?? 'Loading...' }}</td>
                             </tr>

                @endforeach
            </tbody>

        </table>

    </div>

    <!-- /.card-body -->

    <!-- /.card-footer -->

    
</div>
