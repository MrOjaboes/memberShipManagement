<div class="card">
    <div class="ml-3">Age Range Collection</div>
    <div class="card-body">
        <table class="table table-responsive table-stripped table-hover">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($age as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->value }}</td>
                    </tr>
                @empty
                    <div>No Data Available</div>
                @endforelse ($children as $data)
            </tbody>
        </table>
    </div>

    <span class="float-right px-3 py-3"><b>{{ $age->links() }}</b></span>
</div>
