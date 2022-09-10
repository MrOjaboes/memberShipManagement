<?php

namespace App\Http\Controllers\MediaAngle;

use App\Models\Adult;
use App\Models\Image;
use App\Models\Church;
use App\Models\Address;
use Illuminate\Http\Request;
use App\Models\FellowshipGroup;
use App\Models\FriendshipCentre;
use App\Http\Controllers\Controller;

class CCTVSectionController extends Controller
{
    public function adult()
    {
        $images = Image::where('status',false)->get();
        return view('Media.Adult.index');
    }
    public function addAdult()
    {
        $fgroup = FellowshipGroup::all();
        $centres = FriendshipCentre::all();
        $churches = Church::all();
        return view('Media.Adult.add', compact('fgroup', 'centres', 'churches'));
    }

    public function storeAdult(Request $request)
    {
        if($request->is_leader == 1){
            $member = Adult::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'middle_name' => $request->middle_name,
                'email' => $request->email,
                'gender' => $request->gender,
                'primary_phone' => $request->primary_phone,
                'secondary_phone' => $request->secondary_phone,
                'birth_date' => $request->birth_date,
                'marital_status' => $request->marital_status,
                'wedding_date' => $request->wedding_date,
                'occupation' => $request->occupation,
                'is_leader' => true,
                'church' => $request->church,
                'fellowship_group_id' => $request->fellowship_group_id,
                'friendship_centre_id' => $request->friendship_centre_id,
                'hog_member_id' => 'HOG/' . date('Y') . '/' . substr(rand(0, time()), 0, 5),
                'image_id' => substr(rand(0, time()), 0, 5),
            ]);
        }else{
            $member = Adult::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'middle_name' => $request->middle_name,
                'email' => $request->email,
                'gender' => $request->gender,
                'primary_phone' => $request->primary_phone,
                'secondary_phone' => $request->secondary_phone,
                'birth_date' => $request->birth_date,
                'marital_status' => $request->marital_status,
                'wedding_date' => $request->wedding_date,
                'occupation' => $request->occupation,
                'church' => $request->church,
                'fellowship_group_id' => $request->fellowship_group_id,
                'friendship_centre_id' => $request->friendship_centre_id,
                'hog_member_id' => 'HOG/' . date('Y') . '/' . substr(rand(0, time()), 0, 5),
                'image_id' => substr(rand(0, time()), 0, 5),
            ]);
        }

        Address::create([
            'member_id' => $member->id,
            "street" => $request->street,
            "house_number" => $request->house_number,
            "city" => $request->city,
            "lga" => $request->lga,
            "zip_code" => $request->zip_code,
            "state" => $request->state,
            "country" => $request->country,
            "status" => $request->status,
        ]);
        return redirect()->back()->with('message', 'Details Submited Successfully.');
    }
}
