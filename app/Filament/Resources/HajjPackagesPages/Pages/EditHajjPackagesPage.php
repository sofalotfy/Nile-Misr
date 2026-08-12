<?php

namespace App\Filament\Resources\HajjPackagesPages\Pages;

use App\Filament\Resources\HajjPackagesPages\HajjPackagesPageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHajjPackagesPage extends EditRecord
{
    protected static string $resource = HajjPackagesPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
