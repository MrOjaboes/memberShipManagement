<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date',
        'class',
        'level',
        'school',
        'guardian_one',
        'guardian_two',
        'hog_member_id',
        'image_id',
    ];
}
