<?php

namespace App\Filament\Resources\HajjPackages\Pages;

use App\Filament\Resources\HajjPackages\HajjPackagesResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHajjPackages extends EditRecord
{
    protected static string $resource = HajjPackagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
