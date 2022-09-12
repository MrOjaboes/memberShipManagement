<?php

namespace App\Http\Livewire\Media;

use App\Models\Children;
use Livewire\Component;
use Livewire\WithPagination;

class ChildrenPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $children = Children::orderBy('created_at','DESC')->latest()->paginate(6);
        return view('livewire.media.children-page',compact('children'));
    }
}
