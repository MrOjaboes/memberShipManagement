@extends('layouts.auth')

@section('content')
    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <div class="intro-section" id="home-section">
            <div class="slide-1" style="background-image: url('/Portal/images/hero_1.jpg');"
                data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center" style="">
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-4">
                                    <h1 data-aos="fade-up" class="" data-aos-delay="100">Welcome To House of Grace
                                        <br>Membership Portal
                                    </h1>
                                    {{-- <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas necessitatibus.</p>
              <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary py-3 px-5 btn-pill">Admission Now</a></p> --}}

                                </div>

                                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                                    <form method="POST" action="{{ route('login') }}" class="form-box">
                                        @csrf
                                        <h3 class="h4 text-black mb-4">Login</h3>
                                        <div>
                                            @if (session()->has('message'))
                                                <div class="alert alert-danger alert-dismissible fade show px-2 py-2"
                                                    role="alert" style="background-color:brown;color:white;">
                                                    <strong><i class="fas fa-check-circle"></i></strong>
                                                    {{ session()->get('message') }}
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span style="color:white;" aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email Id</label>
                                            <input type="text" class="form-control form-control-lg" name="email"
                                                placeholder="Email Addresss">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input type="password" class="form-control form-control-lg" name="password"
                                                placeholder="Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-pill" value="Sign In">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
