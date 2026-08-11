<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    protected $casts = [
        'sites' => 'array',
        'phones' => 'array',
        'emails' => 'array',
    ];
}
