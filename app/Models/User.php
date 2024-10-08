<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','user_type', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function events()
    {
       return $this->hasMany(Event::class,'user_id');
    }
    public function leaders_events()
    {
       return $this->hasMany(LeadersMeeting::class,'user_id');
    }
    public function externalLink()
    {
       return $this->hasOne(ExternalEvent::class,'user_id');
    }
    public function profile()
    {
       return $this->hasOne(Profile::class,'user_id');
    }
    public function marital_profile()
    {
        return $this->hasOne(MaritalInfo::class,'user_id');
    }
    public function messages()
    {
        return $this->hasMany(Message::class,'sender_id');
    }
    public function eventRegister()
    {
        return $this->hasMany(EventRegister::class,'user_id');
    }

}
