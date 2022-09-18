<?php

namespace App\Action;

use App\Models\Image;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class ImageCreator
{
    public function __invoke()
    {
        /**
         * Create plans for wellaHealth
         */
 
        try {
            $response =  $response = Http::get('https://public-api.staging.heirsinsurance.com/v1/Heirs%20Insurance/product');
            $images = $response->json();

            foreach ($images as $image) {
                Image::create([
                    'image' => $image['image'],
                    'image_id' => $image['image_id'],
                    'meta' => json_encode($image),
                ]);
            }
        } catch (\Throwable $th) {
            Log::info($th);
        }

        /**
         * Create plans for ...
         */
    }
}
