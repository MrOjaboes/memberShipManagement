<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $events = Event::orderBy('created_at','DESC')->paginate(10);
        return view('livewire.event.home',compact('events'));
    }

    public function closeEvent($id)
    {
        Event::find($id)->update([
            'status' => 1,
        ]);
        return redirect()->back()->with('message','Event Closed Successfully!');

    }
}
