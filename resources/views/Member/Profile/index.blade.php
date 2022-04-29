@extends('layouts.member')
@section('content')
    <x-navbar />
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Home / Member Profile</h1>
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
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('member.profile') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="card card-outline">
                                        <div class="card-body box-profile">
                                            <div class="text-center">
                                                @if (Auth::user()->profile->photo == null)
                                                    <img class="profile-user-img img-fluid img-circle"
                                                        src="/Interface/dist/img/AdminLTELogo.PNG" alt="member photo" />
                                                @else
                                                    <img class="profile-user-img img-fluid img-circle" src="{{ asset('/Photos/' . Auth::user()->profile->photo ) }}"
                                                        alt="member Passport" />
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Full Name</label>
                                        <input type="text" class="form-control"
                                            value="{{ Auth::user()->profile->fullname }}" name="fullname" id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control"
                                            value="{{ Auth::user()->profile->email }}" name="email" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Contact 1 (WhatsApp No.)</label>
                                        <input type="text" class="form-control"
                                            value="{{ Auth::user()->profile->contact_one }}" name="contact_one" id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Contact 2</label>
                                        <input type="text" class="form-control"
                                            value="{{ Auth::user()->profile->contact_two }}" name="contact_two" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Service Group</label>
                                        <input type="text" maxlength="11" class="form-control"
                                            value="{{ Auth::user()->profile->age_group }}" name="age_group" id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Birth Date</label>
                                        <input type="date" class="form-control"
                                            value="{{ Auth::user()->profile->birth_date }}" name="birth_date" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select name="gender" class="form-control" id="">
                                            <option value="{{ Auth::user()->profile->gender }}">
                                                {{ Auth::user()->profile->gender }}</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Occupation</label>
                                        <input type="text" class="form-control"
                                            value="{{ Auth::user()->profile->occupation }}" name="occupation" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Fellowship Group</label>
                                        <select name="fellowship_group" class="form-control input-lg" id="">
                                            <option value="{{ Auth::user()->profile->fellowship_group}}">{{ Auth::user()->profile->fellowship_group}}</option>
                                            <option value="Zenith fellowship">Zenith fellowship </option>
                                            <option value="Ultimate Class">Ultimate Class</option>
                                            <option value="Men Fellowship">Men Fellowship</option>
                                            <option value="Women Fellowship">Women Felloship</option>
                                            <option value="Battle Axe">Battle Axe</option>
                                            <option value="Graceville Fellowship">Graceville Fellowship</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Friendship Centre</label>
                                      <input type="text" value="{{ Auth::user()->profile->friendship_centre }}" class="form-control" name="friendship_centre" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Address 1</label>
                                       <input type="text" placeholder="Address 1" value="{{ Auth::user()->profile->address_one }}" name="address_one" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Address 2</label>
                                        <input type="text" placeholder="Address 2" value="{{ Auth::user()->profile->address_two }}" name="address_two" class="form-control" id="">

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Church Branch</label>
                                       <input type="text" placeholder="Area" value="{{ Auth::user()->profile->church_location }}" name="church_location" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Member Photo</label>
                                        <input type="file" name="file" class="form-control" id="">

                                    </div>
                                </div>
                            </div>
                            {{-- Class Selection --}}


                            <div class="row pt-3">
                                <div class="col-md-6">

                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Marital Status</label>
                                        <select class="form-control select2bs4" name="marital_status" id="MaritalStatus"
                                            style="width: 100%;">
                                            <option value="{{ Auth::user()->profile->marital_status}}">{{ Auth::user()->profile->marital_status}}</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            @error('marital_status')
                                                <span style="color: red">
                                                    <strong style="color: red">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </select>
                                    </div>

                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">

                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Leadership Position</label>
                                        <select class="form-control select2bs4" name="leadership_position" id="" style="width: 100%;">
                                            <option value="{{ Auth::user()->profile->leadership_position}}">{{ Auth::user()->profile->leadership_position}}</option>
                                            <option value="Shepherd">Shepherd</option>
                                            <option value="Asst.Shepherd">Asst. Shepherd</option>
                                            <option value="Secretary">Secretary</option>
                                            <option value="Member">Member</option>
                                            @error('position')
                                                <span style="color: red">
                                                    <strong style="color: red">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </select>

                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                            </div>

                            <div id="yes" class="row" style="display: none;">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="spouse_name" class="form-control"
                                            placeholder="Spouse's Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="number_of_children" class="form-control"
                                            placeholder="Number Of Children">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="spouse_birthdate" class="form-control"
                                            placeholder="Spouse's Birth Date (DD/MM)">
                                    </div>
                                    <div class="form-group">
                                        <input type="date" name="wedding_date" class="form-control">
                                        <small class="text-danger">Wedding Anniversary</small>
                                    </div>
                                </div>
                                <div class="col-md-6 field_wrapper">
                                    <div>
                                        <span>Children's Details if Any</span>
                                        <a href="javascript:void(0);"
                                            class="add_button btn btn-danger btn-sm mb-3 text-right" title="Add field">Add
                                            Field</a>

                                        <div class="form-group">
                                            <input type="text" name="child_name[]" class="form-control"
                                                placeholder="Child Name">

                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="child_birthdate[]" class="form-control"
                                                placeholder="Child's Birth Date(DD/MM)">
                                        </div>
                                        <div class="form-group">
                                            <select name="child_gender[]" id="" class="form-control">
                                                <option value="">-----Gender-----</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success btn-block">Update Details</button>
                                </div>
                                <div class="col-md-6">
                                    <a href="" class="btn btn-danger btn-block">Cancel Registration</a>
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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#MaritalStatus").change(function () {
            if ($(this).val() == "Married") {
                $("#yes").show();
            } else {
                $("#yes").hide();
            }
        });
    });
</script>
<script type='text/javascript'>
    $(document).ready(function() {
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML =
            '<div><input type="text" name="child_name[]" class="form-control mb-3" placeholder="Name of Child" /><input type="text" placeholder="Birth Date e.g (DD/MM)" name="child_birthdate[]" class="form-control mb-3"/><select class="form-control" name="child_gender[]"><option value="">----Gender----</option><option value="Male">Male</option><option value="Female">Female</option></select><a href="javascript:void(0);" class="remove_button" style="color:red;">Remove</a></div>'; //New input field html
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function() {
            //Check maximum number of input fields
            if (x < maxField) {
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e) {
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
</script>
@endsection
