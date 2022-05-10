<?php

namespace App\Http\Livewire\Admin\Attendance;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\LeadersMeeting;

class LeadersEvent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $events = LeadersMeeting::orderBy('created_at','DESC')->paginate(10);
        return view('livewire.admin.attendance.leaders-event',compact('events'));
    }
}
