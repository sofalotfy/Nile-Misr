<?php

namespace App\Filament\Resources\SingleUmrahPackagePages\Pages;

use App\Filament\Resources\SingleUmrahPackagePages\SingleUmrahPackagePageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSingleUmrahPackagePage extends EditRecord
{
    protected static string $resource = SingleUmrahPackagePageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
