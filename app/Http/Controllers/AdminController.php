<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
       return view('Admin.index');
    }
    public function members()
    {
       return view('Admin.Members.index');
    }
}
