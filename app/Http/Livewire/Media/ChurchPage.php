<?php

namespace App\Http\Livewire\Media;

use Livewire\WithPagination;
use App\Models\Church;
use Livewire\Component;

class ChurchPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $church = Church::orderBy('created_at', 'DESC')->latest()->paginate(2);
        return view('livewire.media.church-page',compact('church'));
    }
}
