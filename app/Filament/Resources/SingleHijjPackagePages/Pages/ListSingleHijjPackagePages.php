<?php

namespace App\Filament\Resources\SingleHijjPackagePages\Pages;

use App\Filament\Resources\SingleHijjPackagePages\SingleHijjPackagePageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSingleHijjPackagePages extends ListRecords
{
    protected static string $resource = SingleHijjPackagePageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
