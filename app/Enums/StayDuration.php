<?php

namespace App\Enums;

enum StayDuration: string
{
    case SIX_DAYS = '6 أيام / 5 ليالي';
    case EIGHT_DAYS = '8 أيام / 7 ليالي';
    case TEN_DAYS = '10 أيام / 9 ليالي';
    case FIFTEEN_DAYS = '15 يوم / 14 ليلة';

    public function integer(): string
    {
        return match ($this) {
            self::SIX_DAYS => 6,
            self::EIGHT_DAYS => 8,
            self::TEN_DAYS => 10,
            self::FIFTEEN_DAYS => 15,
        };
    }
}
