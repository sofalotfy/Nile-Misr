<?php

namespace App\Services\Pages;

use App\Models\ReviewsPage;

class Reviews
{
    public static function execute()
    {
        return ReviewsPage::first();
    }
}