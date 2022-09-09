@extends('layouts.admin')
@section('content')
    @include('layouts.navbar')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-1">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard / Children / New</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
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
                            <div class="row py-1">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    @if (session()->has('message'))
                                        <div class="alert alert-success">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('/admin/children/'.$children->id.'/edit') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">First Name</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    value="{{ $children->first_name }}" name="first_name">

                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput2">Last Name</label>
                                                <input type="text" class="form-control" id="" name="last_name"
                                                    value="{{ $children->last_name }}">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput2">Middle Name</label>
                                                <input type="text" class="form-control" id="" name="middle_name"
                                                    value="{{ $children->middle_name }}">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput2">Email</label>
                                                <input type="email" required class="form-control" id="" name="email"
                                                    value="{{ $children->email }}">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput2">Gender</label>
                                                <select name="gender" required class="form-control">
                                                    <option value="{{ $children->gender }}">{{ $children->gender }}</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>

                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput2">Primary Phone</label>
                                                <input type="text" required class="form-control" id="" name="primary_phone"
                                                    value="{{ $children->primary_phone }}">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput2">Secondary Phone</label>
                                                <input type="text" class="form-control" id="" name="secondary_phone"
                                                    value="{{ $children->secondary_phone }}">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput2">Level</label>
                                                <input type="text" class="form-control" id="" name="level"
                                                    value="{{ $children->level }}">

                                            </div>
                                            <div class="form-group">
                                                <label for=" ">Class</label>
                                                <input type="text" class="form-control" id="" name="class"
                                                    value="{{ $children->class }}">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput2">Birth Date</label>
                                                <input type="date" required class="form-control" id="" name="birth_date"
                                                    value="{{ $children->birth_date }}">

                                            </div>
                                            <div class="form-group">
                                                <label for=" ">Guardian One</label>
                                                <input type="text" required class="form-control" id="" name="guardian_one"
                                                    value="{{ $children->guardian_one }}">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput2">Guardian Two</label>
                                                <input type="text" class="form-control" id="" name="guardian_two"
                                                    value="{{ $children->guardian_two }}">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="reset" class="btn btn-danger btn-block close-btn">Cancel</button>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-success btn-block">Submit  Details</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
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
