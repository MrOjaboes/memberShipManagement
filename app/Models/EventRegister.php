<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRegister extends Model
{
    protected $fillable = [
        'event_id',
        'status',
        'event_type',
        'user_id',
        'contact',
        ];

        public function user()
    {
        return $this->belongsToMany(User::class,'user_id');
    }
}
