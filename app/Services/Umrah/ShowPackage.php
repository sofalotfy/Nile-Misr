<?php

namespace App\Services\Umrah;


use App\Models\UmrahPackages;

class ShowPackage
{
    public static function execute(UmrahPackages $package)
    {
        $package->load([
            'makaHotel:id,name,address,rating,rating_count,distance,iftar-included,images,location',
            'madinaHotel:id,name,address,rating,rating_count,distance,iftar-included,images,location',
            'umrahPrices:id,umrah_package_id,type,price',
        ]);

        $package->setRelation(
            'umrahPrices',
            $package->umrahPrices
                ->sortBy(fn ($price) => $price->type->capacity())
                ->values()
        );

        return $package;
    }
}