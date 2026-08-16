<?php

namespace App\Services\Hajj;

use App\Models\HajjPackages;

class ShowPackage
{
    public static function execute(HajjPackages $package)
    {
        return $package
    }

    private static function getSelects(): array
    {
        return [
            'id',
            'card_image',
            'title',
            'level',
            'duration',
            'date',
            'maka_hotel_id',
            'madina_hotel_id',
        ];
    }
}