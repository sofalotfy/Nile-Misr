<?php

namespace App\Services\Pages;

use App\Models\AboutUsPage;

class About
{
    public static function execute()
    {
        return AboutUsPage::first();
    }
}