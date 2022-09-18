<?php

namespace App\Http\Livewire\Media;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\FriendshipCentre;

class FriendshipCentrePage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $friendship_centre = FriendshipCentre::orderBy('created_at', 'DESC')->latest()->paginate(2);
        return view('livewire.media.friendship-centre-page',compact('friendship_centre'));
    }
}
