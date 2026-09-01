<?php

namespace App\Filament\Resources\MediaDetailsPages\Pages;

use App\Filament\Resources\MediaDetailsPages\MediaDetailsPageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMediaDetailsPage extends EditRecord
{
    protected static string $resource = MediaDetailsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
