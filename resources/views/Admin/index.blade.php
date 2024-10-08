@extends('layouts.admin')
@section('content')
@include('layouts.navbar')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">HOG Membership Portal</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
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

                <div class="row pt-3">

                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                            <div class="info-box-content">
                                <span class="text-center"><b>Closed Events</b></span>
                                <div class="d-flex" style="justify-content: space-between;">
                                   <div>
                                    <span class="info-box-text">General</span>
                                    <span class="info-box-number"> {{ $closedEvents }}</span>
                                   </div>
                                   <div>
                                    <span class="info-box-text">Leaders</span>
                                    <span class="info-box-number"> {{ $closedLeaders }}</span>
                                   </div>
                                </div>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-calendar"></i></span>

                            <div class="info-box-content">
                                <span class="text-center"><b>Active Events</b></span>
                                <div class="d-flex" style="justify-content: space-between;">

                                    <div>
                                     <span class="info-box-text">General</span>
                                     <span class="info-box-number">{{ $activeEvents }}</span>
                                    </div>
                                    <div>
                                     <span class="info-box-text">Leaders</span>
                                     <span class="info-box-number">{{ $activeLeaders }}</span>
                                    </div>
                                 </div>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="info-box mb-3 py-4">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Members</span>
                                <span class="info-box-number">{{ $members }} </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>


                <div class="row pt-5">

                    <div class="col-md-6">

                        <livewire:event.home>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6">

                        <livewire:event.leaders>
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
