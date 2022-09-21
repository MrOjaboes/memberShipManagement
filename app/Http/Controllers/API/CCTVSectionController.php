<?php

namespace App\Http\Controllers\API;

use App\Models\Adult;
use App\Models\Image;
use App\Models\Children;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class CCTVSectionController extends Controller
{
    public function getAdults()
    {
        $members = Adult::with('address')->get();
        return response()->json(json_decode($members));
    }

    public function getChildren()
    {
        $children = Children::orderBy('created_at', 'DESC')->get();
        return response()->json(json_decode($children));
    }

    public function getImages()
    {
        $response = Image::all();
        return response()->json(json_decode($response));
    }
    public function storeImages(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image_id' => 'required',
            'file' => 'required|max:1024',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }else{
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $request->file->storeAs('CCTV', $fileName, 'public');
            $request['image'] = $fileName;
//insert image
           $image = Image::create([
                'image' => $fileName,
                'status' => $request->status,
                'image_id' => $request->image_id,
            ]);
        }

        if ($image) {
            return response()->json(['success' => true], 200);
        }else{
            return response()->json(['success' => false], 401);
        }

    }

    public function upload(Request $request)
    {
        $validator = Validator::make($request->all(),[
              'file' => 'required|max:2048',
              'image_id' => 'required|max:2048',
        ]);

        if($validator->fails()) {

            return response()->json(['error'=>$validator->errors()], 401);
         }


        if ($file = $request->file('file')) {
           // $path = $file->store('public/CCTV');
            $name = $file->getClientOriginalName();
            $request->file->storeAs('CCTV', $name, 'public');


            //store your file into directory and db
            $save = new Image();
            $save->image = $name;
            $save->image_id = $request->image_id;
            $save->status = $request->status;
            $save->save();

            return response()->json([
                "success" => true,
                "message" => "File successfully uploaded",
                
            ]);

        }


    }
    }

