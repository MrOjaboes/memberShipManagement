<div class="card">
    <div class="ml-3">Church Collection</div>
    <div class="card-body">
        <table class="table table-responsive table-stripped table-hover">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($church as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->location }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d D, M Y') }}</td>

                    </tr>
                @empty
                    <div>No Data Available</div>
                @endforelse ($children as $data)
            </tbody>
        </table>
    </div>

    <span class="float-right px-3 py-3"><b>{{ $church->links() }}</b></span>
</div>
