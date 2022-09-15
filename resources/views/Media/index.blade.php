@extends('layouts.media')
@section('content')
    @include('layouts.navbar')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">HOG Media Portal</h1>
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
            <div class="container">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class=" ">
                            <ul class="nav nav-pills">
                                <a href="{{ route('children-import') }}" class="nav-link active btn mr-3">
                                    Import Children
                                </a>
                                <a href="{{ route('adult-import') }}" class="nav-link active btn">
                                    Import Adult
                                </a>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-3">
                        <a href="{{ route('media.add') }}">
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-thumbnail"
                                            src="/Interface/dist/img/AdminLTELogo.PNG" alt="" />
                                    </div>
                                    <h3 class="profile-username text-center"><b>1090</b> </h3>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </a>
                    </div>
                </div>
                <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>


@endsection
