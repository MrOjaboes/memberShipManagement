<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\LeadersMeeting;
use App\Http\Livewire\Admin\Event\LeadersEvent;
use App\Models\ExternalLink;

class EventController extends Controller
{
    public function index()
    {
       return view('Admin.Event.index');
    }
    public function event()
    {
       return view('Admin.Event.create');
    }
    public function store(Request $request)
    {
        //dd($request->all());
        if ($request->file('file')) {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
             $request->file->move('Events', $fileName, 'public');
            $request['file'] = $fileName;
        }
          auth()->user()->events()->create([
              'title' => $request->title,
              'description' => $request->description,
              'caption' => $fileName,
              'user_id' => auth()->user()->id,
          ]);
         return redirect()->back()->with('message','Event Created Successfully!');
    }
    public function edit(Event $event)
    {
       return view('Admin.Event.edit',compact('event'));
    }
     public function updateEvent(Request $request, Event $event)
     {
        if ($request->file('file')) {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
             $request->file->move('Events', $fileName, 'public');
            $request['file'] = $fileName;
            auth()->user()->events()->update([
                'title' => $request->title,
                'description' => $request->description,
                'caption' => $fileName,
                'user_id' => auth()->user()->id,
            ]);
        }else{
            auth()->user()->events()
            ->where('id',$event-> id)
            ->update([
                'title' => $request->title,
                'description' => $request->description,
                'user_id' => auth()->user()->id,
            ]);
        }

         return redirect()->back()->with('message','Event Updated Successfully!');
    }

    //External Link
    public function externalLink()
    {
       return view('Admin.Event.external_event');
    }
    public function storeLink(Request $request)
    {

        $link = ExternalLink::where('user_id', auth()->user()->id)->count();

        if ($link > 0) {
                auth()->user()->externalLink()
                ->where('user_id',auth()->user()->id)
                ->update([
                    'link' => $request->link,
                    'user_id' => auth()->user()->id,
                ]);
                return redirect()->back()->with('message','Link Updated Successfully!');

            }else{

                auth()->user()->externalLink()->create([
                    'link' => $request->link,
                    'user_id' => auth()->user()->id,
                ]);
                return redirect()->back()->with('message','Link Created Successfully!');

            }

    }
    //End External Link

    //Leaders Event
    public function leaders()
    {
      return view('Admin.LeadersEvent.home');
    }
    public function leaderEvent()
    {
      return view('Admin.LeadersEvent.create');
    }
    public function storeLeaderEvent(Request $request)
    {
      //dd($request->all());
      if ($request->file('file')) {
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
         $request->file->move('Leaders_Events', $fileName, 'public');
        $request['file'] = $fileName;
    }
      auth()->user()->leaders_events()->create([
          'title' => $request->title,
          'description' => $request->description,
          'caption' => $fileName,
          'user_id' => auth()->user()->id,
      ]);
     return redirect()->back()->with('message','Event Created Successfully!');
    }

    public function editleaderEvent(LeadersMeeting $event)
    {
      //  dd($leaderevent);
      return view('Admin.LeadersEvent.edit',compact('event'));
    }
    public function updateleaderEvent(LeadersMeeting $event,Request $request)
    {
        if ($request->file('file')) {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
             $request->file->move('Leaders_Events', $fileName, 'public');
            $request['file'] = $fileName;
            auth()->user()->leaders_events()->update([
                'title' => $request->title,
                'description' => $request->description,
                'caption' => $fileName,
                'user_id' => auth()->user()->id,
            ]);
        }else{
            auth()->user()->leaders_events()
            ->where('id',$event-> id)
            ->update([
                'title' => $request->title,
                'description' => $request->description,
                'user_id' => auth()->user()->id,
            ]);
        }

         return redirect()->back()->with('message','Event Updated Successfully!');
    }
    //End Leaders Event
}
