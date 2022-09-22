<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FriendshipCentre extends Model
{
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'fellowship_group_id',
    ];

    public function fgroup()
    {
        return $this->belongsTo(FellowshipGroup::class,'fellowship_group_id');  # code...
    }
}
