<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaritalInfo extends Model
{
    protected $fillable = [
        'spouse_name',
        'spouse_birthdate',
        'spouse_contact',
        'wedding_date',
        'child_name',
        'child_birthdate',
        'child_gender',
        'profile_id',
        'member_id',
        ];
}
