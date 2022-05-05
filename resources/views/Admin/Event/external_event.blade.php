@extends('layouts.admin')
@section('content')
    <x-navbar />

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dasboard / External Event</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active"> Profile</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1">

                        <!-- Profile Image -->
                        {{-- <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="/Interface/dist/img/AdminLTELogo.PNG" alt="member photo" />

                                </div>

                                <h3 class="profile-username text-center">{{ Auth::user()->name }} </h3>


                            </div>
                            <!-- /.card-body -->
                        </div> --}}
                        <!-- /.card -->

                        <!-- About Me Box -->
                        {{-- <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">About Me</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-envelope mr-1"></i> Email</strong>

                                <p class="text-muted">
                                    {{ Auth::user()->email }}
                                </p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Role</strong>
                                <p class="text-muted">
                                    Admin
                                </p>
                                <hr>

                            </div>
                            <!-- /.card-body -->
                        </div> --}}
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <livewire:event.external-link>
                        <div class="col-md-1"></div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
