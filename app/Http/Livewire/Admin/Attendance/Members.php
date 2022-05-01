<?php

namespace App\Http\Livewire\Admin\Attendance;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\EventRegister;

class Members extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $events = EventRegister::orderBy('created_at','DESC')->paginate(10);
        return view('livewire.admin.attendance.members');
    }
}
