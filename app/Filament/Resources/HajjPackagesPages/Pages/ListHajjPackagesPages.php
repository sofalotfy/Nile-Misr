<?php

namespace App\Filament\Resources\HajjPackagesPages\Pages;

use App\Filament\Resources\HajjPackagesPages\HajjPackagesPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHajjPackagesPages extends ListRecords
{
    protected static string $resource = HajjPackagesPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
