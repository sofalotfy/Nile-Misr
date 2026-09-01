<?php

namespace App\Services\Pages;

use App\Models\MediaDetailsPage;

class MediaDetails
{
    public static function execute()
    {
        return MediaDetailsPage::first();
    }
}