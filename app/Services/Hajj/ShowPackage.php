<?php

namespace App\Services\Hajj;

use App\Models\HajjPackages;

class ShowPackage
{
    public static function execute(HajjPackages $package)
    {
        $package->load([
            'makaHotel:id,name,address,rating,rating_count,distance,iftar-included,images,location',
            'madinaHotel:id,name,address,rating,rating_count,distance,iftar-included,images,location',
            'hajjPrices:id,hajj_package_id,type,price',
        ]);

        $package->setRelation(
            'hajjPrices',
            $package->hajjPrices
                ->sortBy(fn ($price) => $price->type->capacity())
                ->values()
        );

        return $package;
    }
}