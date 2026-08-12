<?php

namespace App\Services\Umrah;

use App\Models\UmrahPackages;

class ListPackages
{
    public static function execute()
    {
        return UmrahPackages::query()
            ->select(self::getSelects())
            ->with('umrahPrices')
            ->withMin('umrahPrices as price', 'price')
            ->get();
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
            'maka-hotel',
            'madina-hotel',
        ];
    }
}