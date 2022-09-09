<?php

namespace App\Http\Livewire\SuperAdmin\Content;

use App\Models\FellowshipGroup;
use App\Models\FriendshipCentre;
use Livewire\Component;

class FriendshipCentrePage extends Component
{
    public $users, $title, $description, $user_id,$fellowship_group;
    public $updateMode = false;


    public function render()
    {
        $centres = FriendshipCentre::all();
        $f_groups = FellowshipGroup::all();
        return view('livewire.super-admin.content.friendship-centre-page',compact('centres','f_groups'));
    }

    private function resetInputFields(){
        $this->title = '';
        $this->description = '';
        $this->fellowship_froup = '';
    }
    public function store()
    {
        $validated = $this->validate([
            'title' => 'required',
            'description' => 'required',
            'fellowship_group' => 'required',
        ]);
        FriendshipCentre::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'fellowship_group_id' => $validated['fellowship_group'],
            'user_id' => auth()->user()->id,
        ]);

        session()->flash('message', 'Users Created Successfully.');

        $this->resetInputFields();

        $this->emit('userStore'); // Close model to using to jquery
    }
    public function edit($id)
    {
        $this->updateMode = true;
        $user = FriendshipCentre::where('id',$id)->first();
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
            $user = FriendshipCentre::find($this->user_id);
            $user->update([
                'title' => $this->title,
                'description' => $this->description,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
        }
    }
    public function delete($id)
    {
        if($id){
            FriendshipCentre::where('id',$id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }
}
