<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Member.home');
    }
    public function profileDetails()
    {
        //$profiles = Profile::where('user_id',auth()->user()->id)->get();

        return view('Member.Profile.details');
    }
    public function editProfile()
    {
        return view('Member.Profile.index');
    }
    public function updateProfile(Request $request)
    {  if ($request->file('file')) {
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
         $request->file->move('Photos', $fileName, 'public');
        $request['file'] = $fileName;
    }

        DB::table('profiles')
        ->where('user_id',auth()->user()->id)
        ->update([
            'fullname' => $request->fullname,
            'number_of_children' => $request->number_of_children,
            'email' => $request->email,
            'spouse_name' => $request->spouse_name,
            'spouse_birthdate' => $request->spouse_birthdate,
            'spouse_contact' => $request->spouse_contact,
            'wedding_date' => $request->wedding_date,
            'contact_one' => $request->contact_one,
            'contact_two' => $request->contact_two,
            'age_group' => $request->age_group,
            'gender' => $request->gender,
            'church_location' => $request->church_location,
            'address_one' => $request->address_one,
            'address_two' => $request->address_two,
            'area' => 'Area 1',
            'fellowship_group' => $request->fellowship_group,
            'friendship_centre' => $request->friendship_centre,
            'marital_status' => $request->marital_status,
            'birth_date' => $request->birth_date,
            'occupation' => $request->occupation,
            'leadership_position' => $request->leadership_position,
            'memberId' => 'HOG/'.date('Y').'/'.substr(rand(0,time()),0,5),
            'photo' => $fileName,
        ]);
        return redirect()->back()->with('message', 'Profile updated succesfully');

    }
}
