<?php

namespace App\Filament\Resources\UmrahPackages\Pages;

use App\Filament\Resources\UmrahPackages\UmrahPackagesResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUmrahPackages extends EditRecord
{
    protected static string $resource = UmrahPackagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
