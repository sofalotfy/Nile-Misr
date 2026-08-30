<?php

namespace Database\Seeders;

use App\Models\UmrahPackages;
use Illuminate\Database\Seeder;

class UmrahPackagesSeeder extends Seeder
{
    public function run(): void
    {
        $package = UmrahPackages::with('umrahPrices')->first();

        if (!$package) {
            return;
        }

        for ($i = 1; $i <= 10; $i++) {
            $copy = $package->replicate();
            $copy->save();

            foreach ($package->umrahPrices as $price) {
                $priceCopy = $price->replicate();
                $priceCopy->umrah_package_id = $copy->id;
                $priceCopy->save();
            }
        }
    }
}