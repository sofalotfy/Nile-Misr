<?php

namespace App\Services\Hajj;

use App\Models\HajjPackages;

class ShowPackage
{
    public static function execute(HajjPackages $package)
    {
        return $package->load([
            'makaHotel:id,name,address,rating,rating_count,distance,duration,iftar-included,images,location',
            'madinaHotel:id,name,address,rating,rating_count,distance,duration,iftar-included,images,location',
            'hajjPrices:id,hajj_package_id,type,price',
        ]);
    }
}