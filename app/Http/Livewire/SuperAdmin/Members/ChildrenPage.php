<?php

namespace App\Http\Livewire\SuperAdmin\Members;

use Livewire\Component;
use App\Models\Children;
use Illuminate\Support\Facades\Request;

class ChildrenPage extends Component
{
    protected $paginationTheme = 'bootstrap';
    public $users, $first_name, $last_name, $middle_name, $email, $gender, $primary_phone, $secondary_phone, $level, $birth_date, $school, $guardian_one, $guardian_two, $class,$children_id;
    public $updateMode = false;

    public function render()
    {
        $children = Children::orderBy('created_at', 'DESC')->latest()->paginate(10);
        return view('livewire.super-admin.members.children-page', compact('children'));
    }

    public function store(Request $request)
    {
        // $validated = $this->validate([
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'email' => 'required',
        //     'gender' => 'required',
        //     'primary_phone' => 'required',
        //     'birth_date' => 'required',
        //     'guardian_one' => 'required',
        //     'school' => 'required',
        // ]);

        Children::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'gender' => $this->gender,
            'primary_phone' => $this->primary_phone,
            'secondary_phone' => $this->secondary_phone,
            'birth_date' => $this->birth_date,
            'level' => $this->level,
            'class' => $this->class,
            'school' => $this->school,
            'guardian_one' => $this->guardian_one,
            'guardian_two' => $this->guardian_two,
            'hog_member_id' => 'HOG/' . date('Y') . '/' . substr(rand(0, time()), 0, 5),
            'image_id' => substr(rand(0, time()), 0, 5),
        ]);

        session()->flash('message', 'Users Created Successfully.');

        $this->resetInputFields();

        $this->emit('childrenStore'); // Close model to using to jquery
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $user = Children::where('id', $id)->first();
        $this->children_id = $id;
        $this->first_name = $user->first_name;
        $this->last_name = $user->last_name;
    }
    public function delete($id)
    {
      
        if ($id) {
            Children::where('id', $id)->delete();
            session()->flash('message', 'Group Deleted Successfully.');
        }
    }

    // private function resetInputFields()
    // {
    //     $this->first_name = '';
    //     $this->last_name = '';
    //     $this->email = '';
    //     $this->gender = '';
    //     $this->primary_phone = '';
    //     $this->secondary_phone = '';
    //     $this->birth_date = '';
    //     $this->level = '';
    //     $this->class = '';
    //     $this->school = '';
    //     $this->guardian_one = '';
    //     $this->guardian_two = '';
    // }
}
