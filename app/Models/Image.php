<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'image',
        'image_id',
        'status',
        //'store_path',

    ];
    //public $guarded = ['id'];

}
