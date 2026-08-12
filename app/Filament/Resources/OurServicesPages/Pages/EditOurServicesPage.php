<?php

namespace App\Filament\Resources\OurServicesPages\Pages;

use App\Filament\Resources\OurServicesPages\OurServicesPageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditOurServicesPage extends EditRecord
{
    protected static string $resource = OurServicesPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
