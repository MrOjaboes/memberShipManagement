<?php

namespace App\Http\Livewire\SuperAdmin\Content;

use App\Models\Church;
use Livewire\Component;
use WithPagination;

class ChurchPage extends Component
{

    protected $paginationTheme = 'bootstrap';
    public $updateMode = false;
    public $title, $location, $description, $searchTerm, $user_id;

    public function render()
    {
        $churches = Church::orderBy('created_at', 'DESC')->latest()->paginate(10);
        return view('livewire.super-admin.content.church-page', compact('churches'));
    }

    public function store()
    {
        $validated = $this->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
        ]);
        Church::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'location' => $validated['location'],
            'user_id' => auth()->user()->id,
        ]);
        session()->flash('message', 'Church Created Successfully.');
        $this->resetInputFields();

        $this->emit('churchStore'); // Close model to using to jquery
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $user = Church::where('id', $id)->first();
        $this->user_id = $id;
        $this->title = $user->title;
        $this->location = $user->location;
        $this->description = $user->description;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'location' => 'required',
            'description' => 'required',
        ]);
        if ($this->user_id) {
            $user = Church::find($this->user_id);
            $user->update([
                'title' => $this->title,
                'location' => $this->location,
                'description' => $this->description,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Church Updated Successfully.');
            $this->resetInputFields();
        }
    }
    public function delete($id)
    {
        if ($id) {
            Church::where('id', $id)->delete();
            session()->flash('message', 'Church Deleted Successfully.');
        }
    }

    private function resetInputFields()
    {
        $this->title = '';
        $this->description = '';
        $this->location = '';
    }
}
