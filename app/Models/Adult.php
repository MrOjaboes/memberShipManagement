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
        "age_id",
        "day",
        "month",
        "year",
        "fellowship_group_id",
        "friendship_centre_id",
        "functional_group_id",
        "is_leader",
        "church_id",
        "wedding_date",
        "occupation"
    ];
    public function address()
    {
        return $this->hasOne(Address::class, 'member_id');
    }
    public function lga()
    {
        return $this->belongsTo(LocalGovernments::class, 'lga_id');
    }
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }
    public function age_range()
    {
        return $this->belongsTo(AgeRange::class, 'age_id');
    }
    public function church()
    {
        return $this->belongsTo(Church::class, 'church_id');
    }

    public function fgroup()
    {
        return $this->belongsTo(FellowshipGroup::class, 'fellowship_group_id');
    }
    public function fngroup()
    {
        return $this->belongsTo(FunctionalGroup::class, 'functional_group_id');
    }
    public function fcentre()
    {
        return $this->belongsTo(FriendshipCentre::class, 'friendship_centre_id');
    }
}

