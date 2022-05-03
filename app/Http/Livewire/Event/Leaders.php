<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\LeadersMeeting;

class Leaders extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $events = LeadersMeeting::orderBy('created_at','DESC')->paginate(10);
        return view('livewire.event.leaders',compact('events'));
    }

    public function closeEvent($id)
    {
        LeadersMeeting::find($id)->update([
            'status' => 1,
        ]);
        return redirect()->back()->with('message','Event Closed Successfully!');

    }
}
