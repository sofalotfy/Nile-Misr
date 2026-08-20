<?php

namespace App\Services\Reviews;

use App\Models\Review;

class ListReviews
{
    public static function execute()
    {
        return Review::select('id','name','review')->orderBy('order')->get();
    }
}