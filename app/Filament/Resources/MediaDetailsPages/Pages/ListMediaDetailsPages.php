<?php

namespace App\Filament\Resources\MediaDetailsPages\Pages;

use App\Filament\Resources\MediaDetailsPages\MediaDetailsPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMediaDetailsPages extends ListRecords
{
    protected static string $resource = MediaDetailsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
