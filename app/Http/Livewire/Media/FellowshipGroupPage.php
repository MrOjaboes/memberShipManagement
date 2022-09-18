<?php

namespace App\Http\Livewire\Media;

use App\Models\FellowshipGroup;
use Livewire\Component;
use Livewire\WithPagination;
class FellowshipGroupPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $fellowship_group = FellowshipGroup::orderBy('created_at', 'DESC')->latest()->paginate(2);
        return view('livewire.media.fellowship-group-page',compact('fellowship_group'));
    }
}
