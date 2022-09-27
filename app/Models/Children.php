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
        'email',
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
    public function age_range()
    {
       return $this->belongsTo(AgeRange::class,'age_id');
    }
    public function parent()
    {
       return $this->belongsTo(Adult::class,'parent_id');
    }
    public function class()
    {
       return $this->belongsTo(ChildrenClass::class,'class_id');
    }
}
