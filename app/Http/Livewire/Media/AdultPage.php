<?php

namespace App\Http\Livewire\Media;

use App\Models\Adult;
use Livewire\Component;
use Livewire\WithPagination;

class AdultPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $members = Adult::orderBy('created_at','DESC')->latest()->paginate(6);
        return view('livewire.media.adult-page',compact('members'));
    }
}
