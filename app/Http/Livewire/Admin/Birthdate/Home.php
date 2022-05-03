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
    public $month ;

    public function search()
    {
        dd('ok');
      return DB::table('profiles')
      ->whereMonth('birth_date', 'like','%'.$this->month.'%')
      ->paginate(5);
    }
    public function render()
    {

      // $users = $this->sort();
        $users = Profile::query()
        ->orderBy('created_at','DESC')
           ->latest()->paginate(5);
      return view('livewire.admin.birthdate.home',compact('users'));
    }
}
