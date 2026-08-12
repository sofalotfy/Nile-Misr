<?php

namespace App\Services\Pages;

use App\Models\HomePage;
use App\Models\Company;

class Home
{
    public static function execute()
    {
        $home = HomePage::first();
        $company = Company::select(self::getSelects())->first();

        return array_merge(
                $home?->toArray() ?? [],
                $company?->toArray() ?? [],
            );
    }

    private static function getSelects()
    {
        return [
            "pilgrim-count",
            "rating",
            "review-count",
            "instgram",
            "facebook",
        ];
    }
}