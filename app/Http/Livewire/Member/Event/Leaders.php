<?php

namespace App\Http\Livewire\Member\Event;

use App\Models\Event;
use App\Models\LeadersMeeting;
use Livewire\Component;
use Livewire\WithPagination;

class Leaders extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $events = LeadersMeeting::orderBy('created_at','DESC')->paginate(10);
        return view('livewire.member.event.leaders',compact('events'));
    }

}
