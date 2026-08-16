<?php

namespace App\Services\Umrah;


use App\Models\UmrahPackages;

class ShowPackage
{
    public static function execute(UmrahPackages $package)
    {
        return $package->load([
            'makaHotel:id,name,address,rating,rating_count,distance,iftar-included,images,location',
            'madinaHotel:id,name,address,rating,rating_count,distance,iftar-included,images,location',
            'umrahPrices:type,price',
        ]);
    }
}