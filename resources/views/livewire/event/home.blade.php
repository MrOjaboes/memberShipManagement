<div class="card">
    <div class="card-header">
        <h3 class="card-title">Recently Added Events &nbsp;&nbsp;&nbsp;&nbsp;<span><a
                    href="{{ route('admin.event') }}" class="btn btn-sm btn-danger">New Event</a></span></h3>

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
        <ul class="products-list product-list-in-card pl-2 pr-2">
            @foreach ($events as $event)
                <li class="item">
                    <div class="product-img">
                        <img src="{{ asset('/Events/' . $event->caption) }}" alt="Product Image"
                            class="img-size-50">
                    </div>
                    <div class="product-info">
                        <a href="{{ route('admin.event.edit', $event->id) }}"
                            class="product-title">{{ $event->title }}
                            {{-- <span class="label label-danger text-dark float-right">{{ \Carbon\Carbon::parse($event->created_at)->format('d D, M Y') }}</span>--}}    </a>
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
