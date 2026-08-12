<?php

namespace App\Filament\Resources\MediaPages\Pages;

use App\Filament\Resources\MediaPages\MediaPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMediaPages extends ListRecords
{
    protected static string $resource = MediaPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
