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
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">User import</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container">

                <div class="row pt-3">



                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('upload.user') }}" method="POST" class="form-inline">
                                    @csrf
                                    <input type="file" class="form-control" name="file" id=""><br><br>
                                    <button class="btn btn-success" type="submit">Upload</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.info-box -->
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
