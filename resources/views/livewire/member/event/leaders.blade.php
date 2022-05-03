<div class="card" style="height: 350px;overflow-y:scroll;">
    <div class="card-header">
        <h3 class="card-title">Upcoming leaders Events</h3>

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
                        <img src="{{ asset('/Leaders_Events/' . $event->caption) }}" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                       @if ($event->status == 0)
                       <a href="{{ route('member.leadereventDetails',$event->id) }}" class="product-title">{{ $event->title }}</a>
                       @else
                       <span class="product-title text-danger">{{ $event->title }}</span>
                       @endif
                           <span class="float-right px-5">
                            @if ($event->status == 0)
                                <button class="btn btn-sm btn-success">Active</button>
                            @else
                                <button class="btn btn-sm btn-danger">Closed</button>
                            @endif
                        </span>
                        <span class="product-description">
                            {{ substr($event->description, 0, 35) }}.......
                        </span>
                    </div>
                </li>
            @endforeach

        </ul>
    </div>
    <!-- /.card-body -->

    <!-- /.card-footer -->
</div>
