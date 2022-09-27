<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use App\Models\MaritalInfo;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function member(Profile $profile)
    {
        $comments = Comment::where('profile_id', $profile->id)->get();
        $marital_info = MaritalInfo::where('profile_id', $profile->id)->get();
      return view('Admin.Members.details',compact('profile','marital_info','comments'));
    }
    public function comment(User $user, Request $request)
    {
        $comment = Comment::where('user_id', $user->id)->count();

        if ($comment > 0) {
            DB::table('comments')
                ->where('user_id', $user->id)
                ->update([
                    'profile_id' => $user->profile->id,
                    'content' => $request->content,
                ]);
        }else{
            Comment::create([
                'profile_id' => $user->profile->id,
                'content' => $request->content,
                'user_id' => $user->id,
            ]);
        }

       return redirect()->back()->with('message', 'Comment updated succesfully');


    }
}
