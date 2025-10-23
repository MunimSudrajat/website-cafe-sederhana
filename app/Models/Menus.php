<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'menus';
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'is_featured',
    ];
    protected $guarded = [
        'id',
        'category_id',
        'cafe_id',
        'created_at',
        'updated_at',
    ];
}
