<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaritalInfo extends Model
{
    protected $fillable = [
        'child_name',
        'child_birthdate',
        'child_gender',
        'profile_id',
        'user_id',
        ];
}
