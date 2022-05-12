@extends('layouts.admin')
@section('content')
@include('layouts.navbar')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dasboard / Leaders Event</h1>
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
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="/Interface/dist/img/AdminLTELogo.PNG" alt="member photo" />

                                </div>

                                <h3 class="profile-username text-center">{{ Auth::user()->name }} </h3>


                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- About Me Box -->
                        <div class="card card-primary">
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
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
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
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#login"
                                            data-toggle="tab">Leadership Event Page</a></li>

                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">


                                    <div class="active tab-pane" id="login">
                                        <div class="card">

                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <form action="{{ route('member.account') }}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="">Event Heading</label>
                                                                <input type="text" required placeholder="Insert Your Link Here"
                                                                    class="form-control input-lg" name="name" id="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Event Description</label>
                                                               <textarea name="" class="form-control" cols="" rows=""></textarea> </div>
                                                            <div class="form-group">
                                                                <label for="">Event Caption</label>
                                                                <input type="file" required class="form-control" name="file" id="">
                                                            </div>


                                                            <button class="btn btn-danger" type="submit">Publish
                                                                Event</button>
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

                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
