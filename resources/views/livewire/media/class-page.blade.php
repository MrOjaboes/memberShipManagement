<div class="card">
    <div class="ml-3">Children Class Collection</div>
    <div class="card-body">
        <table class="table table-responsive table-stripped table-hover">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($class as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>                      
                    </tr>
                @empty
                    <div>No Data Available</div>
                @endforelse ($children as $data)
            </tbody>
        </table>
    </div>

    <span class="float-right px-3 py-3"><b>{{ $class->links() }}</b></span>
</div>
