<?php

namespace App\Http\Livewire\SuperAdmin\Members;

use App\Models\Address;
use App\Models\Adult;
use Livewire\Component;

class AdultPage extends Component
{

    protected $paginationTheme = 'bootstrap';
    public $searchTerm = null;
    public function render()
    {
        $members =$this->searchMember();
        return view('livewire.super-admin.members.adult-page',compact('members'));
    }
public function searchMember()
{
   // dd('ok');
    return Adult::query()
    ->where('first_name','like','%'.$this->searchTerm.'%')
    ->orWhere('primary_phone','like','%'.$this->searchTerm.'%')
    ->latest()->paginate(20);
}

}
