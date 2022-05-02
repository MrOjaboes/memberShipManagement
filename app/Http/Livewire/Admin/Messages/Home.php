<?php

namespace App\Http\Livewire\Admin\Messages;

use Livewire\Component;

class Home extends Component
{
    public $receiver,$message;
    public function render()
    {
        return view('livewire.admin.messages.home');
    }
    public function send()
    {
      dd('ok');
    }
}
