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
            <thead>
                <tr>
                    <th>Event Title</th>
                    <th>Date</th>
                </tr>
            </thead>

            @forelse ($events as $event)
                <tbody>
                    <tr class="">
                        <td><h3><b><a href="{{ route('admin.attendance.leadersmember',$event->id) }}">{{ $event->title }}</a></b></h3></td>
                        <td>{{ \Carbon\Carbon::parse($event->created_at)->format('d D, M Y') }}</td>

                    </tr>
                @empty
                    <span class="text-success">Loading.....</span>
                </tbody>
            @endforelse

        </table>

    </div>

    <!-- /.card-body -->

    <!-- /.card-footer -->

<span class="float-right px-3 py-3"><b>{{ $events->links() }}</b></span>
</div>
