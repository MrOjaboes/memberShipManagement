<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventRegistrationController extends Controller
{
    public function eventDetails(Event $event)
    {
        dd($event);
    }
}
