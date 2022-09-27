<?php

namespace App\Http\Livewire\Media;

use App\Models\ChildrenClass;
use Livewire\Component;
use Livewire\WithPagination;

class ClassPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $class = ChildrenClass::orderBy('created_at', 'DESC')->latest()->paginate(2);
        return view('livewire.media.class-page',compact('class'));
    }


}
