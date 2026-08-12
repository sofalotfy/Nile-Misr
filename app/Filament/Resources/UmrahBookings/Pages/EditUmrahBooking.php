<?php

namespace App\Filament\Resources\UmrahBookings\Pages;

use App\Filament\Resources\UmrahBookings\UmrahBookingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUmrahBooking extends EditRecord
{
    protected static string $resource = UmrahBookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
