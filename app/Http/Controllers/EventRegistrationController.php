<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\EventRegister;
use App\Models\LeadersMeeting;
use Illuminate\Support\Facades\DB;

class EventRegistrationController extends Controller
{
    public function eventDetails(Event $event)
    {
       return view('Member.Event.event_details',compact('event'));
    }
    public function leaderEventDetails(LeadersMeeting $event)
    {
       return view('Member.Event.leaders_event-details',compact('event'));
    }

    public function attendEvent(Event $event, Request $request)
    {

           $event_count = EventRegister::where('event_id', $event->id)
            ->where('user_id', auth()->user()->id)
            ->get();
        //dd($dataexist);
        if (count($event_count) > 1) {
            return redirect()
                ->back()->with('error', 'Attendance Already Taken!');
        }
       auth()->user()->eventRegister()->create([
           'user_id' => auth()->user()->id,
           'event_id' => $event->id,
           'contact' => $request->contact,
           'event_type' => $request->event_type,
           'status' => 1,
       ]);
       return redirect()->back()->with('message', 'Attendance Taken succesfully');

    }
}
