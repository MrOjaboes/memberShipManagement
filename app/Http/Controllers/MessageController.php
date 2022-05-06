<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create()
    {
        $users = User::where('user_type',0)->orderBy('created_at','DESC')->get();
       return view('Admin.Messages.home',compact('users'));
    }
  public function messages(Type $var = null)
  {
      # code...
  }

}
