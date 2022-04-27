@extends('layouts.member')
@section('content')
    <x-navbar />

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dasboard / Student Profile</h1>
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
                                   <img class="profile-user-img img-fluid img-circle"
                                   src="/Interface/dist/img/AdminLTELogo.PNG" alt="member photo" />
                                    @else
                                    <img class="profile-user-img img-fluid img-circle"
                                    src="{{ asset('/Photos/' . Auth::user()->profile->photo ) }}" alt="member Passport" />

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
                            <div class="card-body">
                                <strong><i class="fas fa-book mr-1"></i> Email</strong>

                                <p class="text-muted">
                                    {{ Auth::user()->profile->email }}
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Contact</strong>

                                <p class="text-muted">{{ Auth::user()->profile->contact_one }}</p>



                                <hr>
                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Gender</strong>

                                <p class="text-muted">
                                    {{Auth::user()->profile->gender }}
                                </p>

                                <hr>
                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Date Of Birth</strong>

                                <p class="text-muted">
                                    {{ Auth::user()->profile->birth_date }}
                                </p>

                                <hr>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Date Added</strong>

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
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#activity"
                                            data-toggle="tab">Subject Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#settings"
                                            data-toggle="tab">Guardian Details</a></li>

                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                {{-- <div class="tab-content">
                                    <div class="active tab-pane" id="activity">

                                        @foreach ($subjects as $subject)

                                                    @php
                                                    $parties = explode(",", $subject->subject_id);
                                                  @endphp

                                                    @for($i = 0; $i < count($parties); $i++)
                                                    <li class="list-group-item">
                                                        <b>

                                                    {{ App\Http\Controllers\StudentController::GetJuniorSubjectById($parties[$i]) }}
                                                </b>
                                            </li>
                                                    @endfor

                                        @endforeach

                                    </div>

                                    <div class="tab-pane" id="settings">
                                       @foreach ($guardian_details as $guardian)
                                       <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label"> Full Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control" id="inputName"
                                                    value="{{ $guardian->fullname }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" readonly  class="form-control" id="inputEmail"
                                                    value="{{ $guardian->email }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Contact 1</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control" id="inputName2"
                                                    value="{{ $guardian->fathercontact }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputSkills" readonly class="col-sm-2 col-form-label">Contact 2</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" readonly id="inputSkills"
                                                    value="{{ $guardian->mothercontact }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputSkills" readonly class="col-sm-2 col-form-label">Occupation</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" readonly id="inputSkills"
                                                    value="{{ $guardian->occupation }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputSkills" readonly class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" readonly id="inputSkills">{{ $guardian->address }}</textarea>
                                            </div>
                                        </div>
                                    </form>
                                       @endforeach
                                    </div>
                                    <!-- /.tab-pane -->
                                </div> --}}
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <h2><a class="btn btn-outline-danger" href="{{ route('member.profile') }}">Update Profile</a></h2>
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
