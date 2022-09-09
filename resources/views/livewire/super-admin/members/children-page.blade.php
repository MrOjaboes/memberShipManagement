<div>
    <a class="btn btn-danger" href="{{ route('admin.children.add') }}">
        <i class="fas fa-plus"></i> Add New
    </a> <br><br>
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
         <div class="card-body">
             <table class="table text-condensed table-hovered">
                 <thead>
                     <tr>

                         <th>First Name</th>
                         <th>Last Name</th>
                         <th>Date Added</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>

                     @foreach ($children as $value)
                         <tr>

                             <td>{{ $value->first_name }}</td>
                             <td>{{ $value->last_name }}</td>
                             <td>{{ \Carbon\Carbon::parse($value->created_at)->format('d D, M Y') }}</td>
                             <td>
                                 <a href="{{ route('admin.children.edit',$value->id) }}" class="btn btn-info btn-sm">Edit</a>
                                 <button wire:click="delete({{ $value->id }})"
                                     class="btn btn-danger btn-sm">Delete</button>
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
     </div>

</div>
