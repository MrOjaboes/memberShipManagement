<?php

namespace App\Http\Livewire\SuperAdmin\Members;

use App\Models\Address;
use App\Models\Adult;
use Livewire\Component;

class AdultPage extends Component
{
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $members = Adult::orderBy('created_at', 'DESC')->latest()->paginate(10);
        return view('livewire.super-admin.members.adult-page',compact('members'));
    }
}
