<?php

namespace App\Services\General;

use App\Models\Header_Footer;
use App\Models\Company;

class GetSiteData
{
    public static function execute()
    {
        $header_footer = Header_Footer::first();
        $company = Company::select(self::getSelects())->first();

        return array_merge(
            $header_footer?->toArray() ?? [],
            $company?->toArray() ?? [],
        );
    }

    private static function getSelects()
    {
        return [
            "sites",
            "tiktok",
            "twitter",
            "instgram",
            "facebook",
            "phones",
            "emails",
        ];
    }
}