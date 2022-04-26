<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'fullname',
        'number_of_children',
        'email',
        'contact_one',
        'contact_two',
        'age_group',
        'gender',
        'church_location',
        'address_one',
        'address_two',
        'area',
        'fellowship_group',
        'friendship_centre',
        'marital_status',
        'friendship_centre',
        'birth_date',
        'wedding_date',
        'occupation',
        'leadership_position',
        'memberId',
        'photo',
        'user_id',
        ];
}
