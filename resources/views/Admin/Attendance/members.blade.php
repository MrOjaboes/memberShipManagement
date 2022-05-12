@extends('layouts.admin')
@section('content')
@include('layouts.navbar')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard / Event Attendance</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.attendance') }}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
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
                                <table class="table table-stripped table-hover">
                                    <thead>
                                        <tr>
                                            <th><h3>Members</h3></th>
                                            <th><h3>Contact</h3></th>
                                            <th><h3>Date</h3></th>
                                        </tr>
                                    </thead>

                                    @forelse ($members as $member)
                                        <tbody>
                                            <tr class="">
                                                <td> <b> {{ App\Http\Controllers\HomeController::GetUserById($member->user_id) }}</b></td>
                                                <td> <b> {{ $member->contact}}</b></td>
                                                <td>{{ \Carbon\Carbon::parse($member->created_at)->format('d D, M Y') }}</td>
                                            </tr>
                                        @empty
                                            <span class="text-success">Loading.....</span>
                                        </tbody>
                                    @endforelse

                                </table>

                            </div>

                            <!-- /.card-body -->

                            <!-- /.card-footer -->

                        <span class="float-right px-3 py-3"><b>{{ $members->links() }}</b></span>
                        </div>

                        {{-- <livewire:admin.attendance.members> --}}
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
