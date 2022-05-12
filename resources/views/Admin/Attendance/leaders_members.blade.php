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
                            <li class="breadcrumb-item"><a href="{{ route('admin.attendance.leaders') }}">Home</a></li>
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
                                            <th>
                                                <b>S/N</b>
                                            </th>
                                            <th>
                                                <b>Names</b>
                                            </th>
                                            <th>
                                                <b>Contact</b>
                                            </th>
                                            <th>
                                                <b>Email</b>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach ($members as $member)
                                            <tr class="">
                                                <td>{{ $i }}</td>
                                                <td> <b>
                                                        {{ App\Http\Controllers\HomeController::GetUserById($member->user_id) }}</b>
                                                </td>
                                                <td> <b> {{ $member->contact }}</b></td>
                                                <td> <b> {{ $member->email }}</b></td>


                                            </tr>
                                            @php $i++; @endphp
                                        @endforeach
                                    </tbody>


                                </table>

                            </div>


                        </div>


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
