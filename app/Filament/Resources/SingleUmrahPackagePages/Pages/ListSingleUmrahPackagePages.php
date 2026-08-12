<?php

namespace App\Filament\Resources\SingleUmrahPackagePages\Pages;

use App\Filament\Resources\SingleUmrahPackagePages\SingleUmrahPackagePageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSingleUmrahPackagePages extends ListRecords
{
    protected static string $resource = SingleUmrahPackagePageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
