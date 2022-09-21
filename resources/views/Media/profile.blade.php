@extends('layouts.media')
@section('content')
    @include('layouts.navbar')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dasboard / Profile</h1>
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
                                    Media
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
                                            data-toggle="tab">Login Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#password"
                                            data-toggle="tab">Password</a></li>

                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">


                                    <div class="active tab-pane" id="login">
                                        <div class="card">

                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <form action="{{ route('media.account') }}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">User Name</label>
                                                                <input type="text" placeholder="********"
                                                                    class="form-control"
                                                                    value="{{ Auth::user()->name }}" name="name" id="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Email</label>
                                                                <input type="email" placeholder="********"
                                                                    class="form-control"
                                                                    value="{{ Auth::user()->email }}" name="email" id="">
                                                            </div>

                                                            <button class="btn btn-danger" type="submit">Update
                                                                Details</button>
                                                        </div>
                                                        <div class="col-md-6"></div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="password">
                                        <div class="card">

                                            <!-- /.card-header -->
                                            <div class="card-body">

                                                <form action="{{ route('media.password') }}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Old Password</label>
                                                                <input type="password" placeholder="********"
                                                                    class="form-control" name="oldpassword" id="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">New Password</label>
                                                                <input type="password" placeholder="********"
                                                                    class="form-control" name="password" id="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Confirm Password</label>
                                                                <input type="password" placeholder="********"
                                                                    class="form-control" name="confirm_password" id="">
                                                            </div>
                                                            <button class="btn btn-danger" type="submit">Update
                                                                password</button>
                                                        </div>
                                                        <div class="col-md-6"></div>
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
