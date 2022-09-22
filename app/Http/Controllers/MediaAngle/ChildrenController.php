<?php

namespace App\Http\Controllers\MediaAngle;

use App\Models\Image;
use App\Models\Children;
use Illuminate\Http\Request;
use App\Imports\ChildrenImport;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ChildrenController extends Controller
{
    //Children Section
    public function childrenImport()
    {
        return view('Media.children.children-import');
    }
    public function storechildrenImport(Request $request)
    {
        Excel::import(new ChildrenImport, $request->file('file'));
        return redirect()->back()->with('message', 'Details Imported Successfully');
    }

    public function storechildren(Request $request, Image $image)
    {
        $children =  Children::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'email' => $request->email,
            'gender' => $request->gender,
            'age_id' => $request->age_range,
            'day' => $request->day,
            'month' => $request->month,
            'year' => $request->year,
            'parent_id' => $request->parent_id,
            'guardian_two' => $request->guardian_two,
            'church' => $request->church,
            'school' => $request->school,
            'level' => $request->level,
            'class_id' => $request->class,
            'hog_member_id' => 'HOG/' . date('Y') . '/' . substr(rand(0, time()), 0, 5),
            'image_id' => $image->image_id,
        ]);
        if ($children) {
            DB::table('images')
                ->where('id', $image->id)
                ->update([
                    'status' => true,
                ]);
        }
        return redirect()->route('media')->with('message', 'Details Submited Successfully.');
    }

    public function allChildren()
    {
        return view('Media.children.children-list');
    }
    public function childrenDetails(Children $children)
    {
        $profile = $children;
        $image = Image::where('image_id', $profile->image_id)->get();

        return view('Media.Children.details', compact('profile', 'image'));
    }
}
