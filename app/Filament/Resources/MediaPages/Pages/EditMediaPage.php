<?php

namespace App\Filament\Resources\MediaPages\Pages;

use App\Filament\Resources\MediaPages\MediaPageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMediaPage extends EditRecord
{
    protected static string $resource = MediaPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
