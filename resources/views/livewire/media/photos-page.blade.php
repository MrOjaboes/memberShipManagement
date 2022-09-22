<div class="container">
    @if (count($images) == 0)
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">No Record Available</h2>
        </div>
    </div>
    @else
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="">
                    <ul class="nav nav-pills">
                        @if ($selectedRows)
                            <a href="#" wire:click.prevent="changeStatus" class="nav-link active btn mr-3">
                                Mark true
                            </a>
                        @endif

                        <a href="{{ route('children-import') }}" class="nav-link active btn mr-3">
                            Import Children
                        </a>
                        <a href="{{ route('adult-import') }}" class="nav-link active btn">
                            Import Adult
                        </a>


                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-check">
                    <input type="checkbox" wire:model="selectPageRows" class="form-check-input" id="exampleCheck1">
                    All
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-6">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="row py-3">
            @foreach ($images as $image)
                <div class="col-md-3">
                    <a href="{{ route('media.add', $image->id) }}">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="form-check text-left">
                                    <input type="checkbox" wire:model="selectedRows" class="form-check-input"
                                        value="{{ $image->id }}" id="{{ $image->id }}">
                                </div>
                                <div class="text-center">
                                    <img class="img-thumbnail" style="padding:5px;max-height:230px;max-width:230px"
                                        src="{{ asset('Storage/CCTV/' . $image->image) }}" alt="" />
                                </div>
                                <h3 class="profile-username text-center"><b>{{ $image->image_id }}</b> </h3>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    @endif

</div>
