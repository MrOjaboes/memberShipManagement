<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\Image;
use App\Models\Children;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ChildrenController extends Controller
{
    public function index()
    {
        return view('SuperAdmin.Children.index');
    }
    public function add()
    {
        return view('SuperAdmin.Children.add');
    }
    public function store(Request $request)
    {
            Children::create([
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
            return redirect()->back()->with('message', 'Details Submited Successfully.');
    }
    public function details(Children $children)
    {
        $profile = Children::with(['class','parent','age_range'])->where('id', $children->id)->first();
       //dd($profile);
        $image = Image::where('image_id', $children->image_id)->get();
       return view('SuperAdmin.Children.details',compact('profile','image'));
    }
    public function edit(Children $children)
    {
       return view('SuperAdmin.Children.edit',compact('children'));
    }

    public function update(Request $request, Children $children)
    {
        DB::table('childrens')
            ->where('id',$children-> id)
            ->update([
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
            ]);
            return redirect()->back()->with('message', 'Details Updated Successfully.');
    }
}
