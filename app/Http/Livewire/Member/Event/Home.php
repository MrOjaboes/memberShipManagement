<?php

namespace App\Http\Livewire\Member\Event;

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
        return view('livewire.member.event.home',compact('events'));
    }
}
