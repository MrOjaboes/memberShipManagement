<?php

namespace App\Http\Controllers\MediaAngle;

use App\Models\Adult;
use App\Models\Image;
use App\Models\Church;
use App\Models\Address;
use App\Imports\AdultImport;
use Illuminate\Http\Request;
use App\Models\FellowshipGroup;
use App\Models\FriendshipCentre;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;


class AdultController extends Controller
{


    public function allAdults()
    {
        return view('Media.Adult.adult-list');
    }

    public function storeAdult(Request $request, Image $image)
    {
        // dd( $image->image_id);
        if ($request->is_leader == 1) {
            $member = Adult::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'middle_name' => $request->middle_name,
                'email' => $request->email,
                'gender' => $request->gender,
                'primary_phone' => $request->primary_phone,
                'secondary_phone' => $request->secondary_phone,
                'age_id' => $request->age_range,
                'day' => $request->day,
                'month' => $request->month,
                'year' => $request->year,
                'marital_status' => $request->marital_status,
                'wedding_date' => $request->wedding_date,
                'occupation' => $request->occupation,
                'is_leader' => true,
                'church' => $request->church,
                'fellowship_group_id' => $request->fellowship_group_id,
                'friendship_centre_id' => $request->friendship_centre_id,
                'hog_member_id' => 'HOG/' . date('Y') . '/' . substr(rand(0, time()), 0, 5),
                'image_id' =>  $image->image_id,
            ]);
        } else {
            $member = Adult::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'middle_name' => $request->middle_name,
                'email' => $request->email,
                'gender' => $request->gender,
                'primary_phone' => $request->primary_phone,
                'secondary_phone' => $request->secondary_phone,
                'age_id' => $request->age_id,
                'day' => $request->day,
                'month' => $request->month,
                'year' => $request->year,
                'marital_status' => $request->marital_status,
                'wedding_date' => $request->wedding_date,
                'occupation' => $request->occupation,
                'church_id' => $request->church_id,
                'functional_group_id' => $request->functional_group_id,
                'fellowship_group_id' => $request->fellowship_group_id,
                'friendship_centre_id' => $request->friendship_centre_id,
                'hog_member_id' => 'HOG/' . date('Y') . '/' . substr(rand(0, time()), 0, 5),
                'image_id' =>  $image->image_id,
            ]);
        }
        if ($member) {
            DB::table('images')
                ->where('id', $image->id)
                ->update([
                    'status' => true,
                ]);
        }
        Address::create([
            'member_id' => $member->id,
            "street" => $request->street,
            "house_number" => $request->house_number,
            "city" => $request->city,
            'state_id' => $request->state_id,
            'lga_id' => $request->lga_id,
            "zip_code" => $request->zip_code,
            "country" => $request->country,
            "status" => $request->status,
        ]);
        return redirect()->route('media')->with('message', 'Details Submited Successfully.');
    }
    public function adultImport()
    {
        return view('Media.Adult.adult-import');
    }

    public function storeadultImport(Request $request)
    {
        Excel::import(new AdultImport, $request->file('file'));
        return redirect()->back()->with('message', 'Details Imported Successfully');
    }

    public function details(Adult $adult)
    {
        $profile = Adult::with(['address','age_range','church','fgroup','fcentre','fngroup'])->where('id', $adult->id)->first();
         $image = Image::where('image_id', $adult->image_id)->get();
         $address = Address::with(['state','lga'])->where('member_id', $adult->id)->get();
         //dd($address);
        return view('Media.Adult.details', compact('profile', 'image','address'));
    }
}
