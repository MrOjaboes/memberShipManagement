<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'gender',
        'primary_phone',
        'secondary_phone',
        'birth_date',
        'class',
        'level',
        'school',
        'guardian_one',
        'guardian_two',
        'guardian_one',
        'hog_member_id',
        'image_id',
    ];
}
