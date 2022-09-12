@extends('layouts.media')
@section('content')
    @include('layouts.navbar')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">HOG Media Portal / Member Import</h1>
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
                <div class="row py-1">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert"
                                    aria-label="close">&times;</a>
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <div class="row py-3">
                   <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('/media/adult/import') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="file" name="file" class="form-control">
                                </div>
                                <div class="form-group text-right">
                                   <button class="btn btn-danger" type="submit">Upload</button>
                                </div>
                            </form>
                        </div>

                    </div>
                   </div>
                </div>
                <a href="{{ route('adults') }}" class="btn btn-danger"> <i class="fas fa-arrow-left"></i> Members List</a>
                <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
