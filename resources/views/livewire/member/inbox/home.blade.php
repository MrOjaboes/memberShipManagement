<div class="card" style="height: 350px;overflow-y:scroll;">
    <div class="card-header">
        <h3 class="card-title">Inbox</h3>

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
            @foreach ($messages as $content)
                <li class="item">

                    <div class="product-info">
                       @if ($content->is_read == 0)
                       <a href="{{ route('member.message',$content->id) }}" wire:click="closeMessage({{ $content->id }})" class="product-title text-success">{{ substr($content->message, 0, 35) }}.......</a>
                       @else
                       <span class="product-title text-danger">{{ $content->message }}</span>
                       @endif
                           <span class="float-right px-5">
                            @if ($content->is_read == 0)
                                <button class="btn btn-sm btn-success">Mark As Read</button>
                            @else
                                <button class="btn btn-sm btn-danger">Closed</button>
                            @endif
                        </span>
                        {{-- <span class="product-description">
                            {{ substr($content->message, 0, 35) }}.......
                        </span> --}}
                    </div>
                </li>
            @endforeach

        </ul>
    </div>
    <!-- /.card-body -->

    <!-- /.card-footer -->
</div>
