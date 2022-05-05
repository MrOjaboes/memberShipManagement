<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternalEvent extends Model
{
    protected $table = 'external_links';
   protected $fillable = [
       'link',
       'title',
       'status',
       'user_id',
   ];
}
