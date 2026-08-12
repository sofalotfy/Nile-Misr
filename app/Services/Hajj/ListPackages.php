<?php

namespace App\Services\Hajj;

use App\Models\HajjPackages;

class ListPackages
{
    public static function execute()
    {
        return HajjPackages::query()
            ->select(self::getSelects())
            ->with('hajjPrices')
            ->withMin('hajjPrices as price', 'price')
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