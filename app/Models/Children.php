<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        "age_id",
        "day",
        "month",
        "year",
        'class_id',
        'gender',
        'school',
        'parent_id',
        'hog_member_id',
        'image_id',
    ];
    public function images()
    {
       return $this->hasOne(Image::class,'image_id');
    }
    public function parent()
    {
       return $this->hasOne(Adult::class,'parent_id');
    }
}
