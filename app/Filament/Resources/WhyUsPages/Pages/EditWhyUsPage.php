<?php

namespace App\Filament\Resources\WhyUsPages\Pages;

use App\Filament\Resources\WhyUsPages\WhyUsPageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditWhyUsPage extends EditRecord
{
    protected static string $resource = WhyUsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
