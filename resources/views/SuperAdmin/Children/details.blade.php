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

                                        @foreach ($image as $item)
                                            <img class="profile-user-img img-fluid img-thumbnail"
                                                src="{{ asset('/Storage/CCTV/' . $item->image) }}" alt="member Passport" />
                                        @endforeach

                                </div>

                                <h3 class="profile-username text-center">{{ $profile->first_name }} </h3>

                                <p class="text-muted text-center"><b>{{ $profile->hog_member_id }}</b></p>


                            </div>

                            <!-- /.card-body -->
                        </div>

                        <div class="text-justify"><a href="{{ route('admin.children') }}" class="btn btn-danger">Back</a></div>
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
                                    <li class="nav-item"><a class="nav-link active" href="#details"
                                            data-toggle="tab">Bio-Data</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#address" data-toggle="tab">Parent/Guardian Details</a>
                                    </li>

                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">


                                    <div class="active tab-pane" id="details" style="height: 350px;overflow-y:scroll;">
                                        <div class="card">

                                            <div class="card-body">
                                                <strong> First Name</strong>
                                                <p class="text-muted">{{ $profile->first_name }}</p>
                                                <hr>

                                                <strong> Last Name</strong>
                                                <p class="text-muted">{{ $profile->last_name }}</p>
                                                <hr>

                                                <strong>Gender</strong>
                                                <p class="text-muted">{{ $profile->gender }}</p>
                                                <hr>

                                                <strong> Age Group</strong>
                                                <p class="text-muted">{{ $profile->age_range->title }}</p>
                                                <hr>

                                                <strong>Birth Date</strong>
                                                <p class="text-muted">{{ $profile->day }} / {{ $profile->month }} /
                                                    {{ $profile->year }}</p>
                                                <hr>

                                                <strong>School</strong>
                                                <p class="text-muted">{{ $profile->school }}</p>
                                                <hr>

                                                <strong>Class</strong>
                                                <p class="text-muted">{{ $profile->class->title }}</p>
                                                <hr>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="address" style="height: 350px;overflow-y:scroll;">

                                        <strong>First Name</strong>
                                        <p class="text-muted">{{ $profile->parent->first_name }}</p>
                                        <hr>

                                        <strong>Last Name</strong>
                                        <p class="text-muted">{{ $profile->parent->last_name }}</p>
                                        <hr>

                                        <strong>Middle Name</strong>
                                        <p class="text-muted">{{ $profile->parent->middle_name }}</p>
                                        <hr>

                                        <strong>Occupation</strong>
                                        <p class="text-muted">{{ $profile->parent->occupation }}</p>
                                        <hr>

                                        <strong>Gender</strong>
                                        <p class="text-muted">{{ $profile->parent->gender }}</p>
                                        <hr>

                                        <strong>Contact</strong>
                                        <p class="text-muted">{{ $profile->parent->primary_phone }}</p>
                                        <hr>

                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>

                        <!-- /.card -->
                    </div>
                    {{-- <div class="col-md-9">

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

                    </div> --}}
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
