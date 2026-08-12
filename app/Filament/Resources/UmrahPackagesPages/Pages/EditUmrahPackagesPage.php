<?php

namespace App\Filament\Resources\UmrahPackagesPages\Pages;

use App\Filament\Resources\UmrahPackagesPages\UmrahPackagesPageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUmrahPackagesPage extends EditRecord
{
    protected static string $resource = UmrahPackagesPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
