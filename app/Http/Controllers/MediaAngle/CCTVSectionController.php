<?php

namespace App\Http\Controllers\MediaAngle;

use App\Models\Adult;
use App\Models\Image;
use App\Models\Church;
use App\Models\Address;
use App\Models\Children;
use App\Imports\AdultImport;
use Illuminate\Http\Request;
use App\Imports\ChildrenImport;
use App\Models\FellowshipGroup;
use App\Models\FriendshipCentre;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
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
        $centres = FriendshipCentre::all();
        $churches = Church::all();
        $members = Adult::all();
        return view('Media.add', compact('fgroup', 'centres', 'churches', 'members','image'));
    }

    public function profile()
    {
        return view('Media.profile');
    }
}
