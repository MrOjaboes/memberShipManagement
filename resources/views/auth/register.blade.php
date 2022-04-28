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
                            <div class="col-lg-7 mb-4">
                                <h1 data-aos="fade-up" class="" data-aos-delay="100">Welcome To House Of Grace
                                    <br>Membership Portal</h1>
                                 {{-- <p class="mb-4"  data-aos="fade-up" data-aos-delay="200"> </p> --}}
              <p data-aos="fade-up" data-aos-delay="300"><a href="{{ route('register') }}" class="btn btn-primary py-3 px-5 btn-pill">Not Yet A Member?</a></p>

                            </div>

                            <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                                <form method="POST" action="{{ route('register') }}" class="form-box">
                                    @csrf
                                    <h3 class="h4 text-black mb-4">New Account</h3>
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
                                        <label for="">User Name</label>
                                        <input type="text" class="form-control form-control-lg  @error('name') is-invalid @enderror" name="name"
                                            placeholder="User Name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email Id</label>
                                        <input type="email" class="form-control form-control-lg  @error('email') is-invalid @enderror" name="email"
                                            placeholder="Email Addresss">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" name="password"
                                            placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Confirm Password</label>
                                        <input type="password" class="form-control form-control-lg" name="password_confirmation"
                                            placeholder="Password">
                                        @error('confirm password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-pill" value="Sign Up">
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
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
