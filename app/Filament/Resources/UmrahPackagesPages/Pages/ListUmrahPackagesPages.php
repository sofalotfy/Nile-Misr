<?php

namespace App\Filament\Resources\UmrahPackagesPages\Pages;

use App\Filament\Resources\UmrahPackagesPages\UmrahPackagesPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUmrahPackagesPages extends ListRecords
{
    protected static string $resource = UmrahPackagesPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
