<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cafes extends Model
{
   protected $table = 'cafes';
   protected $fillable = [
        'name',
        'slug',
        'description',
        'address',
        'phone',
        'email',
        'open_hours',
        'map_embed',
    ];
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

}
