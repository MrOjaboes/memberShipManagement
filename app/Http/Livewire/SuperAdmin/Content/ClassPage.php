<?php

namespace App\Http\Livewire\SuperAdmin\Content;

use Livewire\Component;
use App\Models\ChildrenClass;

class ClassPage extends Component
{

    protected $paginationTheme = 'bootstrap';
    public $updateMode = false;
    public $title, $user_id;

    public function render()
    {
        $class = ChildrenClass::orderBy('created_at', 'DESC')->latest()->paginate(10);
        return view('livewire.super-admin.content.class-page', compact('class'));
    }

    public function store()
    {
        $validated = $this->validate([
            'title' => 'required',
        ]);
        ChildrenClass::create([
            'title' => $validated['title'],
            'user_id' => auth()->user()->id,
        ]);
        session()->flash('message', 'Class Created Successfully.');
        $this->resetInputFields();
        $this->emit('churchStore'); // Close model to using to jquery
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $user = ChildrenClass::where('id', $id)->first();
        $this->user_id = $id;
        $this->title = $user->title;
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
        ]);
        if ($this->user_id) {
            $user = ChildrenClass::find($this->user_id);
            $user->update([
                'title' => $this->title,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Class Updated Successfully.');
            $this->resetInputFields();
        }
    }
    public function delete($id)
    {
        if ($id) {
            ChildrenClass::where('id', $id)->delete();
            session()->flash('message', 'Class Deleted Successfully.');
        }
    }

    private function resetInputFields()
    {
        $this->title = '';
    }
}
