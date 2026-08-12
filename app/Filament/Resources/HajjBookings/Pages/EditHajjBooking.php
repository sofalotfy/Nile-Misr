<?php

namespace App\Filament\Resources\HajjBookings\Pages;

use App\Filament\Resources\HajjBookings\HajjBookingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHajjBooking extends EditRecord
{
    protected static string $resource = HajjBookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
