<?php

namespace App\Http\Livewire\Member\Inbox;

use App\Models\Message;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $messages = Message::where('reciever_id',auth()->user()->id)->orderBy('created_at','DESC')->get();
        return view('livewire.member.inbox.home',compact('messages'));
    }
    public function closeMessage($id)
    {
        Message::find($id)->update([
            'is_read' => 1,
        ]);
       // return redirect()->back()->with('message','Event Closed Successfully!');

    }
}
