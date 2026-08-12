<?php

namespace App\Services\Pages;

use App\Models\OurServicesPage;

class Services
{
    public static function execute()
    {
        return OurServicesPage::first();
    }
}