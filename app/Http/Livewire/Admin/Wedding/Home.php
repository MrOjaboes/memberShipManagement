<?php

namespace App\Http\Livewire\Admin\Wedding;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Home extends Component
{
   
    public $month ;

    public function search()
    {
       // dd($this->month);
      return DB::table('profiles')
      ->whereMonth('birth_date', 'like','%'.$this->month.'%')
      ->get();
    }
    public function render()
    {

      // $users = $this->sort();
        $users = $this->search();
      return view('livewire.admin.wedding.home',compact('users'));
    }

}
