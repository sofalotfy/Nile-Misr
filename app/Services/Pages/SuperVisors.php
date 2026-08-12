<?php

namespace App\Services\Pages;

use App\Models\OurSupervisorsPage;

class SuperVisors
{
    public static function execute()
    {
        return OurSupervisorsPage::first();
    }
}