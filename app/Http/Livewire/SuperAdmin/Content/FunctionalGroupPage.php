<?php

namespace App\Http\Livewire\SuperAdmin\Content;

use App\Models\FunctionalGroup;
use Livewire\Component;

class FunctionalGroupPage extends Component
{
    protected $paginationTheme = 'bootstrap';
    public $users, $title, $description, $user_id, $fellowship_group;
    public $updateMode = false;

    public function render()
    {
        $groups = FunctionalGroup::orderBy('created_at', 'DESC')->latest()->paginate(10);
        return view('livewire.super-admin.content.functional-group-page', compact('groups'));
    }

    private function resetInputFields()
    {
        $this->title = '';
        $this->description = '';
        $this->fellowship_froup = '';
    }
    public function store()
    {
        $validated = $this->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        FunctionalGroup::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'user_id' => auth()->user()->id,
        ]);

        session()->flash('message', 'Group Created Successfully.');

        $this->resetInputFields();

        $this->emit('fgroupStore'); // Close model to using to jquery
    }
    public function edit($id)
    {
        $this->updateMode = true;
        $user = FunctionalGroup::where('id', $id)->first();
        $this->user_id = $id;
        $this->title = $user->title;
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
            'description' => 'required',
        ]);
        if ($this->user_id) {
            $user = FunctionalGroup::find($this->user_id);
            $user->update([
                'title' => $this->title,
                'description' => $this->description,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Group Updated Successfully.');
            $this->resetInputFields();
        }
    }
    public function delete($id)
    {
        if ($id) {
            FunctionalGroup::where('id', $id)->delete();
            session()->flash('message', 'Group Deleted Successfully.');
        }
    }
}
