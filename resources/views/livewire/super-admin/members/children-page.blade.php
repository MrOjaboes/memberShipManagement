<div>
    <div class="text-right mr-3">
        {{-- <a class="btn btn-danger" href="{{ route('admin.member.new') }}"> <i class="fas fa-plus"></i> Add New</a> &nbsp;
         <a href="{{ route('members.pdf') }}" class="btn btn-danger">Export Pdf</a> --}}
         &nbsp; <a href="{{ route('admin.childrenExcel') }}"
    class="btn btn-success">Export Excel</a><br><br>
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

         <div class="row ">
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
            @include('layouts.children-search')
            <div style="overflow-y: scroll;height:300px">
             <table class="table text-condensed table-hovered">
                 <thead>
                     <tr>

                         <th>First Name</th>
                         <th>Last Name</th>
                         <th>Gender</th>
                         <th>Class</th>
                         <th>Date Added</th>
                         {{-- <th>Action</th> --}}
                     </tr>
                 </thead>
                 <tbody>

                     @foreach ($children as $value)
                         <tr>

                             <td>{{ $value->first_name }}</td>
                             <td>{{ $value->last_name }}</td>
                             <td>{{ $value->gender }}</td>
                             <td>{{ $value->class->title }}</td>
                             <td>{{ \Carbon\Carbon::parse($value->created_at)->format('d D, M Y') }}</td>
                             <td>
                                 <a href="{{ route('admin.childrenDetails',$value->id) }}" class="btn btn-danger btn-sm">Details</a>
                                 {{-- <button wire:click="delete({{ $value->id }})"
                                     class="btn btn-danger btn-sm">Delete</button> --}}
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>
            </div>
         </div>
     </div>

</div>
