@extends('layouts.auth')
@section('content')
    <div class="container">
        <div class="row pt-5">

                        @foreach ($links as $data)
                        <div class="col-md-12 pt-4">
                            <h4 class="text-justify">{{ $data->title }}</h4><br>
                            <div class="text-center"> <a class="btn btn-danger py-3 px-3" href="{{ $data->link }}">Click To Register</a>
                            </div>
                            <hr />
                            </div>
                            @endforeach


        </div>
    </div>
@endsection
