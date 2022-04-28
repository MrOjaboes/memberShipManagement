<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

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


}
