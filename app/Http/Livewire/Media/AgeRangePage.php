<?php

namespace App\Http\Livewire\Media;

use Livewire\Component;
use App\Models\AgeRange;
use Livewire\WithPagination;

class AgeRangePage extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $age = AgeRange::orderBy('created_at', 'DESC')->latest()->paginate(2);
        return view('livewire.media.age-range-page',compact('age'));
    }


}
