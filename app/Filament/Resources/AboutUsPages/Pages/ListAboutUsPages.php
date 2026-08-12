<?php

namespace App\Filament\Resources\AboutUsPages\Pages;

use App\Filament\Resources\AboutUsPages\AboutUsPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutUsPages extends ListRecords
{
    protected static string $resource = AboutUsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
