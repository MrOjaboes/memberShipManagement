<?php

namespace App\Http\Livewire\Media;

use App\Models\Adult;
use Livewire\Component;
use Livewire\WithPagination;

class AdultPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm =null;
    public function render()
    {
        $members = $this->searchMember();
        return view('livewire.media.adult-page',compact('members'));
    }

public function searchMember()
{
   // dd('ok');
    return Adult::query()
    ->where('first_name','like','%'.$this->searchTerm.'%')
    ->orWhere('primary_phone','like','%'.$this->searchTerm.'%')
    ->latest()->paginate(6);
}
}
