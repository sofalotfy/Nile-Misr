<?php

namespace App\Services\Pages;

use App\Models\WhyUsPage;

class WhyUs
{
    public static function execute()
    {
        return WhyUsPage::first();
    }
}