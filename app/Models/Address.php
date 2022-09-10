<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        "street",
        "city",
        "lga",
        "zip_code",
        "state",
        "country",
        "member_id",
        "status"
    ];
}
