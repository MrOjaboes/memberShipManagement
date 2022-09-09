<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function church()
    {
        return view('SuperAdmin.Content.church');
    }
   
    public function fellowshipCentre()
    {
        return view('SuperAdmin.Content.fc-centre');
    }
    public function functionalGroup()
    {
        return view('SuperAdmin.Content.functional-group');
    }
    public function fellowshipGroup()
    {
        return view('SuperAdmin.Content.fellowship-group');
    }
}
