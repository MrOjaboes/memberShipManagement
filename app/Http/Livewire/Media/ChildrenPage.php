<?php

namespace App\Http\Livewire\Media;

use App\Models\Children;
use Livewire\Component;
use Livewire\WithPagination;

class ChildrenPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm =null;
    public function render()
    {
        $children = $this->searchChildren();
        return view('livewire.media.children-page',compact('children'));
    }

public function searchChildren()
{
   // dd('ok');
    return Children::query()
    ->where('first_name','like','%'.$this->searchTerm.'%')
    ->orWhere('class_id','like','%'.$this->searchTerm.'%')
    ->with('class')
    ->latest()->paginate(6);
}
}
