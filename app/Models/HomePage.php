<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $guarded = [];

    protected $casts = [
        'images' => 'array',
        'our-services' => 'array',
    ];
}
    