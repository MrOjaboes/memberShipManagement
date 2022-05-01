<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\EventRegister;
use Illuminate\Support\Facades\DB;

class EventRegistrationController extends Controller
{
    public function eventDetails(Event $event)
    {
       return view('Member.Event.event_details',compact('event'));
    }
    public function attendEvent(Event $event, Request $request)
    {

        $current_date = date('Y-m-d');
        $dataexist = EventRegister::whereDate('created_at', $current_date)
            ->where('user_id', auth()->user()->id)
            ->get();
        //dd($dataexist);
        if (count($dataexist) !== 0) {
            return redirect()
                ->back()->with('error', 'Attendance Already Taken!');
        }
       auth()->user()->eventRegister()->create([
           'user_id' => auth()->user()->id,
           'event_id' => $event->id,
           'contact' => $request->contact,
           'status' => 1,
       ]);
       return redirect()->route('home')->with('message', 'Attendance Taken succesfully');

    }
}
