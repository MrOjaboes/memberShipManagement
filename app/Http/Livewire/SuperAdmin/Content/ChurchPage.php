<?php

namespace App\Http\Livewire\SuperAdmin\Content;

use App\Models\Church;
use Livewire\Component;
use WithPagination;
class ChurchPage extends Component
{

    protected $paginationTheme = 'bootstrap';
    public $updateMode = false;
    public $title,$location,$description,$searchTerm,$church_id;
    public function render()
    {
        $churches = Church::orderBy('created_at','DESC')->latest()->paginate(10);
        return view('livewire.super-admin.content.church-page',compact('churches'));
    }

    public function storeChurch()
    {
       // dd('ok');
        $validated = $this->validate([
            'title' => 'required|unique:churches,title',
            'location' => 'required',
            'description' => 'required',
        ]);

        Church::create([
            'title' => $validated['title'],
            'location' => $validated['location'],
            'description' => $validated['description'],
            'user_id' => auth()->user()->id,
        ]);
        $this->resetInputFields();
        session()->flash('message', 'Church Created Successfully!');

        //return redirect()->back()->with('message','Centre Created Successfully!');

    }

    public function edit($id)
    {
        $church =  Church::where('id',$id)->first();
        $this->church_id = $id;
        $this->title = $church->title;
        $this->location = $church->location;
        $this->description = $church->description;
        $this->updateMode = true;
    }

    private function resetInputFields(){
        $this->title = '';
        $this->location = '';
        $this->description = '';
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'fellowship_group' => 'required',
             'fellowship_centre' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::find($this->user_id);
        $user->update([
            'fellowship_group' => $this->fellowship_group,
            'fellowship_centre' => $this->fellowship_centre,
            'email' => $this->email,
        ]);

        $this->updateMode = false;
  $this->resetInputFields();
  return redirect()->back()->with('message','Centre Updated Successfully!');

    }
}
