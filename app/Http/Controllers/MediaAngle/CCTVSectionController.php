<?php

namespace App\Http\Controllers\MediaAngle;

use App\Models\Adult;
use App\Models\Image;
use App\Models\State;
use App\Models\Church;
use App\Models\Address;
use App\Models\AgeRange;
use App\Models\Children;
use App\Imports\AdultImport;
use Illuminate\Http\Request;
use App\Models\ChildrenClass;
use App\Imports\ChildrenImport;
use App\Models\FellowshipGroup;
use App\Models\FriendshipCentre;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\FunctionalGroup;
use App\Models\LocalGovernments;
use Maatwebsite\Excel\Facades\Excel;

class CCTVSectionController extends Controller
{

    public function cms()
    {
        # code... Collection of fellowshipGroup,FriendshipCentre,Church,FunctionalGroup for ID(s) access
        return view('Media.cms');
    }

    public function index()
    {

        return view('Media.index');
    }

    public function add(Image $image)
    {
        $fgroup = FellowshipGroup::all();
        $fngroup = FunctionalGroup::all();
        $centres = FriendshipCentre::all();
        $churches = Church::all();
        $members = Adult::all();
        $age_range = AgeRange::all();
        $class = ChildrenClass::all();
        $states = State::get(["name", "id"]);
        return view('Media.add', compact('fgroup', 'fngroup','centres', 'churches', 'members','image','age_range','class','states'));
    }

    public function profile()
    {
        return view('Media.profile');
    }

    // public function fetchState(Request $request)
    // {
    //     $data['states'] = State::where("country_id", $request->country_id)
    //                             ->get(["name", "id"]);

    //     return response()->json($data);
    // }



    public function fetchCity(Request $request)
    {
        $data['cities'] = LocalGovernments::where("state_id", $request->state_id)
                                    ->get(["name", "id"]);

        return response()->json($data);
    }
    public function fetchCentre(Request $request)
    {
        $data['centres'] = FriendshipCentre::where("fellowship_group_id", $request->state_id)
                                    ->get(["title", "id"]);

        return response()->json($data);
    }
}
