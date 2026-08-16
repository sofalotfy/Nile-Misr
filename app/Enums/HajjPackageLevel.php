<?php

namespace App\Enums;

enum HajjPackageLevel: string
{
    case ECONOMIC = 'اقتصادي';
    case FIVE_STARS = '5 نجوم';
    case VIP = 'VIP';

    public function label(): string
    {
        return match ($this) {
            self::ECONOMIC => 'اقتصادي',
            self::FIVE_STARS => '5 نجوم',
            self::VIP => 'VIP',
        };
    }
}