<?php

namespace App\Enums;

enum HajjPackageDuration: int
{
    case ELEVEN_DAYS = 11;
    case FOURTEEN_DAYS = 14;
    case FIFTEEN_DAYS = 15;
    case SEVENTEEN_DAYS = 17;
    case TWENTY_TWO_DAYS = 22;

    public function label(): string
    {
        return $this->value . ' يوم';
    }
}