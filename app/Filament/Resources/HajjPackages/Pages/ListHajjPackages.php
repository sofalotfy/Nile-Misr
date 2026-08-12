<?php

namespace App\Filament\Resources\HajjPackages\Pages;

use App\Filament\Resources\HajjPackages\HajjPackagesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHajjPackages extends ListRecords
{
    protected static string $resource = HajjPackagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
