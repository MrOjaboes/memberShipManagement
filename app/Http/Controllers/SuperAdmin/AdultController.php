<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Adult;
use Illuminate\Http\Request;

class AdultController extends Controller
{
    public function index()
    {
        return view('SuperAdmin.Adult.index');
    }
    public function add()
    {
        return view('SuperAdmin.Adult.add');
    }
    public function store(Request $request)
    {
        $member = Adult::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'gender' => $request->gender,
            'primary_phone' => $request->primary_phone,
            'secondary_phone' => $request->secondary_phone,
            'birth_date' => $request->birth_date,
            'level' => $request->level,
            'class' => $request->class,
            'school' => $request->school,
            'guardian_one' => $request->guardian_one,
            'guardian_two' => $request->guardian_two,
            'hog_member_id' => 'HOG/' . date('Y') . '/' . substr(rand(0, time()), 0, 5),
            'image_id' => substr(rand(0, time()), 0, 5),
        ]);
        Address::create([
            'member_id' => $member->id,
            "street" => $request->street,
            "city" => $request->city,
            "lga" => $request->lga,
            "zip_code" => $request->zip_code,
            "state" => $request->state,
            "country" => $request->country,
            "status" => 'previous',
        ]);
        return redirect()->back()->with('message', 'Details Submited Successfully.');
    }
    public function edit(Adult $member)
    {
        return view('SuperAdmin.Adult.edit', compact('member'));
    }
}
