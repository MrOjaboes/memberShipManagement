<?php

namespace App\Http\Controllers\API;

use App\Models\Adult;
use App\Models\Children;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class CCTVSectionController extends Controller
{
    public function getAdults()
    {
       $members = Adult::with('address')->get();
       return response()->json(json_decode($members));
    }
    public function getChildren()
    {
       $children = Children::orderBy('created_at','DESC')->get();
       return response()->json(json_decode($children));
    }

   public function getImages()
   {
    $response = Http::get('https://staging.wellahealth.com/public/v1/SubscriptionPlans');
    return response()->json(json_decode($response));
   }
}
