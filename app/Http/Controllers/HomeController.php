<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Member.home');
    }
    public function profileDetails()
    {
        return view('Member.Profile.details');
    }
    public function profileUpdate()
    {
        return view('Member.Profile.index');
    }
}
