@extends('layouts.admin')
@section('content')
    @include('layouts.navbar')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-1">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard / Member / New</h1>
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
                                            <a href="#" class="close" data-dismiss="alert"
                                                aria-label="close">&times;</a>
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('/admin/member/new') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">First Name</label>
                                                <input type="text" class="form-control" id="" required name="first_name">

                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput2">Last Name</label>
                                                <input type="text" required class="form-control" id="" name="last_name">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput2">Middle Name</label>
                                                <input type="text" class="form-control" id="" name="middle_name">

                                            </div>
                                            <div class="form-group">
                                                <label for=" ">Email</label>
                                                <input type="email" required class="form-control" id="" name="email">
                                                @error('email')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="">Gender</label>
                                                <select name="gender" required class="form-control">
                                                    <option value="">--- Gender ---</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                @error('gender')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for=" ">Primary Phone</label>
                                                <input type="text" required class="form-control" id=""
                                                    name="primary_phone">
                                                @error('primary_phone')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput2">Secondary Phone</label>
                                                <input type="text" class="form-control" id="" name="secondary_phone">
                                                @error('secondary_phone')
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for=" ">Fellowship Group</label>
                                                <select name="fellowship_group_id" required class="form-control">
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for=" ">Friendship Centre</label>
                                                <select name="fellowship_group_id" required class="form-control">
                                                    <option value=""></option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput2">Birth Date</label>
                                                <input type="date" required class="form-control" id="" name="birth_date">

                                            </div>
                                            <div class="form-group">
                                                <label for="">Marital Status</label>
                                                <select name="marital_status" required class="form-control">
                                                    <option value="1">Single</option>
                                                    <option value="2">Married</option>
                                                    <option value="3">Divorced</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Occupation </label>
                                                <input type="text" class="form-control" id="" name="occupation">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Address Section --}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <hr>
                                            <h5>Residential Information</h5>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Street Name </label>
                                                <input type="text" required class="form-control" id="" name="street">
                                            </div>
                                            <div class="form-group">
                                                <label for="">City </label>
                                                <input type="text" required class="form-control" id="" name="city">
                                            </div>
                                            <div class="form-group">
                                                <label for="">LGA </label>
                                                <input type="text" required class="form-control" id="" name="lga">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Zip Code </label>
                                                <input type="text" required class="form-control" id="" name="zip_code">
                                            </div>
                                            <div class="form-group">
                                                <label for="">State </label>
                                                <select name="state" required class="form-control"></select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Country </label>
                                                <select name="country" required class="form-control"></select>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- End Address Section --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="reset" class="btn btn-danger btn-block close-btn">Cancel</button>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-success btn-block">Submit Details</button>
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
