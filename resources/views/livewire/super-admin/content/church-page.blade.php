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
        <div class="row py-3">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('message') }}
                    </div>
                @endif
                <div class="col-md-1"></div>
            </div>
        </div>
        @if ($updateMode)
        @include('livewire.super-admin.content.editChurch')
    @else
        @include('livewire.super-admin.content.addChurch')
    @endif

    </div>

</div>


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
        <table class="table">
            <thead class="bg-danger text-white">
                <tr>

                    <th>S/N</th>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Description</th>
<th></th>
                </tr>
            </thead>

            <tbody>
                @php
                    $n = 1;
                @endphp
                @foreach ($churches as $church)
                    <tr class="text-bold">
                        <td>{{ $n }}</td>
                        <td>{{ $church->title ?? 'Loading...' }}</td>
                        <td>{{ $church->location ?? 'Loading...' }}</td>
                        <td>{{ $church->description ?? 'Loading...' }}</td>
                        <td>
                            <button wire:click="edit({{ $church->id }})" class="btn btn-outline-success text-info"><i class="fas fa-pencil-alt"></i></button>
                        </td>
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

    <span class="float-right px-3 py-3"><b>{{ $churches->links() }}</b></span>
</div>
