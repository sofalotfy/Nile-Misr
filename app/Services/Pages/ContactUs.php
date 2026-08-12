<?php

namespace App\Services\Pages;

use App\Models\ContactUsPage;
use App\Models\Company;

class ContactUs
{
    public static function execute()
    {
        $contact = ContactUsPage::first();
        $company = Company::select(self::getSelects())->first();

        return array_merge(
                $contact?->toArray() ?? [],
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
        ];
    }
}