<?php

namespace App\Filament\Resources\SingleHijjPackagePages\Pages;

use App\Filament\Resources\SingleHijjPackagePages\SingleHijjPackagePageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSingleHijjPackagePage extends EditRecord
{
    protected static string $resource = SingleHijjPackagePageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
