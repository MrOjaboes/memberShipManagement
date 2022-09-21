@extends('layouts.media')
@section('content')
    @include('layouts.navbar')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dasboard / Children Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('media') }}">Home</a></li>
                            <li class="breadcrumb-item active">Children Profile</li>
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
                                    @if ($profile->image_id == null)
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="/Interface/dist/img/AdminLTELogo.PNG" alt="member photo" />
                                    @else
                                    @foreach ($image as $item)
                                    <img class="profile-user-img img-fluid img-thumbnail"
                                    src="{{ asset('/Storage/CCTV/' . $item->image) }}" alt="member Passport" />
                                    @endforeach

                                    @endif
                                </div>

                                <h3 class="profile-username text-center">{{ $profile->first_name }} </h3>

                                <p class="text-muted text-center"><b>{{ $profile->hog_member_id }}</b></p>

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
                        {{-- <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">About Me</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" style="height: 200px;overflow-y:scroll;">
                                <strong><i class="fas fa-book mr-1"></i> Email</strong>

                                <p class="text-muted">
                                    {{ $profile->email }}
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Contact 1 (WhatsApp)</strong>

                                <p class="text-muted">{{ $profile->contact_one }}</p>
                                <hr>
                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Contact 2</strong>

                                <p class="text-muted">{{ $profile->contact_two }}</p>
                                <hr>
                                <strong><i class="fas fa-pencil-alt mr-1"></i> Gender</strong>

                                <p class="text-muted">
                                    {{ $profile->gender }}
                                </p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Marital Status</strong>

                                <p class="text-muted">
                                    {{ $profile->marital_status }}
                                </p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Date Of Birth</strong>

                                <p class="text-muted">
                                    {{ $profile->birth_date }}
                                </p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Account Created On</strong>

                                <p class="text-muted">
                                    {{ \Carbon\Carbon::parse($profile->created_at)->format('d D, M Y') }}
                                </p>

                                <hr>
                            </div>
                            <!-- /.card-body -->
                        </div> --}}
                        <!-- /.card -->
                        <div class="text-justify"><a href="{{ route('children') }}" class="btn btn-danger">Back</a></div>
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

                                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">More
                                            Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#comment" data-toggle="tab">Comment</a>
                                    </li>

                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">


                                    <div class="tab-pane active" id="settings" style="height: 350px;overflow-y:scroll;">
                                        <div class="card">

                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <strong><i class="fas fa-book mr-1"></i> First Name</strong>

                                                <p class="text-muted">
                                                    {{ $profile->first_name }}
                                                </p>

                                                <hr>

                                                <strong><i class="fas fa-map-marker-alt mr-1"></i>Middle Name</strong>

                                                <p class="text-muted">{{ $profile->middle_name }}</p>

                                                <hr>
                                                <strong><i class="fas fa-map-marker-alt mr-1"></i>Last Name</strong>

                                                <p class="text-muted">{{ $profile->last_name }}</p>

                                                <hr>



                                                <strong><i class="fas fa-pencil-alt mr-1"></i>Gender</strong>

                                                <p class="text-muted">
                                                    {{ $profile->gender }}
                                                </p>


                                                <hr>
                                                <strong><i class="fas fa-pencil-alt mr-1"></i>Age Group</strong>

                                                <p class="text-muted">
                                                    {{ $profile->age_range }}
                                                </p>


                                                <hr>

                                                <strong><i class="fas fa-pencil-alt mr-1"></i>Birth Date</strong>

                                                <p class="text-muted">
                                                    {{ $profile->day }} / {{ $profile->month }} / {{ $profile->year }}
                                                </p>


                                                <hr>

                                                <strong><i class="fas fa-pencil-alt mr-1"></i>School</strong>

                                                <p class="text-muted">
                                                    {{ $profile->school }}
                                                </p>


                                                <hr>

                                                <strong><i class="fas fa-pencil-alt mr-1"></i>Class</strong>

                                                <p class="text-muted">
                                                    {{ $profile->class }}
                                                </p>
                                                <hr>



                                                <strong><i class="fas fa-pencil-alt mr-1"></i>Guardian</strong>

                                                <p class="text-muted">
                                                    {{ $profile->guardian_one }}
                                                </p>




                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                    </div>

                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
