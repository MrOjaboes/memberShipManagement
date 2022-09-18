<?php

namespace App\Http\Livewire\Media;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\FunctionalGroup;


class FunctionalGroupPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $functional_group = FunctionalGroup::orderBy('created_at', 'DESC')->latest()->paginate(2);
        return view('livewire.media.functional-group-page', compact('functional_group'));
    }
}
