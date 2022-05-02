<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\EventRegister;

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
    public function attendance()
    {
       return view('Admin.Attendance.index');
    }
    public function eventAttendance(Event $event)
    {
        $members = EventRegister::orderBy('created_at','DESC')->where('event_id',$event->id)->paginate(10);
       return view('Admin.Attendance.members',compact('members'));
    }

    public function birthdate()
    {
       return view('Admin.Birthdate.index');
    }

    public function profile()
    {
       return view('Admin.Profile.home');
    }
}
