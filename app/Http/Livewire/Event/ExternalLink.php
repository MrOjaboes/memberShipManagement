<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ExternalEvent;
use Illuminate\Support\Facades\Validator;


class ExternalLink extends Component
{
    public $state = [];
    public $link;
    public $showEdit = false;
    
    public function render()
    {
        $events =  ExternalEvent::orderBy('created_at','DESC')->get();
        return view('livewire.event.external-link',compact('events'));
    }

    public function storeLink()
    {
        $validated = Validator::make($this->state,[
            'title' => 'required',
            'link' => 'required|url',
        ])->validate();
        ExternalEvent::create([
            'title' => $validated['title'],
            'link' => $validated['link'],
            'user_id' => auth()->user()->id,
        ]);
        $this->resetform();
        return redirect()->back()->with('message','Link Added Successfully!');

    }
    public function edit(ExternalEvent $link)
    {
        $this->link = $link;
        $this->showEdit = true;
        //dd($user->toArray());
        $this->state = $link->toArray();
    }

    public function updateLink(ExternalEvent $link)
    {
        $validated = Validator::make($this->state,[
            'title' => 'required',
            'link' => 'required|url',

        ])->validate();

      $this->link->update($validated);
      $this->resetform();
      return redirect()->back()->with('message','Link Updated Successfully!');
    }
    public function closeEvent($id)
    {
      ExternalEvent::find($id)->update([
            'status' => 1,
        ]);

        return redirect()->back()->with('message','Event Closed Successfully!');

    }

    private function resetform()
    {
    $this->state = '';
    }
}
