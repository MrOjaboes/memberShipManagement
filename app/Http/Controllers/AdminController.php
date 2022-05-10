<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\EventRegister;
use App\Models\LeadersMeeting;
use App\Models\Profile;

class AdminController extends Controller
{
    public function index()
    {
        $members = Profile::count();
        $activeLeaders = LeadersMeeting::where('status',0)->count();
        $closedLeaders = LeadersMeeting::where('status',1)->count();
        $closedEvents = Event::where('status',1)->count();
        $activeEvents = Event::where('status',0)->count();
       return view('Admin.index',compact('members','activeLeaders','closedLeaders','activeEvents','closedEvents'));
    }
    public function members()
    {
       return view('Admin.Members.index');
    }
    public function attendance()
    {
       return view('Admin.Attendance.index');
    }
    public function leadersAttendance()
    {
       return view('Admin.Attendance.leaders_event');
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
