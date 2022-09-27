<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
   public function addAccount()
   {
  return view('SuperAdmin.Account.home');
   }
}
