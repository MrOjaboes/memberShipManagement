<div class="col-md-10">
    <div class="card">
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show px-3" role="alert">
                <strong><i class="fas fa-check-circle"></i></strong> {{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span style="color:white;" aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show px-3 py-3" role="alert">
                <strong><i class="fas fa-check-circle"></i></strong> {{ session()->get('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span style="color:white;" aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="card-body">
            <div class="tab-content">
                <div class="active tab-pane" id="login">
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">
                            <form wire:submit.prevent="{{ $showEdit ? 'updateLink' : 'storeLink' }}">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                                <input type="text" required placeholder="Event heading"
                                                class="form-control input-lg" wire:model="state.title" id="">

                                        </div>
                                        <div class="form-group">
                                                <input type="url" required placeholder="Insert Your Link Here"
                                                class="form-control input-lg" wire:model="state.link" id="">
                                        </div>


                                       <div class="form-group">
                                        <button class="btn btn-danger" type="submit">Add
                                            Link</button>
                                       </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div><!-- /.card-body -->
    </div>

    <div class="card pt-3">
        <div class="card-header">
            <h3 class="card-title">Recently Added Links</h3>

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
        <div class="card-body p-0" style="height: 200px;overflow-y:scroll;">
            <ul class="products-list product-list-in-card pl-2 pr-2">
                @foreach ($events as $event)
                    <li class="item">

                        <div class="product-info">
                            <a href="" wire:click.prevent="edit({{ $event }})"
                                class="product-title">{{ $event->title }}
                                <span
                                    class="label label-danger text-dark float-right">{{ \Carbon\Carbon::parse($event->created_at)->format('d D, M Y') }}</span></a>
                            <span class="label label-danger text-dark float-right px-5">
                                @if ($event->status == 0)
                                    <button wire:click.prevent="closeEvent({{ $event->id }})" class="btn btn-sm btn-success">Active</button>
                                @else
                                    <button class="btn btn-sm btn-danger">Closed</button>
                                @endif
                            </span>
                            <span class="product-description">
                                {{ substr($event->description, 0, 43) }}
                            </span>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
        <!-- /.card-body -->

        <!-- /.card-footer -->
    </div>

    <!-- /.card -->
</div>


















