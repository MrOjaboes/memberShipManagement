<?php

namespace App\Http\Livewire\SuperAdmin\Content;

use Livewire\Component;
use App\Models\AgeRange;

class AgeRangePage extends Component
{


    protected $paginationTheme = 'bootstrap';
    public $updateMode = false;
    public $title, $value,$user_id;

    public function render()
    {
        $age_range = AgeRange::orderBy('created_at', 'DESC')->latest()->paginate(10);
        return view('livewire.super-admin.content.age-range-page', compact('age_range'));
    }

    public function store()
    {
        $validated = $this->validate([
            'title' => 'required',
            'value' => 'required',
        ]);
        AgeRange::create([
            'title' => $validated['title'],
            'value' => $validated['value'],
            'user_id' => auth()->user()->id,
        ]);
        session()->flash('message', 'Age Created Successfully.');
        $this->resetInputFields();
        $this->emit('churchStore'); // Close model to using to jquery
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $user = AgeRange::where('id', $id)->first();
        $this->user_id = $id;
        $this->title = $user->title;
        $this->value = $user->value;
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
            'value' => 'required',
        ]);
        if ($this->user_id) {
            $user = AgeRange::find($this->user_id);
            $user->update([
                'title' => $this->title,
                'value' => $this->value,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Age Updated Successfully.');
            $this->resetInputFields();
        }
    }
    public function delete($id)
    {
        if ($id) {
            AgeRange::where('id', $id)->delete();
            session()->flash('message', 'Age Deleted Successfully.');
        }
    }

    private function resetInputFields()
    {
        $this->title = '';
        $this->value = '';
    }


}
