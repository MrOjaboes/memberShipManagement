<?php

namespace App\Http\Livewire\SuperAdmin\Content;

use App\Models\FellowshipGroup;
use Livewire\Component;

class FellowshipGroupPage extends Component
{
    protected $paginationTheme = 'bootstrap';
    public $updateMode = false;
    public $title,$description,$user_id;

    public function render()
    {
        $fellowshipGroup = FellowshipGroup::orderBy('created_at', 'DESC')->latest()->paginate(10);
        return view('livewire.super-admin.content.fellowship-group-page',compact('fellowshipGroup'));
    }

    private function resetInputFields(){
        $this->title = '';
        $this->description = '';
        
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $user = FellowshipGroup::where('id', $id)->first();
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
            'description' => '',
        ]);
        if ($this->user_id) {
            $user = FellowshipGroup::find($this->user_id);
            $user->update([
                'title' => $this->title,
                'description' => $this->description,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Group Updated Successfully.');
            $this->resetInputFields();
        }
    }
}
