@extends('layouts.member')
@section('content')
    <x-navbar />
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 pt-3">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard / Event Details</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
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
                        @if (session()->has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong><i class="fas fa-check-circle"></i></strong> {{ session()->get('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span style="color:white;" aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong><i class="fas fa-check-circle"></i></strong> {{ session()->get('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span style="color:white;" aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('member.attendEvent', $event->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="event_id" value="{{ $event->id }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="product-img">
                                        <img src="{{ asset('/Events/' . $event->caption) }}" alt="Event Caption"
                                            class="img-thumbnail">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Event Description</label>
                                        <textarea readonly name="description" class="form-control" value="{{ $event->description }}" id="" cols="10"
                                            rows="10">{{ $event->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3">

                                <div class="col-md-6">
                                    <label for="">Event Title</label>
                                    <input type="text" readonly name="title" value="{{ $event->title }}" class="form-control"
                                        id="" />
                                </div>
                                <div class="col-md-6">
                                    <label for="">Contact</label>
                                    <input type="text" name="contact" required placeholder="Please, Include your availabe contact for easy access"  class="form-control"
                                        id="" />
                                </div>

                            </div>
                            <div class="row pt-3">
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-lg btn-danger">Attend Event</button>
                                    </div>
                                </div>

                                <div class="col-md-3">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <!-- /.row -->
            </div>
            <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
