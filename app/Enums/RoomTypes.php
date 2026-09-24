<?php

namespace App\Enums;

enum RoomTypes: string
{
    case فردي = 'فردي';
    case ثنائـــــــــي = 'ثنائـــــــــي';
    case ثلاثــــــــي = 'ثلاثــــــــي';
    case رباعي = 'رباعي';
    case خماسي = 'خماسي';

    public function label(): string
    {
        return match ($this) {
            self::فردي        => 'فردي',
            self::ثنائـــــــــي => 'ثنائي',
            self::ثلاثــــــــي => 'ثلاثي',
            self::رباعي        => 'رباعي',
            self::خماسي        => 'خماسي',
        };
    }

    public function capacity(): int
    {
        return match ($this) {
            self::فردي        => 1,
            self::ثنائـــــــــي => 2,
            self::ثلاثــــــــي => 3,
            self::رباعي        => 4,
            self::خماسي        => 5,
        };
    }
}