<?php

namespace App\Filament\Resources\OurServicesPages\Pages;

use App\Filament\Resources\OurServicesPages\OurServicesPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOurServicesPages extends ListRecords
{
    protected static string $resource = OurServicesPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
