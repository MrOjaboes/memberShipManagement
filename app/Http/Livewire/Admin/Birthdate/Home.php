<?php

namespace App\Http\Livewire\Admin\Birthdate;

use App\Models\Profile;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Home extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm = null;
    public function render()
    {

        $users = Profile::query()
        ->where('birth_date','like','%'.$this->searchTerm.'%')
        ->orWhere('memberId','like','%'.$this->searchTerm.'%')
        ->latest()->paginate(5);
      return view('livewire.admin.birthdate.home',compact('users'));
    }
}
