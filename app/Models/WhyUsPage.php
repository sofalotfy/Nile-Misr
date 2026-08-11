<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyUsPage extends Model
{
    protected $guarded = [];

    protected $casts = [
        'accreditations-images' => 'array',
        'strategic-partnerships-images' => 'array',
    ];
}
