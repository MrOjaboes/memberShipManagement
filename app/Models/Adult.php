<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adult extends Model
{
    protected $fillable = [
        "first_name",
        "last_name",
        "middle_name",
        "gender",
        "hog_member_id",
        "email",
        "primary_phone",
        "secondary_phone",
        "image_id",
        "marital_status",
        "spouse_member_id",
        "age_range",
        "day",
        "month",
        "year",
        "fellowship_group_id",
        "friendship_centre_id",
        "is_leader",
        "church",
        "wedding_date",
        "occupation"
    ];
    public function address()
    {
        return $this->hasOne(Address::class, 'member_id');
    }
}
