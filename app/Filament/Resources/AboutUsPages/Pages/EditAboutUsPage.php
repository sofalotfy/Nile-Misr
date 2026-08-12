<?php

namespace App\Filament\Resources\AboutUsPages\Pages;

use App\Filament\Resources\AboutUsPages\AboutUsPageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutUsPage extends EditRecord
{
    protected static string $resource = AboutUsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
