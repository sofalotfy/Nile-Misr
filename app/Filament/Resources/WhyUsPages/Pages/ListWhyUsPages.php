<?php

namespace App\Filament\Resources\WhyUsPages\Pages;

use App\Filament\Resources\WhyUsPages\WhyUsPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWhyUsPages extends ListRecords
{
    protected static string $resource = WhyUsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
