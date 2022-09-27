<?php

namespace App\Http\Livewire\Account;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Home extends Component
{


    protected $paginationTheme = 'bootstrap';
    public $updateMode = false;
    public $name, $email, $searchTerm, $user_id;

    public function render()
    {
        $users = User::where('user_type', 3)->latest()->paginate(10);
        return view('livewire.account.home', compact('users'));
    }

    public function store()
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'unique:users'],
            'email' => ['required', 'string', 'email', 'unique:users'],
        ]);
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make(1234567),
            'user_type' => 3,

        ]);
        session()->flash('message', 'User Created Successfully.');
        $this->resetInputFields();

        $this->emit('churchStore'); // Close model to using to jquery
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $user = User::where('id', $id)->first();
        $this->user_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'name' => ['required', 'string', 'unique:users'],
            'email' => ['required', 'string', 'email', 'unique:users'],
        ]);
        if ($this->user_id) {
            $user = User::find($this->user_id);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'User Updated Successfully.');
            $this->resetInputFields();
        }
    }
    public function delete($id)
    {
        if ($id) {
            User::where('id', $id)->delete();
            session()->flash('message', 'User Deleted Successfully.');
        }
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
    }
}
