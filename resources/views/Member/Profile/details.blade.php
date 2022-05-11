@extends('layouts.member')
@section('content')
    <x-navbar />

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dasboard / Member Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">User Profile</li>
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
                                    @if (Auth::user()->profile->photo == null)
                                        <img class="profile-user-img img-fluid img-thumbnail"
                                            src="/Interface/dist/img/AdminLTELogo.PNG" alt="member photo" />
                                    @else
                                        <img class="profile-user-img img-fluid img-thumbnail"
                                            src="{{ asset('/Photos/' . Auth::user()->profile->photo) }}"
                                            alt="member Passport" />
                                    @endif
                                </div>

                                <h3 class="profile-username text-center">{{ Auth::user()->profile->fullname }} </h3>

                                <p class="text-muted text-center"><b>{{ Auth::user()->profile->memberId }}</b></p>

                                {{-- <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>State</b> <a class="float-right">{{ $student->state }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>LGA</b> <a class="float-right">{{ $student->lga }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Tribe</b> <a class="float-right">{{ $student->tribe }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Religion</b> <a class="float-right">{{ $student->religion }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Class</b> <a class="float-right">{{ $student->class }}</a>
                                    </li>
                                </ul> --}}


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
                            <div class="card-body" style="height: 200px;overflow-y:scroll;">
                                <strong><i class="fas fa-book mr-1"></i> Email</strong>

                                <p class="text-muted">
                                    {{ Auth::user()->profile->email }}
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Contact 1 (WhatsApp)</strong>

                                <p class="text-muted">{{ Auth::user()->profile->contact_one }}</p>
                                <hr>
                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Contact 2</strong>

                                <p class="text-muted">{{ Auth::user()->profile->contact_two }}</p>
                                <hr>
                                <strong><i class="fas fa-pencil-alt mr-1"></i> Gender</strong>

                                <p class="text-muted">
                                    {{ Auth::user()->profile->gender }}
                                </p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Marital Status</strong>

                                <p class="text-muted">
                                    {{ Auth::user()->profile->marital_status }}
                                </p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Date Of Birth</strong>

                                <p class="text-muted">
                                    {{ Auth::user()->profile->birth_date }}
                                </p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Account Created On</strong>

                                <p class="text-muted">
                                    {{ \Carbon\Carbon::parse(Auth::user()->created_at)->format('d D, M Y') }}
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
                                    <li class="nav-item"><a class="nav-link active" href="#activity"
                                            data-toggle="tab">marital Info</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#settings"
                                            data-toggle="tab">More Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#login"
                                            data-toggle="tab">Login Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#password"
                                            data-toggle="tab">Password</a></li>

                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">

                                        @if (Auth::user()->profile->marital_status == 'Single')
                                        <b>Not Married</b>
                                        @else
                                        <form action="{{ route('home.profile') }}" method="POST">
                                            @csrf
                                            <input type="hidden" class="form-control" name="profile_id"
                                                value="{{ Auth::user()->profile->id }}">

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Gender</th>
                                                        <th>Birth Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($marital_info as $item)
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control"
                                                                    name="child_name[]" value="{{ $item->child_name }}">
                                                            </td>
                                                            <td>
                                                                <select name="child_gender[]" class="form-control">
                                                                    <option value="{{ $item->child_gender }}">
                                                                        {{ $item->child_gender }}</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </td>
                                                            <td><input type="date" class="form-control"
                                                                    name="child_birthdate[]"
                                                                    value="{{ $item->child_birthdate }}"></td>
                                                        </tr>
                                                    @empty
                                                        loading
                                                    @endforelse


                                                </tbody>
                                            </table>
                                            <button type="submit" class="btn btn-outline-danger">Update</button>
                                        </form>

                                        @endif


                                    </div>

                                    <div class="tab-pane" id="settings" style="height: 350px;overflow-y:scroll;">
                                        <div class="card">

                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <strong><i class="fas fa-book mr-1"></i> Spouse Name</strong>

                                                <p class="text-muted">
                                                    {{ Auth::user()->profile->spouse_name }}
                                                </p>

                                                <hr>

                                                <strong><i class="fas fa-map-marker-alt mr-1"></i>Spouse Contact</strong>

                                                <p class="text-muted">{{ Auth::user()->profile->spouse_contact }}</p>

                                                <hr>


                                                <hr>

                                                <strong><i class="fas fa-pencil-alt mr-1"></i>Spouse Date Of Birth</strong>

                                                <p class="text-muted">
                                                    {{ Auth::user()->profile->spouse_birthdate }}
                                                </p>


                                                <hr>

                                                <strong><i class="fas fa-pencil-alt mr-1"></i>Occupation</strong>

                                                <p class="text-muted">
                                                    {{ Auth::user()->profile->occupation }}
                                                </p>


                                                <hr>

                                                <strong><i class="fas fa-pencil-alt mr-1"></i>Fellowship Group</strong>

                                                <p class="text-muted">
                                                    {{ Auth::user()->profile->fellowship_group }}
                                                </p>


                                                <hr>

                                                <strong><i class="fas fa-pencil-alt mr-1"></i>Friendship Centre</strong>

                                                <p class="text-muted">
                                                    {{ Auth::user()->profile->friendship_centre }}
                                                </p>



                                                <hr>

                                                <strong><i class="fas fa-pencil-alt mr-1"></i>Leadership Position</strong>

                                                <p class="text-muted">
                                                    {{ Auth::user()->profile->leadership_position }}
                                                </p>


                                                <hr>

                                                <strong><i class="fas fa-pencil-alt mr-1"></i>Service Group</strong>

                                                <p class="text-muted">
                                                    {{ Auth::user()->profile->age_group }}
                                                </p>


                                                <hr>

                                                <strong><i class="fas fa-pencil-alt mr-1"></i>Church branch</strong>

                                                <p class="text-muted">
                                                    {{ Auth::user()->profile->church_location }}
                                                </p>


                                                <hr>

                                                <strong><i class="fas fa-pencil-alt mr-1"></i>Address 1</strong>

                                                <p class="text-muted">
                                                    {{ Auth::user()->profile->address_one }}
                                                </p>


                                                <hr>

                                                <strong><i class="fas fa-pencil-alt mr-1"></i>Address 2</strong>

                                                <p class="text-muted">
                                                    {{ Auth::user()->profile->address_two }}
                                                </p>



                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="login">
                                        <div class="card">

                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <form action="{{ route('member.account') }}" method="POST">
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

                                                <form action="{{ route('member.password') }}" method="POST">
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
                        <h2><a class="btn btn-outline-danger" href="{{ route('member.profile') }}">Update Profile</a>
                        </h2>
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
