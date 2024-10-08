<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Event;
use App\Models\Profile;
use App\Imports\AdultImport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Models\EventRegister;
use App\Models\LeadersMeeting;
use App\Imports\ChildrenImport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function index()
    {
        $members = Profile::where('fullname', '!=', null)->count();
        $activeLeaders = LeadersMeeting::where('status', 0)->count();
        $closedLeaders = LeadersMeeting::where('status', 1)->count();
        $closedEvents = Event::where('status', 1)->count();
        $activeEvents = Event::where('status', 0)->count();
        return view('Admin.index', compact('members', 'activeLeaders', 'closedLeaders', 'activeEvents', 'closedEvents'));
    }
    public function uploadUser()
    {
        return view('Admin.users');
    }
    public function uploadUsers(Request $request)
    {
        //dd($request->file);
      //  Excel::import(new UsersImport, $request->file('file'));
      //Excel::import(new ChildrenImport, $request->file('file'));
      Excel::import(new AdultImport, $request->file('file'));
        return redirect()->back()->with('success', 'User Imported Successfully');
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
        $members = EventRegister::orderBy('created_at', 'DESC')->where('event_id', $event->id)->paginate(10);
        return view('Admin.Attendance.members', compact('members'));
    }
    public function leadersEventAttendance(Event $event)
    {
        // $members = DB::table('users')
        // ->where('event_id', '=',$event->id)
        // ->where(function ($query) {
        //     $query->where('event_type','=','leader');

        // })
        // ->orderBy('created_at','DESC')->get();
        $members = DB::table('event_registers')
            ->where('event_id', '=', $event->id)
            ->where(function ($query) {
                $query->where('event_type', '=', 'leader');
            })
            ->get();
        return view('Admin.Attendance.leaders_members', compact('members'));
    }

    public function birthdate()
    {
        return view('Admin.Birthdate.index');
    }
    public function wedding()
    {
        return view('Admin.Wedding.index');
    }

    public function profile()
    {
        return view('Admin.Profile.home');
    }
    // public function generatePDF()
    // {
    //     //dd('ok');
    //     $members = DB::table('profiles')
    //         ->where('fullname', '!=', null)->get();
    //     $pdf = PDF::loadView('Pdf.members_list', compact('members'));
    //     return $pdf->download('members.pdf');
    // }
}
