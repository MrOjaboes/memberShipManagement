<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Models\MaritalInfo;
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

    public static function GetUserById($user_id)
    {
        $user = DB::table('users')->where('id', $user_id)->first();
        return $user->name;
    }
    public function index()
    {
        return view('Member.home');
    }
    public function profileDetails()
    {

        $marital_info = MaritalInfo::where('user_id', auth()->user()->id)->get();
        return view('Member.Profile.details', compact('marital_info'));
    }
    public function updateChildren(Request $request)
    {
        $profile = Profile::where('user_id', auth()->user()->id)->get('id');
        foreach ($profile as $data) {
            $id = $data->id;
        }

        $child_name = $request['child_name'];
        $child_birthdate = $request['child_birthdate'];
        $child_gender = $request['child_gender'];

        for ($i = 0; $i <= count($child_name) - 1; $i++) {
            DB::table('marital_infos')
                ->where('user_id', auth()->user()->id)
                ->update([
                    'profile_id' => $id,
                    'child_gender' => $child_gender[$i],
                    'child_birthdate' => $child_birthdate[$i],
                    'child_name' => $child_name[$i],
                ]);
        }


        return redirect()->back()->with('message', 'Details updated succesfully');
    }
    public function editProfile()
    {
        return view('Member.Profile.index');
    }
    public function updatePhoto(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'file' => 'required|image',
        ]);
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $request->file->move('Photos', $fileName, 'public');
        $request['file'] = $fileName;
        DB::table('profiles')
        ->where('user_id', auth()->user()->id)
        ->update([
            'photo' => $fileName,
        ]);
        return redirect()->back()->with('message', 'Photo updated succesfully');
    }
    public function updateProfile(Request $request)
    {
       // dd($request->all());
        if($request->member_type == "Leader"){
         User::find(auth()->user()->id)->update([
        'user_type' => 1,
        ]);
        }
        if ($request->marital_status == "Married") {
                $profile = DB::table('profiles')
                    ->where('user_id', auth()->user()->id)
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
                        'fellowship_group' => $request->fellowship_group,
                        'friendship_centre' => $request->friendship_centre,
                        'marital_status' => $request->marital_status,
                        'birth_date' => $request->birth_date,
                        'occupation' => $request->occupation,
                        'leadership_position' => $request->member_type,
                        'memberId' => 'HOG/' . date('Y') . '/' . substr(rand(0, time()), 0, 5),

                    ]);
                //dd($profile);
                $maritalInfo = MaritalInfo::where('user_id', auth()->user()->id)->count();
                //dd($maritalInfo);
                //Insert Marital Info
                if ($profile) {
                    $child_name = $request['child_name'];
                    $child_birthdate = $request['child_birthdate'];
                    $child_gender = $request['child_gender'];

                    for ($i = 0; $i <= count($child_name) - 1; $i++) {
                        if ($maritalInfo < 1) {
                            auth()->user()->marital_profile()
                                ->create([
                                    'profile_id' => $profile,
                                    'child_gender' => $child_gender[$i],
                                    'child_birthdate' => $child_birthdate[$i],
                                    'child_name' => $child_name[$i],
                                ]);
                        }
                    }
                }
                return redirect()->back()->with('message', 'Profile updated succesfully');

        } else {

                DB::table('profiles')
                    ->where('user_id', auth()->user()->id)
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
                        'fellowship_group' => $request->fellowship_group,
                        'friendship_centre' => $request->friendship_centre,
                        'marital_status' => $request->marital_status,
                        'birth_date' => $request->birth_date,
                        'occupation' => $request->occupation,
                        'leadership_position' => $request->leadership_position,
                        'memberId' => 'HOG/' . date('Y') . '/' . substr(rand(0, time()), 0, 5),
                    ]);
                return redirect()->back()->with('message', 'Profile updated succesfully');

        }
    }
}
