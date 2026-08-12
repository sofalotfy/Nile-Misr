<?php

namespace App\Filament\Resources\HajjBookings\Pages;

use App\Filament\Resources\HajjBookings\HajjBookingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHajjBookings extends ListRecords
{
    protected static string $resource = HajjBookingResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
