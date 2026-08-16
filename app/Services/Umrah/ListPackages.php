<?php

namespace App\Services\Umrah;

use App\Enums\RoomTypes;
use App\Models\UmrahPackages;

class ListPackages
{
    public static function execute()
    {
        return UmrahPackages::query()
            ->select(self::getSelects())
            ->with([
                'umrahPrices:id,umrah_package_id,type,price',
                'makaHotel:id,name',
                'madinaHotel:id,name',
            ])
            ->get()
            ->map(function (UmrahPackages $package) {
                return [
                    'id'            => $package->id,

                    'code'          => null,

                    'name'          => $package->title,

                    'duration'      => $package->duration?->value ,

                    'duration_days' => (int)$package->duration?->integer(),

                    'dates'         => $package->dates ?? [],

                    'route'         => $package->flight_stops
                                            ? implode(' - ', $package->flight_stops)
                                            : null,

                    'hotel_makkah'  => $package->makaHotel?->name,

                    'hotel_madinah' => $package->madinaHotel?->name,

                    'feature'       => null,

                    'price_single'  => self::getPrice(
                        $package,
                        RoomTypes::فردي
                    ),

                    'price_double'  => self::getPrice(
                        $package,
                        RoomTypes::ثنائـــــــــي
                    ),

                    'price_triple'  => self::getPrice(
                        $package,
                        RoomTypes::ثلاثــــــــي
                    ),

                    'price_quad'    => self::getPrice(
                        $package,
                        RoomTypes::رباعي_أو_خماسي
                    ),

                    'image'         => $package->card_image,

                    'category'      => $package->category,

                    'features'      => $package->program_includes ?? [],
                ];
            });
    }

    private static function getSelects(): array
    {
        return [
            'id',
            'card_image',
            'title',
            'duration',
            'program_includes',
            'maka_hotel_id',
            'madina_hotel_id',
            'flight-stops',
            'dates',
            'category',
        ];
    }

    private static function getPrice(
        UmrahPackages $package,
        RoomTypes $type
    ): ?int {
        return $package->umrahPrices
            ->firstWhere('type', $type->value)
            ?->price;
    }

    private static function extractDurationDays(?string $duration): ?int
    {
        if (!$duration) {
            return null;
        }

        preg_match('/(\d+)\s*أيام/', $duration, $matches);

        return isset($matches[1])
            ? (int) $matches[1]
            : null;
    }
}