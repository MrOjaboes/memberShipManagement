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
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-stripped table-hover">
            <thead class="bg-danger text-white">
                <tr>
                    <th>Event Title</th>
                    <th>Date</th>
                </tr>
            </thead>

            @forelse ($members as $member)
                <tbody>
                    <tr class="">
                        <td><h3><b><a href="">{{ $member->title }}</a></b></h3></td>
                        <td>{{ \Carbon\Carbon::parse($member->created_at)->format('d D, M Y') }}</td>

                    </tr>
                @empty
                    <span class="text-success">Loading.....</span>
                </tbody>
            @endforelse

        </table>

    </div>

    <!-- /.card-body -->

    <!-- /.card-footer -->

<span class="float-right px-3 py-3"><b>{{ $members->links() }}</b></span>
</div>
