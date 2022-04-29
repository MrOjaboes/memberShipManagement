<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventRegistrationController extends Controller
{
    public function eventDetails(Event $event)
    {
       return view('Member.Event.event_details',compact('event'));
    }
    public function attendEvent(Event $event, Request $request)
    {
        //dd($event->id);
       auth()->user()->eventRegister()->create([
           'user_id' => auth()->user()->id,
           'event_id' => $event->id,
           'status' => 1,
       ]);
       return redirect()->route('home')->with('message', 'Attendance Taken succesfully');

    }
}
