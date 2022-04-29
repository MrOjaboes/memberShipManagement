<?php

namespace App\Http\Livewire\Admin\Members;

use App\Models\User;
use App\Models\Profile;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $users = User::orderBy('created_at','DESC')->where('user_type',0)->paginate(5);
        return view('livewire.admin.members.home',compact('users'));
    }
}
