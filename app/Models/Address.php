<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        "street",
        "house_number",
        "city",
        "lga_id",
        "zip_code",
        "state_id",
        "country",
        "member_id",
        "status"
    ];


    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }
    public function lga()
    {
        return $this->belongsTo(LocalGovernments::class, 'lga_id');
    }
}
