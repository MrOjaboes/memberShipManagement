<?php

namespace App\Http\Livewire\Media;

use App\Models\Image;
use Livewire\Component;

class PhotosPage extends Component
{
    public $selectedRows = [];
    public $selectPageRows = false;

    public function updatedselectPageRows($value)
    {
        if ($value) {
            $this->selectedRows = $this->images()->pluck('id');
        } else {
            $this->reset(['selectedRows', 'selectPageRows']);
        }
       // dd($this->selectedRows);
    }

    public function images()
    {
        return Image::where('status', false)->get();
    }
    public function render()
    {

        $images = $this->images();
        return view('livewire.media.photos-page', compact('images'));
    }


    public function changeStatus()
    {
        Image::whereIn('id', $this->selectedRows)->update([
            'status' => true,
        ]);
        $this->reset();
        return redirect()->back()->with('message', 'Status Changed Successfully!');
    }
}
