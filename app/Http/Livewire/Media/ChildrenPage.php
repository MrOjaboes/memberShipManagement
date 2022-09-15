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
    ->orWhere('class','like','%'.$this->searchTerm.'%')
    ->latest()->paginate(6);
}
}
