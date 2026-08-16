<?php

namespace App\Services\Hajj;

use App\Models\HajjPackages;

class ListPackages
{
    public static function execute()
    {
        return HajjPackages::query()
            ->select(self::getSelects())
            ->with([
                'hajjPrices',
                'makaHotel:id,name',
                'madinaHotel:id,name',
            ])
            ->get()
            ->map(function ($package) {
                $prices = $package->hajjPrices
                    ->sortBy('price')
                    ->values();

                $lowestPrice = $prices->first()?->price;

                return [
                    'id' => $package->id,

                    'name' => $package->title,

                    'duration' => $package->duration->value . ' يوم',

                    'duration_value' => (int) $package->duration->value,

                    'date' => $package->date,

                    'category' => $package->level->value,  

                    'hotel_makkah' => $package->makaHotel?->name,

                    'hotel_madinah' => $package->madinaHotel?->name,

                    'price' => $lowestPrice
                        ? number_format($lowestPrice)
                        : null,

                    'price_details' => $prices
                        ->map(function ($price) {
                            return $price->type->value
                                . ': '
                                . number_format($price->price)
                                . ' ج';
                        })
                        ->implode(' | '),

                    'image' => $package->card_image,
                ];
            })
            ->values();
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

    private static function formatPriceType(string $type): string
    {
        return match ($type) {
            'single' => 'فردي',
            'double' => 'ثنائي',
            'triple' => 'ثلاثي',
            'quad' => 'رباعي أو خماسي',
            default => $type,
        };
    }
}