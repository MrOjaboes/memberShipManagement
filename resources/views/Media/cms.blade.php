@extends('layouts.media')
@section('content')
    @include('layouts.navbar')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">HOG Media Portal / CMS</h1>
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

                <div class="row py-3">
                    <div class="col-md-6">
                        <livewire:media.church-page>
                    </div>
                    <div class="col-md-6">
                        <livewire:media.fellowship-group-page>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-6">
                        <livewire:media.friendship-centre-page>
                    </div>
                    <div class="col-md-6">
                        <livewire:media.functional-group-page>
                    </div>
                </div>

        </section>
        <!-- /.content -->
    </div>
@endsection
