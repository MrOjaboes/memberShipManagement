@extends('layouts.media')
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
                            <li class="breadcrumb-item"><a href="{{ route('media') }}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="card-header">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#adult" data-toggle="tab">Adult</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#children" data-toggle="tab">Children</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
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
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-thumbnail"
                                        src="{{ asset('Storage/CCTV/' . $image->image) }}" alt="" />
                                </div>
                                <h3 class="profile-username text-center"><b>{{ $image->image_id }} </b></h3>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- About Me Box -->

                        <!-- /.card -->
                    </div>

                    <div class="col-md-9" style="height: 500px;overflow-y:scroll;">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="adult">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="{{ route('media.adult.add', $image->id) }}" method="POST">
                                                    @csrf
                                                    {{-- First Row --}}
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">First Name</label>
                                                                <input type="text" class="form-control" id=""
                                                                    required name="first_name">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput2">Last Name</label>
                                                                <input type="text" required class="form-control"
                                                                    id="" name="last_name">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- Second Row --}}
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput2">Middle Name</label>
                                                                <input type="text" class="form-control" id=""
                                                                    name="middle_name">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for=" ">Email</label>
                                                                <input type="email" class="form-control" id=""
                                                                    name="email">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- Third Row --}}
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for=" ">Primary Phone</label>
                                                                <input type="text" required maxlength="11"
                                                                    class="form-control" id=""
                                                                    name="primary_phone">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for=" ">Secondary Phone</label>
                                                                <input type="text" maxlength="11" class="form-control"
                                                                    id="" name="secondary_phone">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p class="text-danger">Birth Date</p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    {{-- Fourth Row --}}
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <small for="">Day</small>
                                                                        <select name="day" class="form-control">
                                                                            <option value="">Day</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                            <option value="13">13</option>
                                                                            <option value="14">14</option>
                                                                            <option value="15">15</option>
                                                                            <option value="16">16</option>
                                                                            <option value="17">17</option>
                                                                            <option value="18">18</option>
                                                                            <option value="19">19</option>
                                                                            <option value="20">20</option>
                                                                            <option value="21">21</option>
                                                                            <option value="22">22</option>
                                                                            <option value="23">23</option>
                                                                            <option value="24">24</option>
                                                                            <option value="25">25</option>
                                                                            <option value="26">26</option>
                                                                            <option value="27">27</option>
                                                                            <option value="28">28</option>
                                                                            <option value="29">29</option>
                                                                            <option value="30">30</option>
                                                                            <option value="31">31</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <small for="">Month</small>
                                                                        <select name="month" required
                                                                            class="form-control">
                                                                            <option value="">Month</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <small for="">Year</small>
                                                                        <select name="year" required
                                                                            class="form-control">
                                                                            <option value="">Year</option>
                                                                            <option value="1999">1999</option>
                                                                            <option value="2000">2000</option>
                                                                            <option value="2001">2001</option>
                                                                            <option value="2002">2002</option>
                                                                            <option value="2003">2003</option>
                                                                            <option value="2004">2004</option>
                                                                            <option value="2005">2005</option>
                                                                            <option value="2006">2006</option>
                                                                            <option value="2007">2007</option>
                                                                            <option value="2008">2008</option>
                                                                            <option value="2009">2009</option>
                                                                            <option value="2010">2010</option>
                                                                            <option value="2011">2011</option>
                                                                            <option value="2012">2012</option>
                                                                            <option value="2013">2013</option>
                                                                            <option value="2014">2014</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2016">2016</option>
                                                                            <option value="2017">2017</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2019">2019</option>
                                                                            <option value="2020">2020</option>
                                                                            <option value="2021">2021</option>
                                                                            <option value="2022">2022</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <small for="">Age Range</small>
                                                                        <select name="age_range" required
                                                                            class="form-control">
                                                                            @foreach ($age_range as $item)
                                                                                <option value="{{ $item->id }}">
                                                                                    {{ $item->title }}  ( {{ $item->value }})</option>
                                                                            @endforeach
                                                                        </select>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- Fifth Row --}}
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Gender</label>
                                                                <select name="gender" required class="form-control">
                                                                    <option value="">--- Gender ---</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Church</label>
                                                                <select name="church" required class="form-control">
                                                                    @foreach ($churches as $church)
                                                                        <option value="{{ $church->id }}">
                                                                            {{ $church->title }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- Sixth Row --}}
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for=" ">Fellowship Group</label>
                                                                <select name="fellowship_group_id" required
                                                                    class="form-control">

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Friendship Centre</label>
                                                                <select name="friendship_centre_id" required
                                                                    class="form-control">

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- Seventh Row --}}
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Marital Status</label>
                                                                <select name="marital_status" required
                                                                    class="form-control" id="wedding">
                                                                    <option value="Single">Single</option>
                                                                    <option value="Married">Married</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group" id="yes" style="display: none">
                                                                <label for="">Wedding Date </label>
                                                                <input name="wedding_date" class="form-control"
                                                                    type="date" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- Eight Row --}}
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Occupation </label>
                                                                <input type="text" class="form-control" id=""
                                                                    name="occupation">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="1" name="is_leader">
                                                                    <label class="form-check-label" for="remember">
                                                                        Am a leader
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="row">
                                                        <div class="col-md-6"></div>
                                                        <div class="col-md-6"></div>
                                                    </div> --}}
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
                                                                <label for="">House Number </label>
                                                                <input type="text" required class="form-control"
                                                                    id="" name="house_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Street Name </label>
                                                                <input type="text" required class="form-control"
                                                                    id="" name="street">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Country </label>
                                                                <input type="text" name="country" required
                                                                    class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Zip Code </label>
                                                                <input type="text" required class="form-control"
                                                                    id="" name="zip_code">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="">State</label>
                                                                <select  id="state-dropdown" name="state" class="form-control">
                                                                    <option value="">-- Select State --</option>
                                                                    @foreach ($states as $data)
                                                                    <option value="{{$data->id}}">
                                                                        {{$data->name}}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">LGA </label>
                                                                <select id="city-dropdown" name="lga" class="form-control">
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">City / Area</label>
                                                                <input type="text" required class="form-control"
                                                                    id="" name="city">
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Address Status</label>
                                                                <select name="status" class="form-control">
                                                                    <option value="previous">Previous</option>
                                                                    <option value="current">Current</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- End Address Section --}}
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <button type="reset"
                                                                    class="btn btn-danger btn-block close-btn">Cancel</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <button type="submit"
                                                                    class="btn btn-success btn-block">Submit
                                                                    Details</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Children Section --}}
                                    <div class="tab-pane" id="children">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="{{ route('media.children.add', $image->id) }}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-col-md-6">
                                                            <div class="form-group">
                                                                <label for=""> First Name</label>
                                                                <input type="text" class="form-control" id=""
                                                                    required name="first_name">

                                                            </div>
                                                        </div>
                                                        <div class="col-col-md-6">
                                                            <div class="form-group">
                                                                <label for=""> Last Name</label>
                                                                <input type="text" class="form-control" id=""
                                                                    required name="last_name">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput2">Middle
                                                                    Name</label>
                                                                <input type="text" class="form-control" id=""
                                                                    name="middle_name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for=" ">School</label>
                                                                <input type="text" required class="form-control"
                                                                    id="" name="school">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Church</label>
                                                                <select name="church" required class="form-control">
                                                                    <option value="">---- Option ----</option>
                                                                    @foreach ($churches as $church)
                                                                        <option value="{{ $church->id }}">
                                                                            {{ $church->title }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Gender</label>
                                                                <select name="gender" required class="form-control">
                                                                    <option value="">--- Gender ---</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for=" ">Guardian</label>
                                                                <select name="parent_id" class="form-control">
                                                                    <option value="">---- Option ----</option>
                                                                    @foreach ($members as $member)
                                                                        <option value="{{ $member->id }}">
                                                                            {{ $member->first_name }}
                                                                            {{ $member->last_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Class</label>
                                                                <select name="class" required class="form-control">
                                                                    @foreach ($class as $item)
                                                                        <option value="{{ $item->id }}">
                                                                            {{ $item->title }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-12">

                                                        </div>
                                                        <p class="text-danger">Birth Date</p>

                                                    </div>
                                                    <hr>
                                                    {{-- Fourth Row --}}
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <small for="">Day</small>
                                                                        <select name="day" class="form-control">
                                                                            <option value="">Day</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                            <option value="13">13</option>
                                                                            <option value="14">14</option>
                                                                            <option value="15">15</option>
                                                                            <option value="16">16</option>
                                                                            <option value="17">17</option>
                                                                            <option value="18">18</option>
                                                                            <option value="19">19</option>
                                                                            <option value="20">20</option>
                                                                            <option value="21">21</option>
                                                                            <option value="22">22</option>
                                                                            <option value="23">23</option>
                                                                            <option value="24">24</option>
                                                                            <option value="25">25</option>
                                                                            <option value="26">26</option>
                                                                            <option value="27">27</option>
                                                                            <option value="28">28</option>
                                                                            <option value="29">29</option>
                                                                            <option value="30">30</option>
                                                                            <option value="31">31</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <small for="">Month</small>
                                                                        <select name="month" required
                                                                            class="form-control">
                                                                            <option value="">Month</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <small for="">Year</small>
                                                                        <select name="year" required
                                                                            class="form-control">
                                                                            <option value="">Year</option>
                                                                            <option value="1999">1999</option>
                                                                            <option value="2000">2000</option>
                                                                            <option value="2001">2001</option>
                                                                            <option value="2002">2002</option>
                                                                            <option value="2003">2003</option>
                                                                            <option value="2004">2004</option>
                                                                            <option value="2005">2005</option>
                                                                            <option value="2006">2006</option>
                                                                            <option value="2007">2007</option>
                                                                            <option value="2008">2008</option>
                                                                            <option value="2009">2009</option>
                                                                            <option value="2010">2010</option>
                                                                            <option value="2011">2011</option>
                                                                            <option value="2012">2012</option>
                                                                            <option value="2013">2013</option>
                                                                            <option value="2014">2014</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2016">2016</option>
                                                                            <option value="2017">2017</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2019">2019</option>
                                                                            <option value="2020">2020</option>
                                                                            <option value="2021">2021</option>
                                                                            <option value="2022">2022</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <small for="">Age Range</small>
                                                                        <select name="age_range" required
                                                                            class="form-control">
                                                                            @foreach ($age_range as $item)
                                                                                <option value="{{ $item->id }}">
                                                                                    {{ $item->title }}
                                                                                    ({{ $item->value }})</option>
                                                                            @endforeach
                                                                        </select>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <button type="reset"
                                                                    class="btn btn-danger btn-block close-btn">Cancel</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <button type="submit"
                                                                    class="btn btn-success btn-block">Submit
                                                                    Details</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- End Children Section --}}
                                </div>
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            // $('#country-dropdown').on('change', function () {
            //     var idCountry = this.value;
            //     $("#state-dropdown").html('');
            //     $.ajax({
            //         url: "{{ url('api/fetch-states') }}",
            //         type: "POST",
            //         data: {
            //             country_id: idCountry,
            //             _token: '{{ csrf_token() }}'
            //         },
            //         dataType: 'json',
            //         success: function (result) {
            //             $('#state-dropdown').html('<option value="">-- Select State --</option>');
            //             $.each(result.states, function (key, value) {
            //                 $("#state-dropdown").append('<option value="' + value
            //                     .id + '">' + value.name + '</option>');
            //             });
            //             $('#city-dropdown').html('<option value="">-- Select City --</option>');
            //         }
            //     });
            // });

            /*------------------------------------------
            --------------------------------------------
            State Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#state-dropdown').on('change', function() {
                var idState = this.value;
                $("#city-dropdown").html('');
                $.ajax({
                    url: "{{ url('media/api/fetch-cities') }}",
                    type: "GET",
                    data: {
                        state_id: idState,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#city-dropdown').html('<option value="">-- Select LGA --</option>');
                        $.each(res.cities, function(key, value) {
                            $("#city-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });

        });
    </script>
     <script>
        $(document).ready(function() {
            $('#wedding').on('change', function() {
                if (this.value == 'Married')
                //.....................^.......
                {
                    $("#yes").show();
                } else {
                    $("#yes").hide();
                }
            });
        });
    </script>
@endsection
