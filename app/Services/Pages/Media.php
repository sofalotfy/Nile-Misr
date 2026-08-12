<?php

namespace App\Services\Pages;

use App\Models\MediaPage;

class Media
{
    public static function execute()
    {
        return MediaPage::first();
    }
}