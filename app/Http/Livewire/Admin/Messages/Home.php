<?php

namespace App\Http\Livewire\Admin\Messages;

use App\Models\User;
use App\Models\Message;
use Livewire\Component;

class Home extends Component
{
    public $receiver,$message;
    public $selectedRows = [];
    public $selectPageRows = false;

    public function updatedselectPageRows($value)
    {
            if($value){
                $this->selectedRows = $this->users->pluck('id');

            }else{
                $this->reset(['selectedRows','selectPageRows']);
            }
            //dd($this->selectedRows);
    }
    public function getUsersProperty()
    {
       return User::where('user_type','<',2 )->get();

    }
    public function render()
    {
        $users = User::where('user_type','<',2 )->get();
        return view('livewire.admin.messages.home',compact('users'));
    }
    public function send()
    {

   // dd($id);
   if($this->selectPageRows){
    $member_id = $this->selectedRows;
    $content = $this->message;
    for ($i = 0; $i <= count($member_id) - 1; $i++) {
        Message::create([
                'reciever_id' => $member_id[$i],
                'message' => $content,
                'sender_id' => auth()->user()->id,
                ]);
        }
        $this->reset();
        return redirect()->back()->with('message','Message Sent Successfully!');

    }

            if($this->selectedRows){
                $member_id = $this->selectedRows;
                $content = $this->message;
                for ($i = 0; $i <= count($member_id) - 1; $i++) {
                    Message::create([
                            'reciever_id' => $member_id[$i],
                            'message' => $content,
                            'sender_id' => auth()->user()->id,
                            ]);
                }
            }
                $this->reset();
                return redirect()->back()->with('message','Message Sent Successfully!');

     }
}
