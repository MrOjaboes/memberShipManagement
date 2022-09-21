<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        "age_range",
        "day",
        "month",
        "year",
        'class',
        'level',
        'school',
        'guardian_one',
        'guardian_two',
        'hog_member_id',
        'image_id',
    ];
    public function images()
    {
       return $this->hasOne(Image::class,'image_id');
    }
}
